	
<?php 
/* Template Name: Cases */ 
get_header();
?>
<?php
  $hero_title       = get_field('hero_title');
  $hero_content     = get_field('hero_content');

  $hero_right_image = get_field('hero_right_image');
  $hero_section_background_image = get_field('hero_section_background_image');

  $args= array( 
    'orderby'     => 'term_order',
    'order'       => 'ASC',
    'child_of'    => 0,
    'parent'      => 0,
    'fields'      => 'all',
    'hide_empty'  => true,
); 
$category = get_terms( 'case_cat', $args );
?> 
<section id="hero_banner_section_1" class="w-100 section_1  section-hero_banner_section inner-comm-banner only-banner-content" <?php if($hero_section_background_image):?>style="background-image:url(<?= $hero_section_background_image;?>);"<?php endif;?>>   
    <div class="container">
        <div class="row align-items-center justify-content-center"> 
            <div class="col-lg-6 col-md-12 col-sm-12 pd-100 md-full text-center">
                <?php if(!empty($hero_title)): ?>
                    <h1><?php echo $hero_title; ?></h1>
                <?php endif; ?>   
                <?php if(!empty($hero_content)): ?>
                    <p><?php echo $hero_content; ?></p>
                <?php endif; ?>   
                <div class="contact-banner-link text-left d-flex">
                    <ul class="sterkado_news_cat_filter d-flex" id="sterkado_news_cat_filter">
                    <li>Filter op</li>
                        <li class="reset mob_only" data-slug="all">Reset <span></li>
                        <li class="cat_item active" data-slug="all">Alle</li>
                            <?php foreach($category as $term){
                                echo '<li class="cat_item" data-slug="'.$term->slug.'">'.$term->name.' </li> ';
                            } ?>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section  class="w-100 section_12  section-latest_news">
    <div class="container">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(  
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 9, 
                    'orderby' => 'date', 
                    'order' => 'DESC', 
                    'paged'   => $paged,
                );
                $count=1;
                $loop = new WP_Query( $args ); 
                if ( $loop->have_posts() ) : ?>
                    <div class="sterkado_news_lists_loadeer" style="display:none;"></div>
                    <div class="row latest-news-wrapper listnews-filter " id="sterkado_news_lists">
                    </div>
                    <div class="bg_news_settings">
                        <input type="hidden" name="bg_paged" id="bg_paged" value="<?= $paged; ?>" >
                        <input type="hidden" name="bg_posttype" value="case">
			            <input type="hidden" name="bg_term" value="case_cat">
                    </div>
                
                            <?php
                    endif;
                wp_reset_postdata();
            ?>
    </div>
</section>
<?php
$employee_section_heading      = get_field('employee_section_heading');
$employee_section_content       = get_field('employee_section_content');
$employee_section_link         = get_field('employee_section_link');
$employee_section_subheading    = get_field('employee_section_subheading');
$employee_left_section          = get_field('employee_left_section');
$employee_right_section         = get_field('employee_right_section');
?> 
<section id="employee_section_7" class="w-100 section_7  section-employee_section">
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
                               
                            </div>
                        <?php endif; ?>
                     <?php $i++; endforeach; ?>
                     <?php $k=8;
                     foreach( $employee_right_section as $row ): ?>
                        <?php if(!empty($row['profile'])): ?>
                            <div class="tooltip-new user-position<?= $k; ?>">
                                <img src="<?php echo $row['profile']['url']; ?>" />
                              
                            </div>
                        <?php endif; ?>
                     <?php $k++; endforeach; ?>
                </div>
            </div>
        </div>
    </div>    
</section>
<?php get_footer(); ?>