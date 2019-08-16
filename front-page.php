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
			<?php if( have_rows('repeater_field_name') ): ?>

				<ul class="front-page-slides swiper-wrapper">

				<?php while( have_rows('repeater_field_name') ): the_row(); 

					// vars
					$image = get_sub_field('image');
					$content = get_sub_field('content');
					$link = get_sub_field('link');

					?>

					<li class="swiper-slide">

						<?php if( $link ): ?>
							<a href="<?php echo $link; ?>">
						<?php endif; ?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

						<?php if( $link ): ?>
							</a>
						<?php endif; ?>

						<?php echo $content; ?>

					</li>

				<?php endwhile; ?>

				</ul>

				<?php endif; ?>
			
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();


