<?php 
get_header();
?>
<?php
    global $post;
  $course_hero_background_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

  $category = get_the_terms(get_the_ID(),'case_cat');
  $cat_array = [];
  foreach($category as $cat){
      $cat_array[] = $cat->name;
  }
  $short_description       = get_field('short_description');

?> 
<section id="hero_banner_section_1" class="w-100 section_1  section-hero_banner_section inner-comm-banner case-detail-banner <?php if(!$short_description){ echo "no_short_description";} ?>" <?php if($course_hero_background_image):?>style="background-image:url(<?= $course_hero_background_image;?>);"<?php endif;?>>   
    <div class="container">
        <div class=" align-items-center hero-case-extra"> 
            <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 pd-100 md-full">
                <div class="row case-info-table align-items-end">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="banner-table-content">
                            <ul class="cat_name">
                                <?php
                                    foreach($category as $cat){
                                        ?>
                                    <li><?= $cat->name; ?></li>
                                    <?php
                                    }
                                ?>
                            </ul>
                            <h1><?php the_title(); ?></h1>
                            <p class="description"><?= $short_description; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <?php if( have_rows('companies') ): ?>
                            <ul class="companies">
                            <?php while( have_rows('companies') ): the_row(); ?>
                                <li>
                                    <p><span><?php the_sub_field('title'); ?></span><?php the_sub_field('subtitle'); ?></p>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if(!empty($hero_content)): ?>
                    <p><?php echo $hero_content; ?></p>
                <?php endif; ?>   
            </div>
        </div>
    </div>
</section>
<?php
  $course_form_background_image = get_field('course_form_background_image','option');
  $course_form_title = get_field('course_form_title','option');
  $course_form_subtitle = get_field('course_form_subtitle','option');
  $course_form_content = get_field('course_form_content','option');
  $course_form_shortcode = get_field('course_form_shortcode','option');
  $course_chat_content = get_field('course_chat_content','option');
  $course_rating_text = get_field('course_rating_text','option');
?>
<section class="case_detail_content w-100 post_detail_content container-1600">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-8 col-md-12 col-sm-12"> 
                <div class="entry_content details-content">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12"> 
                <div class="form-box">
                        <div class="form-img">
                            <img src="<?php echo $course_form_background_image; ?>">
                        </div>
                        <div class="hero-contact-form-section form-new-design" style="background:url('<?php echo $course_form_background_image; ?>');">
                    <?php if(!empty($course_form_title)): ?>
                        <h3><?php echo $course_form_title; ?></h3>
                    <?php endif; ?> 
                    <?php if(!empty($course_form_subtitle)): ?>
                        <p><?php echo $course_form_subtitle; ?></p>
                    <?php endif; ?>  
                    <?php if(!empty($course_form_content)): ?>
                        <p><?php echo $course_form_content; ?></p>
                    <?php endif; ?> 
                    <?php echo do_shortcode(get_field('course_form_shortcode','option')); ?>
                    <div class="chat_content">
                        <?php if(!empty($course_chat_content)): ?>
                            <?php echo $course_chat_content; ?>
                        <?php endif; ?> 
                    </div>
                    <?php 
                        $case_chat_button = get_field('case_chat_button','option');
                        if( $case_chat_button ): 
                            $link_url = $case_chat_button['url'];
                            $link_title = $case_chat_button['title'];
                            $link_target = $case_chat_button['target'] ? $case_chat_button['target'] : '_self';
                            ?>
                            <a class="news_chat_button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                    <div class="rating-text">
                        <?php if(!empty($course_rating_text)): ?>
                            <p><?php echo $course_rating_text; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                </div>
               
            </div>
        </div>
    </div>
</section>
<?php
  $course_gift_section_heading       = get_field('course_gift_section_heading','option');
  $course_gifts         = get_field('course_gifts','option');

  $numOfCols = count($course_gifts);
  $rowCount = 0;
  $ColWidth = 12 / $numOfCols;
?> 
<section class="w-100 section_3  section-right_gift">
    <div class="section-space">
        <div class="container our-offers4">
            <div class="gift-section">
                <?php if(!empty($course_gift_section_heading)): ?>
                <div class="gift-title">
                    <h2><?= $course_gift_section_heading;?></h2>
                </div>
                <?php endif; ?>
                <div class="gift-listing">
                    <div class="row">
                        <?php foreach ($course_gifts as $key => $gift): ?>
                        <div class="col-xl-3 col-lg-6  col-md-6 col-sm-12">
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
                                    <p class="normal-paragraph-desktop"><?= $gift['short_description'];?></p>
                                <?php endif; ?>
                                <?php if(!empty($gift['link'])): ?>
                                    <a href="<?= $gift['link']['url'];?>" title="<?= $gift['link']['title'];?>"><?= $gift['link']['title'];?></a>
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
$course_every_moment_heading  = get_field('course_every_moment_heading','option');
$course_moments  = get_field('course_moments','option');

?> 
<section class="w-100 section_8  section-every_moment">
    <div class="section-space">
        <div class="container every-moments">
            <?php if(!empty($course_every_moment_heading)): ?>
            <div class="moment-title">
                <h2><?=$course_every_moment_heading;?></h2>
            </div>
            <?php endif; ?>
            <div class="moments-slider">
                <?php foreach ($course_moments as $key => $moment): ?>
                <div class="slide-item">
                    <div class="slider-img">
                        <?php if(!empty($moment['image'])): ?>
                        <a href="<?php echo $moment['link']['url']; ?>" title="<?php echo $moment['link']['title']; ?>">
                            <img src="<?php echo $moment['image']['url']; ?>" alt="<?php echo $moment['image']['alt']; ?>" />
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="slider-head primary-ming" style="background-color: <?php echo $moment['link_bg_color']; ?>;">
                        <a href="<?php echo $moment['link']['url']; ?>" title="<?php echo $moment['link']['title']; ?>"><?php echo $moment['link']['title']; ?></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div> 
</section>
<?php get_footer(); ?>