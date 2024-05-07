	
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

global $wp;

?> 
<section id="hero_banner_section_1" class="w-100 section_1  section-hero_banner_section inner-comm-banner only-banner-content section-cases-banner " <?php if($hero_section_background_image):?>style="background-image:url(<?= $hero_section_background_image;?>);"<?php endif;?>>   
    <div class="container">
        <div class="row align-items-center justify-content-center"> 
            <div class="col-lg-6 col-md-12 col-sm-12 pd-100 md-full text-center cases-banner-caption">
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
                        
                        <li class="cat_item <?php echo ((isset($_GET['cat']) && $_GET['cat'] == 'all' ) || !isset($_GET['cat'])  ? 'active' : ''); ?>" data-slug="all"><a class="cat_item_link" href="<?=home_url( $wp->query_vars['pagename'] ).'/?cat=all';?>">Alle</a></li>
                        <?php foreach($category as $term):?>
                            <li class="cat_item <?php echo ($_GET['cat'] == $term->slug  ? 'active' : ''); ?>" data-slug="<?php echo $term->slug;?>">
                                <a class="cat_item_link" href="<?=home_url( $wp->query_vars['pagename'] ).'/?cat='.$term->slug;?>"><?php echo $term->name; ?></a>
                            </li>
                        <?php endforeach; ?>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section  class="w-100 section_12  section-latest_news section-latest_cases">
    <div class="container">
            <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                if(isset($_GET['cat'])){
                    $cat=$_GET['cat'];
                    if($cat=="all"){
                        
                        $args = array(  
                            'post_type' => 'case',
                            'post_status' => 'publish',
                            'posts_per_page' => 9, 
                            'orderby' => 'date', 
                            'order' => 'DESC',
                            'paged'   => $paged,
                        );
                    }else{
                        
                        $args = array(  
                            'post_type' => 'case',
                            'post_status' => 'publish',
                            'posts_per_page' => 9, 
                            'orderby' => 'date', 
                            'order' => 'DESC', 
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'case_cat',
                                    'field' => 'slug',
                                    'terms' => $cat,
                                )
                            ),
                            'paged'   => $paged,
                        );
                    }
                        
                    
                }else{
                        $args = array(  
                            'post_type' => 'case',
                            'post_status' => 'publish',
                            'posts_per_page' => 9, 
                            'orderby' => 'date', 
                            'order' => 'DESC',
                            'paged'   => $paged,
                        );
                }
                $count=1;

                $count=1;
                $loop = new WP_Query( $args ); 
                if ( $loop->have_posts() ) : ?>
                    <div class="sterkado_news_lists_loadeer" style="display:none;"></div>
                    <div class="row latest-news-wrapper listnews-filter " id="sterkado_news_lists">

                        <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                        if($count==1 || $count==6 || $count==7){
                            $col=6;
                            $class="big-item";
                        }else{
                            $col=3;
                            $class="small-item";
                        }
                        $args = array( 'col' => $col,'term'=>'case_cat' ,'class'=>$class);
                        get_template_part( 'template-parts/case', 'grid', $args );
                            $count++;
                        endwhile; ?>

                        <div class="news-pagination">
                        <?php $big = 999999999; 
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $loop->max_num_pages
                        ) );?>
                        </div>
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
    
    $surprise_heading   = get_field('surprise_heading');
    $surprise_box       = get_field('surprise_box');
    
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
<?php get_footer(); ?>