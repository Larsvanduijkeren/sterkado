<?php
$heading                        = get_sub_field('heading');
$moments                        = get_sub_field('moments');

?> 

<div class="section-space">
	<div class="container every-moments">
		<?php if(!empty($heading)): ?>
		<div class="moment-title">
			<h2><?=$heading;?></h2>
		</div>
		<?php endif; ?>
		<div class="moments-slider">
			<?php foreach ($moments as $key => $moment): ?>
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