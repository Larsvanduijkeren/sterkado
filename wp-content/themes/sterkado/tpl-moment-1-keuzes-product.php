    
<?php 
/* Template Name: Product - Moment – 1 keuzes
*/ 
get_header();
?>
<?php
  $hero_title                               = get_field('hero_title');
  $tag_line                                 = get_field('tag_line');
  $hero_content                             = get_field('hero_content');
  $hero_right_bg_image                      = get_field('hero_right_bg_image');
  $hero_right_image                         = get_field('hero_right_image');
  $hero_text_after_button                   = get_field('hero_text_after_button');
  $quote_author_image                       = get_field('quote_author_image');
  $quote_text                               = get_field('quote_text');
  $quote_author_name                        = get_field('quote_author_name');
  $hero_section_background_image            = get_field('hero_section_background_image');
  $hero_section_mobile_background_image     = get_field('hero_section_mobile_background_image');
  $image_section_type                       = get_field('image_section_type');
  $count_box_1                              = get_field('count_box_1');
  $count_box_2                              = get_field('count_box_2');
  $count_box_2                              = get_field('count_box_2');
  $count_box_small_image                    = get_field('count_box_small_image');
  
  $small_arrow_text                         = get_field('small_arrow_text');
  $rank_math_focus_keyword                  = get_post_meta($post->ID, 'rank_math_focus_keyword', true);
    if( strpos($rank_math_focus_keyword, ",") !== false ) {
        $rank_math_focus_keyword            = explode(",",$rank_math_focus_keyword);
        $rank_math_focus_keyword            = $rank_math_focus_keyword[0];
    }else{
        $rank_math_focus_keyword            = $rank_math_focus_keyword;
    }
    global $post;
    $page_id = $post->ID;

