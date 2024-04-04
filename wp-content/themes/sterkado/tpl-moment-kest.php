<?php 
/* Template Name: Moment - Kest */ 
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
            <div class="col-lg-7 col-md-12 col-sm-12 md-full  norightpadding text-center">
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
  $logo_title       = get_field('logo_title');
  $logos            = get_field('logos');
  $is_logo_section_background    = get_field('is_logo_section_background');
  $logo_section_background_color = get_field('logo_section_background_color');
  $logo_section_heading          = get_field('logo_section_heading');
  $logo_section_content          = get_field('logo_section_content');
?> 
<section id="logo_section_2" class="w-100 section_2  section-logo_section top-space-sec">
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
            <?php if(!empty($logo_section_heading) && !empty($logo_section_content)): ?>
            <div class="employee-unique">
                <div class="emp-thought">
                    <?php if(!empty($logo_section_heading)): ?>
                        <div class="emp-title">
                            <h4><?=$logo_section_heading;?></h4>
                        </div>
                    <?php endif; ?>
                    <?php if(!empty($logo_section_content)): ?>
                    <div class="emp-desc">
                        <p><?= $logo_section_content;?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
$customized_solution_heading                  = get_field('customized_solution_heading');
$image_section_1          = get_field('image_section_1');
$profile_image_section_1  = get_field('profile_image_section_1');
$customized_solution_profile_info             = get_field('customized_solution_profile_info');
$customized_solution_profile_name             = get_field('customized_solution_profile_name');
$title_section_1          = get_field('title_section_1');
$content_section_1        = get_field('content_section_1');
$button_section_1         = get_field('button_section_1');
?>
<section id="customized_solution_3" class="w-100 section_4  section-customized_solution solution-main-sec">
    <div class="section-space">
        <div class="container custom-solution">
            <div class="solution-section">
                <?php if(!empty($customized_solution_heading)): ?>
                <div class="solution-title">
                    <h2><?php echo $customized_solution_heading; ?></h2>
                </div>
                <?php endif; ?>
                <div class="solution-main">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-5">
                           
                                <div class="expert-description">
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
                        <div class="col-sm-12  col-md-6 col-lg-6 col-xl-7">
                            <?php if(!empty($image_section_1)): ?>
                                <div class="solution-left">
                                    <img src="<?php echo $image_section_1['url']; ?>" alt="<?php echo $image_section_1['alt']; ?>" />
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
    $main_title_section_2           = get_field('main_title_section_2');
    $customized_solution_2_subtitle           = get_field('customized_solution_2_subtitle');
    $title_section_2                = get_field('title_section_2');
    $customized_solution_2_subtitle = get_field('customized_solution_2_subtitle');
    $content_section_2              = get_field('content_section_2');
    $button_section_2               = get_field('button_section_2');
    $customized_solution_2_image_1  = get_field('customized_solution_2_image_1');
    $customized_solution_2_image_1_description  = get_field('customized_solution_2_image_1_description');
    $customized_solution_2_image_2              = get_field('customized_solution_2_image_2');
    $customized_solution_2_image_2_description  = get_field('customized_solution_2_image_2_description');

