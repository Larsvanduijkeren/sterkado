<?php 
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_child_enqueue_styles' );
function wp_bootstrap_starter_child_enqueue_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_action('wp_enqueue_scripts','brightness_add_custom_scripts',999);
if(!function_exists('brightness_add_custom_scripts')){
	function brightness_add_custom_scripts(){
		wp_enqueue_style( 'google-monts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Rajdhani:wght@400;500;600;700&display=swap', false ); 
		wp_enqueue_style( 'google-poppins', 'https://fonts.googleapis.com/css2?family=Poppins&display=swap', false ); 
		wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false ); 
		wp_enqueue_style('aos-style',get_stylesheet_directory_uri() . '/assets/css/aos.css');
		wp_enqueue_style('animate',get_stylesheet_directory_uri() . '/assets/css/animate.min.css');
		wp_enqueue_style('select2',get_stylesheet_directory_uri() . '/assets/css/select2.min.css');
		wp_enqueue_style( 'swiper-bundle', get_stylesheet_directory_uri().'/assets/css/swiper-bundle.min.css');
		wp_enqueue_style('slick-style',get_stylesheet_directory_uri() . '/assets/css/slick.css');
		wp_enqueue_style('slick-lightbox',get_stylesheet_directory_uri() . '/assets/css/slick-lightbox.css');
		wp_enqueue_style('mmenu-light',get_stylesheet_directory_uri() . '/assets/css/mmenu-light.css');
		// wp_enqueue_style('child-theme-style',get_stylesheet_directory_uri() . '/assets/scss/style.min.css');
		wp_enqueue_style('child-theme-style',get_stylesheet_directory_uri() . '/assets/scss/style.css');
		
		wp_enqueue_script('aos', get_stylesheet_directory_uri() . '/assets/js/aos.js');
		wp_enqueue_script('swiper-bundle', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js',array('jquery'),'1.0', 'true');
		wp_enqueue_script('select2', get_stylesheet_directory_uri() . '/assets/js/select2.min.js',array('jquery'),'1.0', 'true');
		wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/assets/js/slick.min.js',array('jquery'),'1.0', 'true');
		wp_enqueue_script('slick-lightbox', get_stylesheet_directory_uri() . '/assets/js/slick-lightbox.min.js',array('jquery'),'1.0', 'true');
		wp_enqueue_script('mmenu-light', get_stylesheet_directory_uri() . '/assets/js/mmenu-light.js',array('jquery'),'1.0', 'true');
		wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js');
		wp_localize_script( 'custom-js', 'custom_params', array(
			'lang' => apply_filters( 'wpml_current_language', NULL ), // WordPress AJAX
			'my_ajax_url'=>admin_url( 'admin-ajax.php' ),
			'security' => wp_create_nonce( 'news_list' ),
			'gift_security' => wp_create_nonce( 'gifts_list' ),
			
		) );
	}
}

/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

function wpb_custom_new_menu() {
	register_nav_menu('mobile-menu',__( 'Mobile Menu' ));
	}
	add_action( 'init', 'wpb_custom_new_menu' );
/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param array $plugins 
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
	return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
	return array();
	}
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
	/** This filter is documented in wp-includes/formatting.php */
	$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
	$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}
	return $urls;
}

require_once get_stylesheet_directory() . '/inc/widget/contact-information.php';
require_once get_stylesheet_directory() . '/inc/widget/title-widget.php';
require_once get_stylesheet_directory() . '/inc/widget/social-media.php';
function get_custom_widget() {
	register_widget( 'ContactInformation_Widget' );
	register_widget( 'Title_Widget' );
	register_widget( 'Custom_Social_Profile' );
	
}
add_action( 'widgets_init', 'get_custom_widget' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme 404 Settings',
		'menu_title'	=> '404 Page',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'News Details Settings',
		'menu_title'	=> 'News Details',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Job Details Settings',
		'menu_title'	=> 'Job Details',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Case Details Settings',
		'menu_title'	=> 'Case Details',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'FAQ Details Settings',
		'menu_title'	=> 'FAQ Details',
		'parent_slug'	=> 'theme-general-settings',
	));
}

function add_nav_menus() {
    register_nav_menus( array(
        'header_top'=>'Header Top',
    ));
}
add_action('init', 'add_nav_menus');

add_action( 'widgets_init', 'parent_override',11 );
function parent_override() {
	unregister_sidebar('footer-1'); 
	unregister_sidebar('footer-2'); 
	unregister_sidebar('footer-3'); 
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'wp-bootstrap-starter' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6 class="pt-0">',
		'after_title'   => '</h6>'
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'wp-bootstrap-starter' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6 class="pt-0">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'wp-bootstrap-starter' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6 class="pt-0">',
		'after_title'   => '</h6>'
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'wp-bootstrap-starter' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6 class="pt-0">',
		'after_title'   => '</h6>'
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 5', 'wp-bootstrap-starter' ),
		'id'            => 'footer-5',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6 class="pt-0">',
		'after_title'   => '</h6>'
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 6', 'wp-bootstrap-starter' ),
		'id'            => 'footer-6',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="pt-0">',
		'after_title'   => '</h6>'
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Copyright Menu', 'wp-bootstrap-starter' ),
		'id'            => 'copyright-menu',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6 class="pt-0">',
		'after_title'   => '</h6>'
	) );
}

