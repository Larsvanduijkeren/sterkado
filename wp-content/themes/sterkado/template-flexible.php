<?php

/**

 * Template Name: Flexible Template

 */



get_header(); 

?>

<?php if( have_rows('site_components') ):

  while( have_rows('site_components') ): the_row();

  $layout_name = get_row_layout();
  
    ?>

    <section id="<?php echo $layout_name; ?>_<?php echo get_row_index(); ?>" class="w-100 section_<?php echo get_row_index(); ?>  section-<?php echo get_row_layout(); ?>">

        <?php get_template_part( "components/".$layout_name ); ?>

    </section>

   <?php

  endwhile;

endif; ?>

<?php get_footer(); ?>