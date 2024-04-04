<?php

defined( 'ABSPATH' ) || exit;

/**
 * Add All in One SEO Sitemap option to WP Rocket options
 *
 * @since 3.12 deprecated
 * @since 2.8
 * @author Remy Perona
 *
 * @param Array $options Array of WP Rocket options.
 * @return Array Updated array of WP Rocket options
 */
function rocket_add_all_in_one_seo_sitemap_option( $options ) {
	_deprecated_function( __FUNCTION__, '3.12' );
	$options['all_in_one_seo_xml_sitemap'] = 0;

	return $options;
}

/**
 * Sanitize the AIO SEO option value
 *
 * @since 3.12 deprecated
 * @since 2.8
 * @author Remy Perona
 *
 * @param Array $inputs Array of inputs values.
 * @return Array Updated array of inputs $values
 */
function rocket_all_in_one_seo_sitemap_option_sanitize( $inputs ) {
	_deprecated_function( __FUNCTION__, '3.12' );
	$inputs['all_in_one_seo_xml_sitemap'] = ! empty( $inputs['all_in_one_seo_xml_sitemap'] ) ? 1 : 0;

	return $inputs;
}

/**
 * Add All in One SEO Sitemap sub-option on WP Rocket settings page
 *
 * @since 3.12 deprecated
 * @since 2.8
 * @author Remy Perona
 *
 * @param Array $options Array of WP Rocket options.
 * @return Array Updated array of WP Rocket options
 */
function rocket_sitemap_preload_all_in_one_seo_option( $options ) {
	_deprecated_function( __FUNCTION__, '3.12' );
	$options['all_in_one_seo_xml_sitemap'] = [
		'type'              => 'checkbox',
		'container_class'   => [
			'wpr-field--children',
		],
		'label'             => __( 'All in One SEO XML sitemap', 'rocket' ),
		// translators: %s = Name of the plugin.
		'description'       => sprintf( __( 'We automatically detected the sitemap generated by the %s plugin. You can check the option to preload it.', 'rocket' ), 'All in One SEO' ),
		'parent'            => 'sitemap_preload',
		'section'           => 'preload_section',
		'page'              => 'preload',
		'default'           => 0,
		'sanitize_callback' => 'sanitize_checkbox',
	];

	return $options;
}

/**
 * Add sitemap option to WP Rocket settings
 *
 * @since 3.12 deprecated
 * @since 3.2.3
 *
 * @param array $options WP Rocket settings array.
 * @return array Updated WP Rocket settings array
 */
function rank_math_rocket_sitemap_preload_option( $options ) { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals
	_deprecated_function( __FUNCTION__, '3.12' );
	$options['rank_math_xml_sitemap'] = [
		'type'              => 'checkbox',
		'container_class'   => [
			'wpr-field--children',
		],
		'label'             => __( 'Rank Math XML sitemap', 'rocket' ),
		// translators: %s = Name of the plugin.
		'description'       => sprintf( __( 'We automatically detected the sitemap generated by the %s plugin. You can check the option to preload it.', 'rocket' ), 'Rank Math SEO' ),
		'parent'            => 'sitemap_preload',
		'section'           => 'preload_section',
		'page'              => 'preload',
		'default'           => 0,
		'sanitize_callback' => 'sanitize_checkbox',
	];

	return $options;
}

/**
 * Add sitemap option to WP Rocket default options
 *
 * @since 3.12 deprecated
 * @since 3.2.3
 *
 * @param array $options WP Rocket options array.
 * @return array Updated WP Rocket options array
 */
function rank_math_rocket_add_sitemap_option( $options ) { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals
	_deprecated_function( __FUNCTION__, '3.12' );
	$options['rank_math_xml_sitemap'] = 0;

	return $options;
}

/**
 * Sanitize SEO sitemap option value
 *
 * @since 3.12 deprecated
 * @since 3.2.3
 *
 * @param array $inputs WP Rocket inputs array.
 * @return array Sanitized WP Rocket inputs array
 */
function rank_math_rocket_sitemap_option_sanitize( $inputs ) { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals
	_deprecated_function( __FUNCTION__, '3.12' );
	$inputs['rank_math_xml_sitemap'] = ! empty( $inputs['rank_math_xml_sitemap'] ) ? 1 : 0;

	return $inputs;
}

