<?php
/**
 * Nobelium functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nobelium
 */

if ( ! function_exists( 'nobelium_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nobelium_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Nobelium, use a find and replace
	 * to change 'nobelium' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'nobelium', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'nobelium' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'nobelium_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'nobelium_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nobelium_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nobelium_content_width', 640 );
}
add_action( 'after_setup_theme', 'nobelium_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nobelium_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Default', 'nobelium' ),
		'id'            => 'sidebar-default',
		'description'   => esc_html__( 'Add Custom Widgets here.', 'nobelium' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Default Financial News', 'nobelium' ),
		'id'            => 'sidebar-fn',
		'description'   => esc_html__( 'Add Financial News Archive widgets here.', 'nobelium' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Investor Relations', 'nobelium' ),
		'id'            => 'sidebar-ir',
		'description'   => esc_html__( 'Add Investor Relations Widgets here.', 'nobelium' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Shareholder Reports', 'nobelium' ),
		'id'            => 'sidebar-sr',
		'description'   => esc_html__( 'Add Shareholder Reports Widgets here.', 'nobelium' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Management Presentations', 'nobelium' ),
		'id'            => 'sidebar-mp',
		'description'   => esc_html__( 'Add Management Presentations Widgets here.', 'nobelium' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nobelium_widgets_init' );

add_filter('show_admin_bar', '__return_false');

/**
 * Enqueue scripts and styles.
 */
function nobelium_scripts() {

	if( !is_admin() ){
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, '');
		wp_enqueue_script('jquery');
	}

	// wp_enqueue_style( 'nobelium-style', get_stylesheet_uri() );

	// Ticker code.

	wp_enqueue_style( 'nobelium-ticker-style', get_template_directory_uri() . '/assets/css/ticker.css' );

	wp_enqueue_script( 'nobelium-modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.8.3-respond-1.4.2.min.js', array(), false, false );

	wp_enqueue_script( 'nobelium-app-script', get_template_directory_uri() . '/assets/js/app.js', array( 'jquery' ), '20151215', true );

	wp_enqueue_script( 'googlewebfonts', 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js', array( 'jquery' ), '20151215', true );

	wp_enqueue_script( 'load-font', get_stylesheet_directory_uri() . '/js/load-webfont.js', array( 'jquery' ), '20151215', true );

	wp_enqueue_style( 'nobelium-fonts-style', get_template_directory_uri() . '/fonts.css' );

	wp_enqueue_style( 'nobelium-app-style', get_template_directory_uri() . '/assets/css/app.css' );

	wp_enqueue_script( 'nobelium-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_script( 'google-captcha', '//www.google.com/recaptcha/api.js', array(), false, false );

	wp_enqueue_script( 'nobelium-ticker-script', 'http://app.quotemedia.com/quotetools/jsVarsQuotesSpan.go?webmasterId=101341&symbol=NBL.P:CA&df=MMMM+dd,+h:mm+a', array(), '20151215', false );

	wp_enqueue_script( 'nobelium-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'nobelium-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'nobelium-pf-intrinsic-script', get_template_directory_uri() . '/assets/js/pf.intrinsic.min.js', array(), '20151215', false );

	wp_enqueue_script( 'nobelium-picture-fill-script', get_template_directory_uri() . '/assets/js/picturefill.min.js', array(), '20151215', false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nobelium_scripts' );

/**
 * Implement Bootstrap Navwalker.
 */
require_once get_template_directory() . '/inc/navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * If more than one page exists, return TRUE.
 */
function show_posts_nav() {
    global $wp_query;
    return ($wp_query->max_num_pages > 1);
}
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
    return 'class="btn btn-default btn-secondary btn-md"';
}

/**
 * ACF Options Page.
 */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

// Remove <p> Tag.
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
