<?php

$title = get_sub_field('title');

    ?>
    <div class="container">
        <?php if ($title) : ?> <h2 class="latest_news__title"><?php echo $title; ?></h2> <?php endif; ?> 
            <?php
                $args = array(  
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 4, 
                    'orderby' => 'date', 
                    'order' => 'DESC', 
                );
            
                $loop = new WP_Query( $args ); 
                if ( $loop->have_posts() ) : ?>
                    <div class="row latest-news-wrapper">
                        <?php
                        while ( $loop->have_posts() ) : $loop->the_post();
                        global $post;
                        $featured_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
                        $post_date = get_the_date( 'F j Y' );

                        $content=get_the_content();

                        $word_limit =20;
                        $words = explode(' ', $content);
                        $content= implode(' ', array_slice($words, 0, $word_limit))."...";
                        ?>
                            <div class="news-item col-md-3" >
                                <div class="news-img">
                                        <img src="<?php echo $featured_img; ?>" alt="">
                                </div>
                            <h5 class="news-heading">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h5>
                            <ul class="news-meta">
                                <li class="date"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/date.svg"/><?php echo $post_date; ?></li>
                            </ul>
                            <div class="news-content">
                                <?php echo $content; ?>
                            </div> 
                            <a class="more-news-link" href="<?php the_permalink(); ?>" title=""><?php _e('Lees meer','sterkado'); ?><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow.svg"/></a>
                        </div>
                        <?php
                        endwhile; ?>
                    </div> 
                    <?php
                    endif;
                wp_reset_postdata();
            ?>
    </div>
   


