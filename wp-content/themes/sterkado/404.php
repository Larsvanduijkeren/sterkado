<?php
/**
* The template for displaying 404 pages (not found)
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
*
* @package WP_Bootstrap_Starter
*/
get_header(); ?>

<?php

  $hero_background_image = get_field('404_hero_background_image','option');
  $title = get_field('404_title','option');
  $subtitle = get_field('404_subtitle','option');
  $content = get_field('404_content','option');
  $hero_phone_no = get_field('404_hero_phone_no','option');
  $hero_phone_no_description = get_field('404_hero_phone_no_description','option');
  $hero_email = get_field('404_hero_email','option');
  $hero_email_description = get_field('404_hero_email_description','option');

?> 
<section id="hero_banner_section_1" class="w-100 section_1 section-hero_banner_section inner-comm-banner  only-banner-content" <?php if($hero_background_image):?>style="background-image:url(<?= $hero_background_image;?>);"<?php endif;?>>   
    <div class="error-page-banner w-100">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12 pd-100 md-full text-center">
                    <?php if(!empty($title)): ?>
                        <h1><?php echo $title; ?></h1>
                    <?php endif; ?>   
                    <?php if(!empty($subtitle)): ?>
                        <h3><?php echo $subtitle; ?></h3>
                    <?php endif; ?>   
                    <?php if(!empty($content)): ?>
                        <p><?php echo $content; ?></p>
                    <?php endif; ?>   
                    <?php 
                        $link = get_field('404_button','option');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-9 col-md-12 col-sm-12 pd-100 md-full text-center">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="contact_phone">
                            <?php 
                            $contact_phone_no = get_field('hero_phone_no','option');
                            if( $contact_phone_no ): 
                                $link_url = $contact_phone_no['url'];
                                $link_title = $contact_phone_no['title'];
                                $link_target = $contact_phone_no['target'] ? $contact_phone_no['target'] : '_self';
                                ?>
                                <a class="contact_phone_no" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                            <?php if(!empty($hero_phone_no_description)): ?>
                                <span><?php echo $hero_phone_no_description; ?></span>
                            <?php endif; ?>
                                    
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="contact_email">
                            <?php 
                            $hero_email = get_field('404_hero_email','option');
                            if( $hero_email ): 
                                $link_url = $hero_email['url'];
                                $link_title = $hero_email['title'];
                                $link_target = $hero_email['target'] ? $hero_email['target'] : '_self';
                                ?>
                                <a class="contact_email-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                            <?php if(!empty($hero_email_description)): ?>
                                <span><?php echo $hero_email_description; ?></span>
                            <?php endif; ?>
                                    
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
    
    if(!empty($surprise_box)):
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

<?php endif; ?>

<?php 
    $every_moment_heading  = get_field('404_every_moment_heading','option');
    $moments  = get_field('404_moments','option');
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

<?php
$arrow_title          = get_field('arrow_title','option');
$arrow_content          = get_field('arrow_content','option');
?>
<?php if(!empty($arrow_title) || !empty($arrow_content)): ?>
<section id="logo_section_2" class="w-100 section_2  section-logo_section container-1600">
    <div class="section-space">
        <div class="container our-customers2">
            <div class="employee-unique no-arrow">
                <div class="emp-thought">
                    <?php if(!empty($arrow_title)): ?>
                    <div class="emp-title">
                        <h2 class="font-h4"><?=$arrow_title;?></h2>
                    </div>
                    <?php endif; ?>

                    <?php if(!empty($arrow_content)): ?>
                    <div class="emp-desc">
                        <p><?= $arrow_content;?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>
</section>
<?php endif; ?>


<?php

$enable_section = get_field('404_cat_enable_section','option');
$cta_content_alignment = get_field('404_cta_content_alignment','option');
$cta_heading          = get_field('404_cta_heading','option');
$cta_content          = get_field('404_cta_content','option');
$cta_button             = get_field('404_cta_button','option');
$cat_is_background    = get_field('404_cat_is_background','option');
$cta_background_color = get_field('404_cta_background_color','option');

$cta_image= get_field('404_cta_image','option');

if($cta_image){
    $col='8';
}else{
    $col='12';
}

if($enable_section):
?>
<section class="w-100 section_10  section-cta_with_image">
    <div class="section-space">
        <div class="container link-cases content_align_<?= $cta_content_alignment; ?>">
            <div class="row cases-box " <?php if($cat_is_background=='1'):?>style="background:<?= $cta_background_color; ?>"<?php endif; ?>>
                <div class="col-md-<?= $col; ?>">
                    <div class="case-description">
                        <?php if(!empty($cta_heading)): ?>
                            <h2><?php echo $cta_heading; ?></h2>
                        <?php endif; ?>
                        <?php if(!empty($cta_content)): ?>
                            <p class="normal-paragraph-desktop"><?=$cta_content;?></p>
                        <?php endif; ?>
                        <?php if(!empty($cta_button)): ?>
                            <a href="<?= $cta_button['url'];?>" class="btn btn-primary" role="button" title="<?= $cta_button['title'];?>"><?= $cta_button['title'];?></a>
                        <?php endif; ?>
                       
                    </div>
                </div>
                <?php if($cta_image): ?>
                    <div class="col-md-4 text-right client-img">
                        <img class="w-100" src="<?= $cta_image; ?>" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>    
</section>

<?php

endif;
get_footer();
?>