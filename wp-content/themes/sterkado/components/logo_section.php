<?php
  $logo_title       = get_sub_field('logo_title');
  $logos            = get_sub_field('logos');
  $is_background    = get_sub_field('is_background');
  $background_color = get_sub_field('background_color');
  $heading          = get_sub_field('heading');
  $content          = get_sub_field('content');
  $arrow_position   = get_sub_field('arrow_position');
?> 
<div class="section-space arrow-<?= $arrow_position; ?>" >
    <div class="container our-customers2" >
        <div class="believe-us" <?php if($is_background=='1'):?>style="background:<?= $background_color; ?>"<?php endif; ?>>
            <div class="logo-head">
                <?php if(!empty($logo_title)): ?>
                    <h5><?php echo $logo_title; ?></h5>
                <?php endif; ?>    
            </div>    
            <div class="logo-list">
                <ul>
                    <!-- <?php if(!empty($logo_title)): ?>
                        <li><h5><?php echo $logo_title; ?></h5></li>
                    <?php endif; ?> -->
                    <?php if(!empty($logos)): 
                        foreach ($logos as $key => $logo):
                        ?>
                        <li><img src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $logo['logo']['alt']; ?>"/></li>
                    <?php 
                        endforeach;
                        endif; ?>
                </ul>
            </div>    
        </div>
        <?php if(!empty($heading) && !empty($content)): ?>
        <div class="employee-unique">
            <div class="emp-thought">
                <?php if(!empty($heading)): ?>
                    <div class="emp-title">
                        <h2 class="font-h4"><?=$heading;?></h2>
                    </div>
                <?php endif; ?>
                <?php if(!empty($content)): ?>
                <div class="emp-desc">
                    <p><?= $content;?></p>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>