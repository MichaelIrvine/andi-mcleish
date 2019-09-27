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
	<div class="preloader"></div>
	<div id="primary_front-page" class="content-area_front-page">
		<main id="main_front-page" class="site-main_front-page">
		
		<?php
		$fpImage = get_field('front_page_image');
		$size = 'full';
		$fpGallery = get_field('front_page_gallery');


		if( $fpImage ): ?>
			<div class="front-page-image_wrapper">
				<?php echo wp_get_attachment_image( $fpImage, $size ); ?>
			</div>
		<?php endif; ?>
		<?php
		if( $fpGallery ): ?>
			<div class="front-page-gallery swiper-container">
				<ul class="front-page-slides swiper-wrapper">
					<?php foreach( $fpGallery as $galleryItem ): ?>
						<li class="swiper-slide">
							<img src="<?php echo $galleryItem['url']; ?>" alt="<?php echo $galleryItem['alt']; ?>" />
							<p><?php echo $galleryItem['caption']; ?></p>
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