/**
 * Add SEOPress sitemap option to WP Rocket default options
 *
 * @since 3.12 deprecated
 * @since 3.3.6
 * @author Benjamin Denis
 * @source ./yoast-seo.php (Remy Perona)
 *
 * @param array $options WP Rocket options array.
 * @return array Updated WP Rocket options array
 */
function rocket_add_seopress_sitemap_option( $options ) {
	_deprecated_function( __FUNCTION__, '3.12' );
	$options['seopress_xml_sitemap'] = 0;

	return $options;
}

/**
 * Sanitize SEOPress sitemap option value
 *
 * @since 3.12 deprecated
 * @since 3.3.6
 * @author Benjamin Denis
 * @source ./yoast-seo.php (Remy Perona)
 *
 * @param array $inputs WP Rocket inputs array.
 * @return array Sanitized WP Rocket inputs array
 */
function rocket_seopress_sitemap_option_sanitize( $inputs ) {
	_deprecated_function( __FUNCTION__, '3.12' );
	$inputs['seopress_xml_sitemap'] = ! empty( $inputs['seopress_xml_sitemap'] ) ? 1 : 0;

	return $inputs;
}

/**
 * Add SEOPress option to WP Rocket settings
 *
 * @since 3.12 deprecated
 * @since 3.3.6
 * @author Benjamin Denis
 * @source ./yoast-seo.php (Remy Perona)
 *
 * @param array $options WP Rocket settings array.
 * @return array Updated WP Rocket settings array
 */
function rocket_sitemap_preload_seopress_option( $options ) {
	_deprecated_function( __FUNCTION__, '3.12' );
	$options['seopress_xml_sitemap'] = [
		'type'              => 'checkbox',
		'container_class'   => [
			'wpr-field--children',
		],
		'label'             => __( 'SEOPress XML sitemap', 'rocket' ),
		// translators: %s = Name of the plugin.
		'description'       => sprintf( __( 'We automatically detected the sitemap generated by the %s plugin. You can check the option to preload it.', 'rocket' ), 'SEOPress' ),
		'parent'            => 'sitemap_preload',
		'section'           => 'preload_section',
		'page'              => 'preload',
		'default'           => 0,
		'sanitize_callback' => 'sanitize_checkbox',
	];

	return $options;
}

/**
 * Adds a sitemap option in WP Rocket for The SEO Framework.
 *
 * @since 3.12 deprecated
 * @since 3.2.1
 * @author Sybre Waaijer
 * @source ./yoast-seo.php (Remy Perona)
 *
 * @param array $options WP Rocket options array.
 * @return array Updated WP Rocket options array
 */
function rocket_add_tsf_seo_sitemap_option( $options ) {
	_deprecated_function( __FUNCTION__, '3.12' );
	$options['tsf_xml_sitemap'] = 0;

	return $options;
}

/**
 * Sanitizes the added sitemap option for The SEO Framework.
 *
 * @since 3.12 deprecated
 * @since 3.2.1
 * @author Sybre Waaijer
 * @source ./yoast-seo.php (Remy Perona)
 *
 * @param array $inputs WP Rocket inputs array.
 * @return array Sanitized WP Rocket inputs array
 */
function rocket_tsf_seo_sitemap_option_sanitize( $inputs ) {
	_deprecated_function( __FUNCTION__, '3.12' );
	$inputs['tsf_xml_sitemap'] = ! empty( $inputs['tsf_xml_sitemap'] ) ? 1 : 0;

	return $inputs;
}

/**
 * Add The SEO Framework SEO option to WP Rocket settings
 *
 * @since 3.12 deprecated
 * @since 3.2.1
 * @author Sybre Waaijer
 * @source ./yoast-seo.php (Remy Perona)
 *
 * @param array $options WP Rocket settings array.
 * @return array Updated WP Rocket settings array
 */
