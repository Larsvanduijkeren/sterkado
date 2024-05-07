
<?php 
/* Template Name: kerstpakketten */ 
get_header();
?>
<?php
  $hero_title       = get_field('hero_title');
  $hero_content     = get_field('hero_content');
  $hero_right_bg_image    = get_field('hero_right_bg_image');
  $hero_right_image = get_field('hero_right_image');
  $hero_text_after_button = get_field('hero_text_after_button');
  $quote_author_image = get_field('quote_author_image');
  $quote_text = get_field('quote_text');
  $quote_author_name = get_field('quote_author_name');
  $hero_section_background_image = get_field('hero_section_background_image');
  $hero_section_mobile_background_image = get_field('hero_section_mobile_background_image');
  $count_box_1 = get_field('count_box_1');
  $count_box_2 = get_field('count_box_2');
  $count_box_3 = get_field('count_box_3');
  $small_arrow_text = get_field('small_arrow_text');
  $rank_math_focus_keyword=get_post_meta($post->ID, 'rank_math_focus_keyword', true);
    if( strpos($rank_math_focus_keyword, ",") !== false ) {
        $rank_math_focus_keyword=explode(",",$rank_math_focus_keyword);
        $rank_math_focus_keyword=$rank_math_focus_keyword[0];
    }else{
        $rank_math_focus_keyword=$rank_math_focus_keyword;
    }
    global $post;
$page_id=$post->ID;
?>
<section id="hero_banner_section_1" class="w-100 section_1  section-hero_banner_section inner-comm-banner"
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
            <div class="col-lg-5 col-md-12 col-sm-12 pd-100 md-full">
                <div class="green-button is-alternate">
                    <a target="_self" href="#">Kerstpakketten</a>
                </div>
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
            <div class="col-lg-7 col-md-12 col-sm-12 md-full  norightpadding text-center">
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

                    <?php if( !empty( $count_box_3['count_number'] ) || $count_box_3['count_text'] ){ ?>
                    <div class="img-content-box-3 image-content">
                        <?php if(!empty($count_box_3['count_number'])){ ?>
                            <h4><?= $count_box_3['count_number'] ?></h4>
                        <?php } ?>

                        <?php if(!empty($count_box_3['count_text'])){ ?>
                            <h6><?= $count_box_3['count_text'] ?></h6>
                        <?php } ?>
                    </div>
                    <?php } ?>

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

