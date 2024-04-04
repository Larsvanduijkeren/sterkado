<div class="nog-ene-wrap ">
    <div class="comment-wrap">
        <?php if(!empty($args['image'])): ?>
            <div class="comt-img">
                <img src="<?php echo $args['image']['url']; ?>" alt="<?php echo $args['image']['url']; ?>" srcset="">
            </div>
        <?php endif; ?>
        <div class="comments-box">
            <div class="comt_detail_img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comment-bg.svg" alt="">
            </div>
            <div class="detail__box">
                <?php if(!empty($args['testimonial'])): ?>
                    <p>“<?php echo $args['testimonial'];?>”</p>
                <?php endif; ?>
                <?php if(!empty($args['customer_name'])): ?>
                <div class="name">
                    <p><?php echo $args['customer_name'];?></p>
                </div>
                <?php endif; ?>
            </div>
            
        </div>
    </div>
</div>