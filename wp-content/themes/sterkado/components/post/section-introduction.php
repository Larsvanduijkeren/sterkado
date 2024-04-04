<div class="introductie-wrap"> 
    <?php if(!empty($args['heading'])): ?>
        <h2 class="intro-title"><?php echo $args['heading']; ?></h2>
    <?php endif; ?>
    <?php if(!empty($args['description'])): ?>
        <div class="news-section-desc">
        <?php echo $args['description'] ?>
    </div>
    <?php endif; ?>
</div>