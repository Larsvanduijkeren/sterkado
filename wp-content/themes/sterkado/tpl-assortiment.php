<?php 
/* Template Name: Assortiment */ 
get_header();
?>

<?php

  $hero_title   = get_field('hero_title');
  $boxes     	= get_field('boxes');

  global $post;
  $rank_math_focus_keyword                  = get_post_meta($post->ID, 'rank_math_focus_keyword', true);
    if( strpos($rank_math_focus_keyword, ",") !== false ) {
        $rank_math_focus_keyword            = explode(",",$rank_math_focus_keyword);
        $rank_math_focus_keyword            = $rank_math_focus_keyword[0];
    }else{
        $rank_math_focus_keyword            = $rank_math_focus_keyword;
    }

?>
<section id="hero_banner_section_1" class="w-100 section-hero_banner_section section-hero-assortiment assortiment-section">
    <div class="container every-moments">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <?php if(!empty($hero_title)): ?>
                    <div class="moment-title text-left">
                        <h2><?php echo $hero_title; ?></h2>
                    </div>
                <?php endif; ?>
                <?php if(!empty($boxes)): ?>
                <div class="assort-moment-nav">
                    <?php foreach ($boxes as $key => $box): ?>
                        <div class="assort-moment-card">
                            <div class="slider-img">
                                <?php if(!empty($box['heading'])): ?>
                                <a href="#<?php echo $box['link_section_id']; ?>" title="<?php echo $box['heading']; ?>" tabindex="0">
                                    <img src="<?php echo $box['image']['url']; ?>" alt="<?php echo $box['image']['alt']; ?>">
                                </a>
                                <?php endif; ?>
                            </div>
                            <div class="slider-head">
                                <?php if(!empty($box['heading'])): ?>
                                    <a href="#<?php echo $box['link_section_id']; ?>" title="<?php echo $box['heading']; ?>"><?php echo $box['heading']; ?></a>
                                <?php endif; ?>
                                <?php if(!empty($box['content'])): ?>
                                    <p class="desc"><?php echo $box['content']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php

	$gift_card_gallery_title    		= get_field('gift_card_gallery_title');
	$gift_card_gallery_description     	= get_field('gift_card_gallery_description');
	$gift_card_gallery_arrow_text    	= get_field('gift_card_gallery_arrow_text');

?> 
<section id="cadeaukaarten_2" class="w-100 section-gift_card_gallery cadeaukaarten_gallery assortiment-section">
    <div class="section-space slider-top-space">
        <div class="container gift_card_gallery">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="assortiment-hdng-row">
                        <div class="row align-items-start">
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <div class="content-slides-left p-0">
                                    <?php if(!empty($gift_card_gallery_title)): ?>
                                        <h2><?=$gift_card_gallery_title;?></h2>
                                    <?php endif; ?>
                                    <?php if(!empty($gift_card_gallery_description)): ?>
                                        <div class="dec mb-0">
                                            <?=$gift_card_gallery_description;?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(!empty($gift_card_gallery_arrow_text)): ?>
                                        <div class="hdng-w-arrow arw-pos-center">
                                            <p><?php echo $gift_card_gallery_arrow_text; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid gallery-marquee">
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
    </div>
</section>

<?php
$content_with_slider_left_title         = get_field('content_with_slider_left_title');
$content_with_slider_left_content       = get_field('content_with_slider_left_content');
$content_with_slider_filter_title       = get_field('content_with_slider_filter_title');
$content_with_slider_slides             = get_field('content_with_slider_slides');
$webshop_box                            = get_field('webshop_box');    