function my_acf_google_map_api( $api ){
	$google_map_api_key=get_field('google_map_api_key','option');
    $api['key'] = $google_map_api_key;
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

function my_acf_init() {
	$google_map_api_key=get_field('google_map_api_key','option');
    acf_update_setting('google_api_key', $google_map_api_key);
}
add_action('acf/init', 'my_acf_init');

//estimated reading time
function reading_time($content) {

	$word_count = str_word_count( strip_tags( $content ) );
	$readingtime = ceil($word_count / 200);
	

	$timer = " min";
	
	$totalreadingtime = $readingtime . $timer;
	
	return $totalreadingtime;
}
//add_action('wp_ajax_news_cat_filter_callback', 'news_cat_filter_callback');
//add_action('wp_ajax_nopriv_news_cat_filter_callback', 'news_cat_filter_callback');
/*function news_cat_filter_callback(){
	check_ajax_referer('news_list', 'security');
	
  
		if($_POST['page']){
			$paged=$_POST['page'];
		}else{
			$paged='1';
		}
		$posttype=$_POST['posttype'];
		$term=$_POST['term'];
		if(isset($_POST['cat'])){
			$cat=$_POST['cat'];
			if($cat=="all"){
				$args = array(  
					'post_type' => $posttype,
					'post_status' => 'publish',
					'posts_per_page' => 9, 
					'orderby' => 'date', 
					'order' => 'DESC',
					'paged'   => $paged,
				);
			}else{
				$args = array(  
					'post_type' => $posttype,
					'post_status' => 'publish',
					'posts_per_page' => 9, 
					'orderby' => 'date', 
					'order' => 'DESC', 
					'tax_query' => array(
						array(
							'taxonomy' => $term,
							'field' => 'slug',
							'terms' => $cat,
						)
					),
					'paged'   => $paged,
				);
			}
			
		
		}else{
			$args = array(  
				'post_type' => $posttype,
				'post_status' => 'publish',
				'posts_per_page' => 9, 
				'orderby' => 'date', 
				'order' => 'DESC',
				'paged'   => $paged,
			);
		}
		$loop = new WP_Query( $args ); 
		ob_start();
		$count=1;
		if($loop->have_posts()): 
			$totalPage = $loop->max_num_pages;
			$havePosts = true; ?>

				<?php
				while ( $loop->have_posts() ) : $loop->the_post(); 
				if($count==1 || $count==6 || $count==7){
					$col=6;
					$class="big-item";
				}else{
					$col=3;
					$class="small-item";
				}
				$args = array( 'col' => $col,'term'=>$term ,'class'=>$class);
				get_template_part( 'template-parts/post', 'grid', $args );
					$count++;
				endwhile;
				
				//vb_ajax_pager($loop,$paged);
				?>
				
			<?php else :
			 	$havePosts = false;

		 		endif; 
			 $ajaxresponse= ob_get_clean();

		 if($havePosts){
			wp_send_json_success( array('html' => $ajaxresponse,'ttl' => $totalPage ) );
		}else{
			wp_send_json_error( array('html' => $ajaxresponse,'ttl' => $totalPage) );
		}
		wp_die( );
}*/
function vb_normal_pager( $query = null, $paged = 1 ) {

    if (!$query)
        return;

    $paginate = paginate_links([
        'base'      => '%_%',
        'type'      => 'array',
        'total'     => $query->max_num_pages,
        'format'    => '?page=%#%',
        'current'   => max( 1, $paged ),
		'prev_text'    => '<img src="'.get_stylesheet_directory_uri().'/assets/images/prev.svg"/>',
		'next_text'    => '<img src="'.get_stylesheet_directory_uri().'/assets/images/next.svg"/>',
    ]);

    if ($query->max_num_pages > 1) : ?>

        <ul class="pagination">
            <?php foreach ( $paginate as $page ) :?>
                <li><?php echo $page; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif;
}

function vb_ajax_pager( $query = null, $paged = 1 ) {

    if (!$query)
        return;

    $paginate = paginate_links([
        'base'      => '%_%',
        'type'      => 'array',
        'total'     => $query->max_num_pages,
        'format'    => '#page=%#%',
        'current'   => max( 1, $paged ),
		'prev_text'    => '<img src="'.get_stylesheet_directory_uri().'/assets/images/prev.svg"/>',
		'next_text'    => '<img src="'.get_stylesheet_directory_uri().'/assets/images/next.svg"/>',
    ]);

    if ($query->max_num_pages > 1) : ?>
        <ul class="pagination">
            <?php foreach ( $paginate as $page ) :?>
                <li><?php echo $page; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif;
}

add_action('wp_ajax_product_cat_filter_call_back', 'product_cat_filter_call_back');
add_action('wp_ajax_nopriv_product_cat_filter_call_back', 'product_cat_filter_call_back');
function product_cat_filter_call_back(){
		check_ajax_referer('gifts_list', 'security');
		if($_POST['page']){
			$paged=$_POST['page'];
		}else{
			$paged='1';
		}
		if(isset($_POST['page_id'])){
			$page_id=$_POST['page_id'];
			
		}
		if(isset($_POST['cat'])){
		$cat=$_POST['cat'];
			if(count($cat)==1 && $cat[0]=="all" || $cat=="all"){
				$args = array(  
					'post_type' => 'product',
					'post_status' => 'publish',
					'posts_per_page' => 12, 
					'orderby' => 'menu_order', 
					'order' => 'ASC', 
					'tax_query'      => array(
						array(
							'taxonomy' => 'product_cat',
							'id'    => 'slug',
							'terms'    => array( '26','72'),
							'operator' => 'NOT IN',
						)
					),
					'paged'   => $paged,
				);
			}else{
				$args = array(  
					'post_type' => 'product',
					'post_status' => 'publish',
					'posts_per_page' => 12, 
					'orderby' => 'menu_order', 
					'order' => 'ASC', 
					'tax_query' => array(
						array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => $cat,
						)
						),
						'paged'   => $paged,
				);
			}
		}else{
			$args = array(  
				'post_type' => 'product',
				'post_status' => 'publish',
				'posts_per_page' => 12, 
				'orderby' => 'menu_order', 
					'order' => 'ASC', 
				'tax_query'      => array(
					array(
						'taxonomy' => 'product_cat',
						'id'    => 'slug',
						'terms'    => array( '26','72'),
						'operator' => 'NOT IN',
					)
					),
				'paged'   => $paged,
			);
		}
		
		$loop = new WP_Query( $args ); 
		ob_start();
		if($loop->have_posts()):
			 $havePosts = true;
					ob_start();
					while ( $loop->have_posts() ) : $loop->the_post(); 
						get_template_part( 'template-parts/product', 'grid',array('page_id'=>$page_id));
					endwhile;
					vb_ajax_pager($loop,$paged);
					?>
		<?php else :
		$havePosts = false;
		endif; 
		$ajaxresponse= ob_get_clean();
		if($havePosts){
			wp_send_json_success( array('html' => $ajaxresponse,'ttl' => $totalPage ) );
		}else{
			wp_send_json_error( array('html' => $ajaxresponse,'ttl' => $totalPage) );
		}
		wp_die( );
}