function rocket_sitemap_add_tsf_sitemap_to_preload_option( $options ) {
	_deprecated_function( __FUNCTION__, '3.12' );
	$options['tsf_xml_sitemap'] = [
		'type'              => 'checkbox',
		'container_class'   => [
			'wpr-field--children',
		],
		'label'             => __( 'The SEO Framework XML sitemap', 'rocket' ),
		// translators: %s = Name of the plugin.
		'description'       => sprintf( __( 'We automatically detected the sitemap generated by the %s plugin. You can check the option to preload it.', 'rocket' ), 'The SEO Framework' ),
		'parent'            => 'sitemap_preload',
		'section'           => 'preload_section',
		'page'              => 'preload',
		'default'           => 0,
		'sanitize_callback' => 'sanitize_checkbox',
	];

	return $options;
}

/**
 * Add Jetpack option to WP Rocket options
 *
 * @param Array $options WP Rocket options array.
 * @return Array Updated WP Rocket options array
 * @since 2.8
 * @author Remy Perona
 *
 */
function rocket_add_jetpack_sitemap_option($options)
{
	_deprecated_function( __FUNCTION__, '3.12' );
	$options['jetpack_xml_sitemap'] = 0;

	return $options;
}

/**
 * Sanitize jetpack option value
 *
 * @param Array $inputs Array of inputs values.
 * @return Array Array of inputs values
 * @since 2.8
 * @author Remy Perona
 *
 */
function rocket_jetpack_sitemap_option_sanitize($inputs)
{
	_deprecated_function( __FUNCTION__, '3.12' );
	$inputs['jetpack_xml_sitemap'] = !empty($inputs['jetpack_xml_sitemap']) ? 1 : 0;

	return $inputs;
}

/**
 * Add Jetpack sitemap to preload list
 *
 * @param Array $sitemaps Array of sitemaps to preload.
 * @return Array Updated Array of sitemaps to preload
 * @since 2.8
 * @author Remy Perona
 *
 */
function rocket_add_jetpack_sitemap($sitemaps)
{
	_deprecated_function( __FUNCTION__, '3.12' );
	if (get_rocket_option('jetpack_xml_sitemap', false)) {
		$sitemaps['jetpack'] = jetpack_sitemap_uri();
	}

	return $sitemaps;
}

/**
 * Add Jetpack sub-option to WP Rocket settings page
 *
 * @param Array $options WP Rocket options array.
 * @return Array Updated WP Rocket options array
 * @since 2.8
 * @author Remy Perona
 *
 */
function rocket_sitemap_preload_jetpack_option($options)
{
	_deprecated_function( __FUNCTION__, '3.12' );
	$options[] = [
		'parent' => 'sitemap_preload',
		'type' => 'checkbox',
		'label' => __('Jetpack XML Sitemaps', 'rocket'),
		'label_for' => 'jetpack_xml_sitemap',
		'label_screen' => sprintf(__('Preload the sitemap from the Jetpack plugin', 'rocket'), 'Jetpack'),
		'default' => 0,
	];
	$options[] = [
		'parent' => 'sitemap_preload',
		'type' => 'helper_description',
		'name' => 'jetpack_xml_sitemap_desc',
		// translators: %s = plugin name, e.g. Yoast SEO.
		'description' => sprintf(__('We automatically detected the sitemap generated by the %s plugin. You can check the option to preload it.', 'rocket'), 'Jetpack'),
	];

	return $options;
}


/**
 * Add the EU Cookie Law to the list of mandatory cookies before generating caching files.
 *
 * @param array $cookies List of mandatory cookies.
 * @author Jeremy Herve
 *
 * @since 2.10.1
 */
function rocket_add_jetpack_cookie_law_mandatory_cookie($cookies)
{
	_deprecated_function( __FUNCTION__, '3.12' );
	$cookies['jetpack-eu-cookie-law'] = 'eucookielaw';

	return $cookies;
}

/**
 * Add Jetpack cookie when:
 *  - Jetpack is active.
 *  - Jetpack's Extra Sidebar Widgets module is active.
 *  - The widget is active.
 *  - the rocket_jetpack_eu_cookie_widget option is empty or not set.
 *
 * @since 2.10.1
 * @author Jeremy Herve
 */
