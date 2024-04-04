<?php 
/* Template Name: Home */ 
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


<?php
$arrow_title          = get_field('arrow_title');
$arrow_content          = get_field('arrow_content');
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
  $gift_section_heading       = get_field('gift_section_heading');
  $gifts         = get_field('gifts');

  $numOfCols = count($gifts);
  $rowCount = 0;
  $ColWidth = 12 / $numOfCols;
?>
<section id="right_gift_section_2" class="w-100 section_3  section-right_gift">

    <div class="section-space">
        <div class="container our-offers4">
            <div class="gift-section">
                
                <?php if(!empty($gift_section_heading)): ?>
                <div class="gift-title">
                    <h2><?= $gift_section_heading;?></h2>
                </div>
                <?php endif; ?>

                <div class="gift-listing">
                    <div class="row gift-bg">
                        <?php foreach ($gifts as $key => $gift): ?>
                        <div class="col-sm-12 col-md-6 col-xl-3 girf-items">
                            <div class="inner-col">
                                <?php if(!empty($gift['image'])): 
                                    if($gift['image']['alt']){
                                        $images_alt=$gift['image']['alt']." - ".$rank_math_focus_keyword;
                                    }else{
                                        $images_alt=$gift['image']['title']." - ".$rank_math_focus_keyword;
                                    }
                                    ?>
                                <div class="gift-profile">
                                    <img src="<?= $gift['image']['url']; ?>" alt="<?= $images_alt; ?>" />
                                </div>
                                <?php endif; ?>
                                <div class="gift-description">
                                    <?php if(!empty($gift['title'])): ?>
                                        <h3><?= $gift['title'];?></h3>
                                    <?php endif; ?>

                                    <?php if(!empty($gift['short_description'])): ?>
                                    <p class="normal-paragraph-desktop w-100"><?= $gift['short_description'];?></p>
                                    <?php endif; ?>

                                    <?php if(!empty($gift['link'])): ?>
                                        <a class="btn btn-primary" href="<?= $gift['link']['url'];?>" title="<?= $gift['link']['title'];?>"><?= $gift['link']['title'];?></a>
                                    
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
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
<section id="logo_section_3" class="w-100 section_2  section-logo_section top-space-sec">
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
                        <?php 
                        if(!empty($logos)): 
                            foreach ($logos as $key => $logo):
                                if(!empty($logo['logo'])){ 
                                    if($logo['logo']['alt']){
                                        $images_alt=$logo['logo']['alt']." - ".$rank_math_focus_keyword;
                                    }else{
                                        $images_alt=$logo['logo']['title']." - ".$rank_math_focus_keyword;
                                    }
                                    ?>
                                    <li><img src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $images_alt; ?>"/></li>
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
$customized_solution_heading                  = get_field('customized_solution_heading');
$image_section_1          = get_field('image_section_1');
$profile_image_section_1  = get_field('profile_image_section_1');
$customized_solution_profile_info             = get_field('customized_solution_profile_info');
$customized_solution_profile_name             = get_field('customized_solution_profile_name');
$title_section_1          = get_field('title_section_1');
$content_section_1        = get_field('content_section_1');
$button_section_1         = get_field('button_section_1');
$customized_solution_1_subtitle         = get_field('customized_solution_1_subtitle');

$select_image_or_video_1  = get_field('customized_1_select_image_or_video');
$video_poster_1  = get_field('video_poster_1');
$customized_solution_1_video  = get_field('customized_solution_1_video');
?>
<section id="customized_solution_1" class="w-100 section_4  section-customized_solution">
    <div class="section-space">
        <div class="container custom-solution">
            <div class="solution-section">

                <div class="mobile_solution_tooltip">
                     <div class="expert-tooltip show-tooltip">
                        <?php if(!empty($profile_image_section_1)):
                             if($profile_image_section_1['alt']){
                                $images_alt=$profile_image_section_1['alt']." - ".$rank_math_focus_keyword;
                            }else{
                                $images_alt=$profile_image_section_1['title']." - ".$rank_math_focus_keyword;
                            } ?>
                        <img src="<?php echo $profile_image_section_1['url']; ?>" alt="<?php echo $images_alt; ?>" />
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
                                            $images_alt=$profile_image_section_1['alt']." - ".$rank_math_focus_keyword;
                                        }else{
                                            $images_alt=$profile_image_section_1['title']." - ".$rank_math_focus_keyword;
                                        }
                                        ?>
                                    <img src="<?php echo $profile_image_section_1['url']; ?>"alt="<?php echo $images_alt; ?>" />
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
                                        $button_section_1 = get_field('button_section_1');
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
                                                $images_alt=$image_section_1['alt']." - ".$rank_math_focus_keyword;
                                            }else{
                                                $images_alt=$image_section_1['title']." - ".$rank_math_focus_keyword;
                                            } ?>
                                            <img src="<?php echo $image_section_1['url']; ?>" alt="<?php echo $images_alt; ?>" />
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

    $title_section_2                = get_field('title_section_2');
    $customized_solution_2_subtitle = get_field('customized_solution_2_subtitle');
    $content_section_2              = get_field('content_section_2');
    $button_section_2               = get_field('button_section_2');
    $customized_solution_2_image_1  = get_field('customized_solution_2_image_1');
    $customized_solution_2_image_1_description  = get_field('customized_solution_2_image_1_description');
    $customized_solution_2_image_2              = get_field('customized_solution_2_image_2');
    $customized_2_select_image_or_video  = get_field('customized_2_select_image_or_video');
    $customized_solution_3_video_2                  = get_field('customized_solution_3_video_2');
    $customized_solution_3_video_poster           = get_field('customized_solution_3_video_poster');
    $customized_solution_2_image_2_description  = get_field('customized_solution_2_image_2_description');

