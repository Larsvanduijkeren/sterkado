<?php
$title_section_3                  = get_sub_field('title_section_3');
$content_section_3          = get_sub_field('content_section_3');
$button_section_3  = get_sub_field('button_section_3');
$image_section_3             = get_sub_field('image_section_3');
$review_logo_section_3             = get_sub_field('review_logo_section_3');
$review_description_section_3          = get_sub_field('review_description_section_3');

?> 
<div class="section-space">
  <div class="container feedbakc-company">
    <div class="feedback-section">
      <div class="row">
        <div class="col-sm-12 col-lg-6 col-xl-5">
          <div class="feedback-left">
            <div class="feed-box">
              <?php if(!empty($review_logo_section_3)): ?>
              <div class="feed-title">
                <img src="<?php echo $review_logo_section_3['url']; ?>" alt="Feedback Company" />
              </div>
              <?php endif; ?>
              <?php if(!empty($review_description_section_3)): ?>
              <div class="feed-rating">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rating.png" alt="Rating" />
                <p><?php echo $review_description_section_3; ?></p>
              </div>
              <?php endif; ?>
            </div>
            <div class="feed-description">
              <?php if(!empty($title_section_3)): ?>
              <h3><?php echo $title_section_3; ?></h3>
              <?php endif; ?>
              <?php if(!empty($content_section_3)): ?>
              <p class="normal-paragraph-desktop"><?php echo $content_section_3; ?></p>
              <?php endif; ?>
              <?php if(!empty($button_section_3)): ?>
              <a href="<?= $button_section_3['url'];?>" class="btn btn-info" role="button" title="<?= $button_section_3['title'];?>"><?= $button_section_3['title'];?></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php if(!empty($image_section_3)): ?>
        <div class="col-sm-12 col-lg-6 col-xl-7">
          <div class="feedback-right">
            <img src="<?php echo $image_section_3['url']; ?>" alt="<?php echo $image_section_3['alt']; ?>" />
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>   
</div>