add_action('wp_ajax_get_inspired_popup_callback', 'get_inspired_popup_callback');
add_action('wp_ajax_nopriv_get_inspired_popup_callback', 'get_inspired_popup_callback');
function get_inspired_popup_callback(){
	ob_start();
	$id = $_POST['id'];
	$page_id = $_POST['page_id'];
	if(isset($_POST['page_id'])){
		$page_id=$_POST['page_id'];
		$rank_math_focus_keyword=get_post_meta($page_id, 'rank_math_focus_keyword', true);
		if( strpos($rank_math_focus_keyword, ",") !== false ) {
			$rank_math_focus_keyword=explode(",",$rank_math_focus_keyword);
			$rank_math_focus_keyword=$rank_math_focus_keyword[0];
		}else{
			$rank_math_focus_keyword=$rank_math_focus_keyword;
		}
	}
	$get_inspired = get_field('get_inspired', $page_id );
	
	$modal_data = $get_inspired['inspired_list'][$id];
	$modal_tabs =  $modal_data['modal_tabs_content'];
	$modal_tab_heading =  $modal_data['modal_tab_heading'];
	?>
 	
 	<div class="themapakketten_popup_section">
        <?php if($modal_tabs){ ?>
        <div class="kies-wrap">
            <?php if($modal_tab_heading){ ?><h5><?= $modal_tab_heading ?></h5> <?php } ?>
            
            <div class="btn-wraper">
                <?php foreach ( $modal_tabs as $key => $tab ) { ?>
                	<?php if(!empty($tab['tab_title'])): ?>
                		<button class="tablinks <?= ( $key == 0 )?'active':'' ?>" id="tab-<?= $key ?>"><?= $tab['tab_title'] ?></button>
                	<?php endif; ?>
            	<?php } ?>
            </div>
        </div>
    	<?php } ?>

    	<?php 
    	foreach ( $modal_tabs as $key => $tab ) {  ?>
        <div id="tab-<?= $key ?>" class="tabcontent <?= ( $key == 0 )?'active':'' ?>">
            <div class="content-wraper">
                <div class="left-col">
                	<?php 
                	$image_slider_1 = $tab['image_slider_1'];
                	if($image_slider_1){ ?>
                    <div class="images_slider-wrap">
                        <div class="images_slider_col">
                            
                            <?php foreach ($image_slider_1 as $slide ) {
								 if($slide['alt']){
									$images_alt=$slide['alt']." - ".$rank_math_focus_keyword;
								}else{
									$images_alt=$slide['title']." - ".$rank_math_focus_keyword;
								}
								?>
                            <div class="img-box">
                                <img src="<?= $slide['url']  ?>" alt="<?= $images_alt;  ?>">
                            </div>
                        	<?php } ?>

                        </div>
                    </div>
                	<?php } ?>

                    <div class="images_thumb_slider-wrap">
                    	<?php 
	                	$slider_2_heading = $tab['slider_2_heading'];
	                	if($slider_2_heading){ ?>
                        <div class="title-box">
                            <h6 class="title"><?= $slider_2_heading ?></h6>
                        </div>
                    	<?php } ?>

                        <?php 
	                	$image_slider_2 = $tab['image_slider_2'];
	                	if($image_slider_2){ ?>
                        <div class="images_thumb_slider_col">
                            <?php foreach ($image_slider_2 as $slide ) {?>
                            <div class="img_thumb_box">
                                <img src="<?= $slide['url']  ?>" alt="<?= $slide['alt']  ?>">
                            </div>
                            <?php } ?>
                        </div>
                    	<?php } ?>
                    </div>
                    <?php 
	                $sub_text = $tab['sub_text'];
	                if($sub_text){ ?>
                    <div class="detail-wraper">
                        <div class="title-box">
                            <?= $sub_text ?>
                        </div>
                    </div>
                	<?php } ?>
                </div>
                <div class="right-col">
                    <div class="right-side-content-wrap">
                    	<?php 
	                	$right_content_heading = $tab['right_content_heading'];
	                	$right_content = $tab['right_content'];
	                	if($right_content_heading){ ?>
                        	<h3 class="border-bottom"><?= $right_content_heading ?></h3>
                    	<?php } ?>
                        
                        <?= $right_content ?>

                        <?php 
	                	$button = $tab['button'];
						if(!empty( $button )){ 
						    $title = $button['title'];
						    $url = $button['url'];
						    $target = $button['target']?'_blank':'_self';
						    ?>
                        	<a target="<?= $target ?>" href="<?= $url ?>?p_id=<?php echo $right_content_heading ;?>" class="btn primary-btn"><?= $title ?></a>
                        <?php } ?>

                        <?php 
	                	$link = $tab['link'];
						if(!empty( $link )){ 
						    $title = $link['title'];
						    $url = $link['url'];
						    $target = $link['target']?'_blank':'_self';
						    ?>
                        	<a target="<?= $target ?>" href="<?= $url ?>" class="link-btn"><?= $title ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

    <?php 
	echo ob_get_clean();
	
	
	wp_die();
}

add_action('wp_ajax_product_details_popup_callback', 'product_details_popup_callback');
add_action('wp_ajax_nopriv_product_details_popup_callback', 'product_details_popup_callback');
function product_details_popup_callback(){
	if(isset($_POST['id'])){
		if(isset($_POST['price_status'])){
			$price_status=$_POST['price_status'];
		}
		if(isset($_POST['price_text'])){
			$price_text=$_POST['price_text'];
		}
		if(isset($_POST['page_id'])){
			$page_id=$_POST['page_id'];
			$rank_math_focus_keyword=get_post_meta($page_id, 'rank_math_focus_keyword', true);
			if( strpos($rank_math_focus_keyword, ",") !== false ) {
				$rank_math_focus_keyword=explode(",",$rank_math_focus_keyword);
				$rank_math_focus_keyword=$rank_math_focus_keyword[0];
			}else{
				$rank_math_focus_keyword=$rank_math_focus_keyword;
			}
		}
		$product_id = $_POST['id'];
			if(intval($product_id)){
				ob_start();
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );
				$product_subtitle=get_field('product_subtitle',$product_id);
				$short_description=get_field('short_description',$product_id);
				$product_gallery=get_field('product_gallery',$product_id);
				$product_cat = get_the_terms( $product_id,'product_cat');
				$cat_array = [];
				foreach($product_cat as $cat){
					$cat_array[] = $cat->name;
				}
				$cat_name = implode(' ',$cat_array);

				$post_content = get_post($product_id);
				$content = $post_content->post_content;
				$price=get_field('price',$product_id);
				$product_url=get_field('product_url',$product_id);
				?>
					<div class="row">
						<div class="col-md-12 col-lg-6 col-sm-12">
							<?php if($product_gallery){ ?>
								<div class="product_gallery_slider">
									<?php foreach( $product_gallery as $image ):
										
											if($image['alt']){
											   $images_alt=$image['alt']." - ".$rank_math_focus_keyword;
										   }else{
											   $images_alt=$image['title']." - ".$rank_math_focus_keyword;
										   }
										
										?>
										<div class="slide-item">
											<?php if($product_url):?><a href="<?= $product_url; ?>"><?php endif; ?>
											<img class="w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $images_alt; ?>" />
											<?php if($product_url):?></a><?php endif; ?>
										</div>
									<?php endforeach; ?>
								</div>
							<?php }else{ 
								   $image_id=get_post_thumbnail_id($product_id);
								   $alt_text = get_the_title($image_id);
								   $alt_text= $alt_text." - ". $rank_math_focus_keyword;
								?>
								<img src="<?php echo $image[0]; ?>" data-id="<?php echo $product_id; ?>"  alt="<?php echo $alt_text; ?>"/>
							<?php } ?>
							
						</div>
						<div class="col-md-12 col-lg-6 col-sm-12">
							<div class="product_data_wrapper">
								<div class="product_data">
									<?php if($product_url):?><a href="<?= $product_url; ?>"><?php endif; ?>
										<h3 class="product_title"><?php echo  get_the_title($product_id); ?></h3>
									<?php if($product_url):?></a><?php endif; ?>
										<?php if (!in_array("Verpakking", $cat_array)): ?>
									<!-- <h4 class="Product_cat"><?php //echo $cat_name; ?></h4> -->
									<?php endif; ?>
								</div>
								<?php if($short_description): ?>
									<div class="product_content">
										<?php echo $short_description?>
									</div>
								<?php endif; ?>
								<?php if($price_status==1):?>
									<p class="price"><?php if ($price_text=='1') { echo "Vanaf:"; }?><span>€<?= $price;?></span></p>
								<?php endif; ?>
								<?php if($product_url):?>
									<a href="<?= $product_url; ?>?p_id=<?php echo $product_id; ?>" class="btn btn-primary" data-product_id="<?php echo get_the_ID(); ?>">Offerte aanvragen</a>
								<?php endif; ?>
								<?php //if (!in_array("Verpakking", $cat_array)): ?>
								<!-- <p class="stock_status">Op voorraad</p> -->
								<?php //endif; ?>
							</div>
						</div>
					</div>
					<?php if(count($product_gallery) > 1):?>
					<script>
							jQuery('.product_gallery_slider').slick({
								dots: true,
								infinite: false,
								speed: 300,
								slidesToShow: 1,
								variableWidth: false,
								//lazyLoad: 'ondemand',
								responsive: [
								{
									breakpoint: 1023,
									settings: {
									slidesToShow: 1,
									slidesToScroll: 1,
									dots: true,
										infinite: false,
									}
								},
								{
									breakpoint: 991,
									settings: {
									slidesToShow: 1,
									slidesToScroll: 1,
									infinite: false,
									centerMode: false,
  									centerPadding: '0px',
									dots: true
									}
								},
								{
									breakpoint: 767,
									settings: {
									slidesToShow: 1,
									slidesToScroll: 1,
									infinite: false,
									dots: true
									}
								}
								]
							});						
					</script>
					<?php endif; ?>
				<?php
				echo ob_get_clean();
				exit();
		}
	}
}



add_action('wp_ajax_faq_search_callback', 'faq_search_callback');
add_action('wp_ajax_nopriv_faq_search_callback', 'faq_search_callback');
function faq_search_callback(){
	if(isset($_POST['val'])){
		$search_val=$_POST['val'];
		$args = array(  
			'post_type' => 'faq',
			'post_status' => 'publish',
			'posts_per_page' => -1, 
			'orderby' => 'date', 
			'order' => 'DESC',
			's'=>$search_val
		);
		$loop = new WP_Query( $args ); 
		ob_start();
		if($loop->have_posts()): ?>
			<?php
				$cat_array = [];
			while ( $loop->have_posts() ) : $loop->the_post(); 
			$faq_cat = get_the_terms(get_the_ID(),'faq_subject');
				foreach($faq_cat as $cat){
					$cat_array[] = $cat->term_id;
				}
			endwhile;
			$cat_array=array_unique($cat_array);
			?>
			 <?php
				foreach( $cat_array as $id ) {
					$args=array(
						'post_type' => 'faq',
						'post_status' => 'publish',
						'posts_per_page' => -1, 
						'tax_query' => array(
							array(
								'taxonomy' => 'faq_subject',
								'field' => 'term_id',
								'terms' => $id,
							)
						)
					);
					$term_name = get_term( $id )->name;
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) { ?>
					 <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
							<div class="faq-list-boxs">
								<div class="sub-header">
									<h4 class="subject_name">
										<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gift.svg"/><?= $term_name; ?>
									</h4>
									<svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%;width: 100%;position: absolute;left: 0;height: auto;">
										<!-- <path d="M0.00,92.27 C216.83,192.92 304.30,8.39 500.00,109.03 L500.00,0.00 L0.00,0.00 Z" style="stroke: none;fill: #9FC4C4;"></path> -->
										<path d="M0,100 C250,150 350,30 500,100 L500,00 L0,0 Z" style="stroke: none; fill:#9FC4C4;"></path>
									</svg>
								</div>
								<ul>
									<?php
										while ($my_query->have_posts()) : $my_query->the_post(); ?>
											<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
										<?php
										endwhile;
									?>
								</ul>
							</div>
						</div>
					<?php
					}
				}
			?>
		<?php else : ?>
		<p> Nothing found! </p>
		<?php endif; 
		$output_string = ob_get_contents();
		ob_end_clean();
		wp_reset_postdata(); 
	}
	wp_die($output_string);
}

