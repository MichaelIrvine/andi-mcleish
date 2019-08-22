<?php
/**
 * Template Name: Portfolio
 * The template for displaying the portfolio of our website.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Andi_McLeish
 */

get_header();
?>

	<div id="portfolio-primary" class="portfolio_content-area">
		<main id="main_portfolio" class="portfolio-main">
		<?php
				$tax_terms = get_terms('project_types');
				?>
				<div class="project-list-container">
				<?php
				foreach($tax_terms as $tax_term) : 
				$term_link = get_term_link( $tax_term );
				$term_image = get_field('project_type_feature_image',$tax_term);
				
				?>
				
				<h3 class="project-list-title"><a href="<?php echo $term_link; ?>"><?php echo $tax_term->name; ?></a></h3>
				<?php
				if( $image ) {

					echo wp_get_attachment_image( $image, $size );

				}
				$args = array('post_type' => 'projects',
											'posts_per_page' => -1,
											'hide_empty' => true,
											'orderby' => 'term_order',											
											'tax_query' => array( 
												 	array(
													'taxonomy' => 'projects',
													'field'    => 'slug',
													'terms'    => $tax_term->name,
											)
										)
									);

				
				endforeach;?>
				</div> <!-- End Project List Container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
