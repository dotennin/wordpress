<?php
/**
 * @package  Medplus
 * Setup the WordPress core custom header feature.
 *
 * @uses medplus_header_style()
 * @uses medplus_admin_header_style()
 * @uses medplus_admin_header_image()

 */
function medplus_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'medplus_custom_header_args', array(		
		'default-text-color'     => 'ffffff',
		'width'                  => 1600,
		'height'                 => 200,
		'wp-head-callback'       => 'medplus_header_style',
		'admin-head-callback'    => 'medplus_admin_header_style',
		'admin-preview-callback' => 'medplus_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'medplus_custom_header_setup' );

if ( ! function_exists( 'medplus_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see medplus_custom_header_setup().
 */
function medplus_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.header {
			background: url(<?php echo get_header_image(); ?>) no-repeat;
			background-position: center top;
		}
	<?php endif; ?>	
	</style>
	<?php
}
endif; // medplus_header_style

if ( ! function_exists( 'medplus_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see medplus_custom_header_setup().
 */
function medplus_admin_header_style() {?>
	<style type="text/css">
	.appearance_page_custom-header #headimg { border: none; }
	</style><?php
}
endif; // medplus_admin_header_style


add_action( 'admin_head', 'admin_header_css' );
function admin_header_css(){ ?>
	<style type="text/css">pre{white-space: pre-wrap;}</style><?php
}


if ( ! function_exists( 'medplus_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see medplus_custom_header_setup().
 */
function medplus_admin_header_image() {
	$style = sprintf( ' style="color:#%s;"', get_header_textcolor() );
?>
	<div id="headimg">
		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
		<img src="<?php echo esc_url( $header_image ); ?>" alt="">
		<?php endif; ?>
	</div>
<?php      
}
endif; // medplus_admin_header_image 