?>
<section id="hero_banner_section_1" class="w-100 section_1  section-hero_banner_section inner-comm-banner hero-type-new <?php echo $image_section_type; ?>"
    <?php if($hero_section_background_image):?>style="background-image:url(<?= $hero_section_background_image;?>);"
    <?php endif;?>>
    <?php if( !empty( $hero_section_mobile_background_image ) ): 
         if($hero_section_mobile_background_image['alt']){
            $images_alt=$hero_section_mobile_background_image['alt']." - ".$rank_math_focus_keyword;
        }else{
            $images_alt=$hero_section_mobile_background_image['title']." - ".$rank_math_focus_keyword;
        }
        ?>
        <div class="mobile_bg_img">
            <img src="<?php echo esc_url($hero_section_mobile_background_image['url']); ?>" alt="<?php echo $images_alt; ?>" />
        </div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 col-sm-12 pd-100 md-full left-content">
                <?php if(!empty($tag_line)): ?>
                <div class="green-button is-alternate">
                    <a target="_self" href="#"><?php echo $tag_line; ?></a>
                </div>
                <?php endif; ?>
                <?php if(!empty($hero_title)): ?>
                <h1><?php echo $hero_title; ?></h1>
                <?php endif; ?>
                
                <?php if(!empty($hero_content)): ?>
                <div><?php echo $hero_content; ?></div>
                <?php endif; ?>
                
                <?php if(!empty($small_arrow_text)): ?>
                <span class="arrow-text">
                    <?= $small_arrow_text ?>
                </span>
                <?php endif; ?>

                <div class="contact-banner-link text-left   remove-content">
                    <ul class="d-md-flex">
                        <?php
                            $hero_button_1 = get_field('hero_button_1');
                            if( $hero_button_1 ): ?>
                        <li>
                            <?php 
                            $button = $hero_button_1['button'];
                            $button_style=$hero_button_1['button_style'];
                            $button_with_arrow=$hero_button_1['button_with_arrow'];
                    
                            if( $button ): 
                                $link_url = $button['url'];
                                $link_title = $button['title'];
                                $link_target = $button['target'] ? $button['target'] : '_self';
                                            ?>
                            <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>"
                                target="<?php echo esc_attr( $link_target ); ?>">
                                <?php echo esc_html( $link_title ); ?>
                                <?php if($button_with_arrow=='1'): ?>
                               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 5V19" stroke="#40434E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 12L12 19L5 12" stroke="#40434E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>

                                <?php endif; ?>
                            </a>
                            <?php endif; ?>
                        </li>
                        <?php endif; ?>
                        <?php
                            $hero_button_2 = get_field('hero_button_2');
                            if( $hero_button_2 ): ?>
                        <li>
                            <?php 
                            $button = $hero_button_2['button'];
                            $button_style=$hero_button_2['button_style'];
                            $button_with_arrow=$hero_button_2['button_with_arrow'];
                            
                            if( $button ): 
                                $link_url = $button['url'];
                                $link_title = $button['title'];
                                $link_target = $button['target'] ? $button['target'] : '_self';
                                ?>
                            <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>"
                                target="<?php echo esc_attr( $link_target ); ?>">
                                <?php echo esc_html( $link_title ); ?>
                                <?php if($button_with_arrow=='1'): ?>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <?php endif; ?>
                            </a>
                            <?php endif; ?>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php 
                $banner_logos = get_field('banner_logos');
                if(!empty($banner_logos)){
                ?>
                <div class="banner-client-section">
                    <div class="banner-client-inner">
                        <?php if(!empty($banner_logos['banner_logo_title'])){ ?>
                            <div class="banner-client-content"> 
                                <h6 class="dark-subheading"><?= $banner_logos['banner_logo_title'] ?></h6>
                            </div>
                        <?php } ?>

                        <?php 
                        if(!empty($banner_logos['images'])){ 
                            $banner_images = $banner_logos['images']; ?>
                            <div class="banner-client-img">
                                
                                <?php foreach ( $banner_images as $images ) { 
                                     if($images['alt']){
                                        $images_alt=$images['alt']." - ".$rank_math_focus_keyword;
                                    }else{
                                        $images_alt=$images['title']." - ".$rank_math_focus_keyword;
                                    }
                                    ?>
                                <div class="img-box">
                                    <img src="<?= $images['url'] ?>"  alt="<?= $images_alt; ?>" />
                                </div>  
                                <?php } ?>

                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 md-full right-content norightpadding text-center two-content-box  <?php echo $image_section_type; ?>">
                <div class="banner-right-col hide-sm-device">
                    <?php if(!empty($hero_right_bg_image)){
                         if($hero_right_bg_image['alt']){
                            $images_alt=$hero_right_bg_image['alt']." - ".$rank_math_focus_keyword;
                        }else{
                            $images_alt=$hero_right_bg_image['title']." - ".$rank_math_focus_keyword;
                        }
                        ?>
                    <figure class="hide-sm-device">
                        <img class="w-100" src="<?php echo $hero_right_bg_image['url']; ?>" alt="<?= $images_alt; ?>">
                       
                    </figure>
                    <?php } ?>
                    <?php if($image_section_type == 'type1'): ?>
                        <?php 
                        if( !empty( $count_box_1['count_number'] ) || $count_box_1['count_text'] ){ ?>
                        <div class="img-content-box-1 image-content">
                            <?php if(!empty($count_box_1['count_number'])){ ?>
                                <h4><?= $count_box_1['count_number'] ?></h4>
                            <?php } ?>

                            <?php if(!empty($count_box_1['count_text'])){ ?>
                                <h6><?= $count_box_1['count_text'] ?></h6>
                            <?php } ?>
                        </div>
                        <?php } ?>

                        <?php if( !empty( $count_box_2['count_number'] ) || $count_box_2['count_text'] ){ ?>
                        <div class="img-content-box-2 image-content">
                            <?php if(!empty($count_box_2['count_number'])){ ?>
                                <h4><?= $count_box_2['count_number'] ?></h4>
                            <?php } ?>

                            <?php if(!empty($count_box_2['count_text'])){ ?>
                                <h6><?= $count_box_2['count_text'] ?></h6>
                            <?php } ?>
                        </div>
                        <?php } ?>

                        <?php if( !empty( $count_box_small_image) ){ ?>
                            <div class="img-content-box-3 small-img-box">
                                <img src="<?php echo $count_box_small_image['url']; ?>" alt="<?php echo $count_box_small_image['alt']; ?>">
                            </div>
                        <?php } ?>
                    <?php endif; ?>

                </div>
                <?php if($quote_author_image || $quote_text):
                     if($quote_author_image['alt']){
                        $images_alt=$quote_author_image['alt']." - ".$rank_math_focus_keyword;
                    }else{
                        $images_alt=$quote_author_image['title']." - ".$rank_math_focus_keyword;
                    } ?>
                <div class="user-text d-flex align-items-center justify-content-center">
                    <div class="user-img">
                        <img src="<?php echo $quote_author_image; ?>" alt="<?= $images_alt; ?>">
                    </div>
                    <div class="user-content">
                        <?php if($quote_text): ?>
                        <p>"<?php echo $quote_text; ?>"</p>
                        <?php endif; ?>
                        <strong><?php echo $quote_author_name; ?></strong>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
$arrow_title            = get_field('left_title_right_content_heading');
$arrow_content          = get_field('left_title_right_content_content');
?>
<?php if(!empty($arrow_title) || !empty($arrow_content)): ?>
<section id="logo_section_2" class="w-100 section_2  section-logo_section container-1600">
    <div class="section-space">
        <div class="container our-customers2">
            <div class="employee-unique">
                <div class="emp-thought">
                    <?php if(!empty($arrow_title)): ?>
                    <div class="emp-title">
                        <h2 class="font-h4"><?=$arrow_title;?></h2>
                    </div>
                    <?php endif; ?>

                    <?php if(!empty($arrow_content)): ?>
                    <div class="emp-desc">
                        <p><?= $arrow_content;?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>
</section>
<?php endif; ?>


<?php
$image_video_heading = get_field('cutomized_image_video_heading');
$image_video_content = get_field('cutomized_image_video_content');
if( have_rows('customized_image__video_section') ):
    $i = 1;
    while( have_rows('customized_image__video_section') ) : the_row();
    ?>
    <section id="customized_image_video_3_<?= $i ?>" class="customized_image_video_3_<?= $i ?> w-100 section_4  section-customized_image__video_section">
        <?php
            $select_layout          = get_sub_field('select_layout');
            $title                  = get_sub_field('title');
            $subtitle               = get_sub_field('subtitle');
            $content                = get_sub_field('content');
            $button                 = get_sub_field('button');
            $button_2               = get_sub_field('button_2');
            $image                  = get_sub_field('image');
            $image_description      = get_sub_field('image_description');
            $video                  = get_sub_field('video');
            $video_poster           = get_sub_field('video_poster');
        ?> 
        <div class="section-space">
            <div class="customize-service arrow-with-text">
                <div class="service-main">
                    <div class="container">
                        <div class="customize-service-inn">
                            <?php if($image_video_heading || $image_video_content ){ ?> 
                            
                                <div class="titel col">
                                    <?php if($image_video_heading){ ?><h2><?= $image_video_heading ?></h2><?php } ?>
                                    <?php if($image_video_content){ ?><p> <?= $image_video_content ?></p><?php } ?>
                                </div>

                            
                            <?php } ?>

                            <div class="row align-items-center">
                                <?php if($select_layout=="left_img_right_content"):?>
                                    <div class="col-sm-12 col-lg-5">
                                        <?php if(!empty($image)): ?>
                                            <div class="service-top-right customized-carousel">
                                                <?php foreach ($image as $key => $img):
                                                    if($img['alt']){
                                                        $image_alt=$img['alt']." - ".$rank_math_focus_keyword;
                                                    }else{
                                                    
                                                        $image_alt=$img['title']." - ".$rank_math_focus_keyword;
                                                    } 
                                                ?>
                                                <div class="customize-item">
                                                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $image_alt; ?>" />
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <div class="col-sm-12 col-lg-6 offset-lg-1">
                                        
                                    
                                    <div class="service-top-left">
                                        
                                        <?php if(!empty($subtitle)): ?>
                                            <div class="green-button">
                                                <a href="#"><?php echo $subtitle; ?></a>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <div class="service-description position-relative">
                                            
                                            <?php if(!empty($title)): ?>
                                                <h3><?php echo $title; ?></h3>
                                            <?php endif; ?>

                                            <?php if(!empty($content)): ?>
                                                <p class="normal-paragraph-desktop"><?php echo $content; ?></p>
                                            <?php endif; ?>

                                            <?php if( $button ): ?>
                                                <?php 
                                                    $btn= $button['button'];
                                                    $button_style=$button['button_style'];
                                                
                                                    $button_with_arrow=$button['button_with_arrow'];
                                                    if( $btn ): 
                                                        $link_url = $btn['url'];
                                                        $link_title = $btn['title'];
                                                        $link_target = $btn['target'] ? $btn['target'] : '_self';
                                                        ?>
                                                            <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
                                                            <?php echo esc_html( $link_title ); ?>
                                                            <?php if($button_with_arrow=='1'): ?>
                                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            <?php endif; ?>
                                                        </a>
                                                    <?php endif; ?>
                                            <?php endif; ?>

                                            <?php if( $button_2 ): ?>
                                                <?php 
                                                    $btn = $button_2['button'];
                                                    $button_style = $button_2['button_style'];
                                                
                                                    $button_with_arrow = $button_2['button_with_arrow'];
                                                    if( $btn ): 
                                                        $link_url = $btn['url'];
                                                        $link_title = $btn['title'];
                                                        $link_target = $btn['target'] ? $btn['target'] : '_self';
                                                        ?>
                                                            <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
                                                            <?php echo esc_html( $link_title ); ?>
                                                            <?php if($button_with_arrow=='1'): ?>
                                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            <?php endif; ?>
                                                        </a>
                                                    <?php endif; ?>
                                            <?php endif; ?>


                                            <?php if(!empty($image_description) ): ?>
                                                <div class="div-for-arrow assortiment-desc-arrow">
                                                    <p><?php echo $image_description; ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php if($select_layout=="right_img_left_content"):?>
                                    <div class="col-sm-12 col-lg-5">
                                        
                                        <?php if(!empty($image)): ?>
                                            <div class="service-top-right customized-carousel">
                                                <?php foreach ($image as $key => $img):
                                                    if($img['alt']){
                                                        $image_alt=$img['alt']." - ".$rank_math_focus_keyword;
                                                    }else{
                                                    
                                                        $image_alt=$img['title']." - ".$rank_math_focus_keyword;
                                                    } 
                                                ?>
                                                <div class="customize-item">
                                                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $image_alt; ?>" />
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>                        
            </div>
        </div>    
    </section>
    <?php
    $i++;
    endwhile;
endif;
?>


<?php
$content_with_slider_section_title    = get_field('content_with_slider_section_title');
$content_with_slider_left_title       = get_field('content_with_slider_left_title');
$content_with_slider_left_content     = get_field('content_with_slider_left_content');
$content_with_slider_slides           = get_field('content_with_slider_slides');
$slider_sub_title                     = get_field('slider_sub_title');
$content_with_slider_arrow_text       = get_field('content_with_slider_arrow_text');
$content_with_text_section_type       = get_field('content_with_text_section_type');

?> 

<?php if($content_with_text_section_type == 'top'): ?>

<section id="content_with_slider_4" class="w-100 section_2  section-content_with_slider prios__cstm__section">
    <div class="section-space slider-top-space">
        <div class="container content-slides">
            <div class="row align-items-center position-relative">
                <?php if(!empty($content_with_slider_arrow_text)): ?>
                    <div class="desc__w__arw__float">
                        <p><?php echo $content_with_slider_arrow_text ?></p>
                    </div>
                <?php endif; ?>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="content-slides-left">
                    
                    <?php if($slider_sub_title){ ?>
                        <div class="green-button">
                            <a href="javascript:void(0)"><?php echo $slider_sub_title; ?></a>
                        </div>
                    <?php } ?>
                    
                    <?php if(!empty($content_with_slider_left_title)): ?>
                        <h3><?=$content_with_slider_left_title;?></h3>
                    <?php endif; ?>

                    <?php if(!empty($content_with_slider_left_content)): ?>
                        <p><?=$content_with_slider_left_content;?></p>
                    <?php endif; ?>
                    </div>
                </div>
                
            </div>
            <div class="content-slides-right">
                <div class="content-slider row">
                        <?php foreach ($content_with_slider_slides as $key => $slide): ?>
                        <?php if( $slide['image'] || $slide['title'] ){ ?>
                            <div class="col-sm-6 col-lg-3">
                                <div class="slide-item <?php if($slide['select_product']){ echo "product_details_btn"; } ?>   no_price" data-product_id="<?php echo $slide['select_product']; ?>">
                                    <div class="slider-img">
                                        <?php if(!empty($slide['image'])): 
                                             if($slide['image']['alt']){
                                                $image_alt=$slide['image']['alt']." - ".$rank_math_focus_keyword;
                                            }else{
                                            
                                                $image_alt=$slide['image']['title']." - ".$rank_math_focus_keyword;
                                            } 
                                            ?>
                                            <img src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $image_alt; ?>" />
                                        <?php endif; ?>
                                    </div>

                                    <div class="slider-head primary-ming">
                                        <p>
                                        <?php if($slide['title']){ echo $slide['title']; } ?>
                                        
                                        <?php if($slide['select_product']): ?>
                                            <span class="product_details_btn no_price" data-product_id="<?php echo $slide['select_product']; ?>"><img class="" alt="info"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/i.svg"/></span><span id="product_popop_loader_<?php echo $slide['select_product']; ?>" class="product_popop_loader" style="display: none;"></span><?php endif; ?>
                                        </p>
                                        <?php if(!empty($slide['p_description'])): ?>
                                            <span class="desc"><?php echo $slide['p_description']; ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php  elseif ($content_with_text_section_type == 'left'):?>

<section id="content_with_slider_4" class="w-100 section_2  section-content_with_slider prios__cstm__section">
    <div class="section-space slider-top-space">
        <div class="container content-slides">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="content-slides-left mb-0 position-relative">
                        <?php if(!empty($content_with_slider_arrow_text)): ?>
                            <div class="desc__w__arw__float desc__arw__top__rev ">
                                <p><?php echo $content_with_slider_arrow_text ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if($slider_sub_title){ ?>
                            <div class="green-button">
                                <a href="javascript:void(0)"><?php echo $slider_sub_title; ?></a>
                            </div>
                        <?php } ?>
                        <?php if(!empty($content_with_slider_left_title)): ?>
                            <h3><?=$content_with_slider_left_title;?></h3>
                        <?php endif; ?>

                        <?php if(!empty($content_with_slider_left_content)): ?>
                            <p><?=$content_with_slider_left_content;?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="content-slides-right content-slides-right-two-col">
                        <div class="content-slider row">
                            
                                <?php foreach ($content_with_slider_slides as $key => $slide): ?>
                                    <?php if( $slide['image'] || $slide['title'] ){ ?>
                                    <div class="col-sm-6">
                                        <div class="slide-item <?php if($slide['select_product']){ echo "product_details_btn"; } ?>   no_price" data-product_id="<?php echo $slide['select_product']; ?>">
                                            <div class="slider-img">
                                                <?php if(!empty($slide['image'])): 
                                                     if($slide['image']['alt']){
                                                        $image_alt=$slide['image']['alt']." - ".$rank_math_focus_keyword;
                                                    }else{
                                                    
                                                        $image_alt=$slide['image']['title']." - ".$rank_math_focus_keyword;
                                                    } 
                                                    ?>
                                                    <img src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $image_alt; ?>" />
                                                <?php endif; ?>
                                            </div>

                                            <div class="slider-head primary-ming">
                                                <p>
                                                <?php if($slide['title']){ echo $slide['title']; } ?>
                                                
                                                <?php if($slide['select_product']): ?>
                                                    <span class="product_details_btn no_price" data-product_id="<?php echo $slide['select_product']; ?>"><img class="" alt="info"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/i.svg"/></span><span id="product_popop_loader_<?php echo $slide['select_product']; ?>" class="product_popop_loader" style="display: none;"></span><?php endif; ?>
                                                </p>
                                                <?php if(!empty($slide['p_description'])): ?>
                                                    <span class="desc"><?php echo $slide['p_description']; ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if($key > 0) break; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php endif; ?>



<?php
$customized_solution_heading_2                  = get_field('customized_solution_heading_2');
$customized_solution_select_image_or_video          = get_field('customized_solution_select_image_or_video');
$customized_solution_image          = get_field('customized_solution_image');
$customized_solution_video          = get_field('customized_solution_video');
$customized_solution_video_poster          = get_field('customized_solution_video_poster');
$customized_solution_profile_image  = get_field('customized_solution_profile_image');
$customized_solution_profile_info_2             = get_field('customized_solution_profile_info_2');
$customized_solution_profile_name_2             = get_field('customized_solution_profile_name_2');
$customized_solution_title_section          = get_field('customized_solution_title_section');
$customized_solution_content_section        = get_field('customized_solution_content_section');
$customized_solution_button_section         = get_field('customized_solution_button_section');
$customized_solution_content_stylist_description         = get_field('customized_solution_content_stylist_description');
$customized_solution_2_sub_title         = get_field('customized_solution_2_sub_title');
?>
<section id="customized_solution_5" class="w-100 section_4  section-customized_solution">
    <div class="container text-center ">
        <div class="rotate-space">
            <?php if(!empty($customized_solution_content_stylist_description)): ?>
                <div class="right-down-right-arrow">
                    <p><?php echo $customized_solution_content_stylist_description; ?></p>
                </div>
            <?php endif; ?>
        </div>
        </div>
    <div class="section-space">
        <div class="container custom-solution">
            <div class="solution-section">
                    <div class="mobile_solution_tooltip">
                        <?php 
                        if(!empty($customized_solution_profile_image)): 
                            if($customized_solution_profile_image['alt']){
                                $image_alt=$customized_solution_profile_image['alt']." - ".$rank_math_focus_keyword;
                            }else{
                            
                                $image_alt=$customized_solution_profile_image['title']." - ".$rank_math_focus_keyword;
                            } 
                        ?>
                        <div class="expert-tooltip">
                            
                                <img src="<?php echo $customized_solution_profile_image['url']; ?>" alt="<?php echo $image_alt; ?>" />
                            
                                <div class="custom-tooltip">
                                    <?php if(!empty($customized_solution_profile_info_2)): ?>
                                    <p class="normal-paragraph-desktop">“<?= $customized_solution_profile_info_2; ?>”</p>
                                    <?php endif; ?>

                                    <?php if(!empty($customized_solution_profile_name_2)): ?>
                                        <p class="dark-paragraph-desktop"><?= $customized_solution_profile_name_2; ?></p>    
                                    <?php endif; ?>
                                </div>
                        </div>
                        <?php endif; ?>
                    </div>

                <?php if(!empty($customized_solution_heading_2)): ?>
                <div class="solution-title">
                    <h2><?php echo $customized_solution_heading_2; ?></h2>
                </div>
                <?php endif; ?>
                <div class="solution-main">
                    <div class="row">
                    <div class="col-sm-12 col-lg-6 col-xl-6">
                            <div class="solution-right">
                                <?php 
                                if(!empty($customized_solution_profile_image)): 
                                    if($customized_solution_profile_image['alt']){
                                        $image_alt=$customized_solution_profile_image['alt']." - ".$rank_math_focus_keyword;
                                    }else{
                                    
                                        $image_alt=$customized_solution_profile_image['title']." - ".$rank_math_focus_keyword;
                                    } 
                                ?>
                                <div class="expert-tooltip">
                                    
                                        <img src="<?php echo $customized_solution_profile_image['url']; ?>" alt="<?php echo $image_alt; ?>" />
                                    
                                        <div class="custom-tooltip">
                                            <?php if(!empty($customized_solution_profile_info_2)): ?>
                                            <p class="normal-paragraph-desktop">“<?= $customized_solution_profile_info_2; ?>”</p>
                                            <?php endif; ?>

                                            <?php if(!empty($customized_solution_profile_name_2)): ?>
                                                <p class="dark-paragraph-desktop"><?= $customized_solution_profile_name_2; ?></p>    
                                            <?php endif; ?>
                                        </div>
                                </div>
                                <?php endif; ?>
                                <div class="expert-description description-space">
                                        <?php if($customized_solution_2_sub_title){ ?>
                                        <div class="green-button">
                                           <a href="#"><?= $customized_solution_2_sub_title ?></a>
                                        </div>
                                        <?php } ?>
                                        
                                        <?php if(!empty($customized_solution_title_section)): ?>
                                            <h3><?= $customized_solution_title_section; ?></h3>
                                        <?php endif; ?>

                                    <?php if(!empty($customized_solution_content_section)): ?>
                                    <p class="normal-paragraph-desktop"><?= $customized_solution_content_section; ?></p>
                                    <?php endif; ?>
                                    <?php
                                        $customized_solution_button_section = get_field('customized_solution_button_section');
                                        if( $customized_solution_button_section ): ?>
                                                <?php 
                                                    $button = $customized_solution_button_section['button'];
                                                    $button_style=$customized_solution_button_section['button_style'];
                                                
                                                    $button_with_arrow=$customized_solution_button_section['button_with_arrow'];
                                                    if( $button ): 
                                                        $link_url = $button['url'];
                                                        $link_title = $button['title'];
                                                        $link_target = $button['target'] ? $button['target'] : '_self';
                                                        ?>
                                                            <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
                                                            <?php echo esc_html( $link_title ); ?>
                                                            <?php if($button_with_arrow=='1'): ?>
                                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            <?php endif; ?>
                                                        </a>
                                                    <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-xl-6">
                            <?php if($customized_solution_select_image_or_video=="video"){ ?>
                                    <?php if(!empty($customized_solution_video)): ?>
                                        <video width="100%" height="100%" controls poster="<?php echo $customized_solution_video_poster; ?>">
                                            <source src="<?php echo $customized_solution_video; ?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    <?php endif; ?>
                                <?php }else{?>
                                    <?php if(!empty($customized_solution_image)): 
                                         if($customized_solution_image['alt']){
                                            $image_alt=$customized_solution_image['alt']." - ".$rank_math_focus_keyword;
                                        }else{
                                        
                                            $image_alt=$customized_solution_image['title']." - ".$rank_math_focus_keyword;
                                        } 
                                        ?>
                                    
                                        <div class="solution-left">
                                            <img src="<?php echo $customized_solution_image['url']; ?>" alt="<?php echo $image_alt; ?>" />
                                        </div>
                                    <?php endif; ?>
                                <?php } ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>


<?php

$enable_section     = get_field('enable_section');
$cy_heading         = get_field('cy_heading');
$cy_description     = get_field('cy_description');
$cy_button          = get_field('cy_button');
$cy_banner          = get_field('cy_banner');

if($cy_banner){
    $col='6';
}else{
    $col='12';
}
if($enable_section): 
?>
<!--  Apply css with taking section_choose_yourself this class as parent -->
<section id="cta_with_image_4" class="w-100 section_10  section-cta_with_image section_choose_yourself section_choose_yourself__prios">
    <div class="section-space">
        <div class="container link-cases content_align_left">
            <div class="row cases-box">
                <div class="col-md-<?= $col; ?>">
                    <div class="case-description">
                        <?php if(!empty($cy_heading)): ?>
                            <h2><?php echo $cy_heading; ?></h2>
                        <?php endif; ?>
                        <?php if(!empty($cy_description)): ?>
                            <div class="normal-paragraph-desktop"><?=$cy_description;?></div>
                        <?php endif; ?>
                        <?php
                            if( $cy_button ): ?>
                                    <?php 
                                        $button =   $cy_button['button'];
                                        $button_style = $cy_button['button_style'];
                                    
                                        $button_with_arrow = $cy_button['button_with_arrow'];
                                        if( $button ): 
                                            $link_url = $button['url'];
                                            $link_title = $button['title'];
                                            $link_target = $button['target'] ? $button['target'] : '_self';
                                            ?>
                                                <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
                                                <?php echo esc_html( $link_title ); ?>
                                                <?php if($button_with_arrow=='1'): ?>
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                <?php endif; ?>
                                            </a>
                                        <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if($cy_banner):
                     if($cy_banner['alt']){
                        $image_alt=$cy_banner['alt']." - ".$rank_math_focus_keyword;
                    }else{
                    
                        $image_alt=$cy_banner['title']." - ".$rank_math_focus_keyword;
                    } 
                    ?>
                    <div class="col-md-6">
                        <div class="cta-thumb">
                            <img class="w-100" src="<?= $cy_banner['url']; ?>" alt="<?php echo $image_alt; ?>"/>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>    
</section>
<?php endif; ?>


<?php
$cta_section = get_field('cta_section');

$cta_content_alignment = $cta_section['cta_content_alignment'];
$cta_heading          = $cta_section['cta_heading'];
$cta_content          = $cta_section['cta_content'];
$cta_button             = $cta_section['cta_button'];
$cat_is_background    = $cta_section['cat_is_background'];
$cta_background_color = $cta_section['cta_background_color'];
$cta_button =  $cta_section['cta_button'];
$cta_enable_section =  $cta_section['cta_enable_section'];



$cta_text_after_button            = $cta_section['cta_text_after_button'];
$cta_image= $cta_section['cta_image'];

if($cta_image){
    $col='8';
}else{
    $col='12';
}
if($cta_enable_section): 
?>
<section id="cta_with_image_4" class="w-100 section_10  section-cta_with_image">
    <div class="section-space">
        <div class="container link-cases content_align_<?= $cta_content_alignment; ?>">
            <div class="row cases-box" <?php if($cat_is_background=='1'):?>style="background:<?= $cta_background_color; ?>"<?php endif; ?>>
                <div class="col-md-<?= $col; ?>">
                    <div class="case-description">
                        <?php if(!empty($cta_heading)): ?>
                            <h2><?php echo $cta_heading; ?></h2>
                        <?php endif; ?>
                        <?php if(!empty($cta_content)): ?>
                            <p class="normal-paragraph-desktop"><?=$cta_content;?></p>
                        <?php endif; ?>
                        <?php
                            if( $cta_button ): ?>
                                    <?php 
                                        $button = $cta_button['button'];
                                        $button_style=$cta_button['button_style'];
                                    
                                        $button_with_arrow=$cta_button['button_with_arrow'];
                                        if( $button ): 
                                            $link_url = $button['url'];
                                            $link_title = $button['title'];
                                            $link_target = $button['target'] ? $button['target'] : '_self';
                                            ?>
                                                <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
                                                <?php echo esc_html( $link_title ); ?>
                                                <?php if($button_with_arrow=='1'): ?>
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                <?php endif; ?>
                                            </a>
                                        <?php endif; ?>
                        <?php endif; ?>
                        <?php if(!empty($cta_text_after_button)): ?>
                            <p class="font-italic normal-paragraph-desktop"><?=$cta_text_after_button;?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if($cta_image):
                     if($cta_image['alt']){
                        $image_alt=$cta_image['alt']." - ".$rank_math_focus_keyword;
                    }else{
                    
                        $image_alt=$cta_image['title']." - ".$rank_math_focus_keyword;
                    } 
                    ?>
                    <div class="col-md-4">
                        <img class="w-100" src="<?= $cta_image['url']; ?>" alt="<?php echo $image_alt; ?>"/>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>    
</section>
<?php endif; ?>

<?php
  $logo_title       = get_field('logo_title');
  $logos            = get_field('logos');
  $is_logo_section_background    = get_field('is_logo_section_background');
  $logo_section_background_color = get_field('logo_section_background_color');
?> 
<section id="logo_section_6" class="w-100 section_2  section-logo_section">
    <div class="section-space" >
        <div class="container our-customers2" >
            <div class="believe-us" <?php if($is_logo_section_background=='1'):?>style="background:<?= $logo_section_background_color; ?>"<?php endif; ?>>
                <div class="logo-head">
                    <?php if(!empty($logo_title)): ?>
                        <h5><?php echo $logo_title; ?></h5>
                    <?php endif; ?>    
                </div>    
                <div class="logo-list">
                    <ul>
                        <!-- <?php if(!empty($logo_title)): ?>
                            <li><h5><?php echo $logo_title; ?></h5></li>
                        <?php endif; ?> -->
                        <?php if(!empty($logos)): 
                            foreach ($logos as $key => $logo):
                                if(!empty($logo['logo'])){
                                    if($logo['logo']['alt']){
                                        $image_alt=$logo['logo']['alt']." - ".$rank_math_focus_keyword;
                                    }else{
                                    
                                        $image_alt=$logo['logo']['title']." - ".$rank_math_focus_keyword;
                                    } 
                            ?>
                            <li><img src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $image_alt; ?>"/></li>
                        <?php 
                                }
                            endforeach;
                            endif; ?>
                    </ul>
                </div>    
            </div>
        </div>
    </div>
</section>

 
<?php
//Customized solution_1
$customized_solution_2                  = get_field('customized_solution_2');

$customized_solution_heading                  = $customized_solution_2['customized_solution_heading'];
$image_section_1          = $customized_solution_2['image_section_1'];
$profile_image_section_1  = $customized_solution_2['profile_image_section_1'];
$customized_solution_profile_info             = $customized_solution_2['customized_solution_profile_info'];
$customized_solution_profile_name             = $customized_solution_2['customized_solution_profile_name'];
$title_section_1          = $customized_solution_2['title_section_1'];
$content_section_1        = $customized_solution_2['content_section_1'];
$button_section_1         = $customized_solution_2['button_section_1'];
$customized_solution_1_subtitle         = $customized_solution_2['customized_solution_1_subtitle'];

$select_image_or_video_1  = $customized_solution_2['customized_1_select_image_or_video'];
$video_poster_1  = $customized_solution_2['video_poster_1'];
$customized_solution_1_video  = $customized_solution_2['customized_solution_1_video'];
$button_section_1 = $customized_solution_2['button_section_1'];
?>
<section id="customized_solution_2" class="w-100 section_4  section-customized_solution">
    <div class="section-space">
        <div class="container custom-solution">
            <div class="solution-section">

                    <div class="mobile_solution_tooltip">
                        <div class="expert-tooltip show-tooltip">
                            <?php if(!empty($profile_image_section_1)): 
                                 if($profile_image_section_1['alt']){
                                    $image_alt=$profile_image_section_1['alt']." - ".$rank_math_focus_keyword;
                                }else{
                                
                                    $image_alt=$profile_image_section_1['title']." - ".$rank_math_focus_keyword;
                                } 
                                ?>
                            <img src="<?php echo $profile_image_section_1['url']; ?>" alt="<?php echo $image_alt; ?>" />
                            <div class="custom-tooltip">
                                <?php if(!empty($customized_solution_profile_info)): ?>
                                <p class="normal-paragraph-desktop">“<?= $customized_solution_profile_info; ?>”
                                </p>
                                <?php endif; ?>
                                <?php if(!empty($customized_solution_profile_name)): ?>
                                <p class="dark-paragraph-desktop"><?= $customized_solution_profile_name; ?></p>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                <?php if(!empty($customized_solution_heading)): ?>
                <div class="solution-title">
                    <h2><?php echo $customized_solution_heading; ?></h2>
                </div>
                <?php endif; ?>
                <div class="solution-main">
                    <div class="row">
                      
                        <div class="col-sm-12 col-lg-6 col-xl-6">
                            <div class="solution-right">
                                <div class="expert-tooltip show-tooltip">
                                    <?php if(!empty($profile_image_section_1)):
                                         if($profile_image_section_1['alt']){
                                            $image_alt=$profile_image_section_1['alt']." - ".$rank_math_focus_keyword;
                                        }else{
                                        
                                            $image_alt=$profile_image_section_1['title']." - ".$rank_math_focus_keyword;
                                        } 
                                        ?>
                                    <img src="<?php echo $profile_image_section_1['url']; ?>"  alt="<?php echo $image_alt; ?>" />
                                    <div class="custom-tooltip">
                                        <?php if(!empty($customized_solution_profile_info)): ?>
                                        <p class="normal-paragraph-desktop">“<?= $customized_solution_profile_info; ?>”
                                        </p>
                                        <?php endif; ?>
                                        <?php if(!empty($customized_solution_profile_name)): ?>
                                        <p class="dark-paragraph-desktop"><?= $customized_solution_profile_name; ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                
                                <?php if(!empty($customized_solution_1_subtitle)){ ?>
                                <div class="green-button">
                                    <a href="#"><?= $customized_solution_1_subtitle ?></a>
                                </div>
                                <?php } ?>

                                <div class="expert-description description-space">
                                    <?php if(!empty($title_section_1)): ?>
                                    <h3><?= $title_section_1; ?></h3>
                                    <?php endif; ?>
                                    <?php if(!empty($content_section_1)): ?>
                                    <p class="normal-paragraph-desktop"><?= $content_section_1; ?></p>
                                    <?php endif; ?>
                                    <?php
                                        
                                    if( $button_section_1 ): ?>
                                    <?php 
                                    $button = $button_section_1['button'];
                                    $button_style=$button_section_1['button_style'];
                             
                                    $button_with_arrow=$button_section_1['button_with_arrow'];
                                    if( $button ): 
                                        $link_url = $button['url'];
                                        $link_title = $button['title'];
                                        $link_target = $button['target'] ? $button['target'] : '_self';
                                        ?>
                                    <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>"
                                        target="<?php echo esc_attr( $link_target ); ?>">
                                        <?php echo esc_html( $link_title ); ?>
                                        <?php if($button_with_arrow=='1'): ?>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 9H14.25" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <?php endif; ?>
                                    </a>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>  
                        <div class="col-sm-12 col-lg-6 col-xl-6">
                            <?php if($image_section_1 || $customized_solution_1_video): ?>
                                <div class="solution-left">
                                    <?php if($select_image_or_video_1 == "video"){ ?>
                                        <?php if(!empty($customized_solution_1_video)): ?>
                                            <video width="100%" height="100%" controls
                                                poster="<?php echo $video_poster_1; ?>">
                                                <source src="<?php echo $customized_solution_1_video; ?>" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        <?php endif; ?> 
                                    <?php } else { ?>
                                        <?php if(!empty($image_section_1)): 
                                            if($image_section_1['alt']){
                                                $image_alt=$image_section_1['alt']." - ".$rank_math_focus_keyword;
                                            }else{
                                            
                                                $image_alt=$image_section_1['title']." - ".$rank_math_focus_keyword;
                                            } 
                                            ?>
                                            <img src="<?php echo $image_section_1['url']; ?>" alt="<?php echo $image_alt; ?>" />
                                        <?php endif; ?>
                                    <?php } ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Customized solution 2
    $customized_solution_3                  = get_field('customized_solution_3');
    $title_section_2                = $customized_solution_3['title_section_2'];
    $customized_solution_2_subtitle = $customized_solution_3['customized_solution_2_subtitle'];
    $content_section_2              = $customized_solution_3['content_section_2'];
    $button_section_2               = $customized_solution_3['button_section_2'];

    $customized_solution_2_image_1  = $customized_solution_3['customized_solution_2_image_1'];
    $customized_solution_2_image_1_description  = $customized_solution_3['customized_solution_2_image_1_description'];
    $customized_solution_2_image_2              = $customized_solution_3['customized_solution_2_image_2'];
    
    $customized_2_select_image_or_video  = $customized_solution_3['customized_2_select_image_or_video'];
    $customized_solution_3_video_2                  = $customized_solution_3['customized_solution_3_video_2'];
    $customized_solution_3_video_poster           = $customized_solution_3['customized_solution_3_video_poster'];
    $customized_solution_2_image_2_description  = $customized_solution_3['customized_solution_2_image_2_description'];
    $button_section_2 = $customized_solution_3['button_section_2'];

?>
<section id="customized_solution_3" class="w-100 section_5  custom-solution-1-keuzes section-customized_solution_2">
    <div class="section-space">
        <div class="our-service">
            <div class="service-main">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">

                            <div class="service-top-left">
                                
                                <?php if(!empty($customized_solution_2_subtitle)): ?>
                                    <div class="service-description"><div class="green-button">
                                        <a href="javascript:void(0)"><?php echo $customized_solution_2_subtitle; ?></a>
                                      </div>  
                                <?php endif; ?>

                                    <?php if(!empty($title_section_2)): ?>
                                    <h3><?php echo $title_section_2; ?></h3>
                                    <?php endif; ?>
                                    
                                    
                                    <?php if(!empty($content_section_2)): ?>
                                    <p class="normal-paragraph-desktop remove-pd"><?php echo $content_section_2; ?></p>
                                    <?php endif; ?>
                                    <?php
                                        
                                    if( $button_section_2 ): ?>
                                    <?php 
                                    $button = $button_section_2['button'];
                                    $button_style=$button_section_2['button_style'];
                                
                                    $button_with_arrow=$button_section_2['button_with_arrow'];
                                    if( $button ): 
                                        $link_url = $button['url'];
                                        $link_title = $button['title'];
                                        $link_target = $button['target'] ? $button['target'] : '_self';
                                        ?>
                                    <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>"
                                        target="<?php echo esc_attr( $link_target ); ?>">
                                        <?php echo esc_html( $link_title ); ?>
                                        <?php if($button_with_arrow=='1'): ?>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 9H14.25" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <?php endif; ?>
                                    </a>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            
                            <?php 
                            if( !empty($customized_solution_2_image_2) || !empty($customized_solution_3_video_2) ): 
                            if(!empty($customized_solution_2_image_1_description)){
                            ?>
                            <div class="service-bottom-right-mobile">
                                <div class="description-top">
                                    <p><?php echo $customized_solution_2_image_1_description; ?></p>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="service-top-right">
                                <?php 
                                if($customized_2_select_image_or_video=="video" && !empty( $customized_solution_3_video_2 ) ){ ?>
                                    <video width="100%" height="100%" controls
                                        poster="<?php echo $customized_solution_3_video_poster; ?>">
                                        <source src="<?php echo $customized_solution_3_video_2; ?>" type="video/mp4">
                                        <?= _e('Your browser does not support the video tag.', 'sterkado') ?>
                                    </video>
                                <?php }else{ 
                                     if($customized_solution_2_image_2['alt']){
                                        $image_alt=$customized_solution_2_image_2['alt']." - ".$rank_math_focus_keyword;
                                    }else{
                                    
                                        $image_alt=$customized_solution_2_image_2['title']." - ".$rank_math_focus_keyword;
                                    } 
                                    ?>
                                    <img src="<?php echo $customized_solution_2_image_2['url']; ?>"   alt="<?php echo $image_alt; ?>" />
                                <?php } ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</section>
<?php
//Customized solution 3
$customized_solution_4                  = get_field('customized_solution_4');

$title_section_3                = $customized_solution_4['title_section_3'];
$content_section_3              = $customized_solution_4['content_section_3'];
$button_section_3               = $customized_solution_4['button_section_3'];
$image_section_3                = $customized_solution_4['image_section_3'];
$review_logo_section_3          = $customized_solution_4['review_logo_section_3'];
$review_description_section_3   = $customized_solution_4['review_description_section_3'];
$customized_solution_3_subtitle   = $customized_solution_4['customized_solution_3_subtitle'];

$select_image_or_video_3  = $customized_solution_4['customized_3_select_image_or_video'];
$video_poster_3  = $customized_solution_4['video_poster_3'];
$customized_3_video  = $customized_solution_4['customized_3_video'];
$button_section_3 = $customized_solution_4['button_section_3'];
?>
<section id="customized_solution_4" class="w-100 section_6  section-customized_solution_3">
    <div class="section-space">
        <div class="container feedbakc-company">
            <div class="feedback-section">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-xl-6">
                        <div class="feedback-left">
                            <div class="feed-box">
                                <?php if(!empty($review_logo_section_3)): 
                                    
                                    if($review_logo_section_3['alt']){
                                        $image_alt=$review_logo_section_3['alt']." - ".$rank_math_focus_keyword;
                                    }else{
                                    
                                        $image_alt=$review_logo_section_3['title']." - ".$rank_math_focus_keyword;
                                    } 
                                    ?>
                                <div class="feed-title">
                                    <img src="<?php echo $review_logo_section_3['url']; ?>" alt="<?php echo $image_alt; ?>" />
                                </div>
                                <?php endif; ?>

                                <?php echo do_shortcode('[feedbackcompany_bar]'); ?>
                            </div>
                            <?php if(!empty($customized_solution_3_subtitle)){ ?>
                            <div class="green-button">
                                <a href="#"><?= $customized_solution_3_subtitle ?></a>
                            </div>
                            <?php } ?>

                            <div class="feed-description">
                                <?php if(!empty($title_section_3)): ?>
                                <h3><?php echo $title_section_3; ?></h3>
                                <?php endif; ?>
                                <?php if(!empty($content_section_3)): ?>
                                <p class="normal-paragraph-desktop"><?php echo $content_section_3; ?></p>
                                <?php endif; ?>
                                <?php
                                    
                                    if( $button_section_3 ): 
                                    $button = $button_section_3['button'];
                                    $button_style=$button_section_3['button_style'];
                                
                                    $button_with_arrow=$button_section_3['button_with_arrow'];
                                    if( $button ): 
                                        $link_url = $button['url'];
                                        $link_title = $button['title'];
                                        $link_target = $button['target'] ? $button['target'] : '_self';
                                        ?>
                                    <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>"
                                    target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
                                    <?php if($button_with_arrow=='1'): ?>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <?php endif; ?>
                                </a>
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php if($image_section_3 || $customized_3_video): ?>
                    <div class="col-sm-12 col-lg-6 col-xl-6">
                        
                        <div class="feedback-right">
                            <?php if($select_image_or_video_3 == 'video' && !empty($customized_3_video) ){ ?>
                                <video width="100%" height="100%" controls
                                        poster="<?php echo $video_poster_3; ?>">
                                        <source src="<?php echo $customized_3_video; ?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                </video>
                            <?php } else { 
                                 if($image_section_3['alt']){
                                    $image_alt=$image_section_3['alt']." - ".$rank_math_focus_keyword;
                                }else{
                                
                                    $image_alt=$image_section_3['title']." - ".$rank_math_focus_keyword;
                                } 
                                ?>
                                <img src="<?php echo $image_section_3['url']; ?>" alt="<?php echo $image_alt; ?>" />
                            <?php } ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
$latest_news_title = get_field('latest_news_title');
$news_post = get_field('news_post');
?>
<section id="latest_news_10" class="w-100 section_12  section-latest_news">
    <div class="container">
        <?php if ($latest_news_title) : ?> <h2 class="latest_news__title"><?php echo $latest_news_title; ?></h2> <?php endif; ?> 
            <?php
                if(!empty($news_post)):
                            
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'post__in' => $news_post,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                else:

                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                endif;
            
                $loop = new WP_Query( $args ); 
                if ( $loop->have_posts() ) : ?>
                    <div class="row latest-news-wrapper">
                        <?php
                        while ( $loop->have_posts() ) : $loop->the_post();
                        get_template_part( 'template-parts/latest', 'post',array('page_id' => $page_id));
                        endwhile; ?>
                    </div> 
                    <?php
                    endif;
                wp_reset_postdata();
            ?>
    </div>
</section>

<?php
$employee_section_heading       = get_field('employee_section_heading');
$employee_section_content       = get_field('employee_section_content');
$employee_section_link          = get_field('employee_section_link');
$employee_section_subheading    = get_field('employee_section_subheading');
$employee_left_section          = get_field('employee_left_section');
$employee_right_section         = get_field('employee_right_section');
?> 
<section id="employee_section_11" class="w-100 section_7  section-employee_section">
    <div class="section-space">
        <div class="container link-cases">
            <div class="cases-box">
                <div class="case-description">
                    <?php if(!empty($employee_section_heading)): ?>
                        <h2><?php echo $employee_section_heading; ?></h2>
                    <?php endif; ?>
                    <?php if(!empty($employee_section_content)): ?>
                        <p class="normal-paragraph-desktop"><?=$employee_section_content;?></p>
                    <?php endif; ?>
                    <?php
                        $employee_section_link = get_field('employee_section_link');
                        if( $employee_section_link ): ?>
                                <?php 
                                    $button = $employee_section_link['button'];
                                    $button_style=$employee_section_link['button_style'];
                                
                                    $button_with_arrow=$employee_section_link['button_with_arrow'];
                                    if( $button ): 
                                        $link_url = $button['url'];
                                        $link_title = $button['title'];
                                        $link_target = $button['target'] ? $button['target'] : '_self';
                                        ?>
                                            <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
                                            <?php echo esc_html( $link_title ); ?>
                                            <?php if($button_with_arrow=='1'): ?>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            <?php endif; ?>
                                        </a>
                                    <?php endif; ?>
                    <?php endif; ?>
                    <?php if(!empty($employee_section_subheading)): ?>
                        <p class="font-italic normal-paragraph-desktop"><?=$employee_section_subheading;?></p>
                    <?php endif; ?>
                </div>
                <div class="case-users">
                    <?php $i=1;
                     foreach( $employee_left_section as $row ): ?>
                        <?php if(!empty($row['profile'])): 
                                 if($row['profile']['alt']){
                                    $image_alt=$row['profile']['alt']." - ".$rank_math_focus_keyword;
                                }else{
                                
                                    $image_alt=$row['profile']['title']." - ".$rank_math_focus_keyword;
                                } 
                            ?>
                            <div class="tooltip-new user-position<?= $i; ?>">
                                <img src="<?php echo $row['profile']['url']; ?>" alt="<?php echo $image_alt; ?>" />
                               
                            </div>
                        <?php endif; ?>
                     <?php $i++; endforeach; ?>
                     <?php $k=8;
                     foreach( $employee_right_section as $row ): ?>
                        <?php if(!empty($row['profile'])): 
                                if($row['profile']['alt']){
                                    $image_alt=$row['profile']['alt']." - ".$rank_math_focus_keyword;
                                }else{
                                
                                    $image_alt=$row['profile']['title']." - ".$rank_math_focus_keyword;
                                } 
                            ?>
                            <div class="tooltip-new user-position<?= $k; ?>">
                                <img src="<?php echo $row['profile']['url']; ?>" alt="<?php echo $image_alt; ?>"/>
                               
                            </div>
                        <?php endif; ?>
                     <?php $k++; endforeach; ?>
                </div>
            </div>
        </div>
    </div>    
</section>


<?php 
// Gift Concept
$gift_staff_heading      = get_field('gift_staff_heading');
$gift_staff_content      = get_field('gift_staff_content');
$gift_staff              = get_field('gifts');
?>
<section id="gift_staff_12" class="sec_pak_het">
    <div class="container">
        <div class="row">
            <div class="inner-row">
                <div class="col-sm-12 col-lg-6 col-xl-5 text-col">
                    <?php if(!empty($gift_staff_heading)){ ?>
                        <h3 class="title"><?= $gift_staff_heading ?></h3>
                    <?php } ?>

                    <?php if(!empty($gift_staff_content)){ ?>
                        <p><?= $gift_staff_content ?></p>
                    <?php } ?>
                </div>
                <?php if(!empty($gift_staff)){ ?>
                <div class="col-sm-12 col-lg-6 col-xl-7 cards-col">
                    <?php foreach ($gift_staff as $gift ) { ?>
                        <?php if($gift['image'] || $gift['title'] || $gift['text']): ?>
                            <div class="card">
                                <?php if(!empty($gift['image'])){ 
                                        if($gift['image']['alt']){
                                            $image_alt=$gift['image']['alt']." - ".$rank_math_focus_keyword;
                                        }else{
                                        
                                            $image_alt=$gift['image']['title']." - ".$rank_math_focus_keyword;
                                        } 
                                    ?>
                                    <img class="card-img-top" src="<?= $gift['image']['url'] ?>" alt="<?= $image_alt; ?>">
                                <?php } ?>
                                <div class="card-body">
                                    <?php if(!empty( $gift['title'] )){ ?>
                                        <h5 class="card-title"><?= $gift['title'] ?></h5>
                                    <?php } ?>
                                    
                                    <?php if(!empty( $gift['text'] )){ ?>
                                        <?= $gift['text'] ?>
                                    <?php } ?>

                                    <?php
                                    $gift_button_1 = $gift['hero_button'];
                                    if( $gift_button_1 ): 
                                        $button = $gift_button_1['button'];
                                        $button_style=$gift_button_1['button_style'];
                                        $button_with_arrow=$gift_button_1['button_with_arrow'];
                                
                                        if( $button ): 
                                            $link_url = $button['url'];
                                            $link_title = $button['title'];
                                            $link_target = $button['target'] ? $button['target'] : '_self';
                                            ?>
                                            <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
                                                <?php echo esc_html( $link_title ); ?>
                                                <?php if($button_with_arrow=='1'): ?>
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                <?php endif; ?>
                                            </a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php } ?>   
                   
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>