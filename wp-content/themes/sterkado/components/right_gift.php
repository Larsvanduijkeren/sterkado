<?php
  $heading       = get_sub_field('heading');
  $gifts         = get_sub_field('gifts');

  $numOfCols = count($gifts);
  $rowCount = 0;
  $ColWidth = 12 / $numOfCols;
?> 

<div class="section-space">
    <div class="container our-offers4">
        <div class="gift-section">
            <?php if(!empty($heading)): ?>
            <div class="gift-title">
                <h2><?= $heading;?></h2>    
            </div>
            <?php endif; ?>
            <div class="gift-listing">
                <div class="row ">
                    <?php foreach ($gifts as $key => $gift): ?>
                    <div class=" col-sm-12 col-md-6 col-xl-<?=$ColWidth;?>">
                    <div class="inner-col">
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
                                <a href="<?= $gift['link']['url'];?>" title="<?= $gift['link'];?>"><?= $gift['link']['title'];?></a>
                            <?php endif; ?>
                        </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>