?> 
<section id="cadeaus_3" class="w-100 section_2  section-content_with_filter_slider section-cadeaus-new assortiment-section">
    <div class="section-space">
        <div class="container content-slides-filter">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="assortiment-hdng-row">
                        <div class="row align-items-start">
                            <div class="col-lg-8 col-md-7 col-sm-12">
                                <div class="content-slides-left p-0">
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
                                            <?php $cls = 'active'; ?>
                                            <?php while( have_rows('content_with_slider_slides') ): the_row(); 
                                             $title = get_sub_field('title');
                                             $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
                                            ?>
                                            <li data-filter="<?=  $slug; ?>" class="filtertab <?=  $slug; ?> <?php echo $cls; ?>"><?= $title; ?></li>
                                            <?php $cls = ''; ?>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-12 content-slides-right">
                                <div class="request-quote-box case-sidebar-box case-sidebar-box-sm">
                                    <?php if(!empty($webshop_box['ws_title'])): ?>
                                        <h2><?php echo $webshop_box['ws_title']; ?></h2>
                                    <?php endif; ?>
                                    <?php if(!empty($webshop_box['ws_content'])): ?>
                                        <p><?php echo $webshop_box['ws_content']; ?></p>
                                    <?php endif; ?>
                                    <?php if(!empty($webshop_box['ws_button'])): ?>
                                        <a class="btn btn-primary mt-3" href="<?php echo $webshop_box['ws_button']['url']; ?>"><?php echo $webshop_box['ws_button']['title']; ?></a>
                                    <?php endif; ?>
                                    <?php if(!empty($webshop_box['ws_mailbox_text'])): ?>
                                        <div class="vrag-ratting">
                                            <p><?php echo $webshop_box['ws_mailbox_text']; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="content-slides-right">
                        <div class="content-slider">
                            <?php $cls = 'active'; ?>
                            <?php foreach ($content_with_slider_slides as $key => $slides): 
                                $title = $slides['title'];
                                $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
                                ?>
                                <div class="tab-content slidebox <?php echo $slug; ?> <?php echo $cls;?>">
                                    <?php foreach ($slides['images'] as $key => $slide): ?>
                                        <div class="slide-item ">
                                            <div class="slider-img">
                                                <?php if(!empty($slide['tag'])): ?>
                                                    <div class="green-button green-button-assort">
                                                        <a href="javascript:;"><?php echo $slide['tag']; ?></a>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if(!empty($slide['image'])): ?>
                                                    <img src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $slide['image']['alt']; ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <?php $cls = ''; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$entertainment_images         = get_field('entertainment_images');
$entertainment_title          = get_field('entertainment_title');
$entertainment_content        = get_field('entertainment_content');
$entertainment_button         = get_field('entertainment_button');
?>
<section id="entertainment_4" class="w-100 section_4  section-customized_solution  solution-main-sec boeken-sec assortiment-section">
    <div class="section-space">
        <div class="container custom-solution">
            <div class="solution-section">
                <div class="solution-main">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-xl-6">
                            <?php if(!empty($entertainment_images)): ?>
	                        	<div class="service-top-right customized-carousel">
	                            <?php foreach ($entertainment_images as $key => $img):
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
                        <div class="col-sm-12 col-lg-6 col-xl-6">
                            <div class="solution-right justify-content-center">
                        
                                <div class="expert-description">
                                    <?php if(!empty($entertainment_title)): ?>
                                        <h2><?= $entertainment_title; ?></h2>
                                    <?php endif; ?>
                                    <?php if(!empty($entertainment_content)): ?>
                                    <div class="dec"><?= $entertainment_content; ?></div>
                                    <?php endif; ?>
                                    <?php
                                        if( $entertainment_button ): ?>
                                                <?php 
                                                    $button = $entertainment_button['button'];
                                                    $button_style=$entertainment_button['button_style'];
                                             
                                                    $button_with_arrow=$entertainment_button['button_with_arrow'];
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
$content_with_slider_left_title_1       = get_field('content_with_slider_left_title_1');
$content_with_slider_left_content_1     = get_field('content_with_slider_left_content_1');
$content_with_slider_left_content       = get_field('content_with_slider_left_content');
$content_with_slider_left_button_1      = get_field('content_with_slider_left_button_1');
$content_with_slider_slides_1           = get_field('content_with_slider_slides_1');
$content_with_slider_left_arrow_text_1  = get_field('content_with_slider_left_arrow_text_1');
$webshop_box_1                          = get_field('webshop_box_1');


