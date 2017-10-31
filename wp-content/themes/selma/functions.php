<?php
/**
 * Selma functions and definitions
 *
 * @package Selma
 */
if ( ! isset( $content_width ) ) $content_width = 819;
if ( ! function_exists( 'selma_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function selma_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Selma, use a find and replace
	 * to change 'selma' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'selma', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'selma' ),
	) );
	/**
	* Adding support for the post thumbnails
	*/
	add_theme_support( 'post-thumbnails' );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'selma_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // selma_setup
add_action( 'after_setup_theme', 'selma_setup' );

	add_action( 'after_setup_theme', 'selma_woocommerce_support' );
	function selma_woocommerce_support() {
    add_theme_support( 'woocommerce' );
	}
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function selma_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'selma_content_width', 640 );
}
add_action( 'after_setup_theme', 'selma_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function selma_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'selma' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'selma' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'selma' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'selma' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'selma' ),
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
}
add_action( 'widgets_init', 'selma_widgets_init' );

/**
 * Register Lora Google font.
 */
function selma_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $lora = _x( 'on', 'Lora font: on or off', 'selma' );
  
    if ( 'off' !== $lora  ) {
        $font_families = array();
 
        if ( 'off' !== $lora ) {
            $font_families[] = 'Old Standard TT:400,700,400italic';
        }
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    }
 
    return $fonts_url;
}


/**
 * Enqueue scripts and styles.
 */
function selma_scripts() {
	wp_enqueue_style( 'selma-style', get_stylesheet_uri() );

// Load jQuery using WordPress
	wp_enqueue_script( 'jquery' );
	// Load custom css defining responsivity, grids etc.
	wp_enqueue_style( 'selma-customcss', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'selma-fonts', selma_fonts_url(), array(), null );
	// Load tinynav library
	wp_enqueue_script( 'selma-navigation', get_template_directory_uri() . '/js/tinynav.js', array(), '20150202', true );
	
	wp_enqueue_script( 'selma-jcarousel', get_template_directory_uri() . '/js/jMyCarousel.min.js', array(), '20150202', true );


	// Execute script and set div selector class
	wp_enqueue_script( 'selma-loadnavigation', get_template_directory_uri() . '/js/tinynav_load.js', array(), '20150202', true );

	wp_enqueue_script( 'selma-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'selma_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


