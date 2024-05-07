
<?php 
/* Template Name: Product - Themapakketten */ 
get_header();
?>
<?php
$hero_link      = get_field('hero_link');
$hero_title      = get_field('hero_section_title');
$hero_section_content    = get_field('hero_section_content');
$hero_section_quote_author_image    = get_field('hero_section_quote_author_image');
$hero_section_background_image    = get_field('hero_section_background_image');
$hero_section_mobile_background_image = get_field('hero_section_mobile_background_image');
$banner_logos = get_field('hero_logos');
$hero_logo_title = get_field('hero_logo_title');
$rank_math_focus_keyword=get_post_meta($post->ID, 'rank_math_focus_keyword', true);
if( strpos($rank_math_focus_keyword, ",") !== false ) {
    $rank_math_focus_keyword=explode(",",$rank_math_focus_keyword);
    $rank_math_focus_keyword=$rank_math_focus_keyword[0];
}else{
    $rank_math_focus_keyword=$rank_math_focus_keyword;
}
global $post;
$page_id=$post->ID;
?> 
<section id="hero_banner_section_1" class="w-100 section_1 new_sec section-hero_banner_section inner-comm-banner" style=" background-image:url(<?= $hero_section_background_image ?>);">
     <?php if( !empty( $hero_section_mobile_background_image ) ): 
         if($hero_section_mobile_background_image['alt']){
            $hero_section_mobile_background_image_alt=$hero_section_mobile_background_image['alt']." - ".$rank_math_focus_keyword;
        }else{
            $hero_section_mobile_background_image_alt=$hero_section_mobile_background_image['title']." - ".$rank_math_focus_keyword;
        }
        ?>
        <div class="mobile_bg_img">
            <img src="<?php echo esc_url($hero_section_mobile_background_image['url']); ?>" alt="<?php echo $hero_section_mobile_background_image_alt; ?>" />
        </div>
        <?php endif;  ?>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="inner-row">
                
                <?php 
                if(!empty($hero_link)){ 
                    $title = $hero_link['title'];
                    $url = $hero_link['url'];
                    $target = $hero_link['target']?'_blank':'_self';
                    ?>
                   <div class="green-button">
                      <a target="<?= $target ?>" href="<?= $hero_link['url'] ?>"><?= $hero_link['title'] ?></a>
                   </div>
                <?php } ?>

                <?php if(!empty($hero_title)){ ?>
                <div class="titel">
                  <h1><?= $hero_title ?></h1>
                </div>
                <?php } ?>

               <div class="btns-div">
                <?php 
                    $hero_button_1 = get_field('hero_button_1');
                    if( $hero_button_1 ): 
                        $button = $hero_button_1['button'];
                        $button_style=$hero_button_1['button_style'];
                        $button_with_arrow=$hero_button_1['button_with_arrow'];
                
                        if( $button ): 
                            $link_url = $button['url'];
                            $link_title = $button['title'];
                            $link_target = $button['target'] ? $button['target'] : '_self'; ?>
                        
                            <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
                                <?php echo esc_html( $link_title ); ?>
                                <?php if($button_with_arrow=='1'): ?>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M12 5V19" stroke="#40434E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M19 12L12 19L5 12" stroke="#40434E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </svg> 
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                    <?php
                        $hero_button_2 = get_field('hero_button_2');
                        if( $hero_button_2 ): ?>
                            
                            <?php 
                            $button = $hero_button_2['button'];
                            $button_style=$hero_button_2['button_style'];
                            $button_with_arrow=$hero_button_2['button_with_arrow'];
                            
                            if( $button ): 
                                $link_url = $button['url'];
                                $link_title = $button['title'];
                                $link_target = $button['target'] ? $button['target'] : '_self';
                                ?>
                                <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
                                    <?php echo esc_html( $link_title ); ?>
                                    <?php if($button_with_arrow=='1'): ?>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    <?php endif; ?>
                                </a>
                            <?php endif; ?>
                    
                    <?php endif; ?>
                            
               </div>
               <?php if($banner_logos){ ?> 
                   <div class="logos">
                        <?php if($hero_logo_title ){ ?>
                            <h6><?= $hero_logo_title ?></h6>
                        <?php } ?>
                        <?php 
                        foreach ( $banner_logos as $image ) { 
                            if($image['logo']['alt']){
                                $images_alt=$image['logo']['alt']." - ".$rank_math_focus_keyword;
                            }else{
                                $images_alt=$image['logo']['title']." - ".$rank_math_focus_keyword;
                            }
                            ?>
                            <a href="#">
                                <img src="<?= $image['logo']['url'] ?>" alt="<?= $images_alt; ?>">
                            </a>
                        <?php } ?>
                   </div>
                <?php } ?>
            </div>
         </div>
      </div>
   </div>
