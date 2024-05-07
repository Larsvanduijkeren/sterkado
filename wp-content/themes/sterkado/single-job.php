<?php get_header(); ?>

 
<?php
$marketing_team      = get_field('marketing_team');
if($marketing_team){
$hero_link      = $marketing_team['link'];
$hero_title      = $marketing_team['heading'];
$hero_section_content    = $marketing_team['text'];
$hero_button_1    = $marketing_team['button'];
$members    = $marketing_team['members'];
$style_text    = $marketing_team['style_text'];
?> 
<section id="hero_banner_section_1" class="w-100 section_1 new_sec section-hero_banner_section inner-comm-banner" style=" background-image:url();">
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

                    <?php if(!empty($hero_section_content)){ ?>
                    <div class="hero_text">
                    <?= $hero_section_content ?>
                    </div>
                    <?php } ?>

                <div class="btns-div">
                    <?php 
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
                </div>
                <?php if($members){ ?> 
                    <div class="logos">
                            <?php if($style_text ){ ?>
                                <h6><?= $style_text ?></h6>
                            <?php } ?>
                            
                            <div class="logo-slider">
                            <?php 
                            foreach ( $members as $image ) { ?>
                                <div class="logo-slide">
                                <a href="#">
                                    <img src="<?= $image['image']['url'] ?>" alt="<?= $image['image']['alt'] ?>">
                                </a>
                                </div>
                            <?php } ?>
                            </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<?php
$job_form_background_image = get_field('job_form_background_image','option');
$job_form_title = get_field('job_form_title','option');
$job_form_subtitle = get_field('job_form_subtitle','option');
$job_form_content = get_field('job_form_content','option');
$job_form_shortcode = get_field('job_form_shortcode','option');
$job_chat_content = get_field('job_chat_content','option');
$job_rating_text = get_field('job_rating_text','option');

$job_content = get_field('job_content');
if($job_content){  ?>
<section id="post_detail_content_2" class="post_detail_content w-100  container-1600">
    <div class="container ">
        <div class="row"> 
            <?php if($job_content['contents']){ ?>
            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12"> 
                <div class="entry_content details-content">
                    <?php 
                    $contents = $job_content['contents'];
                    foreach ($contents as $item ) { ?>
                        <?php if($item){ ?><h3> <?= $item['title'] ?> </h3> <?php } ?>
                        <?php if($item){ ?> <?= $item['text'] ?>  <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
            <?php if(!empty($job_form_shortcode)): ?>
            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12"> 
                <div class="form-box single-new-form">
                    <div class="form-img">
                        <img src="<?php echo $job_form_background_image; ?>">
                    </div>
                    <div class="hero-contact-form-section form-new-design" style="background:url('<?php echo $job_form_background_image; ?>');">
                        <?php if(!empty($job_form_title)): ?>
                            <h3><?php echo $job_form_title; ?></h3>
                        <?php endif; ?> 
                        <?php if(!empty($job_form_subtitle)): ?>
                            <p><?php echo $job_form_subtitle; ?></p>
                        <?php endif; ?>  
                        <?php if(!empty($job_form_content)): ?>
                            <p><?php echo $job_form_content; ?></p>
                        <?php endif; ?> 
                        <?php 
                            echo get_template_part( 'components/zoho/form',$job_form_shortcode);
                        ?>
                        <div class="chat_content">
                            <?php if(!empty($job_chat_content)): ?>
                                <?php echo $job_chat_content; ?>
                            <?php endif; ?> 
                        </div>
                        <?php 
                            $job_chat_button = get_field('job_chat_button','option');
                            if( $job_chat_button ): 
                                $link_url = $job_chat_button['url'];
                                $link_title = $job_chat_button['title'];
                                $link_target = $job_chat_button['target'] ? $job_chat_button['target'] : '_self';
                                ?>
                                <a class="news_chat_button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                        <div class="text-md-right">
                            <?php if (!empty($job_rating_text)) : ?>
                                <p><?php echo $job_rating_text; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
               
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php } ?>


<?php
$application_process = get_field('application_process');
$process_steps = $application_process['process_steps'];
if( $process_steps ){ 
$heading = $application_process['heading'];
$sub_text = $application_process['sub_text'];
?>
<section  id="application-pricess_3" class="section-application-pricess w-100 section_12  section-latest_news container-1600">
    <div class="container">

        <?php if ($heading) : ?> 
            <h2 class="latest_news__title text-center"><?php echo $heading; ?></h2> 
        <?php endif; ?> 

        <?php if ($sub_text) : ?> 
            <h4 class="mobile-sub-text"><?= $sub_text ?></h4>
        <?php endif; ?> 


        
        <div class="row latest-news-wrapper">
            <?php
            $i = 1;
            foreach ($process_steps as $item ) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12" >
                     <div class="news-item" >
                         <?php if($item['image']){ ?>
                         <div class="news-img">
                             <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>">
                             <div class="curve">
                                 <svg viewbox="0 0 100 25">
                                     <path fill="#d7e7e7" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
                                 </svg>
                             </div>
                         </div>
                        <?php } ?>

                         <div class="news-wrapper-content">
                             <h5 class="news-heading">
                                 <a href="javascript:void(0)">
                                     <?php echo $item['title']; ?>
                                 </a>
                                 <span class="count-step"><?= $i ?></span>
                             </h5>

                             <?php if( $item['text'] ){ ?>
                             <div class="news-content">
                                 <?= $item['text'] ?>
                             </div> 
                            <?php } ?>
                             
                         </div>
                     </div>
                 </div>
                <?php $i++; 
            } ?>
            </div> 
            
    </div>
</section>
<?php } ?>


<?php
$latest_job_title = get_field('related_job_title','option');
?>
<section  id="section-latest_news_4" class="w-100 section_12  section-latest_news container-1600">
    <div class="container">
        <?php if ($latest_job_title) : ?> <h2 class="latest_news__title"><?php echo $latest_job_title; ?></h2> <?php endif; ?> 
            <?php
         
                $args = array(  
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category__in' => wp_get_post_categories($post->ID),
                    'posts_per_page' => 4, 
                    'post__not_in' => array($post->ID),
                    'orderby' => 'date', 
                    'order' => 'DESC', 
                );
            
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
<?php get_footer(); ?>