<?php
/**
 * Almiron Digital Group - Base functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Almiron_Digital_Group_-_Base
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'almiron_digital_group_base_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function almiron_digital_group_base_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Almiron Digital Group - Base, use a find and replace
		 * to change 'almiron-digital-group-base' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'almiron-digital-group-base', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'almiron-digital-group-base' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'almiron_digital_group_base_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'almiron_digital_group_base_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function almiron_digital_group_base_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'almiron_digital_group_base_content_width', 640 );
}
add_action( 'after_setup_theme', 'almiron_digital_group_base_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function almiron_digital_group_base_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'almiron-digital-group-base' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'almiron-digital-group-base' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'almiron_digital_group_base_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function almiron_digital_group_base_scripts() {
	wp_enqueue_style( 'almiron-digital-group-base-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_style_add_data( 'almiron-digital-group-base-style', 'rtl', 'replace' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'boot-strap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' , array( 'jquery' ),'',true  );
	wp_enqueue_script( 'almiron-digital-group-base-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'almiron-digital-group-base-main-js', get_template_directory_uri() . '/js/main.js',  array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'almiron_digital_group_base_scripts' );


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';



/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );


function register_my_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}

add_action( 'init', 'register_my_menu' );

// theme options for ACF

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

}

// admin bar bump

add_action('get_header', 'my_filter_head');

function my_filter_head() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}



add_filter( 'gform_tabindex', '__return_false' );



//disable scrolling gravity forms
//add_filter( 'gform_confirmation_anchor', '__return_false' );
//add_filter( 'gform_confirmation_anchor_#3', '__return_false' );

// function my_content_after_the_content( $the_content ) {
// 	return $the_content .
// 	'<div class="sharing_icons">I am hooked to the_content, to appear after every output of the_content</div>';
// }
//  add_filter( 'the_content', 'my_content_after_the_content' );