function latest_post_data(){
		$args = array(  
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 1, 
			'orderby' => 'date', 
			'order' => 'DESC',
		
		);
		
		$loop = new WP_Query( $args ); 
		ob_start();
		$count=1;
		if($loop->have_posts()): 
			$totalPage = $loop->max_num_pages;
				while ( $loop->have_posts() ) : $loop->the_post(); 
				global $post;
				$post_date = get_the_date( 'F j Y' );
				$content=get_the_content();
				$reading_time=reading_time($content);
				$word_limit =20;
				$words = explode(' ', $content);
				$content= implode(' ', array_slice($words, 0, $word_limit))."...";
			
				$term ='category';
		
				$category = get_the_terms(get_the_ID(),$term);
				$cat_array = [];
				foreach($category as $cat){
					$cat_array[] = $cat->name;
				}
				$cat_name = implode(' ',$cat_array);
				?>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="news-item" >
							<div class="news-wrapper-content">
								<ul class="cat_name">
									<?php foreach($category as $cat){ ?>
										<li class="cat_item"><?= $cat->name; ?></li>
									<?php } ?>
								</ul>
								<h5 class="news-heading">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h5>
								<ul class="news-meta">
									<li class="date"><img alt="date icon" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/date.svg"/><?php echo $post_date; ?></li>
								</ul>
								<div class="news-content">
								<?php echo wp_strip_all_tags( $content ); ?>
								</div> 
							
							</div>
							<a class="more-news-link" href="<?php the_permalink(); ?>" title=""><?php _e('Lees meer','sterkado'); ?><img alt="arrow icon" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow.svg"/></a>
						</div>
					</div>
				<?php
				
				endwhile; 
			endif;
			$output= ob_get_clean();

		return $output;
}
add_shortcode( 'latest_post_data', 'latest_post_data' );

