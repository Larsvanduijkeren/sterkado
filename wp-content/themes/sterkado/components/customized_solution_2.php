<?php

    $title_section_2                = get_sub_field('title_section_2');
    $subtitle                = get_sub_field('subtitle');
    $content_section_2              = get_sub_field('content_section_2');
    $button_section_2               = get_sub_field('button_section_2');
    $image_1_section_2              = get_sub_field('image_1');
    $image_1_description_section_2  = get_sub_field('image_1_description_section_2');
    $image_2_section_2              = get_sub_field('image_2');
    $image_2_description_section_2  = get_sub_field('image_2_description_section_2');

?> 
<div class="section-space">
    <div class="our-service">
        <div class="service-main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="service-top-left">
                            <div class="service-description">
                                <?php if(!empty($title_section_2)): ?>
                                    <h3><?php echo $title_section_2; ?></h3>
                                <?php endif; ?>
                                <?php if(!empty($subtitle)): ?>
                                    <h6><?php echo $subtitle; ?></h6>
                                <?php endif; ?>
                                <?php if(!empty($content_section_2)): ?>
                                    <p class="normal-paragraph-desktop"><?php echo $content_section_2; ?></p>
                                <?php endif; ?>
                                <?php if(!empty($button_section_2)): ?>
                                    <a href="<?= $button_section_2['url'];?>" class="btn btn-secondary" role="button" title="<?= $button_section_2['title'];?>"><?= $button_section_2['title'];?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <?php if(!empty($image_1_section_2)): ?>
                            <div class="service-bottom-right-mobile">
                                <div class="description-top">
                                    <p><?php echo $image_1_description_section_2; ?></p>
                                </div>
                            </div>
                            <div class="service-top-right">
                                <img src="<?php echo $image_1_section_2['url']; ?>" alt="<?php echo $image_1_section_2['alt']; ?>" />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">    
                    <div class="col-sm-12 col-lg-6">
                        <?php if(!empty($image_2_section_2)): ?>
                            <div class="service-bottom-left">
                                <img src="<?php echo $image_2_section_2['url']; ?>" alt="<?php echo $image_2_section_2['alt']; ?>" />
                            </div>
                            <div class="service-bottom-right-mobile">
                                <div class="description-bottom">
                                    <p><?php echo $image_2_description_section_2; ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="service-bottom-right-desktop">
                            <?php if(!empty($image_1_description_section_2)): ?>
                                <div class="description-top">
                                    <p><?php echo $image_1_description_section_2; ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if(!empty($image_2_description_section_2)): ?>
                                <div class="description-bottom">
                                    <p><?php echo $image_2_description_section_2; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>                        
    </div>
</div>    