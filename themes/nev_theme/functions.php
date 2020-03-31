<?php
/**
 * nev Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nev_theme
 */

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	
	
	/*setting up custom theme */
	function nev_theme_setup() {

		if ( ! function_exists( 'nev_theme_setup' ) ) :
			wp_enqueue_style(
				'custom-style',
				get_stylesheet_directory_uri() . 'assets/css/custom.css',
				array()
			);
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nev Theme, use a find and replace
		 * to change 'nev-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nev-theme', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	endif;
	}
//adding google fonts
function wpb_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet"', false ); 
	}
		add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
		

//
add_action( 'init', 'nev_theme_setup' );

//registering two new menus
function register_nev_menus(){
	register_nav_menus( array(
		'primary-menu' => __('Header Nav Menu'),
		'footer-menu' => __('Footer Menu')
	) );
}
add_action('after_setup_theme', 'register_nev_menus');

/**
 *  use conditional check to only show set theme location
 */
if ( has_nav_menu( 'primary-menu' ) ) {
	$args = array(
		'theme_location' => 'primary-menu',
	);
	wp_nav_menu( $args );
}
//use fallback parameter to only display set theme location
$args = array(
	'theme_location' => 'footer-menu',
	'fallback_cb'    => false,
);
wp_nav_menu( $args );
/**
 * Making a function for custom logo and set the measurements for it
 */
function nev_theme_custom_logo_Setup(){
	$defaults =  array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support('custom-logo', $defaults);
}
add_action( 'after_setup_theme', 'nev_theme_custom_logo_Setup' );


/**
 * making a function for header_Setup
 */
function nev_custom_header_setup() {
	add_theme_support( 'custom-header', array(
		'default-text-color' => '000',
		'default-background-color' => '000', 
		'width'              => 1000,
		'height'             => 250,
		'flex-width'         => true,
		'flex-height'        => true,
	) );
}
add_action( 'after_setup_theme', 'nev_custom_header_setup' );

/**
 * making a function for footer_Setup
 */
function nev_custom_footer_setup() {
	add_theme_support( 'custom-footer', array(
		'default-text-color' => '000',
		'width'              => 1000,
		'height'             => 250,
		'flex-width'         => true,
		'flex-height'        => true,
	) );
}
add_action( 'after_setup_theme', 'nev_custom_footer_setup' );

/**
 * Making a function for a dynamic navigation menu
 */


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nev_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'nev_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'nev_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nev_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nev-theme' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'nev-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nev_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nev_theme_scripts() {
	wp_enqueue_style( 'nev-theme-style', get_stylesheet_uri() );

	//ENQUEUE FOUNDATION CSS 
	wp_enqueue_style('nev-theme-foundation', get_template_directory_uri().'/assets/css/vendor/foundation.min.css', null, '6.5.1');

	//ENQUEUE CUSTOM CSS
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/assets/css/custom.css', array() );
	
	//ENQUEUE FOUNDATION JS
	wp_enqueue_script('nev-theme-what-input', get_template_directory_uri().'/assets/js/vendor/what-input.js', array('jquey'), '6.5.1', true);
	
	wp_enqueue_script('nev-theme-foundation', get_template_directory_uri().'/assets/js/vendor/foundation.min.js', array('jquey'),'nev-theme-what-input', '6.5.1', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

//add action function
add_action( 'wp_enqueue_scripts', 'nev_theme_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-hooks.php';

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

/*///////////CUSTOM POST TYPE FUNCTION//////// */
/* we named our custom post type function */
function nev_custom_post_type() {
	$labels = array(
		/*we added an array of labels, so wordpress can start the CPT */
	'name' => 'community',
	'singular_name' => 'community',
	'add_new' => 'Add Item',
	'all_items' => 'All Items',
	'add_new_item' => 'Add New Item',
	'edit_item' => 'Edit Item',
	'new_item' => 'New Item',
	'view_item' => 'View Item',
	'search_item' => 'Search Item',
	'not_found' => 'No Posts Found',
	'parent_item_colon'=> 'Parent Item'
);
	/* we also added an array of args to make the post custom and specific. */
	$args = array(
	'labels' => $labels,
	'public' => true,
	'has_archive' => true,
	'publicity_queryable' => true,
	'rewrite' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	//enabling gutenburg style editor
	'show_in_rest' => true,
    'supports' => array(
		'editor',
		'title',
		'excerpt',
		'thumbnail',
		'revisions'
	/* The post has supports availible to enable excerpts, featured image, title, & post link  */
	),
	'taxonomies'=> array('category','post_tag'),
	'excludes_from_search' => false,
	
	/* we can also assign this post a category and tag */
);
register_post_type('community',$args);
}

add_action('init', 'nev_custom_post_type');

// add action will tell when to run the function, and specifically which one it is refering to.






