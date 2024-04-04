	
<?php 
/* Template Name: Onze werkwijze */ 
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
?> 
<section id="hero_banner_section_1" class="w-100 section_1  section-hero_banner_section inner-comm-banner" <?php if($hero_section_background_image):?>style="background-image:url(<?= $hero_section_background_image;?>);"<?php endif;?>>   
    <div class="container-fluid">
        <div class="row align-items-center ">
            <div class="col-lg-5 col-md-12 col-sm-12 pd-100 md-full">
                <?php if(!empty($hero_title)): ?>
                    <h1><?php echo $hero_title; ?></h1>
                <?php endif; ?>   
                <?php if(!empty($hero_content)): ?>
                    <p><?php echo $hero_content; ?></p>
                <?php endif; ?>   
                <div class="contact-banner-link text-left d-flex">
               
                        <?php
                            $hero_button_1 = get_field('hero_button_1');
                            if( $hero_button_1 ): ?>
                       
                                    <?php 
                                        $button = $hero_button_1['button'];
                                        $button_style=$hero_button_1['button_style'];
                                        $button_with_arrow=$hero_button_1['button_with_arrow'];
                                
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
                        <?php
                            $hero_button_2 = get_field('hero_button_2');
                            if( $hero_button_2 ): ?>
                             
                                    <?php 
                                        $button = $hero_button_2['button'];
                                        $button_style=$hero_button_2['button_style'];
                                        $button_with_arrow=$hero_button_2['button_with_arrow'];
                                        
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
            <div class="col-lg-7 col-md-8 col-sm-12  md-full  norightpadding text-center">
                <figure class="hide-sm-device">
                    <img class="w-100" src="<?php echo $hero_right_bg_image; ?>">
                    <figcaption>
                        <img class="d-block" src="<?php echo $hero_right_image; ?>">
                    </figcaption>
                </figure>
                <?php if($quote_author_image || $quote_text): ?>
                <div class="user-text d-flex align-items-center justify-content-center">
                    <div class="user-img">
                        <img src="<?php echo $quote_author_image; ?>">
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
if( have_rows('customized_image__video_section') ):
    while( have_rows('customized_image__video_section') ) : the_row();
    ?>
    <section class="w-100 section_4 top-space-sec container-1600  section-customized_image__video_section column-reverse">
        <?php
            $select_layout          = get_sub_field('select_layout');
            $title                  = get_sub_field('title');
            $subtitle               = get_sub_field('subtitle');
            $content                = get_sub_field('content');
            $button                 = get_sub_field('button');
            $select_image_or_video  = get_sub_field('select_image_or_video');
            $image                  = get_sub_field('image');
            $image_description      = get_sub_field('image_description');
            $video                  = get_sub_field('video');
            $video_poster           = get_sub_field('video_poster');
        ?> 
        <div class="section-space">
            <div class="customize-service">
                <div class="service-main">
                    <div class="container">
                        <div class="row align-items-center flex-ssm-column-reverse">
                            <?php if($select_layout=="left_img_right_content"):?>
                                <div class="col-sm-12 col-lg-6">
                                    <?php if($select_image_or_video=="video"){ ?>
                                        <?php if(!empty($video)): ?>
                                            <video width="100%" height="100%" controls poster="<?php echo $video_poster; ?>">
                                                <source src="<?php echo $video; ?>" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        <?php endif; ?>
                                    <?php }else{?>
                                        <?php if(!empty($image)): ?>
                                            <div class="service-top-right">
                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            </div>
                                        <?php endif; ?>
                                    <?php } ?>
                                </div>
                            <?php endif; ?>
                            <div class="col-sm-12 col-lg-6">
                                    <?php if(!empty($image_description)): ?>
                                                <div class="description-top">
                                                    <p><?php echo $image_description; ?></p>
                                                </div>
                                            <?php endif; ?>
                                <div class="service-top-left">
                                    
                                    <div class="service-description">
                                        
                                        <?php if(!empty($title)): ?>
                                            <h3><?php echo $title; ?></h3>
                                        <?php endif; ?>
                                        <?php if(!empty($subtitle)): ?>
                                            <h6><?php echo $subtitle; ?></h6>
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
                                    </div>
                                </div>
                            </div>
                            <?php if($select_layout=="right_img_left_content"):?>
                                <div class="col-sm-12 col-lg-6">
                                    <?php if($select_image_or_video=="video"){ ?>
                                        <?php if(!empty($video)): ?>
                                            <video width="100%" height="100%" controls poster="<?php echo $video_poster; ?>">
                                                <source src="<?php echo $video; ?>" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        <?php endif; ?>
                                    <?php }else{?>
                                        <?php if(!empty($image)): ?>
                                        
                                            <div class="service-top-right">
                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            </div>
                                        <?php endif; ?>
                                    <?php } ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>                        
            </div>
        </div>    
    </section>
    <?php
    endwhile;
