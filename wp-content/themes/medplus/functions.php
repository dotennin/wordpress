<?php    
/**
 * Medplus functions and definitions
 *
 * @package  Medplus
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'medplus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function medplus_setup() {
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	load_theme_textdomain( 'medplus', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header', array( 
		'default-text-color' => false,
		'header-text' => false,
	) );
	add_theme_support( 'title-tag' );	
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'medplus' ),
		'footer' => __( 'Footer Menu', 'medplus' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-height' => true,
	) );
	add_editor_style( 'editor-style.css' );
} 
endif; // medplus_setup
add_action( 'after_setup_theme', 'medplus_setup' );

function medplus_widgets_init() {	
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'medplus' ),
		'description'   => __( 'Appears on blog page sidebar', 'medplus' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Header Info', 'medplus' ),
		'description'   => __( 'Appears on header of site', 'medplus' ),
		'id'            => 'header-info',
		'before_widget' => '<div class="headerinfo">',	
		'after_widget'  => '</div>',	
		'before_title'  => '<h3 style="display:none">',
		'after_title'   => '</h3>',		
	) );	
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'medplus' ),
		'description'   => __( 'Appears on footer', 'medplus' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-1 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'medplus' ),
		'description'   => __( 'Appears on footer', 'medplus' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-2 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'medplus' ),
		'description'   => __( 'Appears on footer', 'medplus' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 4', 'medplus' ),
		'description'   => __( 'Appears on footer', 'medplus' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );		
	
}
add_action( 'widgets_init', 'medplus_widgets_init' );


function medplus_font_url(){
		$font_url = '';		
		
		/* Translators: If there are any character that are not
		* supported by Roboto, trsnalate this to off, do not
		* translate into your own language.
		*/
		$roboto = _x('on','roboto:on or off','medplus');
		
		if('off' !== $roboto ){
			$font_family = array();
			
			if('off' !== $roboto){
				$font_family[] = 'Roboto:300,400,600,700,800,900';
			}
					
						
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}
		
	return $font_url;
	}


function medplus_scripts() {
	wp_enqueue_style('medplus-font', medplus_font_url(), array());
	wp_enqueue_style( 'medplus-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'medplus-editor-style', get_template_directory_uri()."/editor-style.css" );
	wp_enqueue_style( 'medplus-nivoslider-style', get_template_directory_uri()."/css/nivo-slider.css" );
	wp_enqueue_style( 'medplus-main-style', get_template_directory_uri()."/css/responsive.css" );		
	wp_enqueue_style( 'medplus-base-style', get_template_directory_uri()."/css/default.css" );
	wp_enqueue_script( 'medplus-nivo-script', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'medplus-custom_js', get_template_directory_uri() . '/js/custom.js' );	
	wp_enqueue_style( 'medplus-font-awesome-style', get_template_directory_uri()."/css/font-awesome.css" );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'medplus_scripts' );

function medplus_ie_stylesheet(){
	global $wp_styles;
	
	/** Load our IE-only stylesheet for all versions of IE.
	*   <!--[if lt IE 9]> ... <![endif]-->
	*
	*  Note: It is also possible to just check and see if the $is_IE global in WordPress is set to true before
	*  calling the wp_enqueue_style() function. If you are trying to load a stylesheet for all browsers
	*  EXCEPT for IE, then you would HAVE to check the $is_IE global since WordPress doesn't have a way to
	*  properly handle non-IE conditional comments.
	*/
	wp_enqueue_style('medplus-ie', get_template_directory_uri().'/css/ie.css', array('medplus-style'));
	$wp_styles->add_data('medplus-ie','conditional','IE');
	}
add_action('wp_enqueue_scripts','medplus_ie_stylesheet');

define('medplus_protheme_url','https://gracethemes.com/themes/medplus-wordpress-medical-theme/','medplus');
define('medplus_theme_doc','https://gracethemes.com/documentation/medplus-doc/#homepage-lite','medplus');
define('medplus_live_demo','https://gracethemes.com/demo/medplus/','medplus');

 if ( ! function_exists( 'medplus_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since  Medplus 1.3.0
 */
function medplus_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/**
 * Custom template for about theme.
 */
require get_template_directory() . '/inc/about-themes.php';

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

// get slug by id
function medplus_get_slug_by_id($id) {
	$post_data = get_post($id, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}