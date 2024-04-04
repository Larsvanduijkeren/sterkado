	
<?php 
/* Template Name: Keuze Kado
*/ 
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
        <div class="row align-items-center">
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
  $left_title_right_content_heading = get_field('left_title_right_content_heading');
  $left_title_right_content_content = get_field('left_title_right_content_content');
?> 
<section id="logo_section_2" class="w-100 section_1  section-logo_section">

    <div class="section-space arrow-bottom" >
        <div class="container our-customers2" >
            <?php if(!empty($left_title_right_content_heading) && !empty($left_title_right_content_content)): ?>
            <div class="employee-unique-bottom">
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
$content_with_slider_section_title    = get_field('content_with_slider_section_title');
$content_with_slider_left_title       = get_field('content_with_slider_left_title');
$content_with_slider_left_content     = get_field('content_with_slider_left_content');
$content_with_slider_slides           = get_field('content_with_slider_slides');
?> 
<section id="content_with_slider_section_3" class="w-100 section_2  section-content_with_slider">
    <div class="section-space slider-top-space">
        <div class="container content-slides">
            <?php if(!empty($content_with_slider_section_title)): ?>
            <div class="slide-title">
                <h2><?=$content_with_slider_section_title;?></h2>
            </div>
            <?php endif; ?>
            <div class="row align-items-center slider-sec">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="content-slides-left">
                        <?php if(!empty($content_with_slider_left_title)): ?>
                            <h3><?=$content_with_slider_left_title;?></h3>
                        <?php endif; ?>
                        <?php if(!empty($content_with_slider_left_content)): ?>
                            <p><?=$content_with_slider_left_content;?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-slides-right">
                    <div class="content-slider content_slider_slides">
                        <?php foreach ($content_with_slider_slides as $key => $slide): ?>
                        <div class="slide-item <?php if($slide['select_product']){ echo "product_details_btn"; } ?>   no_price" data-product_id="<?php echo $slide['select_product']; ?>">
                            <div class="slider-img">
                                <?php if(!empty($slide['image'])): ?>
                                    <img src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $slide['image']['alt']; ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="slider-head primary-ming">
                                <p><?php echo $slide['title']; ?><?php if($slide['select_product']): ?><span class="product_details_btn no_price" data-product_id="<?php echo $slide['select_product']; ?>"><img class=""  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/i.svg"/></span><span id="product_popop_loader_<?php echo $slide['select_product']; ?>" class="product_popop_loader" style="display: none;"></span><?php endif; ?></p>
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
if( have_rows('customized_image__video_section') ):
    $i=1;
    while( have_rows('customized_image__video_section') ) : the_row();

    ?>
    <section id="customized_image_video_section_4_<?= $i; ?>" class="w-100 section_4  section-customized_image__video_section column-reverse">
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
                                    <div class="description-top top-arrow">
                                        <p><?php echo $image_description; ?></p>
                                    </div>
                                <?php endif; ?>
                                <div class="service-top-left">
                                    
                                    <div class="service-description ">
                                        
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
    $i++;
    endwhile;
endif;
?>
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
$customized_solution_heading                  = get_field('customized_solution_heading');
$select_image_or_video_1  = get_field('select_image_or_video_1');
$image_section_1          = get_field('image_section_1');
$video_section_1                  = get_field('video_section_1');
$video_poster_section_1           = get_field('video_poster_section_1');

