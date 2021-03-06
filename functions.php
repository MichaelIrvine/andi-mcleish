<?php
/**
 * Andi McLeish functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Andi_McLeish
 */

if ( ! function_exists( 'andi_mcleish_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function andi_mcleish_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Andi McLeish, use a find and replace
		 * to change 'andi-mcleish' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'andi-mcleish', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'andi-mcleish' ),
			'projects' => esc_html__( 'Projects', 'andi-mcleish' ),
			'footer' => esc_html__('Footer Navigation', 'andi-mcleish'),
			'social-media' => esc_html__('Social Media', 'andi-mcleish'),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'andi_mcleish_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'andi_mcleish_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function andi_mcleish_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'andi_mcleish_content_width', 640 );
}
add_action( 'after_setup_theme', 'andi_mcleish_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function andi_mcleish_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'andi-mcleish' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'andi-mcleish' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'andi_mcleish_widgets_init' );




// Adobe Fonts
function adobe_font_stylesheet() {
	wp_enqueue_style( 'adobe_font_poynterGotich', 'https://use.typekit.net/ybq4gcl.css');
}

add_action( 'wp_enqueue_scripts', 'adobe_font_stylesheet');

// GSAP CDN
function gsap_script() {
	wp_enqueue_script( 'gsapTweenMaxCdn', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js', array(), '1.1', true);
	wp_enqueue_script( 'gsapTimeLineMaxCdn', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js', array(), '1.1', true);

}

add_action( 'wp_enqueue_scripts', 'gsap_script');

/**
 * Enqueue scripts and styles.
 */
function andi_mcleish_scripts() {
	wp_enqueue_style( 'andi-mcleish-style', get_stylesheet_uri() );
	wp_enqueue_script( 'andi-mcleish-main', get_template_directory_uri() . '/dist/bundle.js', array(), '20190711', true );
	// wp_enqueue_script( 'andi-mcleish-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'andi-mcleish-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/node_modules/swiper/dist/css/swiper.min.css' );
	wp_enqueue_script('swiper-js', get_template_directory_uri() . '/node_modules/swiper/dist/js/swiper.min.js', array('jquery'), '20190815', true);
	wp_enqueue_script('swiper-js-init', get_template_directory_uri() . '/js/swiperInit.js', array('jquery'), '20190815', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'andi_mcleish_scripts' );

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
	$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
	}
add_filter( 'body_class', 'add_slug_body_class' );





/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




/**
 * Footer Details - Copyright & Dev Info
 */
if( function_exists('acf_add_options_page') ) {
    $args = array(
          'page_title' => 'Footer Details',
		  'menu_title' => 'Footer Details',
		  'menu_slug'  => 'footer-details',
          'icon_url' => 'dashicons-edit'
          //other args
      );
    acf_add_options_page($args);
}


/**
 * Andi McLeish CPT - Projects ------
 */
function amc_register_custom_post_types() {
    $labels = array(
        'name'               => _x( 'Projects', 'post type general name' ),
        'singular_name'      => _x( 'Projects', 'post type singular name'),
        'menu_name'          => _x( 'Projects', 'admin menu' ),
        'name_admin_bar'     => _x( 'Projects', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Projects' ),
        'add_new_item'       => __( 'Add New Projects' ),
        'new_item'           => __( 'New Projects' ),
        'edit_item'          => __( 'Edit Projects' ),
        'view_item'          => __( 'View Projects' ),
        'all_items'          => __( 'All Projects' ),
        'search_items'       => __( 'Search Projects' ),
        'parent_item_colon'  => __( 'Parent Projects:' ),
        'not_found'          => __( 'No Projects found.' ),
        'not_found_in_trash' => __( 'No Projects found in Trash.' ),
        'archives'           => __( 'Projects Archives'),
        'insert_into_item'   => __( 'Uploaded to this Projects'),
        'uploaded_to_this_item' => __( 'Projects Archives'),
        'filter_item_list'   => __( 'Filter Projects list'),
        'items_list_navigation' => __( 'Projects list navigation'),
        'items_list'         => __( 'Projects list'),
        'featured_image'     => __( 'Projects feature image'),
        'set_featured_image' => __( 'Set Projects feature image'),
        'remove_featured_image' => __( 'Remove Projects feature image'),
		'use_featured_image' => __( 'Use as feature image'),
		
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
		'menu_icon'          => 'dashicons-migrate',
		'taxonomies'          => array('projects'),
    );
	register_post_type( 'projects', $args );
 }
 add_action( 'init', 'amc_register_custom_post_types' );


 /**
 * Andi McLeish Register Custom Taxonomy
 */
function project_types() {
	$labels = array(
		'name'                       => _x( 'Project Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Project Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Project Type', 'text_domain' ),
		'all_items'                  => __( 'All Project Types', 'text_domain' ),
		'parent_item'                => __( 'Parent Project Type', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Project Type', 'text_domain' ),
		'new_item_name'              => __( 'New Project Type Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Project Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Project Type', 'text_domain' ),
		'update_item'                => __( 'Update Project Type', 'text_domain' ),
		'view_item'                  => __( 'View Project Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate project type with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Project Types', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Project Types', 'text_domain' ),
		'search_items'               => __( 'Search Project Types', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Project Types', 'text_domain' ),
		'items_list'                 => __( 'Project Types list', 'text_domain' ),
		'items_list_navigation'      => __( 'Project Types list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'project_types', array( 'projects' ), $args );
}
add_action( 'init', 'project_types', 0 );


 /* Flush */
 function amc_rewrite_flush() {
	amc_register_custom_post_types();
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'amc_rewrite_flush' );

