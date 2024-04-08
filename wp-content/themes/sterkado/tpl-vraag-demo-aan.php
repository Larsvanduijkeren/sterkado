	
<?php 
/* Template Name: Vraag Demo Aan */ 
get_header();
?>
<?php
$hero_section_title                     = get_field('hero_section_title');
$hero_section_content                   = get_field('hero_section_content');
$hero_section_quote_author_image        = get_field('hero_section_quote_author_image');
$hero_section_quote_text                = get_field('hero_section_quote_text');
$hero_quote_author_name                 = get_field('hero_quote_author_name');
$hero_telephone_text                    = get_field('hero_telephone_text');
$hero_telephone_number                  = get_field('hero_telephone_number');
$hero_section_form_background_image     = get_field('hero_section_form_background_image');
$hero_section_form_title                = get_field('hero_section_form_title');
$hero_section_form_subtitle             = get_field('hero_section_form_subtitle');
$hero_section_form_shortcode            = get_field('hero_section_form_shortcode');
$hero_section_form_bottom_text          = get_field('hero_section_form_bottom_text');

?> 
<section id="hero_banner_section_1" class="w-100 section_1  section-hero_banner_section section-hero_banner_contact">   
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12  norightpadding text-left">
                <?php if(!empty($hero_section_title)): ?>
                    <h1><?php echo $hero_section_title; ?></h1>
                <?php endif; ?>   
                <?php if(!empty($hero_section_content)): ?>
                    <div class="hero_section_content demo_hero_section_content"><?php echo $hero_section_content; ?></div>
                <?php endif; ?>   
                
                <?php if($hero_section_quote_author_image || $hero_section_quote_text): ?>
                <div class="user-text demo-user-text d-flex align-items-center left-to-right-arrow">
                    <div class="user-img">
                        <img src="<?php echo $hero_section_quote_author_image; ?>">
                    </div>
                    <div class="user-content">
                        <p><?php echo $hero_section_quote_text; ?></p>
                        <strong><?php echo $hero_quote_author_name; ?></strong>
                    </div>
                </div>
                <?php endif; ?>  
                <?php if(!empty($hero_telephone_number)): ?> 
                    <p class="telephone-text"><?php echo $hero_telephone_text ?></p>
                    <p class="telephone-number">Bel <a href="tel:<?php echo $hero_telephone_number; ?>"><?php echo $hero_telephone_number; ?></a></p>
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

                        // gravity_form( $hero_section_form_shortcode, false, false, false, array('quote' => $quote,'product_title'=> $product_title), true, '', true);

                       // echo do_shortcode( $form_shortcode); 
                        endif;
                        ?>
                        <iframe aria-label='Offerte aanvragen - Keuze Kado' frameborder="0" style="height:500px;width:99%;border:none;" src='https://forms.zohopublic.eu/sterkado/form/Offerteaanvragen/formperma/GO6pN_d2H6O4wWj5ic2wuoBLBKaWGETEAyCHfyNgzjY'></iframe>
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
    $reviews       = get_field('reviews');

    if(!empty($reviews)):
?> 

<section id="review_section_1" class="w-100 section_2  section-review_section">
    <div class="section-space">
        <div class="container client-reviews">
            <div class="row">
                <?php foreach ($reviews as $key => $review):?>
                    <div class="col-sm-4">
                        <div class="review__card">
                            <div class="review-text">
                                "<?php echo $review['review_text']; ?>"
                            </div>
                            <div class="reviewer__dtl">
                                <?php if(!empty($review['logo'])): ?>
                                    <div class="reviewer__logo">
                                        <img src="<?php echo $review['logo']['sizes']['medium']; ?>">
                                    </div>
                                <?php endif; ?>
                                <span>
                                    <?php if(!empty($review['name'])): ?>
                                        <?php echo $review['name']; ?>
                                    <?php endif; ?>
                                    <?php if(!empty($review['info'])): ?>
                                        <small class="client-info"><?php echo $review['info']; ?></small>
                                    <?php endif; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php
    
    $slider_heading         = get_field('slider_heading');
    $slider_description     = get_field('slider_description');
    $carousel_images        = get_field('carousel_images');


    if(!empty($carousel_images)):
?> 

<section id="carousel_3" class="w-100 section_2  section-carousel_slider section-customized_image__video_section">
    <div class="customize-service arrow-with-text">
        <div class="service-main">
            <div class="section-space">
                <div class="container carousel-slider customized-carousel">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                          <div class="row align-items-center justify-content-between">
                            <div class="col-sm-12 col-lg-6">
                                <div class="carousel_slider">
                                    <?php foreach ($carousel_images as $key => $img): ?>
                                        <div class="carousel-item">
                                            <img src="<?php echo $img['url']; ?>">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="service-top-left">
                                    <div class="carousel-slider-wrapper">
                                        <h2><?php echo $slider_heading; ?></h2>
                                        <p><?php echo $slider_description; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        </div>
                    </div>
                </div>
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
                <div class="promises__grid">
                    <div class="row">
                        <?php
                            while( have_rows('promises') ) : the_row(); ?>
                            <div class="col-sm-4"  >
                                <div class="promises__card" >
                                    <figure class="promises__thumb">
                                            <img src="<?php the_sub_field('image'); ?>" alt="">
                                    </figure>
                                    <div class="promises__card__cont">
                                        <h3 class="ttl">
                                            <?php the_sub_field('title'); ?>
                                        </h3>
                                        <div class="desc">
                                            <?php the_sub_field('content'); ?>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile; ?>
                    </div> 
                </div>
            <?php
            endif;
        ?>
    </div>
</section>
<?php get_footer(); ?>