$profile_image_section_1  = get_field('profile_image_section_1');
$customized_solution_profile_info             = get_field('customized_solution_profile_info');
$customized_solution_profile_name             = get_field('customized_solution_profile_name');
$title_section_1          = get_field('title_section_1');
$content_section_1        = get_field('content_section_1');
$button_section_1         = get_field('button_section_1');
?>
<section id="customized_solution_6" class="w-100 section_4  section-customized_solution">
    <div class="section-space">
        <div class="container custom-solution">
            <div class="solution-section">

                <div class="mobile_solution_tooltip">
                    <div class="expert-tooltip show-tooltip">
                        <?php if(!empty($profile_image_section_1)): ?>
                        <img src="<?php echo $profile_image_section_1['url']; ?>" alt="<?php echo $profile_image_section_1['alt']; ?>" />
                        <div class="custom-tooltip">
                            <?php if(!empty($customized_solution_profile_info)): ?>
                            <p class="normal-paragraph-desktop">“<?= $customized_solution_profile_info; ?>”</p>
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
                        <div class="col-sm-12 col-lg-6 col-xl-7">
                                <?php if($select_image_or_video_1=="video"){ ?>
                                    <?php if(!empty($video_section_1)): ?>
                                        <video width="100%" height="100%" controls poster="<?php echo $video_poster_section_1; ?>">
                                            <source src="<?php echo $video_section_1; ?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    <?php endif; ?>
                                <?php }else{?>
                                    <?php if(!empty($image_section_1)): ?>
                                    
                                        <div class="solution-left">
                                            <img src="<?php echo $image_section_1['url']; ?>" alt="<?php echo $image_section_1['alt']; ?>" />
                                        </div>
                                    <?php endif; ?>
                                <?php } ?>
                           
                        </div>
                        <div class="col-sm-12 col-lg-6 col-xl-5">
                            <div class="solution-right">
                                <div class="expert-tooltip">
                                    <?php if(!empty($profile_image_section_1)): ?>
                                    <img src="<?php echo $profile_image_section_1['url']; ?>" alt="<?php echo $profile_image_section_1['alt']; ?>" />
                                    <div class="custom-tooltip">
                                        <?php if(!empty($customized_solution_profile_info)): ?>
                                        <p class="normal-paragraph-desktop">“<?= $customized_solution_profile_info; ?>”</p>
                                        <?php endif; ?>
                                        <?php if(!empty($customized_solution_profile_name)): ?>
                                        <p class="dark-paragraph-desktop"><?= $customized_solution_profile_name; ?></p>    
                                        <?php endif; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>
<?php
$promise_title = get_field('promise_title');
?>
<section id="promises_section_7" class="w-100 section_8  section-promises_section">
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
<section id="every_moment_section_8" class="w-100 section_8  section-every_moment">
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
$cta_content_alignment = get_field('cta_content_alignment');
$cta_heading          = get_field('cta_heading');
$cta_content          = get_field('cta_content');
$cta_button             = get_field('cta_button');
$cat_is_background    = get_field('cat_is_background');
$cta_background_color = get_field('cta_background_color');

$cta_text_after_button            = get_field('cta_text_after_button');
$cta_image= get_field('cta_image');

if($cta_image){
    $col='8';
}else{
    $col='12';
}
?>
<section id="cta_with_image_section_9" class="w-100 section_10  section-cta_with_image">
    <div class="section-space">
        <div class="container link-cases content_align_<?= $cta_content_alignment; ?>">
            <div class="row cases-box " <?php if($cat_is_background=='1'):?>style="background:<?= $cta_background_color; ?>"<?php endif; ?>>
                <div class="col-md-<?= $col; ?>">
                    <div class="case-description">
                        <?php if(!empty($cta_heading)): ?>
                            <h2><?php echo $cta_heading; ?></h2>
                        <?php endif; ?>
                        <?php if(!empty($cta_content)): ?>
                            <p class="normal-paragraph-desktop"><?=$cta_content;?></p>
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
                        <?php if(!empty($cta_text_after_button)): ?>
                            <p class="font-italic normal-paragraph-desktop"><?=$cta_text_after_button;?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if($cta_image): ?>
                    <div class="col-md-4 text-right client-img">
                        <img class="w-100" src="<?= $cta_image; ?>" />
                    </div>
                <?php endif; ?>
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
<section  id="employee_section_10" class="w-100 section_7  section-employee_section">
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
$latest_news_title = get_field('latest_news_title');
$news_post = get_field('news_post');
?>
<section id="latest_news_11" class="w-100 section_12  section-latest_news">
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