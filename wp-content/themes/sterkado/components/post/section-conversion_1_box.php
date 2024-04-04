<div class="conversion-box">
    <div class="advies-wrap">
        <div class="news-img-box-section">
            <div class="content_inner">
                <?php if(!empty($args['title'])): ?>
                    <h3><?php echo $args['title']; ?></h3>
                <?php endif; ?>
                <?php if(!empty($args['description'])): ?>
                <p class="dec">
                    <?php echo $args['description'] ?>
                </p>
                <?php endif; ?>
                <?php if(!empty($args['button'])): ?>
                    <div class="button-box">
                        <a href="<?php echo $args['button']['url']; ?>" class="btn primary-btn"><?php echo $args['button']['title']; ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <?php if(!empty($args['image'])): ?>
                <div class="img-box">
                    <img src="<?php echo $args['image']['url']; ?>">
                </div>            
            <?php endif; ?>
        </div>
    </div>
</div>