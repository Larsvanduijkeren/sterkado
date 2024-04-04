<?php
/* Template Name: Contact */
get_header();
?>
<?php
$hero_title       = get_field('hero_title');
$hero_section_background_image = get_field('hero_section_background_image');

?>
<section id="hero_banner_section_1" class="w-100 section_1 section-hero_banner_section inner-comm-banner only-banner-content" <?php if ($hero_section_background_image) : ?>style="background-image:url(<?= $hero_section_background_image; ?>);" <?php endif; ?>>
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-lg-12 col-md-12 col-sm-12 pd-100 md-full text-center">
                <?php if (!empty($hero_title)) : ?>
                    <h1><?php echo $hero_title; ?></h1>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
<?php
$contact_form_background_image = get_field('contact_form_background_image');
$contact_form_title = get_field('contact_form_title');
$contact_form_subtitle = get_field('contact_form_subtitle');
$contact_form_after_form_text = get_field('contact_form_after_form_text');
$contact_form_right_side_title = get_field('contact_form_right_side_title');
$contact_phone_no = get_field('contact_phone_no');
$contact_phone_description = get_field('contact_phone_description');
$contact_email = get_field('contact_email');
$contact_email_description = get_field('contact_email_description');
$chat_title  = get_field('chat_title');
$chat_description  = get_field('chat_description');
$chat_button  = get_field('chat_button');
$other_contact_details_title = get_field('other_contact_details_title');
$other_contact_details = get_field('other_contact_details');
$address_title = get_field('address_title');
$address = get_field('address');
$frequently_asked_questions_title = get_field('frequently_asked_questions_title');
$frequently_asked_questions_content = get_field('frequently_asked_questions_content');
?>
<section id="contact_section_2" class="w-100 section_12  section-contact_section contact-sec">
    <div class="container">
        <div class="row  slider-sec">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="form-box">
                    <div class="form-img">
                        <img src="<?php echo $contact_form_background_image; ?>">
                    </div>
                    <div class="hero-contact-form-section" style="background:url('');">

                        <?php if (!empty($contact_form_title)) : ?>
                            <h3><?php echo $contact_form_title; ?></h3>
                        <?php endif; ?>
                        <?php if (!empty($contact_form_subtitle)) : ?>
                            <p><?php echo $contact_form_subtitle; ?></p>
                        <?php endif; ?>
                        <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>

                        <div class="text-md-right text-center">
                            <?php if (!empty($contact_form_after_form_text)) : ?>
                                <p><?php echo $contact_form_after_form_text; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 ">
                <div class="content-slides-right">
                    <?php if ($contact_form_right_side_title) : ?> <h3><?php echo $contact_form_right_side_title; ?></h3> <?php endif; ?>
                    <div class="content">
                        <div class="row contact_phone_email_wrapper contact-mobile">
                            <div class="col-md-6">
                                <div class="contact_phone">
                                    <?php
                                    $contact_phone_no = get_field('contact_phone_no');
                                    if ($contact_phone_no) :
                                        $link_url = $contact_phone_no['url'];
                                        $link_title = $contact_phone_no['title'];
                                        $link_target = $contact_phone_no['target'] ? $contact_phone_no['target'] : '_self';
                                    ?>
                                        <a class="contact_phone_no" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                    <?php endif; ?>
                                    <?php if (!empty($contact_phone_description)) : ?>
                                        <p><?php echo $contact_phone_description; ?></p>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_email">
                                    <?php
                                    $contact_email = get_field('contact_email');
                                    if ($contact_email) :
                                        $link_url = $contact_email['url'];
                                        $link_title = $contact_email['title'];
                                        $link_target = $contact_email['target'] ? $contact_email['target'] : '_self';
                                    ?>
                                        <a class="contact_email-link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                    <?php endif; ?>
                                    <?php if (!empty($contact_email_description)) : ?>
                                        <p><?php echo $contact_email_description; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-12">
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
                        </div>
                        <div class="row contact-mobile">
                            <div class="col-md-6">
                                <div class="other_contact_content">
                                    <?php if ($other_contact_details_title) : ?> <h5><?php echo $other_contact_details_title; ?></h5> <?php endif; ?>

                                    <?php if (!empty($other_contact_details)) : ?>
                                        <div class="other_contact_details">
                                            <?= $other_contact_details; ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adress_content">
                                    <?php if ($address_title) : ?> <h5><?php echo $address_title; ?></h5> <?php endif; ?>

                                    <?php if (!empty($address)) : ?>
                                        <div class="adress">
                                            <?= $address; ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                        <div class="row contact-mobile">
                            <div class="col-md-12">
                                <div class="frequently_asked_questions_wrapper">
                                    <?php if ($frequently_asked_questions_title) : ?> <h5><?php echo $frequently_asked_questions_title; ?></h5> <?php endif; ?>

                                    <?php if (!empty($frequently_asked_questions_content)) : ?>
                                        <div class="frequently_asked_questions_content">
                                            <?= $frequently_asked_questions_content; ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>

                        </div>

                        <div class="contact_content_accordion" id="contact_content_accordion">
                            <div class="card active-acc">
                                <div class="card-header" id="headingOne">
                                    <?php if ($contact_form_right_side_title) : ?>
                                        <h5 class="mb-0">
                                            <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <?php echo $contact_form_right_side_title; ?>
                                            </a>
                                        </h5>
                                    <?php endif; ?>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#contact_content_accordion">
                                    <div class="card-body">
                                        <div class="row contact_phone_email_wrapper">
                                            <div class="col-md-6">
                                                <div class="contact_phone">
                                                    <?php
                                                    $contact_phone_no = get_field('contact_phone_no');
                                                    if ($contact_phone_no) :
                                                        $link_url = $contact_phone_no['url'];
                                                        $link_title = $contact_phone_no['title'];
                                                        $link_target = $contact_phone_no['target'] ? $contact_phone_no['target'] : '_self';
                                                    ?>
                                                        <a class="contact_phone_no" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                                    <?php endif; ?>
                                                    <?php if (!empty($contact_phone_description)) : ?>
                                                        <p><?php echo $contact_phone_description; ?></p>
                                                    <?php endif; ?>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="contact_email">
                                                    <?php
                                                    $contact_email = get_field('contact_email');
                                                    if ($contact_email) :
                                                        $link_url = $contact_email['url'];
                                                        $link_title = $contact_email['title'];
                                                        $link_target = $contact_email['target'] ? $contact_email['target'] : '_self';
                                                    ?>
                                                        <a class="contact_email-link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                                    <?php endif; ?>
                                                    <?php if (!empty($contact_email_description)) : ?>
                                                        <p><?php echo $contact_email_description; ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card other_contact_content">
                                <div class="card-header" id="headingTwo">
                                    <?php if ($other_contact_details_title) : ?>
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <?php echo $other_contact_details_title; ?>
                                            </a>
                                        </h5>
                                    <?php endif; ?>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#contact_content_accordion">
                                    <div class="card-body">
                                        <div class="col-md-12">
                                            <?php if (!empty($other_contact_details)) : ?>
                                                <div class="other_contact_details">
                                                    <?= $other_contact_details; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card adress_content">
                                <div class="card-header" id="headingThree">
                                    <?php if ($address_title) : ?>
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <?= $address_title; ?>
                                            </a>
                                        </h5>
                                    <?php endif; ?>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#contact_content_accordion">
                                    <div class="card-body">
                                        <?php if (!empty($address)) : ?>
                                            <div class="adress">
                                                <?= $address; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card frequently_asked_questions_wrapper">
                                <div class="card-header" id="headingFour">
                                    <?php if ($frequently_asked_questions_title) : ?>
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <?= $frequently_asked_questions_title; ?>
                                            </a>
                                        </h5>
                                    <?php endif; ?>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#contact_content_accordion">
                                    <div class="card-body">
                                        <?php if (!empty($frequently_asked_questions_content)) : ?>
                                            <div class="frequently_asked_questions_content">
                                                <?= $frequently_asked_questions_content; ?>
                                            </div>
                                        <?php endif; ?>
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
<?php
$great_guys_title = get_field('great_guys_title');
?>
<section id="great_guys_section_3" class="w-100 section_12  section-great_guys">
    <div class="container container-smm">
        <?php if ($great_guys_title) : ?> <h3 class="latest_news__title"><?php echo $great_guys_title; ?></h3> <?php endif; ?>
        <?php if (have_rows('great_guys')) : ?>
            <div class="row great_guys_wrapper">
                <?php while (have_rows('great_guys')) : the_row(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="great_guys-item">
                            <div class="great_guys-img">
                                <img src="<?php the_sub_field('image'); ?>" alt="">
                            </div>
                            <div class="great_guys-content">
                                <h5 class="great_guys-heading dark-subheading">
                                    <?php the_sub_field('title'); ?>
                                </h5>
                                <h5 class="great_guys-sub dark-subheading">
                                    <?php the_sub_field('subtitle'); ?>
                                </h5>
                                <p class="great_guys-info">
                                    <?php the_sub_field('content'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php
$faq_title  = get_field('faq_title');
?>
<section id="faq_section_4" class="w-100 section_3  section-faq_section">
    <div class="section-space">
        <div class="container faq_wrapper">
            <?php if (!empty($faq_title)) : ?>
                <div class="slide-title text-center">
                    <h2><?= $faq_title; ?></h2>
                </div>
            <?php endif; ?>
            <?php if (have_rows('faqs')) : $c = 1; ?>
                <div class="row">
                    <div class="col-md-12">
                        <div id="accordion" class="accordion-list">
                            <?php while (have_rows('faqs')) : the_row();
                            ?>
                                <div class="card">
                                    <div class="card-header" id="heading_<?= $c; ?>">
                                        <h5 class="faq-title">
                                            <a class="faq_question <?php if ($c != '1') {
                                                                        echo "collapsed";
                                                                    } ?>" data-toggle="collapse" data-target="#collapse_<?= $c; ?>" aria-expanded="true" aria-controls="collapse_<?= $c; ?>">
                                                <?php the_sub_field('question'); ?>
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapse_<?= $c; ?>" class="collapse <?php if ($c == '1') {
                                                                                        echo "show";
                                                                                    } ?>" aria-labelledby="heading_<?= $c; ?>" data-parent="#accordion">
                                        <div class="card-body">
                                            <?php the_sub_field('answer'); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php $c++;
                            endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>