function rocket_activate_jetpack_cookie_law()
{
	_deprecated_function( __FUNCTION__, '3.12' );
	$rocket_jp_eu_cookie_widget = get_option('rocket_jetpack_eu_cookie_widget');

	if (
		is_active_widget(false, false, 'eu_cookie_law_widget')
		&& empty($rocket_jp_eu_cookie_widget)
	) {
		add_filter('rocket_htaccess_mod_rewrite', '__return_false', 76);
		add_filter('rocket_cache_mandatory_cookies', 'rocket_add_jetpack_cookie_law_mandatory_cookie');

		// Update the WP Rocket rules on the .htaccess file.
		flush_rocket_htaccess();

		// Regenerate the config file.
		rocket_generate_config_file();

		// Set the option, so this is not triggered again.
		update_option('rocket_jetpack_eu_cookie_widget', 1, true);
	}
}

/**
 * Remove cookies if Jetpack gets deactivated.
 *
 * @since 2.10.1
 * @author Jeremy Herve
 */
function rocket_remove_jetpack_cookie_law_mandatory_cookie()
{
	_deprecated_function( __FUNCTION__, '3.12' );
	remove_filter('rocket_htaccess_mod_rewrite', '__return_false', 76);
	remove_filter('rocket_cache_mandatory_cookies', '_rocket_add_eu_cookie_law_mandatory_cookie');

	// Update the WP Rocket rules on the .htaccess file.
	flush_rocket_htaccess();

	// Regenerate the config file.
	rocket_generate_config_file();

	// Delete our option.
	delete_option('rocket_jetpack_eu_cookie_widget');
}

/**
 * Add SEO sitemap URL to the sitemaps to preload
 *
 * @since 3.2.3
 *
 * @param array $sitemaps Sitemaps to preload.
 * @return array Updated Sitemaps to preload
 */
function rank_math_rocket_sitemap( $sitemaps ) { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals
	_deprecated_function( __FUNCTION__, '3.12' );
	if ( get_rocket_option( 'rank_math_xml_sitemap', false ) ) {
		$sitemaps[] = \RankMath\Sitemap\Router::get_base_url( 'sitemap_index.xml' );
	}

	return $sitemaps;
}

/**
 * Add All in One SEO Sitemap to the preload list
 *
 * @since 2.8
 * @author Remy Perona
 *
 * @param Array $sitemaps Array of sitemaps to preload.
 * @return Array Updated array of sitemaps to preload
 */
function rocket_add_all_in_one_seo_sitemap( $sitemaps ) {
	_deprecated_function( __FUNCTION__, '3.12' );
	if ( ! get_rocket_option( 'all_in_one_seo_xml_sitemap', false ) ) {
		return $sitemaps;
	}

	$aioseo_v3 = defined( 'AIOSEOP_VERSION' );
	$aioseo_v4 = defined( 'AIOSEO_VERSION' ) && function_exists( 'aioseo' );

	if ( ! $aioseo_v3 && ! $aioseo_v4 ) {
		return $sitemaps;
	}

	$sitemap_enabled = false;
	if ( $aioseo_v3 ) {
		$aioseop_options = get_option( 'aioseop_options' );
		$sitemap_enabled = ( isset( $aioseop_options['modules']['aiosp_feature_manager_options']['aiosp_feature_manager_enable_sitemap'] ) && 'on' === $aioseop_options['modules']['aiosp_feature_manager_options']['aiosp_feature_manager_enable_sitemap'] ) || ( ! isset( $aioseop_options['modules']['aiosp_feature_manager_options'] ) && isset( $aioseop_options['modules']['aiosp_sitemap_options'] ) );
	}

	if (
		( $aioseo_v3 && ! $sitemap_enabled ) ||
		( $aioseo_v4 && ! aioseo()->options->sitemap->general->enable )
	) {
		return $sitemaps;
	}

	if ( $aioseo_v3 ) {
		$sitemaps[] = trailingslashit( home_url() ) . apply_filters( 'aiosp_sitemap_filename', 'sitemap' ) . '.xml'; // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals
	} elseif ( $aioseo_v4 ) {
		$sitemaps[] = trailingslashit( home_url() ) . apply_filters( 'aioseo_sitemap_filename', 'sitemap' ) . '.xml'; // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals
	}

	return $sitemaps;
}

