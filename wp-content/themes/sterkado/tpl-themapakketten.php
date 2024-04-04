<?php 
/* Template Name: Themapakketten */ 
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
  //$hero_section_mobile_background_image = get_field('hero_section_mobile_background_image');
?>
	<section id="hero_banner_section_1" class="w-100 section_1  section-hero_banner_section inner-comm-banner"
	    <?php if($hero_section_background_image):?>style="background-image:url(<?= $hero_section_background_image;?>);"
	    <?php endif;?>>
	    <?php /*if( !empty( $hero_section_mobile_background_image ) ): ?>
        <div class="mobile_bg_img">
            <img src="<?php echo esc_url($hero_section_mobile_background_image['url']); ?>" alt="<?php echo esc_attr($hero_section_mobile_background_image['alt']); ?>" />
        </div>
    	<?php endif; */ ?>
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
$get_inspired_title = get_field('get_inspired_title');
$get_inspired_subtitle = get_field('get_inspired_subtitle');
$get_inspired_arrow_text = get_field('get_inspired_arrow_text');
$download_brochure_form_shortcode = get_field('download_brochure_form_shortcode');
$get_inspired_text_after_button = get_field('get_inspired_text_after_button');

?>
	<section id="get_inspired_section_3" class="w-100  get-inspired_section themapakketten">
	    <div class="container">

	        <div class="row">
	            <div class="col-xl-6 col-lg-5 col-ms-6 col-sm-12">
	                <?php if ($get_inspired_title) : ?> <h2 class="get-inspired-title"><?php echo $get_inspired_title; ?>
	                </h2> <?php endif; ?>
					<?php if ($get_inspired_subtitle) : ?> <p class="get-inspired-subtitle">
	                        <?php echo $get_inspired_subtitle; ?></p> <?php endif; ?>
	            </div>
	            <div class="col-xl-6 col-lg-7 col-ms-6 col-sm-12 text-right text-right-desktop">
	                <div class="title_subtitle">
	                    <?php if ($get_inspired_arrow_text) : ?> <p class="stylist_txt">
	                        <?php echo $get_inspired_arrow_text; ?></p> <?php endif; ?>
	                   
	                </div>
	                <div class="download_brochure_form form_3_desktop">
	                    <?php echo do_shortcode( $download_brochure_form_shortcode ); ?>
						<a href="" class="lookbook_link" style="display:none;"></a>
	                </div>
	                <?php if ($get_inspired_text_after_button) : ?>
	                <p class="text_after_button"> <?php echo $get_inspired_text_after_button; ?></p> <?php endif; ?>
	            </div>
	        </div>
	        <?php
            if( have_rows('get_inspired_items') ): ?>
	        <div class="row get-inspired-wrapper">
	            <?php
                        while( have_rows('get_inspired_items') ) : the_row(); ?>
	            <div class="col-lg-3 col-md-3 col-sm-12">
	                <div class="get_inspired_item">
	                    <div class="get-inspired-img">
	                        <img src="<?php the_sub_field('image'); ?>" alt="">
	                    </div>
	                    <?php 
								$select_product=get_sub_field('select_product');
                                $link = get_sub_field('link');
                                if( $hero_button_1 ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
	                    <div class="get-inspired-link">
	                        <svg viewBox="0 0 500 150" preserveAspectRatio="none"
	                            style="height: 100%;width: 100%;position: absolute;left: 0;height: auto;">
	                            <path d="M0,100 C250,150 350,30 500,100 L500,00 L0,0 Z"
	                                style="stroke: none; fill:#9FC4C4;"></path>
	                        </svg>
	                        <a href="<?php echo esc_url( $link_url ); ?>" class="<?php if($select_product){ echo "product_details_btn"; }?>" data-product_id="<?php echo $select_product; ?>"><?php echo esc_html( $link_title ); ?></a>
							<span id="product_popop_loader_<?php echo $select_product; ?>" class="product_popop_loader" style="display:none;"></span>
	                    </div>
	                    <?php endif; ?>
	                </div>

	            </div>

	            <?php
                    endwhile; ?>
	        </div>
	        <?php
            endif;
        ?>
	        <div class="col-xl-6 col-lg-7 col-ms-6 col-sm-12 text-right-mobile">
	            <div class="download_brochure_form form_3_mob">
	                <?php echo do_shortcode( $download_brochure_form_shortcode ); ?>
	            </div>
	            <?php if ($get_inspired_text_after_button) : ?>
	            <p class="text_after_button"> <?php echo $get_inspired_text_after_button; ?></p> <?php endif; ?>
	            <div class="title_subtitle">
	                <?php if ($get_inspired_arrow_text) : ?> <p class="stylist_txt"><?php echo $get_inspired_arrow_text; ?>
	                </p> <?php endif; ?>
	                <?php if ($get_inspired_subtitle) : ?> <h4 class="get-inspired-subtitle">
	                    <?php echo $get_inspired_subtitle; ?></h4> <?php endif; ?>
	            </div>
	        </div>
	    </div>
	</section>

	<?php
$promise_title = get_field('promise_title');
?>
	<section id="promises_section_4" class="w-100 section_8  section-promises_section">
	    <div class="container">
	        <?php if ($promise_title) : ?> <h2 class="latest_news__title"><?php echo $promise_title; ?></h2>
	        <?php endif; ?>
	        <?php
            if( have_rows('promises') ): ?>
	        <div class="row promises-wrapper">
	            <?php
                        while( have_rows('promises') ) : the_row(); ?>
	            <div class="col-lg-4 col-md-4 col-sm-12">
	                <div class="promises-item">
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
  $gift_section_heading       = get_field('gift_section_heading');
  $gifts         = get_field('gifts');

  $numOfCols = count($gifts);
  $rowCount = 0;
  $ColWidth = 12 / $numOfCols;
?>
	<section id="right_gift_5" class="w-100 section_3  section-right_gift">
	    <div class="section-space">
	        <div class="custom-solution-container our-offers4 container">
	            <div class="gift-section ">
	                <?php if(!empty($gift_section_heading)): ?>
	                <div class="gift-title text-center">
	                    <h2><?= $gift_section_heading;?></h2>
	                </div>
	                <?php endif; ?>
	                <div class="gift-listing">
	                    <div class="row">
	                        <?php foreach ($gifts as $key => $gift): ?>
	                        <div class="col-sm-12 col-md-6 col-xl-3">
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
	                                <?= $gift['short_description'];?>
	                                <!-- <p class="normal-paragraph-desktop"></p> -->
	                                <?php endif; ?>
	                                <?php if(!empty($gift['link'])): ?>
	                                <a href="<?= $gift['link']['url'];?>"
	                                    title="<?= $gift['link']['title'];?>"><?= $gift['link']['title'];?></a>
	                                <?php endif; ?>
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
$every_moment_heading  = get_field('every_moment_heading');
$every_moment_sub_heading  = get_field('every_moment_sub_heading');
$moments  = get_field('moments');

?>
	<section id="every_moment_6" class="w-100 section_8  section-every_moment">
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
	                        <a href="<?php echo $moment['link']['url']; ?>"
	                            title="<?php echo $moment['link']['title']; ?>">
	                            <img src="<?php echo $moment['image']['url']; ?>"
	                                alt="<?php echo $moment['image']['alt']; ?>" />
	                        </a>
	                        <?php endif; ?>
	                    </div>
	                    <div class="slider-head primary-ming"
	                        style="background-color: <?php echo $moment['link_bg_color']; ?>;">
	                        <a href="<?php echo $moment['link']['url']; ?>"
	                            title="<?php echo $moment['link']['title']; ?>"><?php echo $moment['link']['title']; ?></a>
	                    </div>
	                </div>
	                <?php endforeach; ?>
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
	<section id="employee_section_7" class="w-100 section_7  section-employee_section">
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
	<section id="latest_news_8" class="w-100 section_12  section-latest_news">
	    <div class="container">
	        <?php if ($latest_news_title) : ?> <h2 class="latest_news__title"><?php echo $latest_news_title; ?></h2>
	        <?php endif; ?>
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