endif;
?>
<?php
    $title_section_2                = get_field('title_section_2');
    $customized_solution_2_subtitle = get_field('customized_solution_2_subtitle');
    $content_section_2              = get_field('content_section_2');
    $button_section_2               = get_field('button_section_2');
    $customized_solution_2_image_1  = get_field('customized_solution_2_image_1');
    $customized_solution_2_image_1_description  = get_field('customized_solution_2_image_1_description');
    $customized_solution_2_image_2              = get_field('customized_solution_2_image_2');
    $customized_solution_2_image_2_description  = get_field('customized_solution_2_image_2_description');

    $customized_solution_2_profile_image  = get_field('customized_solution_2_profile_image');
$customized_solution_2_profile_info             = get_field('customized_solution_2_profile_info');
$customized_solution_2_profile_name             = get_field('customized_solution_2_profile_name');

?> 
<section id="customized_solution_2_3" class="w-100 section_5  section-customized_solution_2">
    <div class="section-space">
        <div class="our-service">
            <div class="service-main">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="service-top-left">
                                <div class="service-description ">
                                    <?php if(!empty($title_section_2)): ?>
                                        <h3><?php echo $title_section_2; ?></h3>
                                    <?php endif; ?>
                                    <?php if(!empty($customized_solution_2_subtitle)): ?>
                                        <h6><?php echo $customized_solution_2_subtitle; ?></h6>
                                    <?php endif; ?>
                                    <?php if(!empty($content_section_2)): ?>
                                        <p class="normal-paragraph-desktop"><?php echo $content_section_2; ?></p>
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
                        <div class="col-sm-12 col-lg-6">
                            <?php if(!empty($customized_solution_2_image_1)): ?>
                                <div class="expert-tooltip custom-set-one hide-mobile">
                                    <?php if(!empty($customized_solution_2_profile_image)): ?>
                                        <img src="<?php echo $customized_solution_2_profile_image['url']; ?>" alt="<?php echo $customized_solution_2_profile_image['alt']; ?>" />
                                        <div class="custom-tooltip">
                                            <?php if(!empty($customized_solution_2_profile_info)): ?>
                                            <p class="normal-paragraph-desktop">“<?= $customized_solution_2_profile_info; ?>”</p>
                                            <?php endif; ?>
                                            <?php if(!empty($customized_solution_2_profile_name)): ?>
                                            <p class="dark-paragraph-desktop"><?= $customized_solution_2_profile_name; ?></p>    
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <!-- <div class="service-bottom-right-mobile">
                                    <div class="description-top">
                                        <p><?php echo $customized_solution_2_image_1_description; ?></p>
                                    </div>
                                </div> -->
                                <div class="service-top-right">
                                    <img src="<?php echo $customized_solution_2_image_1['url']; ?>" alt="<?php echo $customized_solution_2_image_1['alt']; ?>" />
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">    
                        <div class="col-sm-12 col-lg-6">
                            <?php if(!empty($customized_solution_2_image_2)): ?>
                                <div class="service-bottom-left">
                                    <img src="<?php echo $customized_solution_2_image_2['url']; ?>" alt="<?php echo $customized_solution_2_image_2['alt']; ?>" />
                                </div>
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
                    </div>
                </div>
            </div>                        
        </div>
    </div>      
