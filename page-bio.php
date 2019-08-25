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

	<div id="bio-primary" class="bio_content-area">
		<main id="main_bio" class="bio-main">

        <div class="bio-col_01">
			<div class="bio-text-container">
				<?php echo the_field('bio_text'); ?>
			</div>
        </div>
        <div class="bio-col_02">
			<div class="bio-image-container">
				<?php 
				$image = get_field('bio_image');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)

				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
			</div>
        </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
