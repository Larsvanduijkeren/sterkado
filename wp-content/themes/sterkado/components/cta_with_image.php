<?php
$heading          = get_sub_field('heading');
$content          = get_sub_field('content');
$link             = get_sub_field('button');
$is_background    = get_sub_field('is_background');
$background_color = get_sub_field('background_color');
$background_color = get_sub_field('background_color');
$image            = get_sub_field('image');
$text_after_button= get_sub_field('text_after_button');

if($image){
    $col='8';
}else{
    $col='12';
}
?> 
<div class="section-space">
    <div class="container link-cases">
        <div class="row cases-box" <?php if($is_background=='1'):?>style="background:<?= $background_color; ?>"<?php endif; ?>>
            <div class="col-md-<?= $col; ?>">
                <div class="case-description">
                    <?php if(!empty($heading)): ?>
                        <h2><?php echo $heading; ?></h2>
                    <?php endif; ?>
                    <?php if(!empty($content)): ?>
                        <p class="normal-paragraph-desktop"><?=$content;?></p>
                    <?php endif; ?>
                    <?php if(!empty($link)): ?>
                        <a href="<?= $link['url'];?>" class="btn btn-primary" role="button" title="<?= $link['title'];?>"><?= $link['title'];?></a>
                    <?php endif; ?>
                    <?php if(!empty($text_after_button)): ?>
                        <p class="font-italic normal-paragraph-desktop"><?=$text_after_button;?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php if($image): ?>
                <div class="col-md-4">
                    <img class="w-100" src="<?= $image; ?>" />
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>    