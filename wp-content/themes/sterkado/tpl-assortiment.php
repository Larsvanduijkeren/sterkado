<?php 
/* Template Name: Assortiment */ 
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
	<section id="hero_banner_section_1" class="w-100 section_1  section-hero_banner_section inner-comm-banner"
	    <?php if($hero_section_background_image):?>style="background-image:url(<?= $hero_section_background_image;?>);"
	    <?php endif;?>>
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
	                    <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>"
	                        target="<?php echo esc_attr( $link_target ); ?>">
	                        <?php echo esc_html( $link_title ); ?>
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
	<section class="w-100 section_4  section-customized_image__video_section column-reverse theme-info-space">
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
	                                    <div class="normal-paragraph-desktop"><?php echo $content; ?></div>
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
$content_with_slider_left_title    = get_field('content_with_slider_left_title');
$content_with_slider_left_content       = get_field('content_with_slider_left_content');
$content_with_slider_filter_title     = get_field('content_with_slider_filter_title');
$content_with_slider_slides           = get_field('content_with_slider_slides');
?> 
<section id="content_with_slider_3" class="w-100 section_2  section-content_with_filter_slider">
    <div class="section-space">
        <div class="container content-slides-filter">
            <div class="row align-items-center slider-sec">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="content-slides-left">
                        <?php if(!empty($content_with_slider_left_title)): ?>
                            <h2><?=$content_with_slider_left_title;?></h3>
                        <?php endif; ?>
                        <?php if(!empty($content_with_slider_left_content)): ?>
                            <div class="dec"><?=$content_with_slider_left_content;?></div>
                        <?php endif; ?>
                    </div>
                    <div class="content-slides-filters">
                        <?php if(!empty($content_with_slider_filter_title)): ?>
                            <h6><?=$content_with_slider_filter_title;?></h6>
                        <?php endif; ?>
                        <?php if( have_rows('content_with_slider_slides') ):  ?>
                            <ul class="filter clearfix">
                                <li data-filter="all" class="all active">All</li>
                                <?php while( have_rows('content_with_slider_slides') ): the_row(); 
                                 $title=get_sub_field('title');
                                 $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
                                ?>
                                <li data-filter="<?=  $slug; ?>" class="<?=  $slug; ?>"><?= $title; ?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-slides-right">
                    <div class="content-slider content_filter_slider_slides">
                        <?php foreach ($content_with_slider_slides as $key => $slides): 
                            $title=$slides['title'];
                            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
                            ?>
                            <?php foreach ($slides['images'] as $key => $slide): ?>
                                <div class="slide-item <?= $slug; ?>">
                                    <div class="slider-img">
                                        <?php if(!empty($slide['image'])): ?>
                                            <img src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $slide['image']['alt']; ?>" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