</section>


<?php if($hero_section_content){ ?>
<section id="right_gift_2" class="special_notes w-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-row">
                <?= $hero_section_content ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<?php
  $left_title_right_content_heading = get_field('left_title_right_content_heading');
  $left_title_right_content_content = get_field('left_title_right_content_content');
?> 
<section id="logo_section_1" class="w-100 section_1  section-logo_section">
    <div class="section-space arrow-bottom" >
        <div class="container our-customers2" >
            <?php if(!empty($left_title_right_content_heading) && !empty($left_title_right_content_content)): ?>
            <div class="employee-unique-bottom">
                <div class="emp-thought">
                    <?php if(!empty($left_title_right_content_heading)): ?>
                        <div class="emp-title">
                            <h2 class="font-h4"><?=$left_title_right_content_heading;?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if(!empty($left_title_right_content_content)): ?>
                    <div class="emp-desc">
                        <p><?= $left_title_right_content_content;?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>


<?php
$get_inspired = get_field('get_inspired');
if($get_inspired){ ?>
<section id="get_inspired_3" class="w-100 section_12  section-latest_news get_inspired">
    <div class="container">
        
        <?php if ($get_inspired['heading']) : ?> 
            <h2 class="latest_news__title text-center"><?php echo $get_inspired['heading']; ?></h2> 
        <?php endif; ?> 

        <?php if ( $get_inspired['text'] ) : ?> 
            <div class="text-center description">
                <p> <?= $get_inspired['text'] ?> </p>
            </div>
        <?php endif; ?> 


        <div class="row latest-news-wrapper">
            <?php 
            foreach ( $get_inspired['inspired_list'] as $key => $item ) {
                $featured_img = $item['image']; 
                if($featured_img['alt']){
                    $images_alt=$featured_img['alt']." - ".$rank_math_focus_keyword;
                }else{
                    $images_alt=$featured_img['title']." - ".$rank_math_focus_keyword;
                }
                $link = $item['button']; ?>
                <div class="col-lg-4 col-md-6 col-sm-12" >
                     <div class="news-item" >
                         <?php if($featured_img){ ?>
                         <div class="news-img">
                             <img src="<?php echo $featured_img['url']; ?>" alt="<?php echo $images_alt; ?>">
                             <div class="curve">
                                 <svg viewbox="0 0 100 25">
                                     <path fill="#d7e7e7" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
                                 </svg>
                             </div>
                         </div>
                        <?php } ?>

                         <div class="news-wrapper-content">
                            <?php if($item['title']){ ?>
                            <h3 class="news-heading">
                                <?= $item['title'] ?>
                            </h3>
                            <?php } ?>

                            <?php if($item['content']){ ?>
                            <div class="news-content">
                                 <?php echo $item['content'] ?>
                            </div> 
                            <?php } ?>

                            <?php if( $item['sub_text'] ){ ?>
                                <h5><?= $item['sub_text'] ?></h5>
                            <?php } ?>

                            <?php 
                            if(!empty($link)){ 
                                $title = $link['title'];
                                $url = $link['url'];
                                $target = $link['target']?'_blank':'_self';
                                ?>

                                <a target="<?= $target ?>" data-page_id="<?= get_the_ID() ?>" href="<?= $url ?>" data-id="<?= $key ?>" class="btn btn-primary modal-btn"><?= $title ?>
                                </a>
                                <span id="product_popop_loader_<?php echo $key ?>" class="product_popop_loader" style="display: none;"></span>
                            <?php } ?>
                         </div>
                     </div>
                 </div>
                <?php
            }
            ?>
        </div> 
    </div>
</section>
<?php } ?>


<?php 
$partner_customiz = get_field('partner_customization');
if($partner_customiz){
?>
<section id="partner_customization_4" class="w-100 section_2  partner_customization">
    <div class="section-space" >
        <div class="container">
            <?php if($partner_customiz['heading']){ ?>
                <h2 class="text-center partner_customization_title"><?= $partner_customiz['heading']  ?></h2>
            <?php } ?>

            <?php if( $partner_customiz['text'] ){ ?>
            <div class="txt text-center description">
                <?= $partner_customiz['text']  ?>
            </div>
            <?php } ?>

            <?php if( $partner_customiz['select_form'] ){ ?>
            <div class="txt text-center form-wrap">
                <?= do_shortcode( '[gravityform title="false" ajax="true" id="'.$partner_customiz['select_form'] .'" ]' ) ?>
            </div>
            <?php } ?>

            <?php if( $partner_customiz['style_text'] ){ ?>
            <div class="style-text">
                <p><?= $partner_customiz['style_text']  ?></p>
            </div>
            <?php } ?>

            <?php if( $partner_customiz['list_text'] ){ ?>
            <div class="list-text text-center">
                <?= $partner_customiz['list_text']  ?>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>


<?php
  $logo_title       = get_field('logo_title');
  $logos            = get_field('logos');
  $is_logo_section_background    = get_field('is_logo_section_background');
  $logo_section_background_color = get_field('logo_section_background_color');
?> 
<section id="logo_section_5" class="w-100 section_2  section-logo_section">
    <div class="section-space" >
        <div class="container our-customers2" >
            <div class="believe-us" <?php if($is_logo_section_background=='1'):?>style="background:<?= $logo_section_background_color; ?>"<?php endif; ?>>
                <div class="logo-head">
                    <?php if(!empty($logo_title)): ?>
                        <h5><?php echo $logo_title; ?></h5>
                    <?php endif; ?>    
                </div>    
                <div class="logo-list">
                    <ul>
                        <!-- <?php if(!empty($logo_title)): ?>
                            <li><h5><?php echo $logo_title; ?></h5></li>
                        <?php endif; ?> -->
                        <?php if(!empty($logos)): 
                            foreach ($logos as $key => $logo):
                                if(!empty($logo['logo'])){
                                    if($logo['logo']['alt']){
                                        $images_alt=$logo['logo']['alt']." - ".$rank_math_focus_keyword;
                                    }else{
                                        $images_alt=$logo['logo']['title']." - ".$rank_math_focus_keyword;
                                    }
                            ?>
                            <li><img src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $images_alt; ?>"/></li>
                        <?php 
                                }
                            endforeach;
                            endif; ?>
                    </ul>
                </div>    
            </div>
        </div>
    </div>
</section>


<?php
//Customized solution_1
$customized_solution_2                  = get_field('customized_solution_2');

$customized_solution_heading                  = $customized_solution_2['customized_solution_heading'];

$image_section_1          = $customized_solution_2['image_section_1'];
$profile_image_section_1  = $customized_solution_2['profile_image_section_1'];
$customized_solution_profile_info             = $customized_solution_2['customized_solution_profile_info'];
$customized_solution_profile_name             = $customized_solution_2['customized_solution_profile_name'];
$title_section_1          = $customized_solution_2['title_section_1'];
$content_section_1        = $customized_solution_2['content_section_1'];
$button_section_1         = $customized_solution_2['button_section_1'];
$customized_solution_1_subtitle         = $customized_solution_2['customized_solution_1_subtitle'];

$select_image_or_video_1  = $customized_solution_2['customized_1_select_image_or_video'];
$video_poster_1  = $customized_solution_2['video_poster_1'];
$customized_solution_1_video  = $customized_solution_2['customized_solution_1_video'];
$button_section_1 = $customized_solution_2['button_section_1'];
?>
<section id="customized_solution_2" class="w-100 section_4  section-customized_solution">
    <div class="section-space">
        <div class="container custom-solution">
            <div class="solution-section">

                <div class="mobile_solution_tooltip">
                    <div class="expert-tooltip show-tooltip">
                        <?php if(!empty($profile_image_section_1)): 
                            if($profile_image_section_1['alt']){
                                $images_alt=$profile_image_section_1['alt']." - ".$rank_math_focus_keyword;
                            }else{
                                $images_alt=$profile_image_section_1['title']." - ".$rank_math_focus_keyword;
                            }
                            ?>
                        <img src="<?php echo $profile_image_section_1['url']; ?>"  alt="<?php echo $images_alt; ?>" />
                        <div class="custom-tooltip">
                            <?php if(!empty($customized_solution_profile_info)): ?>
                            <p class="normal-paragraph-desktop">“<?= $customized_solution_profile_info; ?>”
                            </p>
                            <?php endif; ?>
                            <?php if(!empty($customized_solution_profile_name)): ?>
                            <p class="dark-paragraph-desktop"><?= $customized_solution_profile_name; ?></p>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if(!empty($customized_solution_heading)): ?>
                <div class="solution-title">
                    <h2><?php echo $customized_solution_heading; ?></h2>
                </div>
                <?php endif; ?>
                <div class="solution-main">
                    <div class="row">
                      
                        <div class="col-sm-12 col-lg-6 col-xl-6">
                            <div class="solution-right">
                                <div class="expert-tooltip show-tooltip">
                                    <?php if(!empty($profile_image_section_1)):
                                        if($profile_image_section_1['alt']){
                                            $images_alt=$profile_image_section_1['alt']." - ".$rank_math_focus_keyword;
                                        }else{
                                            $images_alt=$profile_image_section_1['title']." - ".$rank_math_focus_keyword;
                                        }
                                        ?>
                                    <img src="<?php echo $profile_image_section_1['url']; ?>" alt="<?php echo $images_alt; ?>" />
                                    <div class="custom-tooltip">
                                        <?php if(!empty($customized_solution_profile_info)): ?>
                                        <p class="normal-paragraph-desktop">“<?= $customized_solution_profile_info; ?>”
                                        </p>
                                        <?php endif; ?>
                                        <?php if(!empty($customized_solution_profile_name)): ?>
                                        <p class="dark-paragraph-desktop"><?= $customized_solution_profile_name; ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                
                                <?php if(!empty($customized_solution_1_subtitle)){ ?>
                                <div class="green-button">
                                    <a href="#"><?= $customized_solution_1_subtitle ?></a>
                                </div>
                                <?php } ?>

                                <div class="expert-description description-space">
                                    <?php if(!empty($title_section_1)): ?>
                                    <h3><?= $title_section_1; ?></h3>
                                    <?php endif; ?>
                                    <?php if(!empty($content_section_1)): ?>
                                    <p class="normal-paragraph-desktop"><?= $content_section_1; ?></p>
                                    <?php endif; ?>
                                    <?php
                                        
                                    if( $button_section_1 ): ?>
                                    <?php 
                                    $button = $button_section_1['button'];
                                    $button_style=$button_section_1['button_style'];
                             
                                    $button_with_arrow=$button_section_1['button_with_arrow'];
                                    if( $button ): 
                                        $link_url = $button['url'];
                                        $link_title = $button['title'];
                                        $link_target = $button['target'] ? $button['target'] : '_self';
                                        ?>
                                    <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>"
                                        target="<?php echo esc_attr( $link_target ); ?>">
                                        <?php echo esc_html( $link_title ); ?>
                                        <?php if($button_with_arrow=='1'): ?>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 9H14.25" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <?php endif; ?>
                                    </a>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>  
                        <div class="col-sm-12 col-lg-6 col-xl-6">
                            <?php if($image_section_1 || $customized_solution_1_video): ?>
                                <div class="solution-left">
                                    <?php if($select_image_or_video_1 == "video"){ ?>
                                        <?php if(!empty($customized_solution_1_video)): ?>
                                            <video width="100%" height="100%" controls
                                                poster="<?php echo $video_poster_1; ?>">
                                                <source src="<?php echo $customized_solution_1_video; ?>" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        <?php endif; ?> 
                                    <?php } else { ?>
                                        <?php if(!empty($image_section_1)): 
                                                if($image_section_1['alt']){
                                                    $images_alt=$image_section_1['alt']." - ".$rank_math_focus_keyword;
                                                }else{
                                                    $images_alt=$image_section_1['title']." - ".$rank_math_focus_keyword;
                                                }
                                            ?>
                                            <img src="<?php echo $image_section_1['url']; ?>" alt="<?php echo $images_alt; ?>" />
                                        <?php endif; ?>
                                    <?php } ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Customized solution 2
    $customized_solution_3                  = get_field('customized_solution_3');
    $title_section_2                = $customized_solution_3['title_section_2'];
    $customized_solution_2_subtitle = $customized_solution_3['customized_solution_2_subtitle'];
    $content_section_2              = $customized_solution_3['content_section_2'];
    $button_section_2               = $customized_solution_3['button_section_2'];

    $customized_solution_2_image_1  = $customized_solution_3['customized_solution_2_image_1'];
    $customized_solution_2_image_1_description  = $customized_solution_3['customized_solution_2_image_1_description'];
    $customized_solution_2_image_2              = $customized_solution_3['customized_solution_2_image_2'];
    
    $customized_2_select_image_or_video  = $customized_solution_3['customized_2_select_image_or_video'];
    $customized_solution_3_video_2                  = $customized_solution_3['customized_solution_3_video_2'];
    $customized_solution_3_video_poster           = $customized_solution_3['customized_solution_3_video_poster'];
    $customized_solution_2_image_2_description  = $customized_solution_3['customized_solution_2_image_2_description'];
    $button_section_2 = $customized_solution_3['button_section_2'];

?>
<section id="customized_solution_3" class="w-100 section_5  custom-solution-1-keuzes section-customized_solution_2">
    <div class="section-space">
        <div class="our-service">
            <div class="service-main">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">

                            <div class="service-top-left">
                                
                                <?php if(!empty($customized_solution_2_subtitle)): ?>
                                    <div class="service-description"><div class="green-button">
                                        <a href="javascript:void(0)"><?php echo $customized_solution_2_subtitle; ?></a>
                                      </div>  
                                <?php endif; ?>

                                    <?php if(!empty($title_section_2)): ?>
                                    <h3><?php echo $title_section_2; ?></h3>
                                    <?php endif; ?>
                                    
                                    
                                    <?php if(!empty($content_section_2)): ?>
                                    <p class="normal-paragraph-desktop remove-pd"><?php echo $content_section_2; ?></p>
                                    <?php endif; ?>
                                    <?php
                                        
                                    if( $button_section_2 ): ?>
                                    <?php 
                                    $button = $button_section_2['button'];
                                    $button_style=$button_section_2['button_style'];
                                
                                    $button_with_arrow=$button_section_2['button_with_arrow'];
                                    if( $button ): 
                                        $link_url = $button['url'];
                                        $link_title = $button['title'];
                                        $link_target = $button['target'] ? $button['target'] : '_self';
                                        ?>
                                    <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>"
                                        target="<?php echo esc_attr( $link_target ); ?>">
                                        <?php echo esc_html( $link_title ); ?>
                                        <?php if($button_with_arrow=='1'): ?>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 9H14.25" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <?php endif; ?>
                                    </a>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            
                            <?php 
                            if( !empty($customized_solution_2_image_2) || !empty($customized_solution_3_video_2) ): 
                            if(!empty($customized_solution_2_image_1_description)){
                            ?>
                            <div class="service-bottom-right-mobile">
                                <div class="description-top">
                                    <p><?php echo $customized_solution_2_image_1_description; ?></p>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="service-top-right">
                                <?php 
                                if($customized_2_select_image_or_video=="video" && !empty( $customized_solution_3_video_2 ) ){ ?>
                                    <video width="100%" height="100%" controls
                                        poster="<?php echo $customized_solution_3_video_poster; ?>">
                                        <source src="<?php echo $customized_solution_3_video_2; ?>" type="video/mp4">
                                        <?= _e('Your browser does not support the video tag.', 'sterkado') ?>
                                    </video>
                                <?php }else{ 
                                        if($customized_solution_2_image_2['alt']){
                                            $images_alt=$customized_solution_2_image_2['alt']." - ".$rank_math_focus_keyword;
                                        }else{
                                            $images_alt=$customized_solution_2_image_2['title']." - ".$rank_math_focus_keyword;
                                        }
                                    ?>
                                    <img src="<?php echo $customized_solution_2_image_2['url']; ?>" alt="<?php echo $images_alt; ?>" />
                                <?php } ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</section>
<?php
//Customized solution 3
$customized_solution_4                  = get_field('customized_solution_4');

$title_section_3                = $customized_solution_4['title_section_3'];
$content_section_3              = $customized_solution_4['content_section_3'];
$button_section_3               = $customized_solution_4['button_section_3'];
$image_section_3                = $customized_solution_4['image_section_3'];
$review_logo_section_3          = $customized_solution_4['review_logo_section_3'];
$review_description_section_3   = $customized_solution_4['review_description_section_3'];
$customized_solution_3_subtitle   = $customized_solution_4['customized_solution_3_subtitle'];

$select_image_or_video_3  = $customized_solution_4['customized_3_select_image_or_video'];
$video_poster_3  = $customized_solution_4['video_poster_3'];
$customized_3_video  = $customized_solution_4['customized_3_video'];
$button_section_3 = $customized_solution_4['button_section_3'];
?>
<section id="customized_solution_4" class="w-100 section_6  section-customized_solution_3">
    <div class="section-space">
        <div class="container feedbakc-company">
            <div class="feedback-section">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-xl-6">
                        <div class="feedback-left">
                            <div class="feed-box">
                                <?php if(!empty($review_logo_section_3)): 
                                     if($review_logo_section_3['alt']){
                                        $images_alt=$review_logo_section_3['alt']." - ".$rank_math_focus_keyword;
                                    }else{
                                        $images_alt=$review_logo_section_3['title']." - ".$rank_math_focus_keyword;
                                    }
                                    ?>
                                <div class="feed-title">
                                    <img src="<?php echo $review_logo_section_3['url']; ?>" alt="<?php echo $images_alt; ?>" />
                                </div>
                                <?php endif; ?>

                                <?php echo do_shortcode('[feedbackcompany_bar]'); ?>
                            </div>
                            <?php if(!empty($customized_solution_3_subtitle)){ ?>
                            <div class="green-button">
                                <a href="#"><?= $customized_solution_3_subtitle ?></a>
                            </div>
                            <?php } ?>

                            <div class="feed-description">
                                <?php if(!empty($title_section_3)): ?>
                                <h3><?php echo $title_section_3; ?></h3>
                                <?php endif; ?>
                                <?php if(!empty($content_section_3)): ?>
                                <p class="normal-paragraph-desktop"><?php echo $content_section_3; ?></p>
                                <?php endif; ?>
                                <?php
                                    
                                    if( $button_section_3 ): 
                                    $button = $button_section_3['button'];
                                    $button_style=$button_section_3['button_style'];
                                
                                    $button_with_arrow=$button_section_3['button_with_arrow'];
                                    if( $button ): 
                                        $link_url = $button['url'];
                                        $link_title = $button['title'];
                                        $link_target = $button['target'] ? $button['target'] : '_self';
                                        ?>
                                    <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>"
                                    target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
                                    <?php if($button_with_arrow=='1'): ?>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <?php endif; ?>
                                </a>
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php if($image_section_3 || $customized_3_video): ?>
                    <div class="col-sm-12 col-lg-6 col-xl-6">
                        
                        <div class="feedback-right">
                            <?php if($select_image_or_video_3 == 'video' && !empty($customized_3_video) ){ ?>
                                <video width="100%" height="100%" controls
                                        poster="<?php echo $video_poster_3; ?>">
                                        <source src="<?php echo $customized_3_video; ?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                </video>
                            <?php } else { 
                                 if($image_section_3['alt']){
                                    $images_alt=$image_section_3['alt']." - ".$rank_math_focus_keyword;
                                }else{
                                    $images_alt=$image_section_3['title']." - ".$rank_math_focus_keyword;
                                }
                                ?>
                                <img src="<?php echo $image_section_3['url']; ?>" alt="<?php echo $images_alt; ?>" />
                            <?php } ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
// Latest News Section
$latest_news_title = get_field('latest_news_title');
$news_post = get_field('news_post');
?>
<section id="latest_news_9" class="w-100 section_12  section-latest_news">
    <div class="container">
        <?php if ($latest_news_title) : ?> <h2 class="latest_news__title"><?php echo $latest_news_title; ?></h2> <?php endif; ?> 
            <?php
                if(!empty($news_post)):
            
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'post__in' => $news_post,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                else:

                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                endif;
            
                $loop = new WP_Query( $args ); 
                if ( $loop->have_posts() ) : ?>
                    <div class="row latest-news-wrapper">
                        <?php
                        while ( $loop->have_posts() ) : $loop->the_post();
                        get_template_part( 'template-parts/latest', 'post',array('page_id' => $page_id));
                        endwhile; ?>
                    </div> 
                    <?php
                    endif;
                wp_reset_postdata();
            ?>
    </div>
</section>


<?php
$employee_section      = get_field('employee_section');
if($employee_section){
    $employee_section_heading      = $employee_section['employee_section_heading'];
    $employee_section_content       = $employee_section['employee_section_content'];
    $employee_section_link         = $employee_section['employee_section_link'];
    $employee_section_subheading    = $employee_section['employee_section_subheading'];
    $employee_left_section          = $employee_section['employee_left_section'];
    $employee_right_section         = $employee_section['employee_right_section'];
    ?> 
    <section id="employee_section_10" class="w-100 section_7  section-employee_section">
        <div class="section-space">
            <div class="container link-cases">
                <div class="cases-box">
                    <div class="case-description">
                        <?php if(!empty($employee_section_heading)): ?>
                            <h2><?php echo $employee_section_heading; ?></h2>
                        <?php endif; ?>
                        <?php if(!empty($employee_section_content)): ?>
                            <p class="normal-paragraph-desktop"><?=$employee_section_content;?></p>
                        <?php endif; ?>
                        <?php
                            if( $employee_section_link ): ?>
                                    <?php 
                                        $button = $employee_section_link['button'];
                                        $button_style=$employee_section_link['button_style'];
                                    
                                        $button_with_arrow=$employee_section_link['button_with_arrow'];
                                        if( $button ): 
                                            $link_url = $button['url'];
                                            $link_title = $button['title'];
                                            $link_target = $button['target'] ? $button['target'] : '_self';
                                            ?>
                                                <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
                                                <?php echo esc_html( $link_title ); ?>
                                                <?php if($button_with_arrow=='1'): ?>
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                <?php endif; ?>
                                            </a>
                                        <?php endif; ?>
                        <?php endif; ?>
                        <?php if(!empty($employee_section_subheading)): ?>
                            <p class="font-italic normal-paragraph-desktop"><?=$employee_section_subheading;?></p>
                        <?php endif; ?>
                    </div>
                    <div class="case-users">
                        <?php $i=1;
                         foreach( $employee_left_section as $row ): ?>
                            <?php if(!empty($row['profile'])): 
                                 if($row['profile']['alt']){
                                    $image_alt=$row['profile']['alt']." - ".$rank_math_focus_keyword;
                                }else{
                                    $image_alt=$row['profile']['title']." - ".$rank_math_focus_keyword;
                                }
                                ?>
                                <div class="tooltip-new user-position<?= $i; ?>">
                                    <img src="<?php echo $row['profile']['url']; ?>" alt="<?php echo $image_alt; ?>"/>
                                  
                                </div>
                            <?php endif; ?>
                         <?php $i++; endforeach; ?>
                         <?php $k=8;
                         foreach( $employee_right_section as $row ): ?>
                            <?php if(!empty($row['profile'])): 
                                 if($row['profile']['alt']){
                                    $image_alt=$row['profile']['alt']." - ".$rank_math_focus_keyword;
                                }else{
                                    $image_alt=$row['profile']['title']." - ".$rank_math_focus_keyword;
                                }
                                ?>
                                <div class="tooltip-new user-position<?= $k; ?>">
                                    <img src="<?php echo $row['profile']['url']; ?>" alt="<?php echo $image_alt; ?>"/>
                                   
                                </div>
                            <?php endif; ?>
                         <?php $k++; endforeach; ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
<?php } ?>



<?php 
// Gift Concept
$gift_staff_heading      = get_field('gift_staff_heading');
$gift_staff_content      = get_field('gift_staff_content');
$gift_staff      = get_field('gifts');
?>
<section id="gift_staff_11" class="sec_pak_het">
    <div class="container">
        <div class="row">
            <div class="inner-row">
                <div class="col-sm-12 col-lg-6 col-xl-5 text-col">
                    <?php if(!empty($gift_staff_heading)){ ?>
                        <h3 class="title"><?= $gift_staff_heading ?></h3>
                    <?php } ?>

                    <?php if(!empty($gift_staff_content)){ ?>
                        <p><?= $gift_staff_content ?></p>
                    <?php } ?>
                </div>
                <?php if(!empty($gift_staff)){ ?>
                <div class="col-sm-12 col-lg-6 col-xl-7 cards-col">
                    <?php foreach ($gift_staff as $gift ) { ?>
                        <?php if($gift['image'] || $gift['title'] || $gift['text']): ?>
                            <div class="card">
                                <?php if(!empty($gift['image'])){ 
                                     if($gift['image']['alt']){
                                        $images_alt=$gift['image']['alt']." - ".$rank_math_focus_keyword;
                                    }else{
                                        $images_alt=$gift['image']['title']." - ".$rank_math_focus_keyword;
                                    }
                                    ?>
                                    <img class="card-img-top" src="<?= $gift['image']['url'] ?>" alt="<?= $images_alt ?>">
                                <?php } ?>
                                <div class="card-body">
                                    <?php if(!empty( $gift['title'] )){ ?>
                                        <h5 class="card-title"><?= $gift['title'] ?></h5>
                                    <?php } ?>
                                    
                                    <?php if(!empty( $gift['text'] )){ ?>
                                        <?= $gift['text'] ?>
                                    <?php } ?>

                                    <?php
                                    $gift_button_1 = $gift['hero_button'];
                                    if( $gift_button_1 ): 
                                        $button = $gift_button_1['button'];
                                        $button_style=$gift_button_1['button_style'];
                                        $button_with_arrow=$gift_button_1['button_with_arrow'];
                                
                                        if( $button ): 
                                            $link_url = $button['url'];
                                            $link_title = $button['title'];
                                            $link_target = $button['target'] ? $button['target'] : '_self';
                                            ?>
                                            <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
                                                <?php echo esc_html( $link_title ); ?>
                                                <?php if($button_with_arrow=='1'): ?>
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                <?php endif; ?>
                                            </a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php } ?>   
                   
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>


<?php 
if(1 == 2){
$faq_title  = get_field('faq_title'); ?> 
<section id="faq_section_3" class="w-100 section_3  section-faq_section">
    <div class="section-space">
        <div class="container faq_wrapper">
            <?php if(!empty($faq_title)): ?>
            <div class="slide-title text-center">
                <h2><?=$faq_title;?></h2>
            </div>
            <?php endif; ?>
            <?php if( have_rows('faqs') ): $c=1;?>
                <div class="row">
                    <div class="col-md-12">
                        <div id="accordion" class="accordion-list">
                            <?php while( have_rows('faqs') ): the_row(); 
                                ?>
                                <div class="card">
                                    <div class="card-header" id="heading_<?= $c; ?>">
                                        <h5 class="faq-title">
                                            <a class="faq_question <?php if($c!='1'){ echo "collapsed";} ?>" data-toggle="collapse"  data-target="#collapse_<?= $c; ?>" aria-expanded="true" aria-controls="collapse_<?= $c; ?>">
                                                <?php the_sub_field('question'); ?>
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapse_<?= $c; ?>" class="collapse <?php if($c=='1'){ echo "show";} ?>" aria-labelledby="heading_<?= $c; ?>" data-parent="#accordion">
                                        <div class="card-body">
                                            <?php the_sub_field('answer'); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php $c++; endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>    
</section>
<?php } ?>


<?php
if(1 == 2){
$promise_title = get_field('promise_title');
?>
<section id="promises_section_4" class="w-100 section_8  section-promises_section">
    <div class="container">
        <?php if ($promise_title) : ?> <h2 class="latest_news__title"><?php echo $promise_title; ?></h2> <?php endif; ?> 
        <?php
            if( have_rows('promises') ): ?>
                <div class="row promises-wrapper">
                    <?php
                        while( have_rows('promises') ) : the_row(); 
                            $image=get_sub_field('image');
                            if($image['alt']){
                                $images_alt=$image['alt']." - ".$rank_math_focus_keyword;
                            }else{
                                $images_alt=$image['title']." - ".$rank_math_focus_keyword;
                            }
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-12"  >
                            <div class="promises-item" >
                                <div class="promises-img">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $images_alt; ?>">
                                </div>
                                <h3 class="promises-heading">
                                    <?php the_sub_field('title'); ?>
                                </h3>
                                <div class="promises-content">
                                    <?php the_sub_field('content'); ?>
                                </div> 
                            </div>
                        </div>
                    <?php
                    endwhile; ?>
                </div> 
                <?php
            endif;
        ?>
    </div>
</section>
<?php
$cta_content_alignment = get_field('cta_content_alignment');
$cta_heading          = get_field('cta_heading');
$cta_content          = get_field('cta_content');
$cta_button             = get_field('cta_button');
$cat_is_background    = get_field('cat_is_background');
$cta_background_color = get_field('cta_background_color');

$cta_text_after_button            = get_field('cta_text_after_button');
$cta_image= get_field('cta_image');

if($cta_image){
    $col='8';
}else{
    $col='12';
}
}

if(1 == 2){
?>
<section id="cta_with_image_5" class="w-100 section_10  section-cta_with_image employee-sec">
    <div class="section-space">
        <div class="container link-cases content_align_<?= $cta_content_alignment; ?>">
            <div class="row cases-box auto-height remove-margin" <?php if($cat_is_background=='1'):?>style="background:<?= $cta_background_color; ?>"<?php endif; ?>>
                <div class="col-md-<?= $col; ?>">
                    <div class="case-description">
                        <?php if(!empty($cta_heading)): ?>
                            <h2><?php echo $cta_heading; ?></h2>
                        <?php endif; ?>
                        <?php if(!empty($cta_content)): ?>
                            <p class="normal-paragraph-desktop"><?=$cta_content;?></p>
                        <?php endif; ?>
                        <?php
                            $cta_button = get_field('cta_button');
                            if( $cta_button ): ?>
                                    <?php 
                                        $button = $cta_button['button'];
                                        $button_style=$cta_button['button_style'];
                                    
                                        $button_with_arrow=$cta_button['button_with_arrow'];
                                        if( $button ): 
                                            $link_url = $button['url'];
                                            $link_title = $button['title'];
                                            $link_target = $button['target'] ? $button['target'] : '_self';
                                            ?>
                                                <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
                                                <?php echo esc_html( $link_title ); ?>
                                                <?php if($button_with_arrow=='1'): ?>
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.75 9H14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                <?php endif; ?>
                                            </a>
                                        <?php endif; ?>
                        <?php endif; ?>
                        <?php if(!empty($cta_text_after_button)): ?>
                            <p class="font-italic normal-paragraph-desktop"><?=$cta_text_after_button;?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if(!empty($cta_image)): 
                        if($cta_image['alt']){
                            $images_alt=$cta_image['alt']." - ".$rank_math_focus_keyword;
                        }else{
                            $images_alt=$cta_image['title']." - ".$rank_math_focus_keyword;
                        }
                    ?>
                    <div class="col-md-4">
                        <img class="w-100" src="<?= $cta_image['url']; ?>" alt="<?php echo $image_alt; ?>"/>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>    
</section>
<?php } ?>
<?php get_footer(); ?>