<?php
/* Template Name: General */
get_header();
?>
<section class="w-100 section_12  section-general_content">
    <div class="general-header bestsellen-head">
        <div class="container">
            <?php the_title( '<h1 class="general-title text-center">', '</h1>' ); ?>
        </div>
    </div><!-- .entry-header -->
    <div class="general-content">
        <div class="container">
            <?php
            while ( have_posts() ) : the_post(); ?>
            
                    <?php
                
                the_content();

            endwhile; // End of the loop.
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>