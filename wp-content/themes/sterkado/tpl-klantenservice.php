<?php 
/* Template Name: Klantenservice
*/ 
get_header();
?>
<?php
  $hero_title       = get_field('hero_title');
  $hero_content     = get_field('hero_content');

  $hero_section_background_image = get_field('hero_section_background_image');
?> 
<section id="hero_banner_section_1" class="w-100 section_1 section-hero_banner_section inner-comm-banner only-banner-content cart-block-sec" <?php if($hero_section_background_image):?>style="background-image:url(<?= $hero_section_background_image;?>);"<?php endif;?>>   
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12 pd-100 md-full text-center">
                <?php if(!empty($hero_title)): ?>
                    <h1><?php echo $hero_title; ?></h1>
                <?php endif; ?>   
                <?php if(!empty($hero_content)): ?>
                    <p><?php echo $hero_content; ?></p>
                <?php endif; ?>   
            </div>
        </div>
       
    </div>
    
</section>
<section id="block_cart_section_2" class="block-cart-sec w-100">
    <div class="container">
        <?php if( have_rows('hoe_kunnen_wij_u_helpen') ): ?>
            <div class="row">
                <?php while( have_rows('hoe_kunnen_wij_u_helpen') ): the_row(); ?>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card-box">
                            <img class="card-img-top" src="<?php the_sub_field('icon'); ?>">
                            <div class="card-body">
                                <h4 class="card-title"><?php the_sub_field('title'); ?></h4>
                                <p class="card-text"><?php the_sub_field('content'); ?></p>
                                <?php 
                                $link = get_sub_field('link');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn primary-btn-ghost" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php
$contact_details_title  = get_field('contact_details_title');
$contact_phone_image  = get_field('contact_phone_image');
$contact_phone_no  = get_field('contact_phone_no');
$contact_phone_description  = get_field('contact_phone_description');
$contact_email_image  = get_field('contact_email_image');
$contact_email  = get_field('contact_email');
$contact_email_description  = get_field('contact_email_description');
$chat_title  = get_field('chat_title');
$chat_description  = get_field('chat_description');
$chat_button  = get_field('chat_button');
$question_about_order  = get_field('question_about_order');
$answer_about_order  = get_field('answer_about_order');
?> 
<section id="contact_details_3" class="w-100 section_3 section_contact-details contact-details-wrapper">
    <div class="section-space">
        <div class="container ">
            <?php if(!empty($contact_details_title)): ?>
            <div class="slide-title text-center">
                <h2><?=$contact_details_title;?></h2>
            </div>
            <?php endif; ?>
            <div class="contact-about-detail">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="contact_phone">
                        <div class="contact_phone_img">
                            <img src="<?= $contact_phone_image; ?>"/>
                        </div> 
                        <div class="contact_phone_content">
                            <?php 
                            if( $contact_phone_no ): 
                                $link_url = $contact_phone_no['url'];
                                $link_title = $contact_phone_no['title'];
                                $link_target = $contact_phone_no['target'] ? $contact_phone_no['target'] : '_self';
                                ?>
                                <a class="contact_phone_no" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                            <?php if(!empty($contact_phone_description)): ?>
                                <span><?php echo $contact_phone_description; ?></span>
                            <?php endif; ?>
                        </div>        
                    </div>
                    <div class="contact_email">
                        <div class="contact_email_img">
                            <img src="<?= $contact_email_image; ?>"/>
                        </div> 
                        <div class="contact_email_content">
                            <?php 
                            if( $contact_email ): 
                                $link_url = $contact_email['url'];
                                $link_title = $contact_email['title'];
                                $link_target = $contact_email['target'] ? $contact_email['target'] : '_self';
                                ?>
                                <a class="contact_email-lnk" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                            <?php if(!empty($contact_email_description)): ?>
                                <span><?php echo $contact_email_description; ?></span>
                            <?php endif; ?>
                        </div>        
                    </div>
                    <div class="chat_wrapper">
                        <?php if (!empty($chat_title)) : ?>
                            <h6 class="chat_title"><?php echo $chat_title; ?></h6>
                        <?php endif; ?>
                        <?php if (!empty($chat_description)) : ?>
                            <div class="chat_title"><?php echo $chat_description; ?></div>
                        <?php endif; ?>
                        <div class="chat_button">
                            <?php 

                            if( $chat_button ): 
                                $link_url = $chat_button['url'];
                                $link_title = $chat_button['title'];
                                $link_target = $chat_button['target'] ? $chat_button['target'] : '_self';
                                ?>
                                <a class="news_chat_button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>    
                    </div>
                </div>
                <div class="col-xl-6  col-lg-6 col-md-6 col-sm-12">
                    <div class="about_order">
                        <?php if(!empty($question_about_order)): ?>
                            <h5><?php echo $question_about_order; ?></h5>
                        <?php endif; ?>
                        <?php if(!empty($answer_about_order)): ?>
                            <p><?php echo $answer_about_order; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>    
</section>

<?php get_footer(); ?>