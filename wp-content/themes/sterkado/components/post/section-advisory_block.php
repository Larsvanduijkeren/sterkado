<div class="conclusie-wraper">
<div class="advies-wrap">
    <?php if(!empty($args['title'])): ?>
        <h3 class="advises-title"><?php echo $args['title']; ?></h3>
    <?php endif; ?>
    <?php echo $args['list']; ?>
    
    <?php if(!empty($args['button'])): ?>
        <?php 

            $link_url = $args['button']['url'];
            $link_title = $args['button']['title'];
            $link_target = $args['button']['target'] ? $args['button']['target'] : '_self';
            ?>
            <a class="btn primary-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
    <?php if(!empty($args['logos'])): ?>
    <div class="client-logo">
        <h6 class="client-title">Zij geloven in ons</h6>
        <div class="brand-logo-wrap">
            <?php foreach ($args['logos'] as $logo): ?>
                <img src="<?php echo $logo;?>" alt="">
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>
</div>
</div>