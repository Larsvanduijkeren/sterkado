<?php
    $select_layout          = get_sub_field('select_layout');
    $title                  = get_sub_field('title');
    $subtitle               = get_sub_field('subtitle');
    $content                = get_sub_field('content');
    $button                 = get_sub_field('button');
    $select_image_or_video  = get_sub_field('select_image_or_video');
    $image                  = get_sub_field('image');
    $image_description      = get_sub_field('image_description');
    $video                  = get_sub_field('video');
    $video_poster           = get_sub_field('video_poster');
?> 
<div class="section-space">
    <div class="customize-service ">
        <div class="service-main">
            <div class="container">
                <div class="row align-items-center">
                    <?php if($select_layout=="left_img_right_content"):?>
                        <div class="col-sm-12 col-lg-6">
                            <?php if($select_image_or_video=="video"){ ?>
                                <?php if(!empty($video)): ?>
                                    <video width="100%" height="100%" controls poster="<?php echo $video_poster; ?>">
                                        <source src="<?php echo $video; ?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                <?php endif; ?>
                            <?php }else{?>
                                <?php if(!empty($image)): ?>
                                    <div class="service-top-right">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    </div>
                                <?php endif; ?>
                            <?php } ?>
                        </div>
                    <?php endif; ?>
                    <div class="col-sm-12 col-lg-6">
                            <?php if(!empty($image_description)): ?>
                                        <div class="description-top">
                                            <p><?php echo $image_description; ?></p>
                                        </div>
                                    <?php endif; ?>
                        <div class="service-top-left">
                            
                            <div class="service-description">
                                  
                                <?php if(!empty($title)): ?>
                                    <h3><?php echo $title; ?></h3>
                                <?php endif; ?>
                                <?php if(!empty($subtitle)): ?>
                                    <h6><?php echo $subtitle; ?></h6>
                                <?php endif; ?>
                                <?php if(!empty($content)): ?>
                                    <p class="normal-paragraph-desktop"><?php echo $content; ?></p>
                                <?php endif; ?>
                                <?php if(!empty($button)): ?>
                                    <a href="<?= $button['url'];?>" class="btn btn-secondary" role="button" title="<?= $button['title'];?>"><?= $button['title'];?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php if($select_layout=="right_img_left_content"):?>
                        <div class="col-sm-12 col-lg-6">
                            <?php if($select_image_or_video=="video"){ ?>
                                <?php if(!empty($video)): ?>
                                    <video width="100%" height="100%" controls poster="<?php echo $video_poster; ?>">
                                        <source src="<?php echo $video; ?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                <?php endif; ?>
                            <?php }else{?>
                                <?php if(!empty($image)): ?>
                                   
                                    <div class="service-top-right">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    </div>
                                <?php endif; ?>
                            <?php } ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>                        
    </div>
</div>    