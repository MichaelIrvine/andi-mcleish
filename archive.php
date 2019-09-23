<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Andi_McLeish
 */

get_header();
?>

	<div id="project-archive" class="content-area project-archive-page">
		<main id="main_projects" class="projects-main">
		<button class="back-button" onclick="history.go(-1);">Back</button>

		
		<div class="portfolio-gallery swiper-container_portfolio">
			<ul class="swiper-wrapper">
			<?php if ( have_posts() ) : ?>
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'portfolio' );
				endwhile;
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
			</ul>
		</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