?>
<section id="customized_solution_2" class="w-100 section_5  section-customized_solution_2">
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
                                        $button_section_2 = get_field('button_section_2');
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
                            if( !empty($customized_solution_2_image_1) || !empty($customized_solution_3_video_2) ): 
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
                                    if($customized_solution_2_image_1['alt']){
                                        $images_alt=$customized_solution_2_image_1['alt']." - ".$rank_math_focus_keyword;
                                    }else{
                                        $images_alt=$customized_solution_2_image_1['title']." - ".$rank_math_focus_keyword;
                                    } 
                                    ?>
                                    <img src="<?php echo $customized_solution_2_image_1['url']; ?>"  alt="<?php echo $images_alt; ?>" />
                                <?php } ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <?php if($customized_solution_2_image_2 || $customized_solution_3_video_2): ?>
                            <?php if($select_image_or_video_2=="video"){ ?>
                            <?php if(!empty($customized_solution_3_video_2)): ?>
                            <div class="service-bottom-left">
                                <video width="100%" height="100%" controls
                                    poster="<?php echo $customized_solution_3_video_poster; ?>">
                                    <source src="<?php echo $customized_solution_3_video_2; ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <?php endif; ?>
                            <?php }else{?>
                            <?php if(!empty($customized_solution_2_image_2)):
                                if($image_section_1['alt']){
                                    $images_alt=$customized_solution_2_image_2['alt']." - ".$rank_math_focus_keyword;
                                }else{
                                    $images_alt=$customized_solution_2_image_2['title']." - ".$rank_math_focus_keyword;
                                }  ?>
                            <div class="service-bottom-left">
                                <img src="<?php echo $customized_solution_2_image_2['url']; ?>"
                                    alt="<?php echo $images_alt; ?>" />
                            </div>
                            <?php endif; ?>
                            <?php } ?>
                            <div class="service-bottom-right-mobile">
                                <div class="description-bottom">
                                    <p><?php echo $customized_solution_2_image_2_description; ?></p>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="service-bottom-right-desktop">
                                <?php if(!empty($customized_solution_2_image_1_description)): ?>
                                <div class="description-top">
                                    <p><?php echo $customized_solution_2_image_1_description; ?></p>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($customized_solution_2_image_2_description)): ?>
                                <div class="description-bottom">
                                    <p><?php echo $customized_solution_2_image_2_description; ?></p>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php
//Customized solution 3

$title_section_3                = get_field('title_section_3');
$content_section_3              = get_field('content_section_3');
$button_section_3               = get_field('button_section_3');
$image_section_3                = get_field('image_section_3');
$review_logo_section_3          = get_field('review_logo_section_3');
$review_description_section_3   = get_field('review_description_section_3');
$customized_solution_3_subtitle   = get_field('customized_solution_3_subtitle');

