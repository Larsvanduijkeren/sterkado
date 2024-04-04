<?php
$section_title      = get_sub_field('section_title');
$title              = get_sub_field('title');
$slides            = get_sub_field('slides');
?> 
<div class="section-space">
	<div class="container content-slides">
		<?php if(!empty($section_title)): ?>
		<div class="slide-title">
			<h2><?=$section_title;?></h2>
		</div>
		<?php endif; ?>
        <div class="row">
            <div class="col-md-6 content-slides-left">
                <?php if(!empty($title)): ?>
                    <h3><?=$title;?></h3>
                <?php endif; ?>
                <?php if(!empty($title)): ?>
                    <p><?=$title;?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-6 content-slides-right">
                <div class="content-slider content_slider_slides">
                    <?php foreach ($slides as $key => $slide): ?>
                    <div class="slide-item">
                        <div class="slider-img">
                            <?php if(!empty($slide['image'])): ?>
                                <img src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $slide['image']['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="slider-head primary-ming">
                            <p><?php echo $slide['title']; ?><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/i.svg"/></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </div>
	</div>
</div>