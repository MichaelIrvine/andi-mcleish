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
	<div id="primary_coming-soon-page" class="content-area_coming-soon">
		<main id="main_coming-soon" class="site-main_coming-soon">
		<div class="coming-soon_text-container">
			<h1>New website coming soon</h1>
		</div>
		<?php
		$csImage = get_field('coming_soon_image');
		$size = 'full';


		if( $csImage ): ?>
			<div class="coming-soon-image_wrapper">
				<?php echo wp_get_attachment_image( $csImage, $size ); ?>
			</div>
		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();