$select_image_or_video_3  = get_field('customized_3_select_image_or_video');
$video_poster_3  = get_field('video_poster_3');
$customized_3_video  = get_field('customized_3_video');
?>
<section id="customized_solution_3_6" class="w-100 section_6  section-customized_solution_3">
    <div class="section-space">
        <div class="container feedbakc-company">
            <div class="feedback-section">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-xl-6">
                        <div class="feedback-left">
                            <div class="feed-box">
                                <?php if(!empty($review_logo_section_3)):
                                    if($review_logo_section_3['alt']){
                                        $images_alt=$review_logo_section_3['alt']." - ".$rank_math_focus_keyword;
                                    }else{
                                        $images_alt=$review_logo_section_3['title']." - ".$rank_math_focus_keyword;
                                    } 
                                    ?>
                                <div class="feed-title">
                                    <img src="<?php echo $review_logo_section_3['url']; ?>" alt="<?= $images_alt; ?>" />
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
                                    $button_section_3 = get_field('button_section_3');
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
                                    $images_alt=$image_section_3['alt']." - ".$rank_math_focus_keyword;
                                }else{
                                    $images_alt=$image_section_3['title']." - ".$rank_math_focus_keyword;
                                } 
                                ?>
                                <img src="<?php echo $image_section_3['url']; ?>" alt="<?php echo $images_alt; ?>" />
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
$every_moment_heading  = get_field('every_moment_heading');
$every_moment_sub_heading  = get_field('every_moment_sub_heading');
$moments  = get_field('moments');
?>
<section id="every_moment_7" class="w-100 section_8  section-every_moment">
    <div class="section-space">
        <div class="container every-moments">
            <?php if(!empty($every_moment_heading)): ?>
            <div class="moment-title">
                <h2><?=$every_moment_heading;?></h2>
            </div>
            <?php endif; ?>
            <?php if(!empty($every_moment_sub_heading)): ?>
            <h6><?php echo $every_moment_sub_heading; ?></h6>
            <?php endif; ?>
            <div class="moments-slider">
                <?php foreach ($moments as $key => $moment): ?>
                <div class="slide-item">
                    <div class="slider-img">
                        <?php if(!empty($moment['image'])):
                             if($moment['image']['alt']){
                                $images_alt=$moment['image']['alt']." - ".$rank_math_focus_keyword;
                            }else{
                                $images_alt=$moment['image']['title']." - ".$rank_math_focus_keyword;
                            } 
                            ?>
                        <a href="<?= ($moment['link']['url'])?$moment['link']['url']:'#'; ?>" title="<?php echo $moment['link']['title']; ?>">
                            <img src="<?php echo $moment['image']['url']; ?>" alt="<?php echo $images_alt; ?>" />
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="slider-head primary-ming"
                        style="background-color: <?php echo $moment['link_bg_color']; ?>;">
                        <a href="<?= ($moment['link']['url'])?$moment['link']['url']:'' ?>"
                            title="<?php echo $moment['link']['title']; ?>"><?= ($moment['link']['title'])?$moment['link']['title']:'' ?></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php
$latest_news_title = get_field('latest_news_title');
$news_post = get_field('news_post');
?>
<section id="latest_news_8" class="w-100 section_12  section-latest_news">
    <div class="container">
        <?php if(!empty($latest_news_title)){ ?>
            <h2 class="latest_news__title"><?= $latest_news_title ?></h2>
        <?php } ?>
        
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
$employee_section_heading      = get_field('employee_section_heading');
$employee_section_content       = get_field('employee_section_content');
$employee_section_link         = get_field('employee_section_link');
$employee_section_subheading    = get_field('employee_section_subheading');
$employee_left_section          = get_field('employee_left_section');
$employee_right_section         = get_field('employee_right_section');
?>
<section id="employee_section_9" class="w-100 section_7  section-employee_section">
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
                    if( $employee_section_link ):  
                        $button = $employee_section_link['button'];
                        $button_style=$employee_section_link['button_style'];
                    
                        $button_with_arrow=$employee_section_link['button_with_arrow'];
                        if( $button ): 
                            $link_url = $button['url'];
                            $link_title = $button['title'];
                            $link_target = $button['target'] ? $button['target'] : '_self';
                            ?>
                            <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"> <?php echo esc_html( $link_title ); ?>
                                <?php if($button_with_arrow=='1'): ?>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
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
                    <?php 
                    $i=1;
					foreach( $employee_left_section as $row ): ?>
                        <?php if(!empty($row['profile'])): 
                             if($row['profile']['alt']){
                                $image_alt=$row['profile']['alt']." - ".$rank_math_focus_keyword;
                            }else{
                                $image_alt=$row['profile']['title']." - ".$rank_math_focus_keyword;
                            }
                            ?>
                            <div class="tooltip-new user-position<?= $i; ?>">
                                <img src="<?php echo $row['profile']['url']; ?>" alt="<?= $image_alt; ?>"/>
                            </div>
                        <?php endif; ?>
                        <?php $i++; 
                    endforeach; ?>
                    
                    <?php 
                    $k=8;
					foreach( $employee_right_section as $row ): ?>
                        <?php if(!empty($row['profile'])): 
                             if($row['profile']['alt']){
                                $image_alt=$row['profile']['alt']." - ".$rank_math_focus_keyword;
                            }else{
                                $image_alt=$row['profile']['title']." - ".$rank_math_focus_keyword;
                            } ?>
                        <div class="tooltip-new user-position<?= $k; ?>">
                            <img src="<?php echo $row['profile']['url']; ?>" alt="<?= $image_alt; ?>"/>
                        </div>
                    <?php endif; ?>
                    <?php $k++; 
                    endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>