<div class="conclusie-wraper">
    <?php if(!empty($args['heading'])): ?>
        <h3><?php echo $args['heading']; ?></h3>
    <?php endif; ?>
    <?php if(!empty($args['conclusion_text'])): ?>
        <div class="news-section-desc">
            <?php echo $args['conclusion_text'] ?>
        </div>
    <?php endif; ?>
</div>
