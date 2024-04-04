<?php 
/* Template Name: FAQ
*/ 
get_header(); ?>
<?php
$hero_background_image = get_field('hero_background_image');
$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');

?> 
<section id="hero_banner_section_1" class="w-100 section_1 section-hero_banner_section inner-comm-banner only-banner-content faq-page-banner" <?php if($hero_background_image):?>style="background-image:url(<?= $hero_background_image;?>);"<?php endif;?>>   
    <div class="w-100">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12 pd-100 md-full text-center">
                    <?php if(!empty($hero_title)): ?>
                        <h1><?php echo $hero_title; ?></h1>
                    <?php endif; ?>   
                    <?php if(!empty($hero_subtitle)): ?>
                        <p><?php echo $hero_subtitle; ?></p>
                    <?php endif; ?>   
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12 col-sm-12 pd-100 md-full text-center">
                    <form  class="faqs_search_form" id="faqs_search_form">
                        <div class="input-group">
                            <input type="search" name="faqs_search_input" class="form-control rounded faqs_search_input" placeholder="Zoek op onderwerp" aria-label="Search" aria-describedby="search-addon" required/>
                            <button type="submit" class="btn btn-primary faqs_search_btn">Zoeken</button>
                            <button type="submit" class="btn btn-ghost faqs_search_btn_reset" style="display:none;">Naar alle antwoorden</button>
                            <span class="faqs_search_loader" style="display:none"> </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section  class="w-100 section_1 section-faq_list ">
<div class="container">
    <?php
     
        $taxonomy = 'faq_subject';
        $term_args=array(
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => true,
        );
        $terms = get_terms($taxonomy,$term_args);
        if ($terms) { ?>
              <div class="row faq_list_row" id="faq_list_row">
                    <?php
                        foreach( $terms as $term ) {
                            $args=array(
                                'post_type' => 'faq',
                                'post_status' => 'publish',
                                'posts_per_page' => -1, 
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'faq_subject',
                                        'field' => 'term_id',
                                        'terms' => $term->term_id,
                                    )
                                )
                            );
                            $my_query = null;
                            $my_query = new WP_Query($args);
                            if( $my_query->have_posts() ) { ?>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <div class="faq-list-boxs">
                                        <div class="sub-header">
                                            <h4 class="subject_name">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gift.svg"/><?= $term->name; ?>
                                            </h4>
                                            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%;width: 100%;position: absolute;left: 0;height: auto;">
                                                <!-- <path d="M0.00,92.27 C216.83,192.92 304.30,8.39 500.00,109.03 L500.00,0.00 L0.00,0.00 Z" style="stroke: none;fill: #9FC4C4;"></path> -->
                                                <path d="M0,100 C250,150 350,30 500,100 L500,00 L0,0 Z" style="stroke: none; fill:#9FC4C4;"></path>
                                            </svg>
                                        </div>
                                        <ul>
                                            <?php
                                                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                                    <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
                                                <?php
                                                endwhile;
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    ?>
                </div>
             <?php   
            }
        wp_reset_query();
    ?>
    </div>
</section> 


<?php 
$contact_form = get_field('contact_form'); 
$style_text = get_field('style_text'); 
$contact_phone_title = get_field('contact_phone_title'); 
$phone_number = get_field('phone_number'); 
$phone_text = get_field('phone_text'); 
$contact_form_background_image = get_field('contact_form_background_image'); 
if($contact_form){
?>
<section class="w-100 section_contact_faq">
    <div class="container">
        <div class="contact-form-box">
            <div class="form-box">
                <?php if($style_text){ ?><div class="style-text"><?= $style_text ?></div><?php } ?>

                <?php if ($contact_form_background_image) { ?>
                <div class="form-img">
                    <img src="<?php echo $contact_form_background_image['url']; ?>">
                </div>
                <?php } ?>
                <div class="hero-contact-form-section" style="background:url('');">

                    <?php if (!empty($contact_form_title)) : ?>
                        <h3><?php echo $contact_form_title; ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($contact_form_subtitle)) : ?>
                        <p><?php echo $contact_form_subtitle; ?></p>
                    <?php endif; ?>
                    
                    <?php echo do_shortcode('[gravityform ajax="true" id="'.$contact_form.'" title="false"]'); ?>

                    <div class="text-md-right text-center">
                        <?php if (!empty($contact_form_after_form_text)) : ?>
                            <p><?php echo $contact_form_after_form_text; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact_phone">
            <?php 
            $contact_phone_title = get_field('contact_phone_title');
            if($contact_phone_title): ?>
                <h6 class="phone_title"> <?= $contact_phone_title ?></h6>
                <?php 
            endif;
            ?>
        
            <?php
            if ($phone_number) : ?>
                <a class="contact_phone_no" href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a>
            <?php endif; ?>

            <?php if (!empty($phone_text)) : ?>
                <p><?php echo $phone_text; ?></p>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php } ?>
<?php get_footer(); ?>