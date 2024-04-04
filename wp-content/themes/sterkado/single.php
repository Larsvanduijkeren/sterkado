<?php get_header(); ?>
<section class="blog-detail-section w-100">
    <div class="blog-detail-wrap">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="terug-naar-overzicht">
                        <a href="<?php echo get_permalink( 2715 ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-back-arrow.svg" alt=""> <span>Terug naar overzicht</span></a>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col">
                    <div class="blog-detail-head">
                            <div class="left-col">
                                <div class="head-content">
                                    <div class="time-date">
                                        <div class="time">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_titme.svg" alt=""> <span><span id="readtime"></span>  min</span>
                                        </div>
                                        <div class="date">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_calender.svg" alt=""> <span><?php echo get_the_date('d M Y'); ?></span>
                                        </div>
                                    </div>
                                    <h1 class="blog-title">
                                        <?php echo get_the_title(); ?>
                                    </h1>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>
                            </div>
                            <?php 
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'large' ); 
                            if(!empty($image)):
                            ?>
                                <div class="right-col">
                                    <div class="feature-img">
                                        <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" srcset="">
                                    </div>
                                </div>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 

    $post_block = get_field('post_block');
 ?>
<section class="blog_content_detail_section w-100">
    <div class="blog_content-box">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="blog-col-wraper">
                        <div class="col-left">
                            <div class="sidebar-col">
                                <ul class="sidebar-list">
                                    <?php foreach ($post_block as $key => $block): 
                                       if($block['block_heading'] !=''){  ?>
                                        <li class="side-mobile"><a href="#<?php echo sanitize_title_with_dashes($block['block_heading']) ?>"><?php echo $block['block_heading']; ?></a></li>
                                    <?php  } endforeach; ?>
                                </ul>
                                
                                <div class="share-links-wrap">
                                    <div class="share-box">
                                        <a data-href="<?php the_permalink(); ?>" id="sharelink"><span>Kopieer link</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_kopieer-link.svg" alt="" srcset=""></a>
                                    </div>
                                    <div class="social-media">
                                        <a href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fb-icon.svg" alt="" srcset=""> </a>
                                        <a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title(); ?>"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter-sign-icon.png" alt="" srcset=""> </a>
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_permalink(); ?>"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin-icon.svg" alt="" srcset=""> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-col">
                            <div class="onfo-wraper">
                                <?php foreach ($post_block as $key => $block): 
                                    if($block['block_heading'] !=''){ ?>

                                    
                                    <div class="section sroll-div" id="<?php echo sanitize_title_with_dashes($block['block_heading']) ?>">
                                        <?php 

                                            foreach ($block['post_components'] as $key1 => $component): 
                                                get_template_part( "components/post/section-".$component['acf_fc_layout'],null,$component); 
                                            endforeach;
                                        ?>
                                    </div>
                                    <?php }

                                endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog_latest_news_section w-100">
    <div class="blog_latest_news-box">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>