add_filter( 'body_class','my_body_classes' );
function my_body_classes( $classes ) {
		global $post;
		$select_header=get_field('select_header',$post->ID);
		if($select_header){
			$header_class=$select_header;
		}else{
			$header_class="header1";
		}
		$classes[] = $header_class;
    return $classes;
}

add_filter( 'manage_pages_columns', 'page_column_views' );
add_action( 'manage_pages_custom_column', 'page_custom_column_views', 5, 2 );
function page_column_views( $defaults )
{
   $defaults['page-layout'] = __('Template');
   return $defaults;
}
function page_custom_column_views( $column_name, $id )
{
   if ( $column_name === 'page-layout' ) {
       $set_template = get_post_meta( get_the_ID(), '_wp_page_template', true );
       if ( $set_template == 'default' ) {
           echo 'Default';
       }
       $templates = get_page_templates();
       ksort( $templates );
       foreach ( array_keys( $templates ) as $template ) :
           if ( $set_template == $templates[$template] ) echo $template;
       endforeach;
   }
}


function stormcatch_thirdpart_form_6_api( $entry, $form ) {
	
	// staging form id = 20
	// live form id = 6
	$input_16_3  	= rgpost( 'input_16_3' ); // FirstName
	$input_16_6  	= rgpost( 'input_16_6' ); // LastName
	$input_6_6  	= rgpost( 'input_6' ); // Company
	$input_6_7  	= rgpost( 'input_7' ); // Country
	$input_6_8 		= rgpost( 'input_8' ); // Email
	// $input_6_9  	= rgpost( 'input_9' ); // Phone
	$input_6_12  	= rgpost( 'input_12' ); // No of Individuals
	$input_6_13  	= rgpost( 'input_18' ); // Budget 
	$input_6_14  	= rgpost( 'input_14' ); // Occasions
	$input_6_15  	= rgpost( 'input_17' ); // Explaination
	
	///to send that fetched data to third-party api///
	$api_url = 'https://sterconcepts.nl/api/1.0.0/forms/formPosts-2022.php';
	$body = array(
			'action' 			=> 'demo_request_form_call',
		    'fname' 			=> $input_16_3, 
		    'lname' 			=> $input_16_6, 
			'company' 			=> $input_6_6, 
			'country' 			=> $input_6_7, 
			'email' 			=> $input_6_8, 
			// 'phone' 			=> $input_6_9, 
			'no_of_individuals' => $input_6_12, 
			'individual_budget' => $input_6_13, 
			'occassion'			=> $input_6_14,
			'explaination' 		=> $input_6_15, 
	 );
	
	GFCommon::log_debug( 'gform_after_submission: body => ' . print_r( $body, true ) );

	$response = wp_remote_post(
		$api_url,
		array(
			'body' => $body
		)
	);

}
add_action( 'gform_after_submission_6', 'stormcatch_thirdpart_form_6_api', 10, 2 );

