<?php 
get_header();
?>
<?php
  global $post;
  $course_hero_background_image = get_field('course_hero_background_image','option');
  
  $featured_img                           = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
  
  $category = get_the_terms(get_the_ID(),'case_cat');
  $short_description       = get_field('short_description');

?> 
<!-- <section id="hero_banner_section_1" class="w-100 section_1  section-hero_banner_section inner-comm-banner case-detail-banner <?php if(!$short_description){ echo "no_short_description";} ?>" <?php if($course_hero_background_image):?>style="background-image:url(<?= $course_hero_background_image;?>);"<?php endif;?>>   
    <div class="container">
        <div class=" align-items-center hero-case-extra"> 
            <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 pd-100 md-full">
                <div class="row case-info-table align-items-end">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="banner-table-content">
                            <ul class="cat_name">
                                <?php
                                    foreach($category as $cat){
                                        ?>
                                    <li><?= $cat->name; ?></li>
                                    <?php
                                    }
                                ?>
                            </ul>
                            <h1><?php the_title(); ?></h1>
                            <p class="description"><?= $short_description; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <?php if( have_rows('companies') ): ?>
                            <ul class="companies">
                            <?php while( have_rows('companies') ): the_row(); ?>
                                <li>
                                    <p><span><?php the_sub_field('title'); ?></span><?php the_sub_field('subtitle'); ?></p>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if(!empty($hero_content)): ?>
                    <p><?php echo $hero_content; ?></p>
                <?php endif; ?>   
            </div>
        </div>
    </div>
</section> -->

<section id="hero_banner_section_1" class="w-100 section_1  section-hero_banner_section inner-comm-banner case-detail-banner <?php if(!$short_description){ echo "no_short_description";} ?>">
    <div class="case-detail-bg">
        <?php if ($course_hero_background_image): ?>
            <img src="<?= $course_hero_background_image; ?>">
        <?php endif; ?>
    </div>

    <div class="container">
        <div class="case-banner-card">
            <div class="case-banner-card-lt">
                <div class="case-title-block">
                    <ul class="cat_name">
                        <?php foreach($category as $cat){ ?>
                            <li class="cat_item"><?= $cat->name; ?></li>
                        <?php } ?>
                    </ul>
                    <h2 class="title"><?php the_title(); ?></h2>
                    <p class="desc"><?php echo $short_description; ?></p>
                </div>
                <div class="case-info-block">
                    <?php if( have_rows('companies') ): ?>
                        <ul class="case-cate-list">
                        <?php while( have_rows('companies') ): the_row(); ?>
                            <li>
                                <strong>Bedrijf</strong>
                                <span><?php the_sub_field('company_name'); ?></span>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <?php if(!empty($featured_img)): ?>
                <div class="case-banner-card-thumb">
                    <img src="<?php echo $featured_img; ?>" alt="" />
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php 

    $case_block = get_field('case_block');

    $raq_heading        = get_field('raq_heading','option');
    $raq_content        = get_field('raq_content','option');
    $request_button     = get_field('request_button','option');
    $raq_review_text    = get_field('raq_review_text','option');
    $ws_heading         = get_field('ws_heading','option');
    $ws_content         = get_field('ws_content','option');
    $ws_demo_button     = get_field('ws_demo_button','option');
    $ws_bottom_text     = get_field('ws_bottom_text','option');

 ?>
<section class="blog_content_detail_section w-100 case_content_detail">
    <div class="blog_content-box">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="blog-col-wraper">
                        
                        <div class="right-col">
                            <div class="onfo-wraper">
                                <?php foreach ($case_block as $key => $block): ?>
                                    <div class="section sroll-div" id="<?php echo sanitize_title_with_dashes($block['block_heading']) ?>">
                                        <?php 

                                            foreach ($block['case_components'] as $key1 => $component): 
                                                echo 
                                                get_template_part( "components/post/section-".$component['acf_fc_layout'],null,$component); 
                                            endforeach;
                                        ?>
                                    </div>
                                    <?php 
                                endforeach; ?>
                            </div>
                        </div>
                        <div class="col-left">
                            <div class="sidebar-col sidebar-col-plain">
                                <div class="request-quote-box case-sidebar-box">
                                    <?php if(!empty($raq_heading)): ?>
                                        <h2><?php echo $raq_heading; ?></h2>
                                    <?php endif; ?>
                                    <?php if(!empty($raq_content)): ?>
                                        <p><?php echo $raq_content; ?></p>
                                    <?php endif; ?>
                                    <?php if(!empty($request_button)): ?>
                                        <a class="btn btn-primary" href="<?php echo $request_button['url']; ?>"><?php echo $request_button['title']; ?></a>
                                    <?php endif; ?>
                                    <?php if(!empty($raq_review_text)): ?>
                                        <div class="rating-text vrag-ratting">
                                            <p><?php echo $raq_review_text; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="demo-webshop-box case-sidebar-box  case-sidebar-box-outline">
                                    <?php if(!empty($ws_heading)): ?>
                                        <h2><?php echo $ws_heading; ?></h2>
                                    <?php endif; ?>
                                    <?php if(!empty($ws_content)): ?>
                                        <p><?php echo $ws_content; ?></p>
                                    <?php endif; ?>
                                    <?php if(!empty($ws_demo_button)): ?>
                                        <a class="btn btn-primary" href="<?php echo $ws_demo_button['url']; ?>"><?php echo $ws_demo_button['title']; ?></a>
                                    <?php endif; ?>
                                    <?php if(!empty($ws_bottom_text)): ?>
                                        <p class="mailbox-text font-italic"><?php echo $ws_bottom_text; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    
    $surprise_heading   = get_field('surprise_heading','option');
    $surprise_box       = get_field('surprise_box','option');
    
