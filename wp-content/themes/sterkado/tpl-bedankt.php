<?php
/* Template Name: Bedankt */
get_header();
?>
<?php
$hero_title       = get_field('hero_title');
$hero_content     = get_field('hero_content');
$hero_right_bg_image    = get_field('hero_right_bg_image');
$hero_right_image = get_field('hero_right_image');
$hero_text_after_button = get_field('hero_text_after_button');

?>
<section id="hero_banner_section_1" class="w-100 section_1 inner-comm-banner  section-hero_banner_section">
    <div class="container-fluid">
        <div class="row align-items-center mobile-bg" style="background: url(/sterkado/wp-content/uploads/2022/07/layers-home.png) no-repeat;">
            <div class="col-lg-5 col-md-12 col-sm-12 pd-100 md-full">
                <?php if (!empty($hero_title)) : ?>
                    <h1><?php echo $hero_title; ?></h1>
                <?php endif; ?>
                <?php if (!empty($hero_content)) : ?>
                    <p><?php echo $hero_content; ?></p>
                <?php endif; ?>
                <div class="contact-banner-link text-left   remove-content">
                    <ul class="d-md-flex">
                        <?php
                        $hero_button_1 = get_field('hero_button_1');
                        if ($hero_button_1) : ?>
                            <li>
                                <?php
                                $button = $hero_button_1['button'];
                                $button_style = $hero_button_1['button_style'];
                                $button_with_arrow = $hero_button_1['button_with_arrow'];

                                if ($button) :
                                    $link_url = $button['url'];
                                    $link_title = $button['title'];
                                    $link_target = $button['target'] ? $button['target'] : '_self';
                                ?>
                                    <a class="btn <?= $button_style; ?>-btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                        <?php echo esc_html($link_title); ?>
                                        <?php if ($button_with_arrow == '1') : ?>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>
                        <?php
                        $hero_button_2 = get_field('hero_button_2');
                        if ($hero_button_2) : ?>
                            <li>
                                <?php
                                $button = $hero_button_2['button'];
                                $button_style = $hero_button_2['button_style'];
                                $button_with_arrow = $hero_button_2['button_with_arrow'];

                                if ($button) :
                                    $link_url = $button['url'];
                                    $link_title = $button['title'];
                                    $link_target = $button['target'] ? $button['target'] : '_self';
                                ?>
                                    <a class="btn <?= $button_style; ?>-btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                        <?php echo esc_html($link_title); ?>
                                        <?php if ($button_with_arrow == '1') : ?>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-8 col-sm-12  md-full  norightpadding text-center">
                <figure class="hide-sm-device">
                    <img class="w-100" src="<?php echo $hero_right_bg_image; ?>">
                    <figcaption>
                        <img class="d-block" src="<?php echo $hero_right_image; ?>">
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>
<?php
  $gift_section_heading       = get_field('gift_section_heading');
  $gifts         = get_field('gifts');

  $numOfCols = count($gifts);
  $rowCount = 0;
  $ColWidth = 12 / $numOfCols;
?>
<section id="right_gift_section_2" class="w-100 section_3  section-right_gift">

	<div class="section-space">
		<div class="container our-offers4">
			<div class="gift-section">
				<?php if(!empty($gift_section_heading)): ?>
				<div class="gift-title">
					<h2><?= $gift_section_heading;?></h2>
				</div>
				<?php endif; ?>
				<div class="gift-listing">
					<div class="row gift-bg">
						<?php foreach ($gifts as $key => $gift): ?>
						<div class="col-sm-12 col-md-6 col-xl-3 girf-items">
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
								<p class="normal-paragraph-desktop w-100"><?= $gift['short_description'];?></p>
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
$latest_news_title = get_field('latest_news_title');
$news_post = get_field('news_post');
?>
<section id="latest_news_section_3" class="w-100 section_12  section-latest_news">
    <div class="container">
        <?php if ($latest_news_title) : ?> <h2 class="latest_news__title"><?php echo $latest_news_title; ?></h2> <?php endif; ?>
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