<div class="nog-ene-wrap ">
    <div class="subscrib-wrap">
        <?php if(!empty($args['title'])): ?>
            <h5 class="form-title"><?php echo $args['title']; ?></h5>
        <?php endif; ?>
        <?php echo do_shortcode( '[gravityform id="1" title="false" ajax="true"]') ?>
    </div>
</div>