?>
<section class="w-100  section-surprise_section container-1600 case_surprice_section">
    <div class="section-space">
        <div class="container">
            <?php if(!empty($surprise_heading)): ?>
                <div class="solution-title text-center">
                    <h2><?php echo $surprise_heading; ?></h2>
                </div>
            <?php endif; ?>
            <?php if(!empty($surprise_box)): ?>
                <div class="surprise__grid">
                    <div class="row justify-content-center">
                        <?php foreach ($surprise_box as $key => $box): ?>
                            <div class="col-lg-5 col-sm-6">
                                <div class="surprise__col">
                                    <?php if(!empty($box['surprise_banner_image'])): ?>
                                        <figure class="surprise__thumb">
                                            <img src="<?php echo $box['surprise_banner_image']['url']; ?>" alt="" />
                                            <?php if(!empty($box['most_chosen'])): ?>
                                                <span class="chosen__tag">Meest gekozen</span>
                                            <?php endif; ?>
                                        </figure>
                                    <?php endif; ?>
                                    <?php if(!empty($box['small_heading'])): ?>
                                    <div class="surpirse__col__cont">
                                        <div class="green-button">
                                            <a href="javascript:void(0)"><?php echo $box['small_heading']; ?></a>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <div class="feed-description">
                                        <?php if(!empty($box['heading'])): ?>
                                            <h3><?php echo $box['heading']; ?></h3>
                                        <?php endif; ?>
                                        <?php echo $box['list_content'] ?>
                                        <?php if(!empty($box['surpirse_button'])): ?>
                                            <?php 
                                            $button             =   $box['surpirse_button']['button'];
                                            $button_style       =   $box['surpirse_button']['button_style'];
                                            $button_with_arrow  =   $box['surpirse_button']['button_with_arrow'];
                                            
                                            if( $button ): 
                                                $link_url = $button['url'];
                                                $link_title = $button['title'];
                                                $link_target = $button['target'] ? $button['target'] : '_self';
                                                            ?>
                                            <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>"
                                                target="<?php echo esc_attr( $link_target ); ?>">
                                                <?php echo esc_html( $link_title ); ?>
                                                <?php if($button_with_arrow=='1'): ?>
                                               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 5V19" stroke="#40434E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 12L12 19L5 12" stroke="#40434E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>

                                                <?php endif; ?>
                                            </a>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>


<?php
    $every_moment_heading  = get_field('course_every_moment_heading','option');
    $moments  = get_field('course_moments','option');
?> 

<section id="every_moment_7" class="w-100 section_8  section-every_moment">
    <div class="section-space">
        <div class="container every-moments">
            <?php if(!empty($every_moment_heading)): ?>
            <div class="moment-title">
                <h2><?=$every_moment_heading;?></h2>
            </div>
            <?php endif; ?>
            <div class="moments-slider">
                <?php foreach ($moments as $key => $moment): ?>
                <div class="slide-item">
                    <div class="slide-item-inn">
                        <div class="slider-img">
                            <?php if(!empty($moment['image'])):
                                 if($moment['image']['alt']){
                                    $images_alt=$moment['image']['alt']." - ".$rank_math_focus_keyword;
                                }else{
                                    $images_alt=$moment['image']['title']." - ".$rank_math_focus_keyword;
                                } 
                                ?>
                            <a href="<?= ($moment['link']['url'])?$moment['link']['url']:'#'; ?>" title="<?php echo $moment['link']['title']; ?>">
                                <img src="<?php echo $moment['image']['url']; ?>" alt="<?php echo $images_alt; ?>" />
                            </a>
                            <?php endif; ?>
                        </div>
                        <div class="slider-head">
                            <a href="<?= ($moment['link']['url'])?$moment['link']['url']:'' ?>"
                                title="<?php echo $moment['link']['title']; ?>"><?= ($moment['link']['title'])?$moment['link']['title']:'' ?></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>