?> 
<section id="customized_solution_2_4" class="w-100 section_5  section-customized_solution_2">
    <div class="section-space">
        <div class="our-service">
            <div class="service-main">
                <div class="container">
                    <?php if(!empty($main_title_section_2)): ?>
                    <div class="solution-title">
                        <h2><?php echo $main_title_section_2; ?></h2>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="service-top-left">
                                <div class="service-description">
                                    <?php if(!empty($customized_solution_2_subtitle)): ?>
                                        <h6><?php echo $customized_solution_2_subtitle; ?></h6>
                                    <?php endif; ?>
                                    <?php if(!empty($title_section_2)): ?>
                                        <h3 class="remove-mrgn-bt"><?php echo $title_section_2; ?></h3>
                                    <?php endif; ?>
                                   
                                    <?php if(!empty($content_section_2)): ?>
                                        <p class="normal-paragraph-desktop remove-mrgn-bt"><?php echo $content_section_2; ?></p>
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
                                <div class="service-bottom-right-mobile">
                                    <div class="description-top">
                                        <p><?php echo $customized_solution_2_image_1_description; ?></p>
                                    </div>
                                </div>
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
$sub_title_section_3                = get_field('sub_title_section_3');
$content_section_3              = get_field('content_section_3');
$button_section_3               = get_field('button_section_3');
$image_section_3                = get_field('image_section_3');
$review_logo_section_3          = get_field('review_logo_section_3');
$review_description_section_3   = get_field('review_description_section_3');
?> 
<section id="customized_solution_3_5" class="w-100 section_6  section-customized_solution_3">
    <div class="section-space">
        <div class="container feedbakc-company">
            <div class="feedback-section">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-xl-5">
                        <div class="feedback-left">
                            <?php if($review_logo_section_3 || $review_description_section_3): ?>
                                <div class="feed-box">
	                                <?php if(!empty($review_logo_section_3)): ?>
	                                <div class="feed-title">
	                                    <img src="<?php echo $review_logo_section_3['url']; ?>" alt="Feedback Company" />
	                                </div>
	                                <?php endif; ?>
									<?php echo do_shortcode('[feedbackcompany_bar]'); ?>
	                            </div>
                            <?php endif; ?>
                            <div class="feed-description">
                                <?php if(!empty($sub_title_section_3)): ?>
                                    <h6><?php echo $sub_title_section_3; ?></h6>
                                <?php endif; ?>
                                <?php if(!empty($title_section_3)): ?>
                                <h3><?php echo $title_section_3; ?></h3>
                                <?php endif; ?>
                                <?php if(!empty($content_section_3)): ?>
                                <div class="normal-paragraph-desktop"><?php echo $content_section_3; ?></div>
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
$customized_solution_heading_2                  = get_field('customized_solution_heading_2');
$customized_solution_image          = get_field('customized_solution_image');
$customized_solution_profile_image  = get_field('customized_solution_profile_image');
$customized_solution_profile_info_2             = get_field('customized_solution_profile_info_2');
$customized_solution_profile_name_2             = get_field('customized_solution_profile_name_2');
$customized_solution_sub_title_section          = get_field('customized_solution_sub_title_section');
$customized_solution_title_section          = get_field('customized_solution_title_section');
$customized_solution_content_section        = get_field('customized_solution_content_section');
$customized_solution_button_section         = get_field('customized_solution_button_section');
?>
<section id="customized_solution_6" class="w-100 section_4  section-customized_solution">
    <div class="section-space">
        <div class="container custom-solution">
            <div class="solution-section">

                <div class="mobile_solution_tooltip">
                    <div class="expert-tooltip">
                        <?php if(!empty($customized_solution_profile_image)): ?>
                        <img src="<?php echo $customized_solution_profile_image['url']; ?>" alt="<?php echo $customized_solution_profile_image['alt']; ?>" />
                        <div class="custom-tooltip">
                            <?php if(!empty($customized_solution_profile_info_2)): ?>
                            <p class="normal-paragraph-desktop">“<?= $customized_solution_profile_info_2; ?>”</p>
                            <?php endif; ?>
                            <?php if(!empty($customized_solution_profile_name_2)): ?>
                            <p class="dark-paragraph-desktop"><?= $customized_solution_profile_name_2; ?></p>    
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if(!empty($customized_solution_heading_2)): ?>
                <div class="solution-title">
                    <h2><?php echo $customized_solution_heading_2; ?></h2>
                </div>
                <?php endif; ?>
                <div class="solution-main">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-xl-7">
                            <?php if(!empty($customized_solution_image)): ?>
                                <div class="solution-left">
                                    <img src="<?php echo $customized_solution_image['url']; ?>" alt="<?php echo $customized_solution_image['alt']; ?>" />
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-xl-5">
                            <div class="solution-right">
                                <div class="expert-tooltip">
                                    <?php if(!empty($customized_solution_profile_image)): ?>
                                    <img src="<?php echo $customized_solution_profile_image['url']; ?>" alt="<?php echo $customized_solution_profile_image['alt']; ?>" />
                                    <div class="custom-tooltip">
                                        <?php if(!empty($customized_solution_profile_info_2)): ?>
                                        <p class="normal-paragraph-desktop">“<?= $customized_solution_profile_info_2; ?>”</p>
                                        <?php endif; ?>
                                        <?php if(!empty($customized_solution_profile_name_2)): ?>
                                        <p class="dark-paragraph-desktop"><?= $customized_solution_profile_name_2; ?></p>    
                                        <?php endif; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="expert-description description-space">
                                    <?php if(!empty($customized_solution_sub_title_section)): ?>
                                        <h6><?= $customized_solution_sub_title_section; ?></h6>
                                    <?php endif; ?>
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
                    </div>
                </div>
            </div>
        </div>
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
<section id="employee_section_7" class="w-100 section_7 top-space-sec  section-employee_section">
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
<?php
$promise_title = get_field('promise_title');
?>
<section id="promises_section_8" class="w-100 section_8  section-promises_section">
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

<?php
$every_moment_heading  = get_field('every_moment_heading');
$every_moment_sub_heading  = get_field('every_moment_sub_heading');
$moments  = get_field('moments');

?> 
<section id="every_moment_9" class="w-100 section_8  section-every_moment">
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
                        <?php if(!empty($moment['image'])): ?>
                        <a href="<?php echo $moment['link']['url']; ?>" title="<?php echo $moment['link']['title']; ?>">
                            <img src="<?php echo $moment['image']['url']; ?>" alt="<?php echo $moment['image']['alt']; ?>" />
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="slider-head primary-ming" style="background-color: <?php echo $moment['link_bg_color']; ?>;">
                        <a href="<?php echo $moment['link']['url']; ?>" title="<?php echo $moment['link']['title']; ?>"><?php echo $moment['link']['title']; ?></a>
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