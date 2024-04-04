<?php
/* Template Name: Over ons
*/
get_header();
?>
<?php
$hero_title = get_field('hero_title');
$hero_content = get_field('hero_content');
$hero_right_bg_image = get_field('hero_right_bg_image');
$hero_right_image = get_field('hero_right_image');
$hero_text_after_button = get_field('hero_text_after_button');
$quote_author_image = get_field('quote_author_image');
$quote_text = get_field('quote_text');
$quote_author_name = get_field('quote_author_name');
$hero_section_background_image = get_field('hero_section_background_image');
?>
    <section id="hero_banner_section_1" class="w-100 section_1  section-hero_banner_section inner-comm-banner"
             <?php if ($hero_section_background_image): ?>style="background-image:url(<?= $hero_section_background_image; ?>);"<?php endif; ?>>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-sm-12 pd-100 md-full">
                    <?php if (!empty($hero_title)): ?>
                        <h1><?php echo $hero_title; ?></h1>
                    <?php endif; ?>
                    <?php if (!empty($hero_content)): ?>
                        <p><?php echo $hero_content; ?></p>
                    <?php endif; ?>
                    <div class="contact-banner-link text-left d-flex">
                        <?php
                        $hero_button_1 = get_field('hero_button_1');
                        if ($hero_button_1): ?>
                            <?php
                            $button = $hero_button_1['button'];
                            $button_style = $hero_button_1['button_style'];
                            $button_with_arrow = $hero_button_1['button_with_arrow'];

                            if ($button):
                                $link_url = $button['url'];
                                $link_title = $button['title'];
                                $link_target = $button['target'] ? $button['target'] : '_self';
                                ?>
                                <a class="btn <?= $button_style; ?>-btn" href="<?php echo esc_url($link_url); ?>"
                                   target="<?php echo esc_attr($link_target); ?>">
                                    <?php echo esc_html($link_title); ?>
                                    <?php if ($button_with_arrow == '1'): ?>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 9H14.25" stroke="white" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    <?php endif; ?>
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php
                        $hero_button_2 = get_field('hero_button_2');
                        if ($hero_button_2): ?>
                            <?php
                            $button = $hero_button_2['button'];
                            $button_style = $hero_button_2['button_style'];
                            $button_with_arrow = $hero_button_2['button_with_arrow'];

                            if ($button):
                                $link_url = $button['url'];
                                $link_title = $button['title'];
                                $link_target = $button['target'] ? $button['target'] : '_self';
                                ?>
                                <a class="btn <?= $button_style; ?>-btn" href="<?php echo esc_url($link_url); ?>"
                                   target="<?php echo esc_attr($link_target); ?>">
                                    <?php echo esc_html($link_title); ?>
                                    <?php if ($button_with_arrow == '1'): ?>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 9H14.25" stroke="white" stroke-width="2"
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
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
                    <?php if ($quote_author_image || $quote_text): ?>
                        <div class="user-text d-flex align-items-center justify-content-center">
                            <div class="user-img">
                                <img src="<?php echo $quote_author_image; ?>">
                            </div>
                            <div class="user-content">
                                <?php if ($quote_text): ?>
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
$image_with_faq_title = get_field('image_with_faq_title');
$image_with_faq_image = get_field('image_with_faq_image');
?>
    <section id="image_with_faq_2" class="w-100 section_4  section-image_with_faq top-space-sec">
        <div class="section-space">
            <div class="container custom-solution ">
                <div class="image_with_faq-section">

                    <div class="image_with_faq-main section-faq_section">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-sm-12  hide-mobile">
                                <?php if (!empty($image_with_faq_image)): ?>
                                    <div class="solution-left">
                                        <img src="<?php echo $image_with_faq_image['url']; ?>"
                                             alt="<?php echo $image_with_faq_image['alt']; ?>"/>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-xl-6  col-lg-6 col-sm-12 ">
                                <div class="image_with_faq-right faq_wrapper ">
                                    <?php if (!empty($image_with_faq_title)): ?>
                                        <div class="image_with_faq-title">
                                            <h2><?php echo $image_with_faq_title; ?></h2>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (have_rows('faqs')): $c = 1; ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="accordion" class="accordion-list">
                                                    <?php while (have_rows('faqs')): the_row();
                                                        ?>
                                                        <div class="card">
                                                            <div class="card-header" id="heading_<?= $c; ?>">
                                                                <h5 class="faq-title">
                                                                    <a class="faq_question <?php if ($c != '1') {
                                                                        echo "collapsed";
                                                                    } ?>" data-toggle="collapse"
                                                                       data-target="#collapse_<?= $c; ?>"
                                                                       aria-expanded="true"
                                                                       aria-controls="collapse_<?= $c; ?>">
                                                                        <?php the_sub_field('question'); ?>
                                                                    </a>
                                                                </h5>
                                                            </div>

                                                            <div id="collapse_<?= $c; ?>"
                                                                 class="collapse <?php if ($c == '1') {
                                                                     echo "show";
                                                                 } ?>" aria-labelledby="heading_<?= $c; ?>"
                                                                 data-parent="#accordion">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
