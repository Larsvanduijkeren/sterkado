<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WFG29T9');</script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>

	<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=7vgrroquytuiyv3f5xfwqa" async="true"></script>
	
</head>
<?php global $post; ?>
<body <?php body_class(); ?> data-id="<?= $post->ID; ?>">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WFG29T9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php 

    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }

?>
    <?php
$header_phone_no=get_field('header_phone_no','option');
?>
    <header class="header-wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <span class="rating-site">
                        <?php echo do_shortcode(get_field('rating_shortcode','option')); ?>
                        <?php echo get_field('rating_text','option'); ?>
                    </span>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 full-width-tab">
                    <div class="logo text-center">
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>"
                                alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                        <a aria-label="hamburger menu" class="menu-toogle" href="#menu"><span></span></a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="right-top-menu">
                        <?php if($header_phone_no): ?>
                        <div class="phone-link">
                            <a href="tel:<?= $header_phone_no; ?>"><img
                                    src="<?php echo get_stylesheet_directory_uri();?>/assets/images/phone-icon.svg"><?= $header_phone_no; ?></a>
                        </div>
                        <?php endif; ?>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'header_top',
                            'container'       => false,
                            'container_id'    => false,
                            'container_class' => false,
                            'menu_id'         => 'menu-header-top',
                            'menu_class'      => 'nav-top d-flex',
                            'depth'           => 3,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new wp_bootstrap_navwalker()
                        ));
                    ?>
                    </div>
                </div>
            </div>

            <div class="row align-items-center main-header-bar">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <nav id="desk_menu" class="navbar-expand-xl">
                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'primary',
                            'container'       => false,
                            'container_id'    => false,
                            'container_class' => false,
                            'menu_id'         => 'menu-header-menu',
                            'menu_class'      => 'navbar-nav',
                            'depth'           => 3,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new wp_bootstrap_navwalker()
                        ));
                    ?>
                    </nav>


                    <nav id="menu" class="navbar-expand-xl main_mobile_menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'mobile-menu',
                            'container'       => false,
                            'container_id'    => false,
                            'container_class' => false,
                            'menu_id'         => 'menu-header-menu',
                            'menu_class'      => 'navbar-nav',
                            'depth'           => 3,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new wp_bootstrap_navwalker()
                        ));
                    ?>
                        <?php 
                        global $post;
                        
                        ?>
                        <div class="contact-top-link">
                            <?php 
                                $request_a_gift_button_post = get_field('request_a_gift_button',$post->ID);
                                $request_a_gift_button_option = get_field('request_a_gift_button','option');
                                
                                if($request_a_gift_button_post){
                                    $request_a_gift_button=$request_a_gift_button_post;
                                }else{
                                    $request_a_gift_button=$request_a_gift_button_option;
                                }
                                if( $request_a_gift_button ): 
                                    $link_url = $request_a_gift_button['url'];
                                    $link_title = $request_a_gift_button['title'];
                                    $link_target = $request_a_gift_button['target'] ? $link['target'] : '_self';

                            ?>
                            <a class="btn btn-secondary-blue-border" href="<?php echo esc_url( $link_url ); ?>"
                                target="<?php echo esc_attr( $link_target ); ?>">
                                <?php echo esc_html( $link_title ); ?>

                            </a>    
                            <?php endif; ?>

                            <?php 
                                $request_a_gift_button_post_2 = get_field('request_a_gift_button_2',$post->ID);
                                $request_a_gift_button_option_2 = get_field('request_a_gift_button_2','option');

                                if($request_a_gift_button_post_2){
                                    $request_a_gift_button_2 = $request_a_gift_button_post_2;
                                }elseif(empty($request_a_gift_button_post)){
                                    $request_a_gift_button_2 = $request_a_gift_button_option_2;
                                }
                                if( $request_a_gift_button_2 ): 
                                    $link_url_2 = $request_a_gift_button_2['url'];
                                    $link_title_2 = $request_a_gift_button_2['title'];
                                    $link_target_2 = $request_a_gift_button_2['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="nav-link btn btn-primary" href="<?php echo esc_url( $link_url_2 ); ?>"
                                    target="<?php echo esc_attr( $link_target_2 ); ?>">
                                    <?php echo esc_html( $link_title_2 ); ?>

                                </a>    
                            <?php endif; ?>
                        </div>


                        <div class="right-top-menu">
                            <?php
                            wp_nav_menu(array(
                                'theme_location'  => 'header_top',
                                'container'       => false,
                                'container_id'    => false,
                                'container_class' => false,
                                'menu_id'         => 'menu-header-top',
                                'menu_class'      => 'nav-top d-flex',
                                'depth'           => 3,
                                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                'walker'          => new wp_bootstrap_navwalker()
                            ));
                        ?>
                            <?php if($header_phone_no): ?>
                            <div class="phone-link">
                                <a href="tel:<?= $header_phone_no; ?>">
                                    <img
                                        src="<?php echo get_stylesheet_directory_uri();?>/assets/images/phone-icon.svg">
                                    <?= $header_phone_no; ?></a>
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="rating-bttn">
                            <span class="rating-site">
                                <?php echo do_shortcode(get_field('rating_shortcode','option')); ?>
                                <?php echo get_field('rating_text','option'); ?>
                            </span>

                        </div>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <?php 
                    global $post;
                    ?>
                    <div class="contact-top-link text-right">
                        <?php 

                        $request_a_gift_button_post = get_field('request_a_gift_button',$post->ID);
                        $request_a_gift_button_option = get_field('request_a_gift_button','option');
                        if($request_a_gift_button_post){
                            $request_a_gift_button=$request_a_gift_button_post;
                        }else{
                            $request_a_gift_button=$request_a_gift_button_option;
                        }
                        if( $request_a_gift_button ): 
                            $link_url = $request_a_gift_button['url'];
                            $link_title = $request_a_gift_button['title'];
                            $link_target = $request_a_gift_button['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn btn-secondary-blue-border" href="<?php echo esc_url( $link_url ); ?>"
                            target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

                        <?php 
                            $request_a_gift_button_post_2 = get_field('request_a_gift_button_2',$post->ID);
                            $request_a_gift_button_option_2 = get_field('request_a_gift_button_2','option');

                            if($request_a_gift_button_post_2){
                                $request_a_gift_button_2 = $request_a_gift_button_post_2;
                            }elseif(empty($request_a_gift_button_post)){
                                $request_a_gift_button_2 = $request_a_gift_button_option_2;
                            }
                            if( $request_a_gift_button_2 ): 
                                $link_url_2 = $request_a_gift_button_2['url'];
                                $link_title_2 = $request_a_gift_button_2['title'];
                                $link_target_2 = $request_a_gift_button_2['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn btn-primary" href="<?php echo esc_url( $link_url_2 ); ?>"
                                target="<?php echo esc_attr( $link_target_2 ); ?>">
                                <?php echo esc_html( $link_title_2 ); ?>

                            </a>    
                        <?php endif; ?>
                    </div>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </header>