function stormcatch_thirdpart_form_20_api( $entry, $form ) {
	
	// staging form id = 19
	// live form id = 20
	$input_16_3  	= rgpost( 'input_16_3' ); // FirstName
	$input_16_6  	= rgpost( 'input_16_6' ); // LastName
	$input_6_6  	= rgpost( 'input_6' ); // Company
	$input_6_7  	= rgpost( 'input_7' ); // Country
	$input_6_8 		= rgpost( 'input_8' ); // Email
	// $input_6_9  	= rgpost( 'input_9' ); // Phone
	$input_6_12  	= rgpost( 'input_12' ); // No of Individuals
	$input_6_13  	= rgpost( 'input_18' ); // Budget 
	$input_6_14  	= rgpost( 'input_14' ); // Occasions
	$input_6_15  	= rgpost( 'input_17' ); // Explaination
	
	///to send that fetched data to third-party api///
	$api_url = 'https://sterconcepts.nl/api/1.0.0/forms/formPosts-2022.php';
	$body = array(
			'action' 			=> 'webshop-aanvragen-keuze-kado-365',
		    'fname' 			=> $input_16_3, 
		    'lname' 			=> $input_16_6, 
			'company' 			=> $input_6_6, 
			'country' 			=> $input_6_7, 
			'email' 			=> $input_6_8, 
			// 'phone' 			=> $input_6_9, 
			'no_of_individuals' => $input_6_12, 
			'individual_budget' => $input_6_13, 
			'occassion'			=> $input_6_14,
			'explaination' 		=> $input_6_15, 
	 );
	//  echo '<pre>';
	//  print_r($body);
	//  echo '</pre>';
	GFCommon::log_debug( 'gform_after_submission: body => ' . print_r( $body, true ) );

	$response = wp_remote_post(
		$api_url,
		array(
			'body' => $body
		)
	);
	// echo '<pre>';
	// print_r($response);
	// echo '</pre>';
}
add_action( 'gform_after_submission_20', 'stormcatch_thirdpart_form_20_api', 10, 2 );

