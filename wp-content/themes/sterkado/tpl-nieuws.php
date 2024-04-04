
<?php 
/* Template Name: Nieuws */ 
get_header();

  $hero_title       = get_field('hero_title');
  $hero_content     = get_field('hero_content');

  $hero_right_image = get_field('hero_right_image');
  $hero_section_background_image = get_field('hero_section_background_image');

  $args= array( 
    'orderby'     => 'term_order',
    'order'       => 'ASC',
    'child_of'    => 0,
    'parent'      => 0,
    'fields'      => 'all',
    'hide_empty'  => true,
); 
$category = get_terms( 'category', $args );

global $wp;
//echo '<pre>';print_r($wp);echo '</pre>';
?> 
<section id="hero_banner_section_1" class="w-100 section_1  section-hero_banner_section inner-comm-banner only-banner-content" <?php if($hero_section_background_image):?>style="background-image:url(<?= $hero_section_background_image;?>);"<?php endif;?>>   
    <div class="container">
        <div class="row align-items-center justify-content-center"> 
            <div class="col-lg-7 col-md-12 col-sm-12 pd-100 md-full nieuws-banner-wrap">
                <?php if(!empty($hero_title)): ?>
                    <h1><?php echo $hero_title; ?></h1>
                <?php endif; ?>   
                <?php if(!empty($hero_content)): ?>
                    <p><?php echo $hero_content; ?></p>
                <?php endif; ?>   
                <div class="contact-banner-link text-left">
                    <ul class="sterkado_news_cat_filter  d-flex" id="sterkado_news_cat_filter">
                        <li>Filter op</li>
                        <li class="reset mob_only" data-slug="all">Reset <span></span></li>
                        <li class="cat_item active" data-slug="all"><a class="cat_item_link" href="<?=home_url( $wp->query_vars['pagename'] ).'/?cat=all';?>">Alle</a></li>
                        <?php foreach($category as $term){
                            echo '<li class="cat_item" data-slug="'.$term->slug.'"><a class="cat_item_link" href="'.home_url( $wp->query_vars['pagename'] ).'/?cat='.$term->slug.'">'.$term->name.' </a></li> ';
                        } ?>
               
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-4 col-sm-12  hide-sm-device norightpadding text-center">
                <figure>
                    <figcaption>
                        <img class="d-block" src="<?php echo $hero_right_image; ?>">
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>
<section  class="w-100 section_12  section-latest_news">
    <div class="container">
            <?php
           $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                if(isset($_GET['cat'])){
                        $cat=$_GET['cat'];
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
                                        'taxonomy' => 'category',
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
                $count=1;
                $loop = new WP_Query( $args ); 
                if ( $loop->have_posts() ) : ?>
                    <div class="sterkado_news_lists_loadeer" style="display:none;"></div>
                    <div class="row latest-news-wrapper listnews-filter " id="sterkado_news_lists">

                        <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                        if($count==1 || $count==6 || $count==7){
                            $col=6;
                            $class="big-item";
                        }else{
                            $col=3;
                            $class="small-item";
                        }
                        $args = array( 'col' => $col,'term'=>'category' ,'class'=>$class);
                        get_template_part( 'template-parts/post', 'grid', $args );
                            $count++;
                        endwhile; ?>

                        <div class="news-pagination">
                        <?php $big = 999999999; 
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $loop->max_num_pages
                        ) );?>
                        </div>
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
<?php get_footer(); ?>