<?php if($hero_section_content){ ?>
<section id="right_gift_2" class="special_notes w-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-row">
                <?= $hero_section_content ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<?php
  $left_title_right_content_heading = get_field('left_title_right_content_heading');
  $left_title_right_content_content = get_field('left_title_right_content_content');
?> 
<section id="logo_section_1" class="w-100 section_1  section-logo_section">
    <div class="section-space arrow-bottom" >
        <div class="container our-customers2" >
            <?php if(!empty($left_title_right_content_heading) && !empty($left_title_right_content_content)): ?>
            <div class="employee-unique">
                <div class="emp-thought">
                    <?php if(!empty($left_title_right_content_heading)): ?>
                        <div class="emp-title">
                            <h2 class="font-h4"><?=$left_title_right_content_heading;?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if(!empty($left_title_right_content_content)): ?>
                    <div class="emp-desc">
                        <p><?= $left_title_right_content_content;?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
$get_inspired = get_field('get_inspired');
if($get_inspired){ ?>
<section id="get_inspired_3" class="w-100 section_12  section-latest_news get_inspired">
    <div class="container">
        
        <?php if ($get_inspired['heading']) : ?> 
            <h2 class="latest_news__title text-center"><?php echo $get_inspired['heading']; ?></h2> 
        <?php endif; ?> 

        <?php if ( $get_inspired['text'] ) : ?> 
            <div class="text-center description">
                <p> <?= $get_inspired['text'] ?> </p>
            </div>
        <?php endif; ?> 


        <div class="row latest-news-wrapper">
            <?php 
            foreach ( $get_inspired['inspired_list'] as $key => $item ) {
                $featured_img = $item['image']; 
                $link = $item['button'];
                $link2 = $item['button_2'];    ?>
                <div class="col-lg-4 col-md-6 col-sm-12" >
                     <div class="news-item" >
                         <?php if($featured_img){ ?>
                         <div class="news-img">
                             <img src="<?php echo $featured_img['url']; ?>" alt="">
                             <div class="curve">
                                 <svg viewbox="0 0 100 25">
                                     <path fill="#d7e7e7" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
                                 </svg>
                             </div>
                         </div>
                        <?php } ?>

                         <div class="news-wrapper-content">
                            <?php if($item['title']){ ?>
                            <h3 class="news-heading">
                                <?= $item['title'] ?>
                            </h3>
                            <?php } ?>

                            <?php if($item['content']){ ?>
                            <div class="news-content">
                                 <?php echo $item['content'] ?>
                            </div> 
                            <?php } ?>

                            <?php if( $item['sub_text'] ){ ?>
                                <h5><?= $item['sub_text'] ?></h5>
                            <?php } ?>

                            <?php 
                            if(!empty($link)){ 
                                $title = $link['title'];
                                $url = $link['url'];
                                $target = $link['target']?'_blank':'_self';
                                ?>

                                <a target="<?= $target ?>" data-page_id="<?= get_the_ID() ?>" href="<?= $url ?>" data-id="<?= $key ?>" class="btn btn-primary modal-btn"><?= $title ?>
                                </a>
                                <span id="product_popop_loader_<?php echo $key ?>" class="product_popop_loader" style="display: none;"></span>
                            <?php } ?>

                            <?php 
                            if(!empty($link2)){ 
                                $title2 = $link2['title'];
                                $url2 = $link2['url'];
                                $target2 = $link2['target']?'_blank':'_self';
                                ?>
                            <a target="<?= $target2 ?>" href="<?= $url2 ?>" class="btn ghost-btn"><?= $title2 ?></a>
                            <?php } ?>
                         </div>
                     </div>
                 </div>
                <?php
            }
            ?>
        </div> 
    </div>
</section>
<?php } ?>





<?php

$enable_section_cwi     = get_field('enable_section_cwi'); 
$cta_content_alignment = get_field('ctawi_content_alignment'); 
$cta_heading          = get_field('ctawi_heading');
$cta_content          = get_field('ctawi_content');
$cta_button           = get_field('ctawi_button');
$cta_from_id          = get_field('ctawi_select_cta_from');
$cat_is_background    = get_field('ctawi_is_background');
$cta_background_color = get_field('ctawi_background_color');

$cta_text_after_button= get_field('ctawi_text_after_button');
$cta_image            = get_field('ctawi_image');

if($cta_image){
    $col='8';
}else{
    $col='12';
}

if($enable_section_cwi):
?>
<section id="cta_with_image_4" class="w-100 section_10  section-cta_with_image">
    <div class="section-space">
        <div class="container link-cases content_align_<?= $cta_content_alignment; ?>">
            <div class="row cases-box" <?php if($cta_background_color!=''):?>style="background:<?= $cta_background_color; ?>"<?php endif; ?>>
                <div class="col-md-<?=$col; ?>">
                    <div class="case-description">
                        <?php if(!empty($cta_heading)): ?>
                            <h2><?php echo $cta_heading; ?></h2>
                        <?php endif; ?>
                        <?php if(!empty($cta_content)): ?>
                            <p class="normal-paragraph-desktop"><?=$cta_content;?></p>
                        <?php endif; ?>

                        <?php if( $cta_from_id != ''){ ?>
                        <div class="txt text-center form-wrap">
                            <?= do_shortcode( '[gravityform title="false" ajax="true" id="'.$cta_from_id .'" ]' ) ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php if($cta_image): ?>
                    <div class="col-md-4">
                        <img class="w-100" src="<?= $cta_image; ?>" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>    
</section>
<?php endif; ?>

<?php 
$partner_customiz = get_field('partner_customization');
if($partner_customiz){
?>
<section id="partner_customization_4" class="w-100 section_2  partner_customization">
    <div class="section-space" >
        <div class="container">
            <?php if($partner_customiz['heading']){ ?>
                <h2 class="text-center partner_customization_title"><?= $partner_customiz['heading']  ?></h2>
            <?php } ?>

            <?php if( $partner_customiz['text'] ){ ?>
            <div class="txt text-center description">
                <?= $partner_customiz['text']  ?>
            </div>
            <?php } ?>

            <?php if( $partner_customiz['select_form'] ){ ?>
            <div class="txt text-center form-wrap single-line-gravity-form">
                <?= do_shortcode( '[gravityform title="false" ajax="true" id="'.$partner_customiz['select_form'] .'" ]' ) ?>
            </div>
            <?php } ?>

            <?php if( $partner_customiz['style_text'] ){ ?>
            <div class="style-text">
                <p><?= $partner_customiz['style_text']  ?></p>
            </div>
            <?php } ?>

            <?php if( $partner_customiz['list_text'] ){ ?>
            <div class="list-text text-center">
                <?= $partner_customiz['list_text']  ?>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>

<?php
$gift_card_gallery_title    = get_field('gift_card_gallery_title');
$gift_card_gallery_description     = get_field('gift_card_gallery_description');
?> 
<section id="gift_card_gallery_4" class="w-100 section-gift_card_gallery cadeaukaarten_gallery">
    <div class="section-space slider-top-space">
        <div class="container gift_card_gallery">
            <div class="gallery-titel">
                <?php if(!empty($gift_card_gallery_title)): ?>
                    <div class="title">
                        <h2><?=$gift_card_gallery_title;?></h2>
                    </div>
                <?php endif; ?>
                <?php if(!empty($gift_card_gallery_description)): ?>
                    <div class="dec">
                        <?=$gift_card_gallery_description;?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row align-items-center">
            <?php 
            $gift_card_gallery_1 = get_field('gift_card_gallery_1');
            if( $gift_card_gallery_1 ): ?>
                <div class="col-md-12">
                    <div class="gift_card_gallery_1 gift_card_gallery">
                        <?php foreach( $gift_card_gallery_1 as $image ): ?>
                            <div class="slick-slide">
                                <div class="inner">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php 
            $gift_card_gallery_2 = get_field('gift_card_gallery_2');
            if( $gift_card_gallery_2 ): ?>
                <div class="col-md-12">
                    <div class="gift_card_gallery_2 gift_card_gallery">
                        <?php foreach( $gift_card_gallery_2 as $image ): ?>
                            <div class="slick-slide">
                                <div class="inner">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>


<?php

    $trend_heading          = get_field('trend_heading'); 
    $trend_description      = get_field('trend_description');
    $trend_from_id          = get_field('trend_select_cta_form');
    $trend_list             = get_field('trend_list');
    $banner_image           = get_field('banner_image');
    $trend_background_color = get_field('trend_background_color');
    $trend_image_tag_text   = get_field('trend_image_tag_text');


?>
<section id="twi_3" class="w-100 section_10  section-cta_with_image section-trend_with_img">
    <div class="section-space">
        <div class="container link-cases content_align_left">
            <div class="row cases-box" <?php if($trend_background_color!=''):?>style="background:<?= $trend_background_color; ?>"<?php endif; ?>>
                <div class="col-md-6 col-sm-12">
                    <div class="case-description">
                        <?php if(!empty($trend_heading)): ?>
                            <h2><?php echo $trend_heading; ?></h2>
                        <?php endif; ?>
                        <?php if(!empty($trend_description)): ?>
                            <p class="normal-paragraph-desktop"><?=$trend_description;?></p>
                        <?php endif; ?>

                        <?php if( $trend_from_id != ''){ ?>
                        <div class="txt text-center form-wrap">
                            <?= do_shortcode( '[gravityform title="false" ajax="true" id="'.$trend_from_id .'" ]' ) ?>
                        </div>
                        <?php } ?>
                        <div class="trend-list">
                            <?php echo $trend_list ?>
                        </div>
                    </div>
                </div>
                <?php if($banner_image): ?>
                    <div class="col-md-4">
                        <div class="trend-thumb">
                            <img class="w-100" src="<?= $banner_image['url']; ?>" />
                            <?php if(!empty($trend_image_tag_text)): ?>
                                <span class="trend-banner-tag"><?php echo $trend_image_tag_text; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>    
</section>


<?php
  $logo_title       = get_field('logo_title');
  $logos            = get_field('logos');
  $is_logo_section_background    = get_field('is_logo_section_background');
  $logo_section_background_color = get_field('logo_section_background_color');
?> 
<section id="logo_section_5" class="w-100 section_2  section-logo_section">
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
                            ?>
                            <li><img src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $logo['logo']['alt']; ?>"/></li>
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
                        <?php if(!empty($profile_image_section_1)): ?>
                        <img src="<?php echo $profile_image_section_1['url']; ?>"
                            alt="<?php echo $profile_image_section_1['alt']; ?>" />
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
                                    <?php if(!empty($profile_image_section_1)): ?>
                                    <img src="<?php echo $profile_image_section_1['url']; ?>"
                                        alt="<?php echo $profile_image_section_1['alt']; ?>" />
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
                                        <?php if(!empty($image_section_1)): ?>
                                            <img src="<?php echo $image_section_1['url']; ?>" alt="<?php echo $image_section_1['alt']; ?>" />
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
                                <?php }else{ ?>
                                    <img src="<?php echo $customized_solution_2_image_2['url']; ?>"
                                    alt="<?php echo $customized_solution_2_image_2['alt']; ?>" />
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
                                <?php if(!empty($review_logo_section_3)): ?>
                                <div class="feed-title">
                                    <img src="<?php echo $review_logo_section_3['url']; ?>" alt="Feedback Company" />
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
                            <?php } else { ?>
                                <img src="<?php echo $image_section_3['url']; ?>" alt="<?php echo $image_section_3['alt']; ?>" />
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
// Latest News Section
$latest_news_title = get_field('latest_news_title');
$news_post = get_field('news_post');
?>
<section id="latest_news_9" class="w-100 section_12  section-latest_news">
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
                        get_template_part( 'template-parts/latest', 'post');
                        endwhile; ?>
                    </div> 
                    <?php
                    endif;
                wp_reset_postdata();
            ?>
    </div>
</section>


<?php
$employee_section      = get_field('employee_section');
if($employee_section){
    $employee_section_heading      = $employee_section['employee_section_heading'];
    $employee_section_content       = $employee_section['employee_section_content'];
    $employee_section_link         = $employee_section['employee_section_link'];
    $employee_section_subheading    = $employee_section['employee_section_subheading'];
    $employee_left_section          = $employee_section['employee_left_section'];
    $employee_right_section         = $employee_section['employee_right_section'];
    ?> 
    <section id="employee_section_10" class="w-100 section_7  section-employee_section">
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
                            <?php if(!empty($row['profile'])): ?>
                                <div class="tooltip-new user-position<?= $i; ?>">
                                    <img src="<?php echo $row['profile']['url']; ?>" />
                                  
                                </div>
                            <?php endif; ?>
                         <?php $i++; endforeach; ?>
                         <?php $k=8;
                         foreach( $employee_right_section as $row ): ?>
                            <?php if(!empty($row['profile'])): ?>
                                <div class="tooltip-new user-position<?= $k; ?>">
                                    <img src="<?php echo $row['profile']['url']; ?>" />
                                   
                                </div>
                            <?php endif; ?>
                         <?php $k++; endforeach; ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
<?php } ?>



<?php 
// Gift Concept
$gift_staff_heading      = get_field('gift_staff_heading');
$gift_staff_content      = get_field('gift_staff_content');
$gift_staff      = get_field('gifts');
?>
<section id="gift_staff_11" class="sec_pak_het">
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
                                <?php if(!empty($gift['image'])){ ?>
                                    <img class="card-img-top" src="<?= $gift['image']['url'] ?>" alt="<?= $gift['image']['alt'] ?>">
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


<?php 
if(1 == 2){
$faq_title  = get_field('faq_title'); ?> 
<section id="faq_section_3" class="w-100 section_3  section-faq_section">
    <div class="section-space">
        <div class="container faq_wrapper">
            <?php if(!empty($faq_title)): ?>
            <div class="slide-title text-center">
                <h2><?=$faq_title;?></h2>
            </div>
            <?php endif; ?>
            <?php if( have_rows('faqs') ): $c=1;?>
                <div class="row">
                    <div class="col-md-12">
                        <div id="accordion" class="accordion-list">
                            <?php while( have_rows('faqs') ): the_row(); 
                                ?>
                                <div class="card">
                                    <div class="card-header" id="heading_<?= $c; ?>">
                                        <h5 class="faq-title">
                                            <a class="faq_question <?php if($c!='1'){ echo "collapsed";} ?>" data-toggle="collapse"  data-target="#collapse_<?= $c; ?>" aria-expanded="true" aria-controls="collapse_<?= $c; ?>">
                                                <?php the_sub_field('question'); ?>
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapse_<?= $c; ?>" class="collapse <?php if($c=='1'){ echo "show";} ?>" aria-labelledby="heading_<?= $c; ?>" data-parent="#accordion">
                                        <div class="card-body">
                                            <?php the_sub_field('answer'); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php $c++; endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>    
</section>
<?php } ?>


<?php
if(1 == 2){
$promise_title = get_field('promise_title');
?>
<section id="promises_section_4" class="w-100 section_8  section-promises_section">
    <div class="container">
        <?php if ($promise_title) : ?> <h2 class="latest_news__title"><?php echo $promise_title; ?></h2> <?php endif; ?> 
        <?php
            if( have_rows('promises') ): ?>
                <div class="row promises-wrapper">
                    <?php
                        while( have_rows('promises') ) : the_row(); ?>
                        <div class="col-lg-4 col-md-4 col-sm-12"  >
                            <div class="promises-item" >
                                <div class="promises-img">
                                        <img src="<?php the_sub_field('image'); ?>" alt="">
                                </div>
                                <h3 class="promises-heading">
                                    <?php the_sub_field('title'); ?>
                                </h3>
                                <div class="promises-content">
                                    <?php the_sub_field('content'); ?>
                                </div> 
                            </div>
                        </div>
                    <?php
                    endwhile; ?>
                </div> 
                <?php
            endif;
        ?>
    </div>
</section>

<?php } ?>


<?php get_footer(); ?>