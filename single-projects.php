<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Andi_McLeish
 */

get_header();
?>

<div class="content-area_projects">
    <?php if( have_rows('project_item') ): 

		// if ( is_singular() ) :
		// 	the_title( '<h1 class="project-title">', '</h1>' );
		// else :
		// 	the_title( '<h2 class="project-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		// endif;
	?>

    <div class="swiper-container_single-project">
        <ul class="swiper-wrapper">
            <?php while( have_rows('project_item') ): the_row(); 
	// vars
	$portfolioImage = get_sub_field('project_image');
	$portfolioVideo = get_sub_field('project_video');
	?>

	<?php 
	if($portfolioImage): ?>
            <li class="swiper-slide swiper-slide_single-project">
                <img src="<?php echo $portfolioImage['url']; ?>" alt="<?php echo $portfolioImage['alt'] ?>" />
            </li>
	<?php endif; ?>
	<?php 
	if($portfolioVideo): ?>
		<li class="swiper-slide swiper-slide_single-project">
		<video muted width="670" height="450" class="single-project-video">
			<source src="<?php echo $portfolioVideo['url']; ?>" type="video/mp4">
		</video>
		</li>
	<?php endif; ?>
	<?php endwhile; ?>

        </ul>
    </div>
    <?php endif; ?>
</div><!-- #primary -->

<?php

get_footer();