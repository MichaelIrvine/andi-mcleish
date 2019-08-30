<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Andi_McLeish
 */

?>

<li id="post-<?php the_ID(); ?>" class="swiper-slide swiper-slide_portfolio">
	<?php andi_mcleish_post_thumbnail(); ?>
	<?php
		if ( is_singular() ) :
			the_title( '<h3 class="project-title">', '</h3>' );
		else :
			the_title( '<h3 class="project-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;
	?>
</li>