$cta_content_alignment = get_field('cta_content_alignment');
$cta_heading = get_field('cta_heading');
$cta_content = get_field('cta_content');
$cta_button = get_field('cta_button');
$cat_is_background = get_field('cat_is_background');
$cta_background_color = get_field('cta_background_color');

$cta_text_after_button = get_field('cta_text_after_button');
$cta_image = get_field('cta_image');

if ($cta_image) {
    $col = '8';
} else {
    $col = '12';
}
?>
    <section id="cta_with_image_3" class="w-100 section_10  section-cta_with_image">
        <div class="section-space">
            <div class="container link-cases content_align_<?= $cta_content_alignment; ?>">
                <div class="row cases-box "
                     <?php if ($cat_is_background == '1'): ?>style="background:<?= $cta_background_color; ?>"<?php endif; ?>>
                    <div class="col-md-<?= $col; ?>">
                        <div class="case-description">
                            <?php if (!empty($cta_heading)): ?>
                                <h2><?php echo $cta_heading; ?></h2>
                            <?php endif; ?>
                            <?php if (!empty($cta_content)): ?>
                                <p class="normal-paragraph-desktop"><?= $cta_content; ?></p>
                            <?php endif; ?>
                            <?php
                            $cta_button = get_field('cta_button');
                            if ($cta_button): ?>
                                <?php
                                $button = $cta_button['button'];
                                $button_style = $cta_button['button_style'];

                                $button_with_arrow = $cta_button['button_with_arrow'];
                                if ($button):
                                    $link_url = $button['url'];
                                    $link_title = $button['title'];
                                    $link_target = $button['target'] ? $button['target'] : '_self';
                                    ?>
                                    <a class="btn <?= $button_style; ?>-btn" href="<?php echo esc_url($link_url); ?>"
                                       target="<?php echo esc_attr($link_target); ?>">
                                        <?php echo esc_html($link_title); ?>
                                        <?php if ($button_with_arrow == '1'): ?>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.75 9H14.25" stroke="white" stroke-width="2"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if (!empty($cta_text_after_button)): ?>
                                <p class="font-italic normal-paragraph-desktop"><?= $cta_text_after_button; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if ($cta_image): ?>
                        <div class="col-md-4 text-right client-img">
                            <img class="w-100" src="<?= $cta_image; ?>"/>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php
