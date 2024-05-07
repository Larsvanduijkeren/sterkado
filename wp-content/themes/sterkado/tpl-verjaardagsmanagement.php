<?php 
/* Template Name: Verjaardagsmanagement 
*/ 
get_header();
?>
<?php
  $hero_title       = get_field('hero_title');
  $green_button       = get_field('green_button');
  $logo_images       = get_field('logo_images');
  $hero_logo_title       = get_field('hero_logo_title');
  $sub_text_mobile       = get_field('sub_text_mobile');

  $hero_content     = get_field('hero_content');
  $hero_right_bg_image    = get_field('hero_right_bg_image');
  $hero_right_image = get_field('hero_right_image');
  $hero_text_after_button = get_field('hero_text_after_button');
  $quote_author_image = get_field('quote_author_image');
  $quote_text = get_field('quote_text');
  $quote_author_name = get_field('quote_author_name');
  $hero_section_background_image = get_field('hero_section_background_image');
  $quote_text = get_field('quote_text');
?> 

<section id="hero_banner_section_1" class="w-100 section_1 new_sec section-hero_banner_section inner-comm-banner" style=" background:url(<?= $hero_section_background_image ?>);">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="inner-row">
                
                <?php 
                if(!empty($green_button)){ 
                    $title = $green_button['title'];
                    $url = $green_button['url'];
                    $target = $green_button['target']?'_blank':'_self';
                    ?>
                   <div class="green-button">
                      <a target="<?= $target ?>" href="<?= $green_button['url'] ?>"><?= $green_button['title'] ?></a>
                   </div>
                <?php } ?>

                <?php if(!empty($hero_title)){ ?>
                <div class="titel">
                  <h1><?= $hero_title ?></h1>
                </div>
                <?php } ?>

                <?php if($sub_text_mobile){ ?>
                <div class="mobile_sub_text">
                    <?= $sub_text_mobile  ?>   
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
               <?php if($logo_images){ ?> 
                   <div class="logos">
                        <?php if($hero_logo_title){ ?><h6><?= $hero_logo_title ?></h6><?php } ?>
                        <?php foreach ($logo_images as $image) { ?>
                            <a href="#">
                                <img src="<?= $image['image']['url'] ?>" alt="<?= $image['image']['alt'] ?>">
                            </a>
                        <?php } ?>
                   </div>
                <?php } ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php if($hero_content){ ?>
<section id="right_gift_2" class="special_notes w-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-row">
                <?= $hero_content ?>
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
$image_video_heading = get_field('cutomized_image_video_heading');
$image_video_content = get_field('cutomized_image_video_content');
if( have_rows('customized_image__video_section') ):
    $i = 1;
    while( have_rows('customized_image__video_section') ) : the_row();
    ?>
    <section class="customized_image_video_3_<?= $i ?> w-100 section_4  section-customized_image__video_section">
        <?php
            $select_layout          = get_sub_field('select_layout');
            $title                  = get_sub_field('title');
            $subtitle               = get_sub_field('subtitle');
            $content                = get_sub_field('content');
            $button                 = get_sub_field('button');
            $select_image_or_video  = get_sub_field('select_image_or_video');
            $image                  = get_sub_field('image');
            $image_description      = get_sub_field('image_description');
            $video                  = get_sub_field('video');
            $video_poster           = get_sub_field('video_poster');
        ?> 
        <div class="section-space">
            <div class="customize-service arrow-with-text">
                <div class="service-main">
                    <div class="container">
                        
                        <?php if($image_video_heading || $image_video_content ){ ?> 
                        <div class="row">
                            <div class="titel col">
                                <?php if($image_video_heading){ ?><h2><?= $image_video_heading ?></h2><?php } ?>
                                <?php if($image_video_content){ ?><p> <?= $image_video_content ?></p><?php } ?>
                            </div>

                        </div>
                        <?php } ?>

                        <div class="row align-items-center">
                            <?php if($select_layout=="left_img_right_content"):?>
                                <div class="col-sm-12 col-lg-6">
                                    <?php if($select_image_or_video=="video"){ ?>
                                        <?php if(!empty($video)): ?>
                                            <video width="100%" height="100%" controls poster="<?php echo $video_poster; ?>">
                                                <source src="<?php echo $video; ?>" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        <?php endif; ?>
                                    <?php }else{?>
                                        <?php if(!empty($image)): ?>
                                            <div class="service-top-right">
                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            </div>
                                        <?php endif; ?>
                                    <?php } ?>
                                </div>
                            <?php endif; ?>
                            <div class="col-sm-12 col-lg-6">
                                    
                                
                                <div class="service-top-left">
                                    
                                    <?php if(!empty($subtitle)): ?>
                                        <div class="green-button">
                                            <a href="#"><?php echo $subtitle; ?></a>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <div class="service-description">
                                        
                                        <?php if(!empty($title)): ?>
                                            <h3><?php echo $title; ?></h3>
                                        <?php endif; ?>

                                        <?php if(!empty($content)): ?>
                                            <div class="normal-paragraph-desktop"><?php echo $content; ?></div>
                                        <?php endif; ?>

                                        <?php if( $button ): ?>
                                            <?php 
                                                $btn= $button['button'];
                                                $button_style=$button['button_style'];
                                            
                                                $button_with_arrow=$button['button_with_arrow'];
                                                if( $btn ): 
                                                    $link_url = $btn['url'];
                                                    $link_title = $btn['title'];
                                                    $link_target = $btn['target'] ? $btn['target'] : '_self';
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


                                        <?php if(!empty($image_description) ): ?>
                                            <div class="div-for-arrow">
                                            <p><?php echo $image_description; ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php if($select_layout=="right_img_left_content"):?>
                                <div class="col-sm-12 col-lg-6">
                                    <?php if($select_image_or_video=="video"){ ?>
                                        <?php if(!empty($video)): ?>
                                            <video width="100%" height="100%" controls poster="<?php echo $video_poster; ?>">
                                                <source src="<?php echo $video; ?>" type="video/mp4">
                                                <?= _e('Your browser does not support the video tag.', 'sterkado') ?>
                                            </video>
                                        <?php endif; ?>
                                    <?php }else{?>
                                        <?php if(!empty($image)): ?>
                                        
                                            <div class="service-top-right">
                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            </div>
                                        <?php endif; ?>
                                    <?php } ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>                        
            </div>
        </div>    
    </section>
    <?php
    $i++;
    endwhile;
endif;
?>



<?php 
// Gift Concept
$simple_3_steps      = get_field('simple_3_steps');
if($simple_3_steps){
    $steps_heading = $simple_3_steps['steps_heading'];
    $steps_3 = $simple_3_steps['3_steps'];
    $steps_button1 = $simple_3_steps['steps_button1'];
    $steps_button2 = $simple_3_steps['steps_button2'];
    ?>
    <section class="w-100 section_8  section-simple-steps">
        <div class="container">
            <?php if ($steps_heading) : ?> <h2 class="latest_news__title"><?php echo $steps_heading; ?></h2> <?php endif; ?> 
            <?php
                if( !empty($steps_3) ): ?>
                    <div class="row simple-steps-wrapper">
                        <?php
                            foreach ($steps_3 as $key => $step ) { ?>
                            <div class="col-lg-4 col-md-4 col-sm-12"  >
                                <div class="simple-steps-item" >
                                    <?php if($step['image']){ ?>
                                    <div class="simple-steps-img">
                                        <img src="<?= $step['image']['url'] ?>" alt="<?= $step['image']['alt'] ?>">
                                    </div>
                                    <?php } ?>

                                    <?php if($step['title']){ ?>
                                    <h3 class="simple-steps-heading">
                                        <?= $step['title']  ?>
                                    </h3>
                                    <?php } ?>

                                    <?php if($step['text']){ ?>
                                    <div class="simple-steps-content">
                                        <?= $step['text'] ?>
                                    </div> 
                                    <?php } ?>
                                </div>
                            </div>
                        <?php
                        } ?>

                        <div class="btns-div">
                        <?php 
                        if( $steps_button1 ): 
                            $button = $steps_button1['button'];
                            $button_style=$steps_button1['button_style'];
                            $button_with_arrow=$steps_button1['button_with_arrow'];
                    
                            if( $button ): 
                                $link_url = $button['url'];
                                $link_title = $button['title'];
                                $link_target = $button['target'] ? $button['target'] : '_self'; ?>
                            
                                <a class="btn <?= $button_style;?>-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
                                    <?php echo esc_html( $link_title ); ?>
                                    <?php if($button_with_arrow=='1'): ?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M12.172 7.00017L6.808 1.63617L8.222 0.222168L16 8.00017L8.222 15.7782L6.808 14.3642L12.172 9.00017H0V7.00017H12.172Z" fill="#40434E"/> </svg>
                                    <?php endif; ?>
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
                            
                        <?php
                        if( $steps_button2 ): 
                            
                            $button = $steps_button2['button'];
                            $button_style=$steps_button2['button_style'];
                            $button_with_arrow=$steps_button2['button_with_arrow'];
                            
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
                    <?php
                endif;
            ?>
        </div>
    </section>
<?php } ?>



<?php
  $logo_title       = get_field('logo_title');
  $logos            = get_field('logos');
  $is_logo_section_background    = get_field('is_logo_section_background');
  $logo_section_background_color = get_field('logo_section_background_color');
?> 
<section id="logo_section_4" class="w-100 section_2  section-logo_section">
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
                                ?>
                                    <li><img src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $logo['logo']['alt']; ?>"/></li>
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
                        <?php if(!empty($profile_image_section_1)): ?>
                        <img src="<?php echo $profile_image_section_1['url']; ?>"
                            alt="<?php echo $profile_image_section_1['alt']; ?>" />
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
                                    <?php if(!empty($profile_image_section_1)): ?>
                                    <img src="<?php echo $profile_image_section_1['url']; ?>"
                                        alt="<?php echo $profile_image_section_1['alt']; ?>" />
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
                                        <?php if(!empty($image_section_1)): ?>
                                            <img src="<?php echo $image_section_1['url']; ?>" alt="<?php echo $image_section_1['alt']; ?>" />
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
                                <?php }else{ ?>
                                    <img src="<?php echo $customized_solution_2_image_2['url']; ?>"
                                    alt="<?php echo $customized_solution_2_image_2['alt']; ?>" />
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
                                <?php if(!empty($review_logo_section_3)): ?>
                                <div class="feed-title">
                                    <img src="<?php echo $review_logo_section_3['url']; ?>" alt="Feedback Company" />
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
                            <?php } else { ?>
                                <img src="<?php echo $image_section_3['url']; ?>" alt="<?php echo $image_section_3['alt']; ?>" />
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
$latest_news_title  = get_field('latest_news_title');
$news_post          = get_field('news_post');
?>
<section  class="w-100 section_12  section-latest_news">
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
                        get_template_part( 'template-parts/latest', 'post');
                        endwhile; ?>
                    </div> 
                    <?php
                    endif;
                wp_reset_postdata();
            ?>
    </div>
</section>


 
<?php
if(1 == 2){
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
?>
<section class="w-100 section_10  section-cta_with_image ">
    <div class="section-space">
        <div class="container link-cases content_align_<?= $cta_content_alignment; ?>">
            <div class="row cases-box remove-mrgn-bt" <?php if($cat_is_background=='1'):?>style="background:<?= $cta_background_color; ?>"<?php endif; ?>>
                <div class="col-xl-8 col-md-<?= $col; ?>">
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
                <?php if($cta_image): ?>
                    <div class="col-md-4 text-right client-img">
                        <img class="w-100" src="<?= $cta_image; ?>" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>    
</section>
<?php } ?>

<?php
if(1 == 2){
$promise_title = get_field('promise_title');
?>
<section class="w-100 section_8  section-promises_section">
    <div class="container">
        <?php if ($promise_title) : ?> <h2 class="latest_news__title"><?php echo $promise_title; ?></h2> <?php endif; ?> 
        <?php
            if( have_rows('promises') ): ?>
                <div class="row promises-wrapper">
                    <?php
                        while( have_rows('promises') ) : the_row(); ?>
                        <div class="col-lg-4 col-md-4 col-sm-12"  >
                            <div class="promises-item" >
                                <div class="promises-img">
                                        <img src="<?php the_sub_field('image'); ?>" alt="">
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
<?php } ?>


<?php
if(1 == 2){
$every_moment_heading  = get_field('every_moment_heading');
$moments  = get_field('moments');
?> 
<section class="w-100 section_8  section-every_moment">
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
                    <div class="slider-img">
                        <?php if(!empty($moment['image'])): ?>
                        <a href="<?php echo $moment['link']['url']; ?>" title="<?php echo $moment['link']['title']; ?>">
                            <img src="<?php echo $moment['image']['url']; ?>" alt="<?php echo $moment['image']['alt']; ?>" />
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="slider-head primary-ming" style="background-color: <?php echo $moment['link_bg_color']; ?>;">
                        <a href="<?php echo $moment['link']['url']; ?>" title="<?php echo $moment['link']['title']; ?>"><?php echo $moment['link']['title']; ?></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div> 
</section>
<?php } ?>


<?php
$employee_section_heading      = get_field('employee_section_heading');
$employee_section_content       = get_field('employee_section_content');
$employee_section_link         = get_field('employee_section_link');
$employee_section_subheading    = get_field('employee_section_subheading');
$employee_left_section          = get_field('employee_left_section');
$employee_right_section         = get_field('employee_right_section');
?> 
<section  class="w-100 section_7  section-employee_section">
    <div class="section-space">
        <div class="container employee-cases link-cases">
            <div class="cases-box">
                <div class="case-description">
                    <?php if(!empty($employee_section_heading)): ?>
                        <h2><?php echo $employee_section_heading; ?></h2>
                    <?php endif; ?>
                    <?php if(!empty($employee_section_content)): ?>
                        <p class="normal-paragraph-desktop"><?=$employee_section_content;?></p>
                    <?php endif; ?>
                    <?php
                        $employee_section_link = get_field('employee_section_link');
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
                        <?php if(!empty($row['profile'])): ?>
                            <div class="tooltip-new user-position<?= $i; ?>">
                                <img src="<?php echo $row['profile']['url']; ?>" />
                                <?php if(!empty($row['info']) || !empty($row['name'])): ?>
                                    <div class="custom-tooltip-left">
                                        <?php if(!empty($row['info'])): ?>
                                            <p class="normal-paragraph-desktop">“<?=$row['info'];?>”</p>
                                        <?php endif; ?>
                                        <?php if(!empty($row['name'])): ?>
                                            <p class="dark-paragraph-desktop"><?=$row['name'];?></p>    
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                     <?php $i++; endforeach; ?>
                     <?php $k=8;
                     foreach( $employee_right_section as $row ): ?>
                        <?php if(!empty($row['profile'])): ?>
                            <div class="tooltip-new user-position<?= $k; ?>">
                                <img src="<?php echo $row['profile']['url']; ?>" />
                                <?php if(!empty($row['info']) || !empty($row['name'])): ?>
                                    <div class="custom-tooltip-right">
                                        <?php if(!empty($row['info'])): ?>
                                            <p class="normal-paragraph-desktop">“<?=$row['info'];?>”</p>
                                        <?php endif; ?>
                                        <?php if(!empty($row['name'])): ?>
                                            <p class="dark-paragraph-desktop"><?=$row['name'];?></p>    
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                     <?php $k++; endforeach; ?>
                </div>
            </div>
        </div>
    </div>    
</section>



<?php 
// Gift Concept
$gift_staff_heading      = get_field('gift_staff_heading');
$gift_staff_content      = get_field('gift_staff_content');
$gift_staff      = get_field('gifts');
?>
<section id="gift_staff_12" class="sec_pak_het">
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
                                <?php if(!empty($gift['image'])){ ?>
                                    <img class="card-img-top" src="<?= $gift['image']['url'] ?>" alt="<?= $gift['image']['alt'] ?>">
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

<?php get_footer(); ?>