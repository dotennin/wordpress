<?php
/**
 *  Medplus Theme Customizer
 *
 * @package  Medplus
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function medplus_customize_register( $wp_customize ) {	
	//Add a class for titles
    class medplus_Info extends WP_Customize_Control {
        public $type = 'info';
        public $label = '';
        public function render_content() {
        ?>
			<h3 style="text-decoration: underline; color: #DA4141; text-transform: uppercase;"><?php echo esc_html( $this->label ); ?></h3>
        <?php
        }
    }
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	
	$wp_customize->add_setting('color_scheme',array(
			'default'	=> '#E14165',
			'sanitize_callback'	=> 'sanitize_hex_color'
	));
	
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Color Scheme','medplus'),			
			'description'	=> __('More color options in PRO Version','medplus'),	
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);	
	
	$wp_customize->add_setting('bodyfont_color',array(
			'default'	=> '#666666',
			'sanitize_callback'	=> 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'bodyfont_color',array(
			'label' => __('Body Font Color','medplus'),			
			 'description'	=> __('select body font color','medplus'),	
			'section' => 'colors',
			'settings' => 'bodyfont_color'
		))
	);	
	
	//Header info Section
	$wp_customize->add_section('header_info',array(
			'title'	=> __('Header Info','medplus'),
			'description'	=> __('add header phone number and address','medplus'),
			'priority'	=> null
	));	
	
	
	$wp_customize->add_setting('header_phone',array(
			'default'	=> null,
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('header_phone',array(
			'label'	=> __('Add contact phone number for header','medplus'),
			'section'	=> 'header_info',
			'setting'	=> 'header_phone'
	));	
	
	
	$wp_customize->add_setting('header_address',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_textarea'
	));
	
	$wp_customize->add_control( 'header_address', array(
			'type' => 'textarea',	
			'label'	=> __('Add contact address for header','medplus'),
			'section'	=> 'header_info',
			'setting'	=> 'header_address'
	));
	
	$wp_customize->add_setting('disabled_headertop',array(
				'default' => true,
				'sanitize_callback' => 'sanitize_text_field',
				'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'disabled_headertop', array(
			   'settings' => 'disabled_headertop',
			   'section'   => 'header_info',
			   'label'     => __('Uncheck To Enable This Section','medplus'),
			   'type'      => 'checkbox'
	 ));//Disable Header Section	
	
	// Slider Section		
	$wp_customize->add_section( 'slider_section', array(
            'title' => __('Slider Settings', 'medplus'),
            'priority' => null,
            'description'	=> __('Recommended image size ( 1300x570 )','medplus'),		
        )
    );	
	
	$wp_customize->add_setting('page-setting2',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting2',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide one:','medplus'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting3',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting3',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide two:','medplus'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting4',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting4',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide three:','medplus'),
			'section'	=> 'slider_section'
	));	// Slider Section	
	
	$wp_customize->add_setting('disabled_slides',array(
				'default' => true,
				'sanitize_callback' => 'sanitize_text_field',
				'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'disabled_slides', array(
			   'settings' => 'disabled_slides',
			   'section'   => 'slider_section',
			   'label'     => __('Uncheck To Enable This Section','medplus'),
			   'type'      => 'checkbox'
	 ));//Disable Slider Section
	
		
	// Get an Appointment Section 	
	$wp_customize->add_section('section_appointment',array(
		'title'	=> __('Get an Appointment Section','medplus'),
		'description'	=> __('Select Page from the dropdown for first section','medplus'),
		'priority' => null,
	));
	
	$wp_customize->add_setting('appointment',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('appointment',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for Appointment page:','medplus'),
			'section'	=> 'section_appointment'
	));	// Get an Appointment Section 
	
	$wp_customize->add_setting('disabled_appointment',array(
				'default' => true,
				'sanitize_callback' => 'sanitize_text_field',
				'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'disabled_appointment', array(
			   'settings' => 'disabled_appointment',
			   'section'   => 'section_appointment',
			   'label'     => __('Uncheck To Enable This Section','medplus'),
			   'type'      => 'checkbox'
	 ));//Disable Slider Section	
	
	
	// Homepage Services Section 	
	$wp_customize->add_section('section_pageboxes', array(
		'title'	=> __('Homepage Welcome and Services Section','medplus'),
		'description'	=> __('Select Pages from the dropdown for homepage welcome and services section','medplus'),
		'priority' => null,
	));
	
	$wp_customize->add_setting('welcomepage',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('welcomepage',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for welcome page:','medplus'),
			'section'	=> 'section_pageboxes'
	));	// Homepage welcome Section 
	
	$wp_customize->add_setting('box1',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('box1',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for box first:','medplus'),
			'section'	=> 'section_pageboxes'
	));	
	
	$wp_customize->add_setting('box2',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('box2',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for box second:','medplus'),
			'section'	=> 'section_pageboxes'
	));	
	
	$wp_customize->add_setting('box3',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('box3',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for box third:','medplus'),
			'section'	=> 'section_pageboxes'
	));	
	
	$wp_customize->add_setting('box4',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('box4',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for box fourth:','medplus'),
			'section'	=> 'section_pageboxes'
	));	
	
	$wp_customize->add_setting('disabled_pageboxes',array(
				'default' => true,
				'sanitize_callback' => 'sanitize_text_field',
				'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'disabled_pageboxes', array(
			   'settings' => 'disabled_pageboxes',
			   'section'   => 'section_pageboxes',
			   'label'     => __('Uncheck To Enable This Section','medplus'),
			   'type'      => 'checkbox'
	 ));//Disable Slider Section	
	
	
	
	//Social Section
	$wp_customize->add_section('social_sec',array(
			'title'	=> __('Social Settings','medplus'),				
			'description'	=> __('More social icon available in PRO Version','medplus'),		
			'priority'		=> null
	));		
	
	$wp_customize->add_setting('fb_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'	
	));	
	$wp_customize->add_control('fb_link',array(
			'label'	=> __('Add facebook link here','medplus'),
			'section'	=> 'social_sec',
			'setting'	=> 'fb_link'
	));	
	$wp_customize->add_setting('twitt_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('twitt_link',array(
			'label'	=> __('Add twitter link here','medplus'),
			'section'	=> 'social_sec',
			'setting'	=> 'twitt_link'
	));
	$wp_customize->add_setting('gplus_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gplus_link',array(
			'label'	=> __('Add google plus link here','medplus'),
			'section'	=> 'social_sec',
			'setting'	=> 'gplus_link'
	));
	$wp_customize->add_setting('linked_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('linked_link',array(
			'label'	=> __('Add linkedin link here','medplus'),
			'section'	=> 'social_sec',
			'setting'	=> 'linked_link'
	));
		
}
add_action( 'customize_register', 'medplus_customize_register' );
function medplus_custom_css(){
		?>
        	<style type="text/css"> 
					
					a, .blogposts h2 a:hover,
					#sidebar ul li a:hover,								
					.sitenav ul li a:hover, .sitenav ul li.current_page_item a,
					.services-wrap .one_third:hover h4,
					.services-wrap .one_third:hover .MoreLink,
					.slide_info .slide_more:hover,
					.blogposts h4 a:hover,
					.cols-4 ul li a:hover, .cols-4 ul li.current_page_item a,
					.recent-post h6:hover,
					.ReadMore:hover	
					{ color:<?php echo esc_html( get_theme_mod('color_scheme','#E14165')); ?>;}
					 
					
					.pagination ul li .current, .pagination ul li a:hover, 
					#commentform input#submit:hover,					
					.nivo-controlNav a.active,							
					.wpcf7 input[type='submit']
					
					{ background-color:<?php echo esc_html( get_theme_mod('color_scheme','#E14165')); ?>;}
					
					.sitenav ul li a:hover, .sitenav ul li.current_page_item a,
					.slide_info .slide_more:hover,
					.services-wrap .one_third:hover .MoreLink,
					.ReadMore:hover	
					{ border-color:<?php echo esc_html( get_theme_mod('color_scheme','#E14165')); ?>;}
					
			</style> 
<?php    
}
         
add_action('wp_head','medplus_custom_css');	

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function medplus_customize_preview_js() {
	wp_enqueue_script( 'medplus_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'medplus_customize_preview_js' );