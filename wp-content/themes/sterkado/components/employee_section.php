<?php
$heading                        = get_sub_field('heading');
$content                        = get_sub_field('content');
$link                           = get_sub_field('link');
$subheading                     = get_sub_field('subheading');
$employee_left_section          = get_sub_field('employee_left_section');
$employee_right_section         = get_sub_field('employee_right_section');

?> 
<div class="section-space">
    <div class="container link-cases">
        <div class="cases-box">
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
                <?php if(!empty($subheading)): ?>
                    <p class="font-italic normal-paragraph-desktop"><?=$subheading;?></p>
                <?php endif; ?>
            </div>
            <div class="case-users">
                <?php if(!empty($employee_left_section[0]['profile'])): ?>
                <div class="tooltip-new user-position1">
                    <img src="<?php echo $employee_left_section[0]['profile']['url']; ?>" />
                    <div class="custom-tooltip-left">
                        <?php if(!empty($employee_left_section[0]['info'])): ?>
                            <p class="normal-paragraph-desktop">“<?=$employee_left_section[0]['info'];?>”</p>
                        <?php endif; ?>
                        <?php if(!empty($employee_left_section[0]['name'])): ?>
                            <p class="dark-paragraph-desktop"><?=$employee_left_section[0]['name'];?></p>    
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($employee_left_section[1]['profile'])): ?>
                <div class="tooltip-new user-position2">
                    <img src="<?php echo $employee_left_section[1]['profile']['url']; ?>" />
                    <div class="custom-tooltip-left">
                        <?php if(!empty($employee_left_section[1]['info'])): ?>
                            <p class="normal-paragraph-desktop">“<?=$employee_left_section[1]['info'];?>”</p>
                        <?php endif; ?>
                        <?php if(!empty($employee_left_section[1]['name'])): ?>
                            <p class="dark-paragraph-desktop"><?=$employee_left_section[1]['name'];?></p>    
                        <?php endif; ?>    
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($employee_left_section[2]['profile'])): ?>
                <div class="tooltip-new user-position3">
                    <img src="<?php echo $employee_left_section[2]['profile']['url']; ?>" />
                    <div class="custom-tooltip-left">
                        <?php if(!empty($employee_left_section[2]['info'])): ?>
                            <p class="normal-paragraph-desktop">“<?=$employee_left_section[2]['info'];?>”</p>
                        <?php endif; ?>
                        <?php if(!empty($employee_left_section[2]['name'])): ?>
                            <p class="dark-paragraph-desktop"><?=$employee_left_section[2]['name'];?></p>    
                        <?php endif; ?>   
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($employee_left_section[3]['profile'])): ?>
                <div class="tooltip-new tooltip-new user-position4">
                    <img src="<?php echo $employee_left_section[3]['profile']['url']; ?>" />
                    <div class="custom-tooltip-left">
                        <?php if(!empty($employee_left_section[3]['info'])): ?>
                            <p class="normal-paragraph-desktop">“<?=$employee_left_section[3]['info'];?>”</p>
                        <?php endif; ?>
                        <?php if(!empty($employee_left_section[3]['name'])): ?>
                            <p class="dark-paragraph-desktop"><?=$employee_left_section[3]['name'];?></p>    
                        <?php endif; ?>   
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($employee_left_section[4]['profile'])): ?>
                <div class="tooltip-new user-position5">
                    <img src="<?php echo $employee_left_section[4]['profile']['url']; ?>" />
                    <div class="custom-tooltip-left">
                        <?php if(!empty($employee_left_section[4]['info'])): ?>
                            <p class="normal-paragraph-desktop">“<?=$employee_left_section[4]['info'];?>”</p>
                        <?php endif; ?>
                        <?php if(!empty($employee_left_section[4]['name'])): ?>
                            <p class="dark-paragraph-desktop"><?=$employee_left_section[4]['name'];?></p>    
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($employee_left_section[5]['profile'])): ?>
                <div class="tooltip-new user-position6">
                    <img src="<?php echo $employee_left_section[5]['profile']['url']; ?>" />
                    <div class="custom-tooltip-left">
                        <?php if(!empty($employee_left_section[5]['info'])): ?>
                            <p class="normal-paragraph-desktop">“<?=$employee_left_section[5]['info'];?>”</p>
                        <?php endif; ?>
                        <?php if(!empty($employee_left_section[5]['name'])): ?>
                            <p class="dark-paragraph-desktop"><?=$employee_left_section[5]['name'];?></p>    
                        <?php endif; ?> 
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($employee_left_section[6]['profile'])): ?>
                <div class="tooltip-new user-position7">
                    <img src="<?php echo $employee_left_section[6]['profile']['url']; ?>" />
                    <div class="custom-tooltip-left">
                        <?php if(!empty($employee_left_section[6]['info'])): ?>
                            <p class="normal-paragraph-desktop">“<?=$employee_left_section[6]['info'];?>”</p>
                        <?php endif; ?>
                        <?php if(!empty($employee_left_section[6]['name'])): ?>
                            <p class="dark-paragraph-desktop"><?=$employee_left_section[6]['name'];?></p>    
                        <?php endif; ?>  
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($employee_right_section[0]['profile'])): ?>
                <div class="tooltip-new user-position8">
                    <img src="<?php echo $employee_right_section[0]['profile']['url']; ?>" />
                    <div class="custom-tooltip-right">
                        <?php if(!empty($employee_right_section[0]['info'])): ?>
                            <p class="normal-paragraph-desktop">“<?=$employee_right_section[0]['info'];?>”</p>
                        <?php endif; ?>
                        <?php if(!empty($employee_right_section[0]['name'])): ?>
                            <p class="dark-paragraph-desktop"><?=$employee_right_section[0]['name'];?></p>    
                        <?php endif; ?>  
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($employee_right_section[1]['profile'])): ?>
                <div class="tooltip-new user-position9">
                    <img src="<?php echo $employee_right_section[1]['profile']['url']; ?>" />
                    <div class="custom-tooltip-right">
                        <?php if(!empty($employee_right_section[1]['info'])): ?>
                            <p class="normal-paragraph-desktop">“<?=$employee_right_section[1]['info'];?>”</p>
                        <?php endif; ?>
                        <?php if(!empty($employee_right_section[1]['name'])): ?>
                            <p class="dark-paragraph-desktop"><?=$employee_right_section[1]['name'];?></p>    
                        <?php endif; ?>    
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($employee_right_section[2]['profile'])): ?>
                <div class="tooltip-new user-position10">
                    <img src="<?php echo $employee_right_section[2]['profile']['url']; ?>" />
                    <div class="custom-tooltip-right">
                        <?php if(!empty($employee_right_section[2]['info'])): ?>
                            <p class="normal-paragraph-desktop">“<?=$employee_right_section[2]['info'];?>”</p>
                        <?php endif; ?>
                        <?php if(!empty($employee_right_section[2]['name'])): ?>
                            <p class="dark-paragraph-desktop"><?=$employee_right_section[2]['name'];?></p>    
                        <?php endif; ?> 
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($employee_right_section[3]['profile'])): ?>
                <div class="tooltip-new user-position11">
                    <img src="<?php echo $employee_right_section[3]['profile']['url']; ?>" />
                    <div class="custom-tooltip-right">
                        <?php if(!empty($employee_right_section[3]['info'])): ?>
                            <p class="normal-paragraph-desktop">“<?=$employee_right_section[3]['info'];?>”</p>
                        <?php endif; ?>
                        <?php if(!empty($employee_right_section[3]['name'])): ?>
                            <p class="dark-paragraph-desktop"><?=$employee_right_section[3]['name'];?></p>    
                        <?php endif; ?>  
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($employee_right_section[4]['profile'])): ?>
                <div class="tooltip-new user-position12">
                    <img src="<?php echo $employee_right_section[4]['profile']['url']; ?>" />
                    <div class="custom-tooltip-right">
                        <?php if(!empty($employee_right_section[4]['info'])): ?>
                            <p class="normal-paragraph-desktop">“<?=$employee_right_section[4]['info'];?>”</p>
                        <?php endif; ?>
                        <?php if(!empty($employee_right_section[4]['name'])): ?>
                            <p class="dark-paragraph-desktop"><?=$employee_right_section[4]['name'];?></p>    
                        <?php endif; ?>    
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($employee_right_section[5]['profile'])): ?>
                <div class="tooltip-new user-position13">
                    <img src="<?php echo $employee_right_section[5]['profile']['url']; ?>" />
                    <div class="custom-tooltip-right">
                        <?php if(!empty($employee_right_section[5]['info'])): ?>
                            <p class="normal-paragraph-desktop">“<?=$employee_right_section[5]['info'];?>”</p>
                        <?php endif; ?>
                        <?php if(!empty($employee_right_section[5]['name'])): ?>
                            <p class="dark-paragraph-desktop"><?=$employee_right_section[5]['name'];?></p>    
                        <?php endif; ?>   
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($employee_right_section[6]['profile'])): ?>
                <div class="tooltip-new user-position14">
                    <img src="<?php echo $employee_right_section[6]['profile']['url']; ?>" />
                    <div class="custom-tooltip-right">
                        <?php if(!empty($employee_right_section[6]['info'])): ?>
                            <p class="normal-paragraph-desktop">“<?=$employee_right_section[6]['info'];?>”</p>
                        <?php endif; ?>
                        <?php if(!empty($employee_right_section[6]['name'])): ?>
                            <p class="dark-paragraph-desktop"><?=$employee_right_section[6]['name'];?></p>    
                        <?php endif; ?>  
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>    