$team_list_title = get_field('team_list_title');
?>
    <section id="team_list_4" class="w-100 section_2  section-team_list">
        <div class="section-space">
            <div class="container team_list-wrapper">

                <?php if (!empty($team_list_title)): ?>
                    <h2><?php echo $team_list_title; ?></h2>
                <?php endif; ?>
                <div class="team_lists">

                    <?php if (have_rows('teams')): ?>
                        <div class="row">
                            <?php while (have_rows('teams')): the_row();
                                $image = get_sub_field('image');
                                $title = get_sub_field('title');
                                $subtitle = get_sub_field('subtitle');
                                $content = get_sub_field('content');
                                ?>
                                <div class="col-xl-2 col-lg-3 col-md-3  col-6">
                                    <div class="team-item text-center">
                                        <div class="team-img">
                                            <img src="<?php echo $image; ?>" alt="">
                                        </div>
                                        <div class="team-wrapper-content">
                                            <?php if (!empty($title)): ?>
                                                <h3 class="team-heading"><?php echo $title; ?></h3>
                                            <?php endif; ?>
                                            <?php if (!empty($subtitle)): ?>
                                                <h6 class="team-heading"><?php echo $subtitle; ?></h6>
                                            <?php endif; ?>
                                            <?php if (!empty($content)): ?>
                                                <div class="team-content">
                                                    <?php echo $content; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </section>
<?php
$open_vacancies_title = get_field('open_vacancies_title');
$args = [
    'post_type'      => 'job',
    'post_status'    => 'publish',
    'posts_per_page' => 6,
    'orderby'        => 'date',
    'order'          => 'DESC',
];

$loop = new WP_Query($args);
if ($loop->have_posts()) : ?>
    ?>
    <section id="open_vacancies_5" class="w-100 section_12  section-open_vacancies">
        <div class="container ">
            <?php if ($open_vacancies_title) : ?> <h2
                class="latest_news__title text-center"><?php echo $open_vacancies_title; ?></h2> <?php endif; ?>

            <div class="row latest-job-wrapper">
                <?php
                while ($loop->have_posts()) : $loop->the_post();
                    global $post;
                    $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    $post_date = get_the_date('F j Y');

                    $content = get_the_content();

                    $reading_time = reading_time($content);
                    $word_limit = 25;
                    $words = explode(' ', $content);
                    $content = implode(' ', array_slice($words, 0, $word_limit));

                    $job_types = get_the_terms(get_the_ID(), 'job_type');
                    $job_array = [];
                    foreach ($job_types as $cat) {
                        $job_array[] = $cat->name;
                    }
                    $job_type_name = implode(' ', $job_array);
                    $location = get_field('location');

                    ?>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="job-item">
                            <div class="job-wrapper-content">
                                <p class="job_type"><?= $job_type_name; ?></p>
                                <h5 class="job-heading">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h5>
                                <ul class="job-meta">
                                    <li class="read_time"><img
                                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/job_time.svg"/><?php echo sprintf(esc_html__('%s', 'textdomain'), human_time_diff(get_the_time('U'), current_time('timestamp'))); ?>
                                    </li>
                                    <li class="location"><img
                                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/job_location.svg"/><?php echo $location['address']; ?>
                                    </li>
                                </ul>
                                <div class="job-content">
                                    <?php echo $content; ?>
                                </div>
                                <a class="more-job-link" href="<?php the_permalink(); ?>"
                                   title=""><?php _e('Bekijk deze vacature', 'sterkado'); ?></a>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile; ?>
            </div>
        </div>
    </section>

<?php
endif;
wp_reset_postdata();
?>
<?php
$latest_news_title = get_field('latest_news_title');
$news_post = get_field('news_post');
?>
    <section id="latest_news_6" class="w-100 section_12  section-latest_news">
        <div class="container">
            <?php if ($latest_news_title) : ?> <h2
                class="latest_news__title"><?php echo $latest_news_title; ?></h2> <?php endif; ?>
            <?php
            if (!empty($news_post)):

                $args = [
                    'post_type'   => 'post',
                    'post_status' => 'publish',
                    'post__in'    => $news_post,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                ];

            else:

                $args = [
                    'post_type'      => 'post',
                    'post_status'    => 'publish',
                    'posts_per_page' => 4,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                ];

            endif;

            $loop = new WP_Query($args);
            if ($loop->have_posts()) : ?>
                <div class="row latest-news-wrapper">
                    <?php
                    while ($loop->have_posts()) : $loop->the_post();
                        get_template_part('template-parts/latest', 'post');
                    endwhile; ?>
                </div>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>
<?php get_footer(); ?>