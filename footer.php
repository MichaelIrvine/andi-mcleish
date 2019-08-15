<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Andi_McLeish
 */

?>

	</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="footer_col-01">
		<h3 class="footer_col-02-title">Andi McLeish</h3>
		<!-- FOOTER NAV GOES HERE -->
		<nav id="footer-navigation" class="footer-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'footer',
				'menu_id'        => 'Footer Navigation',
			) );
			?>
		</nav><!-- #site-navigation -->
		<h2>Hel</h2>
	</div>
	<div class="footer_col-02">
		<h3 class="footer_col-02-title">Contact</h3>
		<!-- CONTACT INFO GOES HERE -->
		<?php the_field('footer_contact_details', 'option'); ?>
		<h2>lo</h2>
	</div>


</footer><!-- #colophon -->
</div><!-- #page -->
</body>
</html>
