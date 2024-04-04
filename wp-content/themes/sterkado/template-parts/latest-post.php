<?php
    global $post;
    $featured_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
    $image_id=get_post_thumbnail_id($post->ID);
    $alt_text = get_the_title($image_id);
    $post_date = get_the_date( 'F j Y' );
    $page_id=$args['page_id'];
    $rank_math_focus_keyword=get_post_meta($page_id, 'rank_math_focus_keyword', true);
    if( strpos($rank_math_focus_keyword, ",") !== false ) {
        $rank_math_focus_keyword=explode(",",$rank_math_focus_keyword);
        $rank_math_focus_keyword=$rank_math_focus_keyword[0];
    }else{
        $rank_math_focus_keyword=$rank_math_focus_keyword;
    }
    $alt_text= $alt_text." - ". $rank_math_focus_keyword;
    $content=get_the_content();

    $reading_time=reading_time($content);
    $word_limit =20;
    $words = explode(' ', $content);
    $content= implode(' ', array_slice($words, 0, $word_limit))."...";
 ?>
 <div class="col-lg-3 col-md-6 col-sm-12" >
     <div class="news-item" >
         <div class="news-img">
             <img src="<?php echo $featured_img; ?>" alt="<?php echo $alt_text; ?>">
             <div class="curve">
                 <svg viewbox="0 0 100 25">
                     <path fill="#d7e7e7" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
                 </svg>
             </div>
         </div>
         <div class="news-wrapper-content">
             <h5 class="news-heading">
                 <a href="<?php the_permalink(); ?>">
                     <?php the_title(); ?>
                 </a>
             </h5>
             <ul class="news-meta">
                 <li class="date"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/date.svg"/><?php echo $post_date; ?></li>
             </ul>
             <div class="news-content">
                 <?php echo wp_strip_all_tags( $content ); ?>
             </div> 
             <a class="more-news-link" href="<?php the_permalink(); ?>" title=""><?php _e('Lees meer','sterkado'); ?><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow.svg"/></a>
         </div>
     </div>
 </div>