<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
$post_date = get_the_date('j F Y');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h4 class="news-date"><?php echo $post_date; ?></h4>
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>


	<a class="lead read-more-link" href="<?php the_permalink(); ?>" title=""><?php echo __( 'Read the full press release', 'arcelor' ) ?></a>
	<hr>
</article><!-- #post-## -->