function stormcatch_thirdpart_form_9_api( $entry, $form ) {
	
	// staging form id = 22
	// live form id = 9

	$input_16_3  	= rgpost( 'input_16_3' ); // FirstName
	$input_16_6  	= rgpost( 'input_16_6' ); // LastName
	$input_9_6  	= rgpost( 'input_6' ); // Company
	$input_9_7  	= rgpost( 'input_7' ); // Country
	$input_9_8 		= rgpost( 'input_8' ); // Email
	$input_9_9  	= rgpost( 'input_9' ); // Phone
	$input_9_12  	= rgpost( 'input_12' ); // No of Individuals
	$input_9_13  	= rgpost( 'input_18' ); // Budget 
	// $input_9_14  	= rgpost( 'input_14' ); // Occasions
	$input_9_15  	= rgpost( 'input_17' ); // Explaination

	///to send that fetched data to third-party api///
	$api_url = 'https://sterconcepts.nl/api/1.0.0/forms/formPosts-2022.php';
	$body = array(
			'action' 			=> 'digitale_kerstmarkt_demo',
			'fname' 			=> $input_16_3, 
		    'lname' 			=> $input_16_6, 
			'company' 			=> $input_9_6, 
			'country' 			=> $input_9_7, 
			'email' 			=> $input_9_8, 
			'phone' 			=> $input_9_9, 
			'no_of_individuals' => $input_9_12, 
			'individual_budget' => $input_9_13, 
			'explaination' 		=> $input_9_15, 
	 );
	
	GFCommon::log_debug( 'gform_after_submission: body => ' . print_r( $body, true ) );

	$response = wp_remote_post(
		$api_url,
		array(
			'body' => $body
		)
	);

}
add_action( 'gform_after_submission_9', 'stormcatch_thirdpart_form_9_api', 10, 2 );

// add_filter( 'gform_confirmation', function ( $confirmation, $form, $entry, $ajax ) {
//     GFCommon::log_debug( __METHOD__ . '(): running.' );
 
//     $forms = array( 3 ); // Target forms with id 3, 6 and 7. Change this to fit your needs.
 
//     if ( ! in_array( $form['id'], $forms, true ) ) {
//         return $confirmation;
//     }
 
//     if ( isset( $confirmation['redirect'] ) ) {
//         $url          = esc_url_raw( $confirmation['redirect'] );
//         GFCommon::log_debug( __METHOD__ . '(): Redirect to URL: ' . $url );
//         $confirmation = 'Thanks for contacting us! We will get in touch with you shortly.';
//         $confirmation .= GFCommon::get_inline_script_tag( "window.open('$url', '_blank');" );
//         // $confirmation .= "<script type=\"text/javascript\">window.open('$url', '_blank');</script>";
//     }
 
//     return $confirmation;
// }, 10, 4 );



// add_filter( 'gform_confirmation', function ( $confirmation, $form, $entry, $ajax ) {
//     GFCommon::log_debug( __METHOD__ . '(): running.' );
 
//     $forms = array( 3 ); // Target forms with id 3, 6 and 7. Change this to fit your needs.
 
//     if ( ! in_array( $form['id'], $forms, true ) ) {
//         return $confirmation;
//     }
 
//     if ( isset( $confirmation['redirect'] ) ) {
//         $url          = esc_url_raw( 'https://sterkado.nl/wp-content/uploads/2022/09/Lookbook-Kerst-2022-STERKADO-.pdf' );
//         GFCommon::log_debug( __METHOD__ . '(): Redirect to URL: ' . $url );
//         $confirmation = 'Thanks for contacting us! We will get in touch with you shortly.';
//         // $confirmation .= "<script type=\"text/javascript\">window.open('$url', '_blank');</script>";
//         $confirmation .= "<script type=\"text/javascript\">
//  			setTimeout(function() { window.open('$url')}, 2000); </script>";
//     }
 
//     return $confirmation;
// }, 10, 4 );


function wpseo_xmlsitemap_add_attached_images( $images, $post_id ) { 
	$attached_images = get_attached_media( 'image', $post_id);
	if($attached_images){
		foreach($attached_images as $attached_image){
			$image_arr = array();
			$image_arr['src'] = $attached_image->guid;
			$images[] = $image_arr;
		}
	}
	array_unique($images);
    return $images; 
}; 

add_filter( 'wpseo_sitemap_urlimages', 'wpseo_xmlsitemap_add_attached_images', 10, 2 );