$content_with_slider_left_title_1    = get_field('content_with_slider_left_title_1');
$content_with_slider_left_content_1       = get_field('content_with_slider_left_content_1');
$content_with_slider_left_content     = get_field('content_with_slider_left_content');
$content_with_slider_left_button_1     = get_field('content_with_slider_left_button_1');
$content_with_slider_slides_1           = get_field('content_with_slider_slides_1');
?> 
<section id="content_with_slider_5" class="w-100 section_2  section-content_with_slider slider-assortiment">
    <div class="section-space slider-top-space">
        <div class="container content-slides">
            <div class="row align-items-center slider-sec">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="content-slides-left">
                        <?php if(!empty($content_with_slider_left_title_1)): ?>
                            <h2><?=$content_with_slider_left_title_1;?></h2>
                        <?php endif; ?>
                        <?php if(!empty($content_with_slider_left_content_1)): ?>
                            <p><?=$content_with_slider_left_content_1;?></p>
                        <?php endif; ?>
                        <?php
                         if( $content_with_slider_left_button_1 ): 
                         $button = $content_with_slider_left_button_1['button'];
                         $button_style=$content_with_slider_left_button_1['button_style'];
                     
                         $button_with_arrow=$content_with_slider_left_button_1['button_with_arrow'];
                            if( $button ): 
                                $link_url = $button['url'];
                                $link_title = $button['title'];
                                $link_target = $button['target'] ? $button['target'] : '_self';
                                            ?>
                                <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>"
                                    target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
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
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-slides-right">
                    <div class="content-slider content_slider_slides">
                        <?php foreach ($content_with_slider_slides_1 as $key => $slide): ?>
                        <div class="slide-item">
                            <div class="slider-img">
                                <?php if(!empty($slide['image'])): ?>
                                    <img src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $slide['image']['alt']; ?>" />
                                    <div class="curve">
                                        <svg viewBox="0 0 100 25">
                                            <path fill="#d7e7e7" d="M0 30 V12 Q30 17 55 12 T100 11 V30z"></path>
                                        </svg>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="slider-head primary-ming">
                                <p><?php echo $slide['title']; ?></p>
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
$image_section_1          = get_field('image_section_1');
$profile_image_section_1  = get_field('profile_image_section_1');
$title_section_1          = get_field('title_section_1');
$content_section_1        = get_field('content_section_1');
$button_section_1         = get_field('button_section_1');
?>
<section id="customized_solution_6" class="w-100 section_4  section-customized_solution  solution-main-sec boeken-sec">
    <div class="section-space">
        <div class="container custom-solution">
            <div class="solution-section">
            
                <div class="solution-main">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-xl-6">
                            <?php if(!empty($image_section_1)): ?>
                                <div class="solution-left">
                                    <img src="<?php echo $image_section_1['url']; ?>" alt="<?php echo $image_section_1['alt']; ?>" />
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-xl-6">
                            <div class="solution-right justify-content-center">
                        
                                <div class="expert-description">
                                    <?php if(!empty($title_section_1)): ?>
                                        <h2><?= $title_section_1; ?></h2>
                                    <?php endif; ?>
                                    <?php if(!empty($content_section_1)): ?>
                                    <div class="dec"><?= $content_section_1; ?></div>
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
$charities_gallery_title    = get_field('charities_gallery_title');
$charities_gallery_description     = get_field('charities_gallery_description');
?> 
<section id="charities_gallery_7" class="w-100 section-gift_card_gallery charities_gallery">
    <div class="section-space slider-top-space">
        <div class="container gift_card_gallery">
            <div class="gallery-titel">
                <?php if(!empty($charities_gallery_title)): ?>
                    <div class="title">
                        <h2><?=$charities_gallery_title;?></h2>
                    </div>
                <?php endif; ?>
                <?php if(!empty($charities_gallery_description)): ?>
                    <div class="dec">
                        <?=$charities_gallery_description;?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row align-items-center">
                <?php 
                $charities_gallery_1 = get_field('charities_gallery_1');
                if( $charities_gallery_1 ): ?>
                    <div class="col-md-12">
                        <div class="gift_card_gallery_1 gift_card_gallery">
                            <?php foreach( $charities_gallery_1 as $image ): ?>
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
                $charities_gallery_2 = get_field('charities_gallery_2');
                if( $charities_gallery_2 ): ?>
                    <div class="col-md-12">
                        <div class="gift_card_gallery_2 gift_card_gallery">
                            <?php foreach( $charities_gallery_2 as $image ): ?>
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
$image_section_2          = get_field('image_section_2');
$title_section_2          = get_field('title_section_2');
$content_section_2        = get_field('content_section_2');
$button_section_2         = get_field('button_section_2');
?>
<section id="customized_solution_8" class="w-100 section_4  section-customized_solution  solution-main-sec duurzame-sec">
    <div class="section-space">
        <div class="container custom-solution">
            <div class="solution-section">
                <div class="solution-main">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-xl-6">
                            <div class="solution-right justify-content-end">
                                <div class="expert-description">
                                    <?php if(!empty($title_section_2)): ?>
                                        <h2><?= $title_section_2; ?></h2>
                                    <?php endif; ?>
                                    <?php if(!empty($content_section_2)): ?>
                                    <div class="dec"><?= $content_section_2; ?></div>
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
                        <div class="col-sm-12 col-lg-6 col-xl-6">
                            <?php if(!empty($image_section_2)): ?>
                                <div class="solution-left">
                                    <img src="<?php echo $image_section_2['url']; ?>" alt="<?php echo $image_section_2['alt']; ?>" />
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
$cta_content_alignment = get_field('cta_content_alignment');
$cta_heading          = get_field('cta_heading');
$cta_content          = get_field('cta_content');
$cta_button             = get_field('cta_button');
$cat_is_background    = get_field('cat_is_background');
$cta_background_color = get_field('cta_background_color');

$cta_text_after_button            = get_field('cta_text_after_button');
$cta_image= get_field('cta_image');

if($cta_image){
    $col='6';
}else{
    $col='12';
}
?>
<section id="cta_with_image_section_9" class="w-100 section_10  section-cta_with_image assortiment-cta">
    <div class="section-space">
        <div class="container link-cases content_align_<?= $cta_content_alignment; ?>">
            <div class="row cases-box " <?php if($cat_is_background=='1'):?>style="background:<?= $cta_background_color; ?>"<?php endif; ?>>
                <?php if($cta_image): ?>
                    <div class="col-md-6 text-right client-img">
                        <img class="w-100" src="<?= $cta_image; ?>" />
                    </div>
                <?php endif; ?>
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
                            <p class="bold-text normal-paragraph-desktop"><?=$cta_text_after_button;?></p>
                        <?php endif; ?>
                    </div>
                </div>
               
            </div>
        </div>
    </div>    
</section>
<?php get_footer(); ?>