/**
 * Add SEOPress sitemap URL to the sitemaps to preload
 *
 * @since 3.3.6
 * @author Benjamin Denis
 * @source ./yoast-seo.php (Remy Perona)
 *
 * @param array $sitemaps Sitemaps to preload.
 * @return array Updated Sitemaps to preload
 */
function rocket_add_seopress_sitemap( $sitemaps ) {
	_deprecated_function( __FUNCTION__, '3.12' );
	if ( get_rocket_option( 'seopress_xml_sitemap', false ) ) {
		$sitemaps[] = get_home_url() . '/sitemaps.xml';
	}

	return $sitemaps;
}

/**
 * Runs detection and adds extra compatibility for The SEO Framework plugin.
 *
 * @since 3.2.1
 * @since TODO Removed "conflicting sitemap detection" (detect_sitemap_plugin) call.
 *             TSF always tries to output it now while trying to give WP Rewrite priority for display.
 * @author Sybre Waaijer
 */
function rocket_add_tsf_compat() {
	_deprecated_function( __FUNCTION__, '3.12' );

	$tsf = the_seo_framework();

	// Either TSF < 3.1, or the plugin's silenced (soft-disabled) via a drop-in.
	if ( empty( $tsf->loaded ) ) {
		return;
	}

	/**
	 * 1. Performs option & other checks.
	 * 2. Checks for conflicting sitemap plugins that might prevent loading.
	 *
	 * These methods cache their output at runtime.
	 *
	 * @link https://github.com/wp-media/wp-rocket/issues/899
	 */
	if ( $tsf->can_run_sitemap() ) {
		rocket_add_tsf_sitemap_compat();
	}
}

/**
 * Adds compatibility for the sitemap functionality in The SEO Framework plugin.
 *
 * @since 3.2.1
 * @author Sybre Waaijer
 */
function rocket_add_tsf_sitemap_compat() {
	_deprecated_function( __FUNCTION__, '3.12' );

	add_filter( 'rocket_sitemap_preload_list', 'rocket_add_tsf_sitemap_to_preload' );
}

/**
 * Adds TSF sitemap URLs to preload.
 *
 * @since 3.2.1
 * @since TODO Added compatibility support for The SEO Framework v4.0+
 * @author Sybre Waaijer
 * @source ./yoast-seo.php (Remy Perona)
 *
 * @param array $sitemaps Sitemaps to preload.
 * @return array Updated Sitemaps to preload
 */
function rocket_add_tsf_sitemap_to_preload( $sitemaps ) {
	_deprecated_function( __FUNCTION__, '3.12' );

	if ( get_rocket_option( 'tsf_xml_sitemap', false ) ) {
		// The autoloader in TSF doesn't check for file_exists(). So, use version compare instead to prevent fatal errors.
		if ( version_compare( THE_SEO_FRAMEWORK_VERSION, '4.0', '>=' ) ) {
			// TSF 4.0+. Expect the class to exist indefinitely.

			$sitemap_bridge = The_SEO_Framework\Bridges\Sitemap::get_instance();

			foreach ( $sitemap_bridge->get_sitemap_endpoint_list() as $id => $data ) {
				// When the sitemap is good enough for a robots display, we determine it as valid for precaching.
				// Non-robots display types are among the stylesheet endpoint, or the Yoast SEO-compatible endpoint.
				// In other words, this enables support for ALL current and future public sitemap endpoints.
				if ( ! empty( $data['robots'] ) ) {
					$sitemaps[] = $sitemap_bridge->get_expected_sitemap_endpoint_url( $id );
				}
			}
		} else {
			// Deprecated. TSF <4.0.
			$sitemaps[] = the_seo_framework()->get_sitemap_xml_url();
		}
	}

	return $sitemaps;
}

/**
 * Launches the Homepage preload (helper function for backward compatibility)
 *
 * @since 2.6.4 Don't preload localhost & .dev domains
 * @since 1.0
 *
 * @param string $spider (default: 'cache-preload') The spider name: cache-preload or cache-json.
 * @param string $lang (default: '') The language code to preload.
 *
 * @return bool Status of preload.
 */
