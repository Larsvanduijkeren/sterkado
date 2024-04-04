<?php
    $product_cat = get_the_terms(get_the_ID(),'product_cat');
    $cat_array = [];
    foreach($product_cat as $cat){
        $cat_array[] = $cat->name;
    }
    $cat_name = implode(' ',$cat_array);
    $price=get_field('price');
    $product_subtitle=get_field('product_subtitle');
    $delivery_time=get_field('delivery_time');
    $minimum_order=get_field('minimum_order');
    $product_url=get_field('product_url',$product_id);
    $image_id=get_post_thumbnail_id($product_id);
    $alt_text = get_the_title($image_id);
    $page_id=$args['page_id'];
    $rank_math_focus_keyword=get_post_meta($page_id, 'rank_math_focus_keyword', true);
    if($rank_math_focus_keyword){
        if( strpos($rank_math_focus_keyword, ",") !== false ) {
            $rank_math_focus_keyword=explode(",",$rank_math_focus_keyword);
            $rank_math_focus_keyword=$rank_math_focus_keyword[0];
        }else{
            $rank_math_focus_keyword=$rank_math_focus_keyword;
        }
        $alt_text= $alt_text." - ". $rank_math_focus_keyword;
    }else{
        $alt_text= $alt_text;
    }
 ?>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 product-item">
    <div class="card">
        <?php if(has_post_thumbnail()):?>
            <a href="#" class="product_details_btn" data-product_id="<?php echo get_the_ID(); ?>">				
                <img class="product-img-top" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo $alt_text; ?>">
            </a>
        <?php else: ?>
            <a href="#" class="product_details_btn" data-product_id="<?php echo get_the_ID(); ?>">		
                <img class="product-img-top" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/no-image.jpg" alt="">
                </a>
        <?php endif;?>
        <div class="product-body">
                <a href="#">	
                <h3 class="product_title product_details_btn" data-product_id="<?php echo get_the_ID(); ?>"><?php echo  get_the_title($product_id); ?></h3>
                </a>
            <!-- <h3 class="product-title"><?php //the_title(); ?></h3> -->
            <?php if($product_subtitle):?>
            <h4 class="product-subtitle"><?= $product_subtitle; ?></h4>
            <?php endif; ?>
            <p class="product-text"><?php echo wp_trim_words(get_the_excerpt(),18,'');?></p>
           
            <?php if($delivery_time || $minimum_order):?>
                <ul class="product_data">
                    <?php if($delivery_time):?>
                        <li class="delivery_time"><span>Levertijd: </span><?= $delivery_time; ?></li>
                    <?php endif; ?>
                    <?php if($minimum_order):?>
                        <li class="minimum_order"><span>Minimale afname: </span><?= $minimum_order; ?></li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
            <p class="price"><span>€<?= $price;?></span></p>
            <a href="#" class="btn btn-primary product_details_btn" data-product_id="<?php echo get_the_ID(); ?>">Bekijk</a>
            <span id="product_popop_loader_<?php echo get_the_ID(); ?>" class="product_popop_loader" style="display:none;"></span>
        </div>
    </div>
</div>