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

	<div id="primary_front-page" class="content-area_front-page">
		<main id="main_front-page" class="site-main_front-page">
		
		<?php
		$fpImages = get_field('front_page_gallery');

		if( $fpImages ): ?>
			<div class="front-page-gallery swiper-container">
				<ul class="front-page-slides swiper-wrapper">
					<?php foreach( $fpImages as $image ): ?>
						<li class="swiper-slide">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<p><?php echo $image['caption']; ?></p>
						</li>
					<?php endforeach; ?>
				</ul>
				<div class="swiper-button-next"></div>
    			<div class="swiper-button-prev"></div>
			</div>
		<?php endif; ?>	
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();