</section>
<?php
$title_section_3                = get_field('title_section_3');
$content_section_3              = get_field('content_section_3');
$button_section_3               = get_field('button_section_3');
$image_section_3                = get_field('image_section_3');
$review_logo_section_3          = get_field('review_logo_section_3');
$review_description_section_3   = get_field('review_description_section_3');
?> 
<section id="customized_solution_3_4" class="w-100 section_6  section-customized_solution_3">
    <div class="section-space">
        <div class="container feedbakc-company">
            <div class="feedback-section">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-xl-5">
                        <div class="feedback-left">
                                <div class="feed-box">
	                                <?php if(!empty($review_logo_section_3)): ?>
	                                <div class="feed-title">
	                                    <img src="<?php echo $review_logo_section_3['url']; ?>" alt="Feedback Company" />
	                                </div>
	                                <?php endif; ?>
									<?php echo do_shortcode('[feedbackcompany_bar]'); ?>
	                            </div>
                            <div class="feed-description">
                                <?php if(!empty($title_section_3)): ?>
                                <h3><?php echo $title_section_3; ?></h3>
                                <?php endif; ?>
                                <?php if(!empty($content_section_3)): ?>
                                <p class="normal-paragraph-desktop"><?php echo $content_section_3; ?></p>
                                <?php endif; ?>
                                <?php
                                    $button_section_3 = get_field('button_section_3');
                                    if( $button_section_3 ): ?>
                                            <?php 
                                                $button = $button_section_3['button'];
                                                $button_style=$button_section_3['button_style'];
                                            
                                                $button_with_arrow=$button_section_3['button_with_arrow'];
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
                    <?php if(!empty($image_section_3)): ?>
                    <div class="col-sm-12 col-lg-6 col-xl-7">
                        <div class="feedback-right">
                            <img src="<?php echo $image_section_3['url']; ?>" alt="<?php echo $image_section_3['alt']; ?>" />
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>   
    </div>
</section>
<?php
$cta_content_alignment = get_field('cta_content_alignment');
$cta_heading          = get_field('cta_heading');
$cta_content          = get_field('cta_content');
$cta_heading_1          = get_field('cta_heading_1');
$cta_content_1          = get_field('cta_content_1');
$cta_button             = get_field('cta_button');
$cat_is_background    = get_field('cat_is_background');
$cta_background_color = get_field('cta_background_color');

$cta_text_after_button            = get_field('cta_text_after_button');
$cta_image= get_field('cta_image');

if($cta_image){
    $col='7';
}else{
    $col='12';
}
?>
<section id="cta_with_image_5" class="w-100 section_10  section-cta_with_image cases-box-simple">
    <div class="section-space">
        <div class="container link-cases content_align_<?= $cta_content_alignment; ?>">
            <div class="row cases-box " <?php if($cat_is_background=='1'):?>style="background:<?= $cta_background_color; ?>"<?php endif; ?>>
                <div class="col-md-<?= $col; ?>">
                    <div class="case-description">
                        <div class="main-title-case">
                            <?php if(!empty($cta_heading)): ?>
                                <h2><?php echo $cta_heading; ?></h2>
                            <?php endif; ?>
                            <?php if(!empty($cta_content)): ?>
                                <p class="normal-paragraph-desktop"><?=$cta_content;?></p>
                            <?php endif; ?>
                        </div>
                        <?php if(!empty($cta_heading_1)): ?>
                            <h4><?php echo $cta_heading_1; ?></h4>
                        <?php endif; ?>
                        <?php if(!empty($cta_content_1)): ?>
                            <p class="normal-paragraph-desktop"><?=$cta_content_1;?></p>
                        <?php endif; ?>
                        <?php
                            $cta_button = get_field('cta_button');
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
                       
                    </div>
                </div>
                <?php if($cta_image): ?>
                    <div class="col-md-5">
                        <img class="w-100" src="<?= $cta_image; ?>" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>    
</section>
<?php
  $gift_section_heading       = get_field('gift_section_heading');
  $gifts         = get_field('gifts');

  $numOfCols = count($gifts);
  $rowCount = 0;
  $ColWidth = 12 / $numOfCols;
?> 
<section id="right_gift_6" class="w-100 section_3  section-right_gift">
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
                                <?php if(!empty($gift['image'])): ?>
                                    <div class="gift-profile">
                                        <img src="<?= $gift['image']['url']; ?>" alt="<?= $gift['image']['alt']; ?>" />
                                    </div>
                                <?php endif; ?>
                                <div class="gift-description">
                                    <?php if(!empty($gift['title'])): ?>
                                        <h3><?= $gift['title'];?></h3>
                                    <?php endif; ?>
                                    <?php if(!empty($gift['short_description'])): ?>
                                        <p class="normal-paragraph-desktop"><?= $gift['short_description'];?></p>
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
$latest_news_title = get_field('latest_news_title');
$news_post = get_field('news_post');
?>
<section id="latest_news_7" class="w-100 section_12  section-latest_news">
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

<?php get_footer(); ?>