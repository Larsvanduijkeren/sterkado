<?php 
get_header();
global $post;
$post = get_post($post->ID);
?> 

<section class="site-breadcrumbs-wrapper w-100 pd-200"> 
    <div class="container">
        <div class="row"> 
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="site-breadcrumbs">
                    <?php echo do_shortcode( '[breadcrumb]' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="faq_details w-100">   
  <div class="container">
      <div class="row"> 
          <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                <div class="faq_entry_detail">
                    <h1><?php the_title(); ?></h1>
                    <div class="content">
                        <?php $content = apply_filters( 'the_content', $post->post_content );
                        echo $content; ?>
                    </div>
                </div>

                <div class="yes-no-form">
                    <?php 
                    $buttons_heading = get_field('buttons_heading', 'option' ); ?>
                    <h6 class="phone_title"> <?= $buttons_heading ?></h6>
                    <?php 
                    $button_1 = get_field('button_1', 'option' );
                    if( $button_1 ): 
                        $link_url = $button_1['url'];
                        $link_title = $button_1['title'];
                        $link_target = $button_1['target'] ? $button_1['target'] : '_self'; ?>
                    
                        <a class="btn ghost-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    <?php endif; ?>

                    <?php 
                    $button_2 = get_field('button_2', 'option');
                    if( $button_2 ): 
                        $link_url = $button_2['url'];
                        $link_title = $button_2['title'];
                        $link_target = $button_2['target'] ? $button_2['target'] : '_self'; ?>
                    
                        <a class="btn primary-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <?php 
                $contact_form = get_field('contact_form', 'option'); 
                $style_text = get_field('style_text', 'option'); 
                $contact_phone_title = get_field('contact_phone_title', 'option'); 
                $phone_number = get_field('phone_number', 'option'); 
                $phone_text = get_field('phone_text', 'option'); 
                $contact_form_background_image = get_field('contact_form_background_image', 'option'); 
                if($contact_form){
                ?>
                <br>
                <div class="contact-form-box" style="display:none">
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
                            
                            <?php echo do_shortcode('[gravityform ajax="true" id="'.$contact_form.'" title="false" ]'); ?>

                            <div class="text-md-right text-center">
                                <?php if (!empty($contact_form_after_form_text)) : ?>
                                    <p><?php echo $contact_form_after_form_text; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <?php 
                    $contact_phone_title = get_field('contact_title', 'option');
                    ?>
                    <div class="contact_phone">
                        <?php if($contact_phone_title): ?>
                            <h6 class="phone_title"> <?= $contact_phone_title ?></h6>
                            <?php 
                        endif;
                        
                        if ($phone_number) : ?>
                            <a class="contact_phone_no" href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a>
                        <?php endif; ?>

                        <?php if (!empty($phone_text)) : ?>
                            <p><?php echo $phone_text; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php } ?>

          </div>

          <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">
            <div  class="w-100 section_1 section-faq_list  related-faq_list">
                <div class="container">
                    <?php
                    
                        $taxonomy = 'faq_subject';
                        $term_args=array(
                            'number'=>2,
                            'orderby' => 'random',
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
                                                <div class="w-100">
                                                    <div class="faq-list-boxs">
                                                        <div class="sub-header">
                                                            <h4 class="subject_name">
                                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gift.svg"/>
                                                                <?= $term->name; ?>
                                                                
                                                            </h4>
                                                            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%;width: 100%;position: absolute;left: 0;height: auto;">
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
            </div> 

          </div>
      </div>
  </div>
</section>


<?php get_footer(); ?>