function run_rocket_bot( $spider = 'cache-preload', $lang = '' ) { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals
	_deprecated_function( __FUNCTION__, '3.12' );
	if ( ! get_rocket_option( 'manual_preload' ) ) {
		return false;
	}

	$urls = [];

	if ( ! $lang ) {
		$urls = get_rocket_i18n_uri();
	} else {
		$urls[] = get_rocket_i18n_home_url( $lang );
	}

	$container = apply_filters( 'rocket_container', null );

	if ( ! $container ) {
		return false;
	}

	$controller = $container->get( 'preload_clean_controller' );

	$controller->partial_clean( $urls );

	return true;
}

/**
 * Launches the sitemap preload (helper function for backward compatibility)
 *
 * @since 2.8
 * @author Remy Perona
 *
 * @return void
 */
function run_rocket_sitemap_preload() { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals
	_deprecated_function( __FUNCTION__, '3.12' );
	if ( ! get_rocket_option( 'manual_preload' ) ) {
		return;
	}

	$container = apply_filters( 'rocket_container', null );

	if ( ! $container ) {
		return;
	}

	$controller = $container->get( 'load_initial_sitemap_controller' );

	$controller->load_initial_sitemap();
}

/**
 * Excludes Uncode init and ai-uncode JS files from minification/combine
 *
 * @since 3.12.3 deprecated
 * @since 3.1
 * @author Remy Perona
 *
 * @param array $excluded_js Array of JS filepaths to be excluded.
 * @return array
 */
function rocket_exclude_js_uncode( $excluded_js ) {
	_deprecated_function( __FUNCTION__, '3.12.3' );
	$excluded_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/init.js' );
	$excluded_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/min/init.min.js' );
	$excluded_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/init.min.js' );
	$excluded_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/ai-uncode.js' );
	$excluded_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/min/ai-uncode.min.js' );
	$excluded_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/ai-uncode.min.js' );

	return $excluded_js;
}

/**
 * Excludes some Uncode inline scripts from combine JS
 *
 * @since 3.12.3 deprecated
 * @since 3.1
 * @author Remy Perona
 *
 * @param array $inline_js Array of patterns to match for exclusion.
 * @return array
 */
function rocket_exclude_inline_js_uncode( $inline_js ) {
	_deprecated_function( __FUNCTION__, '3.12.3' );
	$inline_js[] = 'SiteParameters';
	$inline_js[] = 'script-';
	$inline_js[] = 'initBox';
	$inline_js[] = 'initHeader';
	$inline_js[] = 'fixMenuHeight';

	return $inline_js;
}

/**
 * Excludes Uncode JS files from defer JS
 *
 * @since 3.12.3 deprecated
 * @since 3.2.5
 * @author Remy Perona
 *
 * @param array $exclude_defer_js Array of JS filepaths to be excluded.
 * @return array
 */
function rocket_exclude_defer_js_uncode( $exclude_defer_js ) {
	_deprecated_function( __FUNCTION__, '3.12.3' );
	$exclude_defer_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/init.js' );
	$exclude_defer_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/min/init.min.js' );
	$exclude_defer_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/init.min.js' );
	$exclude_defer_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/min/ai-uncode.min.js' );
	$exclude_defer_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/ai-uncode.min.js' );
	$exclude_defer_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/ai-uncode.js' );
	return $exclude_defer_js;
}

/**
 * Excludes Uncode JS files from delay JS
 *
 * @since 3.12.3 deprecated
 * @since 3.10.5
 *
 * @param array $exclude_delay_js Array of JS to be excluded.
 * @return array
 */
function rocket_exclude_delay_js_uncode( $exclude_delay_js ) {
	_deprecated_function( __FUNCTION__, '3.12.3' );
	$exclude_delay_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/init.js' );
	$exclude_delay_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/min/init.min.js' );
	$exclude_delay_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/init.min.js' );
	$exclude_delay_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/min/ai-uncode.min.js' );
	$exclude_delay_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/ai-uncode.min.js' );
	$exclude_delay_js[] = rocket_clean_exclude_file( get_template_directory_uri() . '/library/js/ai-uncode.js' );
	$exclude_delay_js[] = 'UNCODE\.';
	return $exclude_delay_js;
}
