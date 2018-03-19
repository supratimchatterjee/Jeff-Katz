<?php
/**
 * Jeffrey_Katz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Jeffrey_Katz
 */

if ( ! function_exists( 'jeffrey_katz_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jeffrey_katz_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Jeffrey_Katz, use a find and replace
		 * to change 'jeffrey_katz' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'jeffrey_katz', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary', 'jeffrey_katz' ),
			'footer-menu' => esc_html__( 'Footer-Menu', 'jeffrey_katz' ),
			'sidebar-menu' => esc_html__( 'Sidebar-Menu', 'jeffrey_katz' ),
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
		add_theme_support( 'custom-background', apply_filters( 'jeffrey_katz_custom_background_args', array(
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
add_action( 'after_setup_theme', 'jeffrey_katz_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jeffrey_katz_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jeffrey_katz_content_width', 640 );
}
add_action( 'after_setup_theme', 'jeffrey_katz_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jeffrey_katz_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jeffrey_katz' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'jeffrey_katz' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'jeffrey_katz_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
 function jeffrey_katz_styles() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'revolution', get_template_directory_uri() . '/css/revolution-slider.css' );
	wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider-setting.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/custom/theme-2.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );

wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
wp_enqueue_script( 'switcher', get_template_directory_uri() . '/js/jQuery.style.switcher.min.js', array(), '', true );
wp_enqueue_script( 'appear', get_template_directory_uri() . '/js/jquery.appear.js', array(), '', true );
wp_enqueue_script( 'ui', get_template_directory_uri() . '/js/jquery-ui.js', array(), '', true );
wp_enqueue_script( 'revolution', get_template_directory_uri() . '/js/revolution.min.js', array(), '', true );
wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), '', true );
wp_enqueue_script( 'fancybox-media', get_template_directory_uri() . '/js/jquery.fancybox-media.js', array(), '', true );
wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.js', array(), '', true );
wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array(), '', true );
wp_enqueue_script( 'appear', get_template_directory_uri() . '/js/appear.js', array(), '', true );
wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array(), '', true );
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jeffrey_katz_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';



/*========= acf_add_options_page============   */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


function my_acf_init() {

	acf_update_setting('google_api_key', ' AIzaSyBfrcMGhm7A7J3K4oXEgXU6xxX8NLpZzWg ');
}

add_action('acf/init', 'my_acf_init');
