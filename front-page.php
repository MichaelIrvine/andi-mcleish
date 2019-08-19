<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Andi_McLeish
 */

get_header();
?>

	<div id="primary_front-page" class="content-area_front-page ">
		<main id="main_front-page" class="site-main_front-page">
		
		<div class="front-page-gallery swiper-container">
			
			<?php if( have_rows('front_page_gallery') ): ?>

				<ul class="front-page-slides swiper-wrapper">
				

				<?php while( have_rows('front_page_gallery') ): the_row(); 

					// vars
					$fpImage = get_sub_field('front_page_image');
					$fpImageTitle = get_sub_field('front_page_image_title');
					$fpImageLink = get_sub_field('front_page_link');

					?>

					<li class="swiper-slide">

						<?php if( $fpImageLink ): ?>
							<a href="<?php echo $fpImageLink; ?>">
						<?php endif; ?>

							<img src="<?php echo $fpImage['url']; ?>" alt="<?php echo $fpImage['alt'] ?>" />

						<?php if( $fpImageLink ): ?>
							</a>
						<?php endif; ?>

						<div class="front-page-project-title">
							<?php echo $fpImageTitle; ?>
						</div>
			
					</li>

				<?php endwhile; ?>

				</ul>

				<?php endif; ?>
				<div class="swiper-button-next"></div>
    			<div class="swiper-button-prev"></div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();


