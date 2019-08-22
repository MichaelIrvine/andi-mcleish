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

<div id="contact-primary" class="contact_content-area">
    <main id="main_contact" class="contact-main">
        <div class="contact-col_01">
            <?php echo the_field('contact_page_content'); ?>
        </div>
        <div class="contact-col_02">
            <?php 
			$image = get_field('contact_page_image');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)

			if( $image ) {
				echo wp_get_attachment_image( $image, $size );
			}
			?>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();