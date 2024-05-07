<?php
global $post;
$featured_img                           = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
$post_date                              = get_the_date( 'F j Y' );
$content                                = get_field('short_description');
$reading_time                           = reading_time($content);
$word_limit                             = 20;
$words                                  = explode(' ', $content);
$content                                = implode(' ', array_slice($words, 0, $word_limit))."...";
$col                                    = $args['col'];
$term                                   = $args['term'];
$class                                  = $args['class'];
$category                               = get_the_terms(get_the_ID(),$term);
$cat_array                              = [];

foreach($category as $cat){
    $cat_array[] = $cat->name;
}

$cat_name                               = implode(' ',$cat_array);
$image_id                               = get_post_thumbnail_id($post->ID);
$alt_text                               = get_the_title($image_id);
$page_id                                = $args['page_id'];
$rank_math_focus_keyword                = get_post_meta($page_id, 'rank_math_focus_keyword', true);

if($rank_math_focus_keyword){
    if( strpos($rank_math_focus_keyword, ",") !== false ) {
        $rank_math_focus_keyword        = explode(",",$rank_math_focus_keyword);
        $rank_math_focus_keyword        = $rank_math_focus_keyword[0];
    }else{
        $rank_math_focus_keyword        = $rank_math_focus_keyword;
    }
    $alt_text                           = $alt_text." - ". $rank_math_focus_keyword;
}else{
    $alt_text                           = $alt_text;
}

?>
<div class="col-lg-<?= $col; ?> col-md-6 col-sm-12 <?= $class; ?>" >
    <div class="news-item" >
        <div class="news-img">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo $featured_img; ?>" alt="<?= $alt_text; ?>">
                <div class="curve">
                    <svg viewbox="0 0 100 25">
                        <path fill="#d7e7e7" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
                    </svg>
                </div>
            </a>
        </div>
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
                <li class="date"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/date.svg"/><?php echo $post_date; ?></li>
            </ul>
            <div class="news-content">
                <?php echo strip_tags($content); ?>
            </div> 
         
        </div>
        <a class="more-news-link" href="<?php the_permalink(); ?>" title=""><?php _e('Lees meer','sterkado'); ?><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow.svg"/></a>
    </div>
</div>