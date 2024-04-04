<?php
$heading                  = get_sub_field('heading');
$image_section_1          = get_sub_field('image_section_1');
$profile_image_section_1  = get_sub_field('profile_image_section_1');
$profile_info             = get_sub_field('profile_info');
$profile_name             = get_sub_field('profile_name');
$title_section_1          = get_sub_field('title_section_1');
$content_section_1        = get_sub_field('content_section_1');
$button_section_1         = get_sub_field('button_section_1');

?> 
<div class="section-space">
  <div class="container custom-solution">
      <div class="solution-section">
        <div class="mobile_solution_tooltip">
          <div class="expert-tooltip">
              <?php if(!empty($profile_image_section_1)): ?>
                <img src="<?php echo $profile_image_section_1['url']; ?>" alt="<?php echo $profile_image_section_1['alt']; ?>" />
                <div class="custom-tooltip">
                  <?php if(!empty($profile_info)): ?>
                    <p class="normal-paragraph-desktop">“<?= $profile_info; ?>”</p>
                  <?php endif; ?>
                  <?php if(!empty($profile_name)): ?>
                    <p class="dark-paragraph-desktop"><?= $profile_name; ?></p>    
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </div>
        </div>

        <?php if(!empty($heading)): ?>
          <div class="solution-title">
              <h2><?php echo $heading; ?></h2>
          </div>
        <?php endif; ?>
          <div class="solution-main">
              <div class="row">
                  <div class="col-sm-12 col-lg-6 col-xl-7">
                    <?php if(!empty($image_section_1)): ?>
                        <div class="solution-left">
                            <img src="<?php echo $image_section_1['url']; ?>" alt="<?php echo $image_section_1['alt']; ?>" />
                        </div>
                    <?php endif; ?>
                  </div>
                  <div class="col-sm-12 col-lg-6 col-xl-5">
                      <div class="solution-right">
                          <div class="expert-tooltip">
                            <?php if(!empty($profile_image_section_1)): ?>
                              <img src="<?php echo $profile_image_section_1['url']; ?>" alt="<?php echo $profile_image_section_1['alt']; ?>" />
                              <div class="custom-tooltip">
                                <?php if(!empty($profile_info)): ?>
                                  <p class="normal-paragraph-desktop">“<?= $profile_info; ?>”</p>
                                <?php endif; ?>
                                <?php if(!empty($profile_name)): ?>
                                  <p class="dark-paragraph-desktop"><?= $profile_name; ?></p>    
                                <?php endif; ?>
                              </div>
                            <?php endif; ?>
                          </div>
                          <div class="expert-description">
                              <?php if(!empty($title_section_1)): ?>
                                <h3><?= $title_section_1; ?></h3>
                              <?php endif; ?>
                              <?php if(!empty($content_section_1)): ?>
                              <p class="normal-paragraph-desktop"><?= $content_section_1; ?></p>
                              <?php endif; ?>
                              <?php if(!empty($button_section_1)): ?>
                              <a href="<?= $button_section_1['url'];?>" class="btn btn-primary" role="button" title="<?= $button_section_1['title'];?>"><?= $button_section_1['title'];?></a>
                              <?php endif; ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>  