add_shortcode('sterkado_product_title','sterkado_product_title');
function sterkado_product_title(){
	if(isset($_GET['p_id'])){
		$product_id=$_GET['p_id'];
		return ' - '.get_the_title($product_id);
	}
}

add_shortcode('thema_pakketten_product_title','thema_pakketten_product_title');
function thema_pakketten_product_title(){
	if(isset($_GET['p_id'])){
		$product_id=$_GET['p_id'];
		if(is_int($product_id)){
			$title=get_the_title($product_id);
		}else{
			$title=$_GET['p_id'];
		}
		return ' - '.$title;
	}else{
		return ' - Themapakket';
	}
}

add_shortcode('kerstpakketten_product_title','kerstpakketten_product_title');
function kerstpakketten_product_title(){
	if(isset($_GET['p_id'])){
		$product_id=$_GET['p_id'];
		if(is_int($product_id)){
			$title=get_the_title($product_id);
		}else{
			$title=$_GET['p_id'];
		}
		return ' - '.$title;
	}else{
		return ' - Kerstpakketten';
	}
}

add_filter( 'gform_pre_submission_filter', 'populate_choices' );
function populate_choices( $form ) {
 
    //only populating drop down for form id 5
    // if ( $form['id'] != 11 ) {
    //    return $form;
    // }
 

    $fields = $form['fields'];
	//print_r($fields);
	if(isset($_GET['p_id'])){
		$product_id=$_GET['p_id'];
	
		$value = get_the_title($product_id);
		foreach( $form['fields'] as &$field ) {
			if ( $field->inputName == 'product_title' ) {
				$field->value = $value;
			}
		}
	}
   
    return $form;
}



// add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
// function form_submit_button( $button, $form ) {
// 	return $newbutton = '<input type="hidden" id="zc_gad" name="zc_gad" value=""/>'.$button;
	
//     // return "<button class='button gform_button' id='gform_submit_button_{$form['id']}'><span>Submit</span></button>";
// }


/* Current Live site Form Code */
/*Contact Form*/
add_filter( 'gform_zohocrm_lead_2', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 13 );
    return $lead;
}, 10, 4 );


/*Demo aanvraag Form*/
add_filter( 'gform_zohocrm_lead_6', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 19 );
    return $lead;
}, 10, 4 );


/*Offerte aanvraag Form*/
add_filter( 'gform_zohocrm_lead_13', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 45 );
    return $lead;
}, 10, 4 );

/*Offerte aanvraag Brievenbus Cadeau Form*/
add_filter( 'gform_zohocrm_lead_11', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 42 );
    return $lead;
}, 10, 4 );

/* Download Lookbook Form*/
/*add_filter( 'gform_zohocrm_lead_3', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 2 );
    return $lead;
}, 10, 4 );*/


/* Demo aanvraag digitale kerstmarkt Form*/
add_filter( 'gform_zohocrm_lead_9', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 19 );
    return $lead;
}, 10, 4 );


/* Offerte aanvraag Form*/
add_filter( 'gform_zohocrm_lead_5', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 45 );
    return $lead;
}, 10, 4 );


/* Persoonlijk advies Form*/
add_filter( 'gform_zohocrm_lead_8', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 19 );
    return $lead;
}, 10, 4 );


/* Offerte aanvraag - Lead verjaardag beheer */
add_filter( 'gform_zohocrm_lead_12', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 45 );
    return $lead;
}, 10, 4 );


/* Offerte aanvraag - Lead verjaardag beheer */
add_filter( 'gform_zohocrm_lead_10', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 41 );
    return $lead;
}, 10, 4 );



/* Specimen site Form Code */
/*Contact Form*/
add_filter( 'gform_zohocrm_lead_2', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 16 );
    return $lead;
}, 10, 4 );


/*Job Form*/
add_filter( 'gform_zohocrm_lead_6', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 19 );
    return $lead;
}, 10, 4 );

/*FAQ DEtail Form*/
add_filter( 'gform_zohocrm_lead_14', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 15 );
    return $lead;
}, 10, 4 );

/*Offerte aanvraag Form*/
add_filter( 'gform_zohocrm_lead_13', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 45 );
    return $lead;
}, 10, 4 );

/*Offerte aanvraag Brievenbus Cadeau Form*/
add_filter( 'gform_zohocrm_lead_11', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 41 );
    return $lead;
}, 10, 4 );

/* Demo aanvraag digitale kerstmarkt Form*/
add_filter( 'gform_zohocrm_lead_9', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 19 );
    return $lead;
}, 10, 4 );


/* Offerte aanvraag Form*/
add_filter( 'gform_zohocrm_lead_5', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 45 );
    return $lead;
}, 10, 4 );


/* Persoonlijk advies Form*/
add_filter( 'gform_zohocrm_lead_8', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 19 );
    return $lead;
}, 10, 4 );


/* Offerte aanvraag*/
add_filter( 'gform_zohocrm_lead_10', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 41 );
    return $lead;
}, 10, 4 );


/* Offerte aanvraag */
add_filter( 'gform_zohocrm_lead_12', function( $lead, $feed, $entry, $form ) {
    $lead['$gclid'] = rgar( $entry, 45 );
    return $lead;
}, 10, 4 );
