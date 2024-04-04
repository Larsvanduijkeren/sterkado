	
<?php 
/* Template Name: Vraag Demo Aan */ 
get_header();
?>
<?php
$hero_section_title      = get_field('hero_section_title');
$hero_section_content    = get_field('hero_section_content');
$hero_section_quote_author_image    = get_field('hero_section_quote_author_image');
$hero_section_quote_text    = get_field('hero_section_quote_text');
$hero_quote_author_name    = get_field('hero_quote_author_name');
$hero_section_form_background_image    = get_field('hero_section_form_background_image');
$hero_section_form_title    = get_field('hero_section_form_title');
$hero_section_form_subtitle    = get_field('hero_section_form_subtitle');
$hero_section_form_shortcode    = get_field('hero_section_form_shortcode');
$hero_section_form_bottom_text    = get_field('hero_section_form_bottom_text');

?> 
<section id="hero_banner_section_1" class="w-100 section_1  section-hero_banner_section section-hero_banner_contact">   
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12  norightpadding text-left">
                <?php if(!empty($hero_section_title)): ?>
                    <h1><?php echo $hero_section_title; ?></h1>
                <?php endif; ?>   
                <?php if(!empty($hero_section_content)): ?>
                    <div class="hero_section_content"><?php echo $hero_section_content; ?></div>
                <?php endif; ?>   
                
                <?php if($hero_section_quote_author_image || $hero_section_quote_text): ?>
                <div class="user-text d-flex align-items-center left-to-right-arrow">
                    <div class="user-img">
                        <img src="<?php echo $hero_section_quote_author_image; ?>">
                    </div>
                    <div class="user-content">
                        <p><?php echo $hero_section_quote_text; ?></p>
                        <strong><?php echo $hero_quote_author_name; ?></strong>
                    </div>
                </div>
                <?php endif; ?>   
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-box">
                    <div class="form-img">
                        <img src="<?php echo $hero_section_form_background_image; ?>">
                    </div>
                    <div class="hero-contact-form-section form-new-design" style="background:url('<?php echo $hero_section_form_background_image; ?>');">
                        <?php if(!empty($hero_section_form_title)): ?>
                            <h3><?php echo $hero_section_form_title; ?></h3>
                        <?php endif; ?> 
                        <?php if(!empty($hero_section_form_subtitle)): ?>
                            <p><?php echo $hero_section_form_subtitle; ?></p>
                        <?php endif; ?>  


                        <?php 
                        $hero_section_form_shortcode=get_field('hero_section_form_shortcode'); 
                        if($_GET['quote']){
                            $quote=$_GET['quote'];
                        }
                        if($_GET['p_id']){
                            $product_id=$_GET['p_id'];
                            if(is_numeric($product_id)){
                                $product_title=get_the_title($product_id);
                            }else{
                                $product_title=$_GET['p_id'];
                            }
                        }
                        if($hero_section_form_shortcode):

                        
                        //$form_shortcode='[gravityform id="'.$hero_section_form_shortcode.'" title="false" ajax="true" field_values="input_5='.$quote.'"]';

                        gravity_form( $hero_section_form_shortcode, false, false, false, array('quote' => $quote,'product_title'=> $product_title), true, '', true);

                       // echo do_shortcode( $form_shortcode); 
                        endif;
                        ?>
                        
                        <div class="rating-text vrag-ratting">
                            <?php if(!empty($hero_section_form_bottom_text)): ?>
                                <p><?php echo $hero_section_form_bottom_text; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <?php if($hero_section_quote_author_image || $hero_section_quote_text): ?>
                <div class="user-text d-flex align-items-center left-to-right-arrow mobile-view">
                    <div class="user-img">
                        <img src="<?php echo $hero_section_quote_author_image; ?>">
                    </div>
                    <div class="user-content">
                        <?php if($hero_section_quote_text): ?>
                            <p>"<?php echo $hero_section_quote_text; ?>"</p>
                        <?php endif; ?>
                        <strong><?php echo $hero_quote_author_name; ?></strong>
                    </div>
                </div>
                <?php endif; ?> 

        </div>
    </div>
</section>
<?php
  $logo_title       = get_field('logo_title');
  $logos            = get_field('logos');
  $is_logo_section_background    = get_field('is_logo_section_background');
  $logo_section_background_color = get_field('logo_section_background_color');
?> 
<section id="logo_section_2" class="w-100 section_2  section-logo_section">
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
$faq_title  = get_field('faq_title');
$faqs  = get_field('faqs');
?> 
<?php if($faq_title || $faqs) :?>
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
<?php endif ; ?>
<?php
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
<section id="cta_with_image_5" class="w-100 section_10  section-cta_with_image employee-sec">
    <div class="section-space">
        <div class="container link-cases content_align_<?= $cta_content_alignment; ?>">
            <div class="row cases-box auto-height remove-margin" <?php if($cat_is_background=='1'):?>style="background:<?= $cta_background_color; ?>"<?php endif; ?>>
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
                    <div class="col-md-4">
                        <img class="w-100" src="<?= $cta_image; ?>" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>    
</section>
<?php get_footer(); ?>