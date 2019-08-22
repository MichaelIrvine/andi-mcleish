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
			<ul class="portfolio-list-container">
			<?php
				foreach($tax_terms as $tax_term) : 
				$term_link = get_term_link( $tax_term );
				$term_image = get_field('project_type_feature_image',$tax_term);
				$size = 'full';
				
				?>

            
                <li class="project-list-title"><a href="<?php echo $term_link; ?>"><?php echo $tax_term->name; ?></a></li>
            <?php endforeach;?>
			</ul> <!-- End of .portfolio-list-container -->

            <!-- <ul class="portfolio-feature-image-container">
                <li><img src="<?php echo $term_image['url']; ?>" alt="<?php echo $term_image['alt']; ?>" /></li>
            </ul> -->
        </div> <!-- End Project List Container -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();