?> 
<section id="belevenissen_5" class="w-100 section_2  section-content_with_slider slider-assortiment assortiment-section">
    <div class="section-space slider-top-space">
        <div class="container content-slides">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="assortiment-hdng-row">
                        <div class="row align-items-start">
                            <div class="col-lg-8 col-md-7 col-sm-12">
                                <div class="content-slides-left">
                                    <?php if(!empty($content_with_slider_left_title_1)): ?>
                                        <h2><?=$content_with_slider_left_title_1;?></h2>
                                    <?php endif; ?>
                                    <?php if(!empty($content_with_slider_left_content_1)): ?>
                                        <?=$content_with_slider_left_content_1;?>
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
                                    <?php if(!empty($content_with_slider_left_arrow_text_1)): ?>
                                        <div class="hdng-w-arrow">
                                            <p><?php echo $content_with_slider_left_arrow_text_1; ?><p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-12 content-slides-right">
                                <div class="request-quote-box case-sidebar-box case-sidebar-box-sm">
                                    <?php if(!empty($webshop_box_1['ws_title'])): ?>
                                        <h2><?php echo $webshop_box_1['ws_title']; ?></h2>
                                    <?php endif; ?>
                                    <?php if(!empty($webshop_box_1['ws_content'])): ?>
                                        <p><?php echo $webshop_box_1['ws_content']; ?></p>
                                    <?php endif; ?>
                                    <?php if(!empty($webshop_box_1['ws_button'])): ?>
                                        <a class="btn btn-primary mt-3" href="<?php echo $webshop_box_1['ws_button']['url']; ?>"><?php echo $webshop_box_1['ws_button']['title']; ?></a>
                                    <?php endif; ?>
                                    <?php if(!empty($webshop_box_1['ws_mailbox_text'])): ?>
                                        <div class="vrag-ratting">
                                            <p><?php echo $webshop_box_1['ws_mailbox_text']; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-slider content_slider_slides belevenissen-gallery-col">
                        <?php foreach ($content_with_slider_slides_1 as $key => $slide): ?>
                        <div class="slide-item">
                            <div class="slider-img">
                                <?php if(!empty($slide['tag'])): ?>
                                    <div class="green-button green-button-assort">
                                        <a href="javascript:;"><?php echo $slide['tag']; ?></a>
                                    </div>
                                <?php endif; ?>
                                <?php if(!empty($slide['image'])): ?>
                                    <img src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $slide['image']['alt']; ?>" />
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
$image_section_2          = get_field('image_section_2');
$title_section_2          = get_field('title_section_2');
$content_section_2        = get_field('content_section_2');
$button_section_2         = get_field('button_section_2');
?>
<section id="duurzame_6" class="w-100 section_4  section-customized_solution  solution-main-sec boeken-sec assortiment-section">
    <div class="section-space">
        <div class="container custom-solution">
            <div class="solution-section">
            
                <div class="solution-main">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-xl-6">
                            <?php if(!empty($image_section_2)): ?>
	                        	<div class="service-top-right customized-carousel">
	                            <?php foreach ($image_section_2 as $key => $img):
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
                        <div class="col-sm-12 col-lg-6 col-xl-6">
                            <div class="solution-right justify-content-center">
                        
                                <div class="expert-description">
                                    <?php if(!empty($title_section_2)): ?>
                                        <h2><?= $title_section_2; ?></h2>
                                    <?php endif; ?>
                                    <?php if(!empty($content_section_2)): ?>
                                    <div class="dec"><?= $content_section_2; ?></div>
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
$charities_gallery_title    		= get_field('charities_gallery_title');
$charities_gallery_description     	= get_field('charities_gallery_description');
$charities_gallery_arrow_text     	= get_field('charities_gallery_arrow_text');
$charities_gallery_webshop_box     	= get_field('charities_gallery_webshop_box');

?> 
<section id="goede_7" class="w-100 section-gift_card_gallery charities_gallery assortiment-section">
    <div class="section-space slider-top-space">
        <div class="container content-slides">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                  <div class="assortiment-hdng-row mb-1">
                    <div class="row align-items-start">
                        <div class="col-lg-8 col-md-7 col-sm-12">
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
                            <?php if(!empty($charities_gallery_arrow_text)): ?>
                                <div class="hdng-w-arrow arw-pos-center">
                                    <p><?php echo $charities_gallery_arrow_text; ?><p>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-12 content-slides-right">
                            <div class="request-quote-box case-sidebar-box case-sidebar-box-sm">
                                <?php if(!empty($charities_gallery_webshop_box['ws_title'])): ?>
                                    <h2><?php echo $charities_gallery_webshop_box['ws_title']; ?></h2>
                                <?php endif; ?>
                                <?php if(!empty($charities_gallery_webshop_box['ws_content'])): ?>
                                    <p><?php echo $charities_gallery_webshop_box['ws_content']; ?></p>
                                <?php endif; ?>
                                <?php if(!empty($charities_gallery_webshop_box['ws_button'])): ?>
                                    <a class="btn btn-primary mt-3" href="<?php echo $charities_gallery_webshop_box['ws_button']['url']; ?>"><?php echo $charities_gallery_webshop_box['ws_button']['title']; ?></a>
                                <?php endif; ?>
                                <?php if(!empty($charities_gallery_webshop_box['ws_mailbox_text'])): ?>
                                    <div class="vrag-ratting">
                                        <p><?php echo $charities_gallery_webshop_box['ws_mailbox_text']; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>  
                </div>
            </div>
        </div>
        <div class="container-fluid gallery-marquee">
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
    </div>
</section>

<?php
$cta_content_alignment 		= get_field('cta_content_alignment');
$cta_heading          		= get_field('cta_heading');
$cta_content          		= get_field('cta_content');
$cta_button             	= get_field('cta_button');
$cat_is_background    		= get_field('cat_is_background');
$cta_background_color 		= get_field('cta_background_color');

$cta_text_after_button      = get_field('cta_text_after_button');
$cta_image					= get_field('cta_image');

if($cta_image){
    $col='6';
}else{
    $col='12';
}
?>
<section id="cta_9" class="w-100 section_10  section-cta_with_image assortiment-cta assortiment-section">
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