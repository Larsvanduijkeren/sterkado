<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<?php

    $currentcat = get_queried_object()->slug;
    $currentcatname = get_queried_object()->name;

?> 
<section id="hero_banner_section_1" class="w-100 section_1  section-hero_banner_section">   
    <div class="container">
        <div class="row align-items-center justify-content-center"> 
            <div class="col-lg-7 col-md-12 col-sm-12 pd-100 md-full">
                    <h1><?php echo single_cat_title( '', false ); ?></h1>
                <div class="contact-banner-link text-left" style="display: none;">
                    <ul class="sterkado_news_cat_filter  d-flex" id="sterkado_news_cat_filter">
                        <li class="cat_item active" data-slug="<?php echo $currentcat; ?>"><?php echo $currentcatname; ?></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-4 col-sm-12  hide-sm-device norightpadding text-center"></div>
        </div>
    </div>
</section>
<section  class="w-100 section_12  section-latest_news">
    <div class="container">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(  
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 9, 
                    'orderby' => 'date', 
                    'order' => 'DESC', 
                    'paged'   => $paged,
                );
                $count=1;
                $loop = new WP_Query( $args ); 
                if ( $loop->have_posts() ) : ?>
                    <div class="sterkado_news_lists_loadeer" style="display:none;"></div>
                    <div class="row latest-news-wrapper listnews-filter " id="sterkado_news_lists">
                    </div>
                    <div class="bg_news_settings">
                        <input type="hidden" name="bg_paged" id="bg_paged" value="<?= $paged; ?>" >
                        <input type="hidden" name="bg_posttype" value="post">
			            <input type="hidden" name="bg_term" value="category">
                    </div>
                
                            <?php
                    endif;
                wp_reset_postdata();
            ?>
    </div>
</section>
<?php
get_footer();
