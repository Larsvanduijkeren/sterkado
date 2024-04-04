<?php

namespace WP_Rocket\Engine\Optimization;

use WP_Rocket\Admin\Options_Data;
use WP_Rocket\Event_Management\Subscriber_Interface;

/**
 * Create a static file for CSS/JS generated by a PHP file
 *
 * @since  3.1
 */
class CacheDynamicResource extends AbstractOptimization implements Subscriber_Interface {
	use CSSTrait;

	/**
	 * Plugin options instance.
	 *
	 * @since  3.1
	 *
	 * @var Options_Data
	 */
	protected $options;

	/**
	 * Cache busting base path
	 *
	 * @since  3.1
	 *
	 * @var string
	 */
	protected $busting_path;

	/**
	 * Cache busting base URL
	 *
	 * @since  3.1
	 *
	 * @var string
	 */
	protected $busting_url;

	/**
	 * Excluded files from optimization
	 *
	 * @since  3.1
	 *
	 * @var string
	 */
	protected $excluded_files;

	/**
	 * Extension to use for the CDN zones selection
	 *
	 * @var string
	 */
	protected $extension = '';

	/**
	 * Creates an instance of CacheDynamicResource.
	 *
	 * @since  3.1
	 *
	 * @param Options_Data $options      Plugin options instance.
	 * @param string       $busting_path Base cache busting files path.
	 * @param string       $busting_url  Base cache busting files URL.
	 */
	public function __construct( Options_Data $options, $busting_path, $busting_url ) {
		$site_id            = get_current_blog_id();
		$this->options      = $options;
		$this->busting_path = "{$busting_path}{$site_id}/";
		$this->busting_url  = "{$busting_url}{$site_id}/";

		/**
		 * Filters files to exclude from static dynamic resources
		 *
		 * @since  2.9.3
		 * @author Remy Perona
		 *
		 * @param array $excluded_files An array of filepath to exclude.
		 */
		$this->excluded_files   = (array) apply_filters( 'rocket_exclude_static_dynamic_resources', [] );
		$this->excluded_files[] = '/wp-admin/admin-ajax.php';

		foreach ( $this->excluded_files as $i => $excluded_file ) {
			// Escape character for future use in regex pattern.
			$this->excluded_files[ $i ] = str_replace( '#', '\#', $excluded_file );
		}

		$this->excluded_files = implode( '|', $this->excluded_files );
	}

	/**
	 * Return an array of events that this subscriber wants to listen to.
	 *
	 * @since  3.1
	 *
	 * @return array
	 */
	public static function get_subscribed_events() {
		return [
			'style_loader_src'  => [ 'cache_dynamic_resource', 16 ],
			'script_loader_src' => [ 'cache_dynamic_resource', 16 ],
		];
	}

	/**
	 * Filters the source dynamic php file to replace it with a static file
	 *
	 * @since  3.1
	 *
	 * @param string $src source URL.
	 *
	 * @return string
	 */
	public function cache_dynamic_resource( $src ) {
		if ( ! $this->is_allowed() ) {
			return $src;
		}

		switch ( current_filter() ) {
			case 'script_loader_src':
				$this->set_extension( 'js' );
				break;
			case 'style_loader_src':
				$this->set_extension( 'css' );
				break;
		}

		if ( $this->is_excluded_file( $src ) ) {
			return $src;
		}

		return $this->replace_url( $src );
	}

	/**
	 * Replaces the dynamic URL by the static file URL
	 *
	 * @since  3.1
	 *
	 * @param string $src Source URL.
	 *
	 * @return string
	 */
	public function replace_url( $src ) {
		$path = ltrim( rocket_extract_url_component( $src, PHP_URL_PATH ), '/' );

		/**
		 * Filters the dynamic resource cache filename
		 *
		 * @since 2.9
		 *
		 * @param string $filename filename for the cache file
		 */
		$filename = apply_filters( 'rocket_dynamic_resource_cache_filename', preg_replace( '/\.php$/', '.' . $this->extension, $path ) );
		$filename = ltrim( rocket_realpath( rtrim( str_replace( [ ' ', '%20' ], '-', $filename ) ) ), '/' );
		$filepath = $this->busting_path . $filename;

		if ( ! rocket_direct_filesystem()->is_readable( $filepath ) ) {
			$content = $this->get_url_content( $src );

			if ( ! $content ) {
				return $src;
			}

			if ( 'css' === $this->extension ) {
				$content = $this->rewrite_paths( $this->get_file_path( $src ), $filepath, $content );
				$content = $this->apply_font_display_swap( $content );
			}

			if ( ! $this->write_file( $content, $filepath ) ) {
				return $src;
			}
		}

		return $this->get_cache_url( $filename );
	}

	/**
	 * Determines if we can optimize
	 *
	 * @since  3.1
	 *
	 * @return bool
	 */
	public function is_allowed() {
		global $pagenow;

		if ( rocket_bypass() ) {
			return false;
		}

		if ( rocket_get_constant( 'DONOTROCKETOPTIMIZE' ) ) {
			return false;
		}

		if ( is_user_logged_in() && ! $this->options->get( 'cache_logged_user' ) ) {
			return false;
		}

		if ( 'wp-login.php' === $pagenow ) {
			return false;
		}

		return true;
	}

	/**
	 * Determines if the file is excluded from optimization
	 *
	 * @since  3.1
	 *
	 * @param string $src source URL.
	 *
	 * @return bool
	 */
	public function is_excluded_file( $src ) {
		$file = get_rocket_parse_url( $src );

		if ( isset( $file['path'] ) && ! preg_match( '#\.php$#', $file['path'] ) ) {
			return true;
		}

		if ( $this->is_external_file( $src ) ) {
			return true;
		}

		if ( preg_match( '#^' . $this->excluded_files . '$#', $file['path'] ) ) {
			return true;
		}

		if ( ! isset( $file['query'] ) ) {
			return false;
		}

		$file['query'] = remove_query_arg( 'ver', $file['query'] );

		return (bool) $file['query'];
	}

	/**
	 * Sets the current file extension and minify key
	 *
	 * @since  3.1
	 *
	 * @param string $extension Current file extension.
	 */
	public function set_extension( $extension ) {
		$this->extension  = $extension;
		$this->minify_key = $this->options->get( 'minify_' . $this->extension . '_key' );
	}

	/**
	 * Gets the CDN zones.
	 *
	 * @since  3.1
	 *
	 * @return array
	 */
	public function get_zones() {
		return [ 'all', 'css_and_js', $this->extension ];
	}

	/**
	 * Gets the cache URL for the static file
	 *
	 * @since  3.1
	 *
	 * @param string $filename Filename for the static file.
	 *
	 * @return string
	 */
	protected function get_cache_url( $filename ) {
		$cache_url = $this->busting_url . $filename;

		switch ( $this->extension ) {
			case 'css':
				// This filter is documented in inc/classes/optimization/css/class-abstract-css-optimization.php.
				$cache_url = apply_filters( 'rocket_css_url', $cache_url );
				break;
			case 'js':
				// This filter is documented in inc/classes/optimization/css/class-abstract-js-optimization.php.
				$cache_url = apply_filters( 'rocket_js_url', $cache_url );
				break;
		}

		return $cache_url;
	}

	/**
	 * Gets content from an URL
	 *
	 * @since  3.1
	 *
	 * @param string $url URL to get the content from.
	 *
	 * @return string|bool
	 */
	protected function get_url_content( $url ) {
		$content = wp_remote_retrieve_body( wp_remote_get( $url ) );

		if ( ! $content ) {
			return false;
		}

		return $content;
	}
}
