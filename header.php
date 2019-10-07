<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Andi_McLeish
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'andi-mcleish' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-wrapper">
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
			</div>

			<!-- Mobile Menu Button -->
			<div class="menu-button-wrapper_mobile">
				<div class="main-menu-toggle_mobile">
					<button class="menu-toggle_open_mobile">MENU</button>
					<button class="menu-toggle_close_mobile">CLOSE</button>
				</div>
			</div>
		</div>
		<!-- Site Navigation -->
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
		<!-- Main Menu Button -->
		<div class="menu-button-wrapper">
			<div class="main-menu-toggle">
				<button class="menu-toggle_open">MENU</button>
				<button class="menu-toggle_close">CLOSE</button>
			</div>
		</div>
		
		<div id="cursor" class="cursor--ready"></div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
