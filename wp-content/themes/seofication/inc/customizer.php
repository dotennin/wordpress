<?php
/**
 * Seofication Theme Customizer.
 *
 * @package Seofication
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
 

function seofication_customize_register( $wp_customize ) {


	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// header option
	$wp_customize->add_section("home_page_set", array(
		"title" => __("Header Section", "seofication"),
		"priority" => 29,
	));
	
			// for company number
			$wp_customize->add_setting("company_no", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"company_no",
				array(
					"label" => __("Company No", "seofication"),
					"section" => "home_page_set",
					"settings" => "company_no",
					"type" => "text",
					
				)
			));
			
			// for header left text
			$wp_customize->add_setting("header_text", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"header_text",
				array(
					"label" => __("Header Text", "seofication"),
					"section" => "home_page_set",
					"settings" => "header_text",
					"type" => "text",
					
				)
			));
			
			
			// for facebook icons on off option
			$wp_customize->add_setting("social_fb_sec_on_off", array(
				"default" => 'off',
				"transport" => "refresh",
				'sanitize_callback' => 'seofication_radio_sanitize_row',
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"social_fb_sec_on_off",
				array(
				'type' => 'radio',
				'label' => __("Facebook Icon On/Off", "seofication"),
				'section' => 'home_page_set',
				'choices' => array(
					'on' => 'On',
					'off' => 'Off',
				),
			)
			));
			
			// for social site link options
			// for facebook link
			$wp_customize->add_setting("social_fb_btn_lnk", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"social_fb_btn_lnk",
			array(
					"label" => __("Facebook Button Link", "seofication"),
					"section" => "home_page_set",
					"settings" => "social_fb_btn_lnk",
					"type" => "url",
				)
			));
			
			// for twitter icons on off option
			$wp_customize->add_setting("social_twitter_sec_on_off", array(
				"default" => 'off',
				"transport" => "refresh",
				'sanitize_callback' => 'seofication_radio_sanitize_row',
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"social_twitter_sec_on_off",
				array(
				'type' => 'radio',
				'label' => __("Twitter Icon On/Off", "seofication"),
				'section' => 'home_page_set',
				'choices' => array(
					'on' => 'On',
					'off' => 'Off',
				),
			)
			));
		
			// for twitter link
			$wp_customize->add_setting("social_twitter_btn_lnk", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"social_twitter_btn_lnk",
			array(
					"label" => __("Twitter Button Link", "seofication"),
					"section" => "home_page_set",
					"settings" => "social_twitter_btn_lnk",
					"type" => "url",
					)
			));
			
			// for linkedin icons on off option
			$wp_customize->add_setting("social_linkedin_sec_on_off", array(
				"default" => 'off',
				"transport" => "refresh",
				'sanitize_callback' => 'seofication_radio_sanitize_row',
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"social_linkedin_sec_on_off",
				array(
				'type' => 'radio',
				'label' => __("Linkedin Icon On/Off", "seofication"),
				'section' => 'home_page_set',
				'choices' => array(
					'on' => 'On',
					'off' => 'Off',
				),
			)
			));
			
			// for linkedin link
			$wp_customize->add_setting("social_linkedin_btn_lnk", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"social_linkedin_btn_lnk",
			array(
					"label" => __("Linkedin Button Link", "seofication"),
					"section" => "home_page_set",
					"settings" => "social_linkedin_btn_lnk",
					"type" => "url",
					)
			));
			
			// for google icons on off option
			$wp_customize->add_setting("social_google_sec_on_off", array(
				"default" => 'off',
				"transport" => "refresh",
				'sanitize_callback' => 'seofication_radio_sanitize_row',
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"social_google_sec_on_off",
				array(
				'type' => 'radio',
				'label' => __("Google Plus Icon On/Off", "seofication"),
				'section' => 'home_page_set',
				'choices' => array(
					'on' => 'On',
					'off' => 'Off',
				),
			)
			));
			
			// for google link
			$wp_customize->add_setting("social_google_btn_lnk", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"social_google_btn_lnk",
			array(
					"label" => __("Google Plus Button Link", "seofication"),
					"section" => "home_page_set",
					"settings" => "social_google_btn_lnk",
					"type" => "url",
					)
			));
			
			// for rss icons on off option
			$wp_customize->add_setting("social_rss_sec_on_off", array(
				"default" => 'off',
				"transport" => "refresh",
				'sanitize_callback' => 'seofication_radio_sanitize_row',
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"social_rss_sec_on_off",
				array(
				'type' => 'radio',
				'label' => __("RSS Icon On/Off", "seofication"),
				'section' => 'home_page_set',
				'choices' => array(
					'on' => 'On',
					'off' => 'Off',
				),
			)
			));
			
			// for rss feed link
			$wp_customize->add_setting("social_rssfeed_btn_lnk", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"social_rssfeed_btn_lnk",
			array(
					"label" => __("RSS Feed Button Link", "seofication"),
					"section" => "home_page_set",
					"settings" => "social_rssfeed_btn_lnk",
					"type" => "url",
					)
			));

	
	

	// Banner section
	$wp_customize->add_section("banner", array(
		"title" => __("Banner", "seofication"),
		"priority" => 30,
	));
			
			// for banner on off option
			$wp_customize->add_setting("bnr_on_off_opt", array(
				"default" => 'off',
				"transport" => "refresh",
				'sanitize_callback' => 'seofication_radio_sanitize_row',
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"bnr_on_off_opt",
				array(
				'type' => 'radio',
				'label' => __("Banner Section On/Off", "seofication"),
				'section' => 'banner',
				'choices' => array(
					'on' => 'On',
					'off' => 'Off',
				),
			)
			));
			
			// for banner image
			$wp_customize->add_setting("bnr_img1", array(
				"default" => "",
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw'
			));
			$wp_customize->add_control(new WP_Customize_Image_Control(
				$wp_customize,
				"bnr_img1",
				array(
					"label" => __("Banner Image 1", "seofication"),
					"section" => "banner",
					"settings" => "bnr_img1",
					
				)
			));
			
			// for banner heading
			$wp_customize->add_setting("banner_caption", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"banner_caption",
				array(
					"label" => __("Enter Banner Caption Heading", "seofication"),
					"section" => "banner",
					"settings" => "banner_caption",
					"type" => "text",
					
				)
			));
			
			// for banner content
			$wp_customize->add_setting("banner_content", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"banner_content",
				array(
					"label" => __("Enter Banner Caption Content", "seofication"),
					"section" => "banner",
					"settings" => "banner_content",
					"type" => "text",
					
				)
			));
			
			// for banner button
			$wp_customize->add_setting("banner_button", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"banner_button",
				array(
					"label" => __("Banner Caption Button", "seofication"),
					"section" => "banner",
					"settings" => "banner_button",
					"type" => "text",
					
				)
			));
			
			// for banner button link
			$wp_customize->add_setting("banner_btn_link", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"banner_btn_link",
			array(
					"label" => __("Banner Sign Up Button Link", "seofication"),
					"section" => "banner",
					"settings" => "banner_btn_link",
					"type" => "url",
					)
			));
			

	// Services section
	$wp_customize->add_section("banner_lite", array(
		"title" => __("Services Section", "seofication"),
		"priority" => 31,
	));
			
			// for services section on/off
			$wp_customize->add_setting("service_sec_on_off", array(
				"default" => 'off',
				"transport" => "refresh",
				'sanitize_callback' => 'seofication_radio_sanitize_row',
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"service_sec_on_off",
				array(
				'type' => 'radio',
				'label' => __("Services Section On/Off", "seofication"),
				'section' => 'banner_lite',
				'choices' => array(
					'on' => 'On',
					'off' => 'Off',
				),
			)
			));
			
			// services section heading
			$wp_customize->add_setting("bottom_heading", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"bottom_heading",
				array(
					"label" => __("Services Heading", "seofication"),
					"section" => "banner_lite",
					"settings" => "bottom_heading",
					"type" => "text",
					
				)
			));
			
			// services section sub-heading
			$wp_customize->add_setting("bottom_content", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"bottom_content",
				array(
					"label" => __("Services Content", "seofication"),
					"section" => "banner_lite",
					"settings" => "bottom_content",
					"type" => "text",
					
				)
			));
			
			// services section 1 heading
			$wp_customize->add_setting("sub_heading", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"sub_heading",
				array(
					"label" => __("Services Sub Heading 1", "seofication"),
					"section" => "banner_lite",
					"settings" => "sub_heading",
					"type" => "text",
					
				)
			));
			
			// services section 1 content
			$wp_customize->add_setting("sub_content", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"sub_content",
				array(
					"label" => __("Services Sub Content 1", "seofication"),
					"section" => "banner_lite",
					"settings" => "sub_content",
					"type" => "text",
					
				)
			));
			
			// services section 1 arrow link
			$wp_customize->add_setting("service1_arrow_link", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"service1_arrow_link",
			array(
					"label" => __("Services Section 1 Arrow Link", "seofication"),
					"section" => "banner_lite",
					"settings" => "service1_arrow_link",
					"type" => "url",
					)
			));
			
			// services section 2 heading
			$wp_customize->add_setting("sub_heading2", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"sub_heading2",
				array(
					"label" => __("Services Sub Heading 2", "seofication"),
					"section" => "banner_lite",
					"settings" => "sub_heading2",
					"type" => "text",
					
				)
			));
			
			// services section 2 content
			$wp_customize->add_setting("sub_content2", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"sub_content2",
				array(
					"label" => __("Services Sub Content 2", "seofication"),
					"section" => "banner_lite",
					"settings" => "sub_content2",
					"type" => "text",
					
				)
			));
			
			// services section 2 arrow link
			$wp_customize->add_setting("service2_arrow_link", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"service2_arrow_link",
			array(
					"label" => __("Services Section 2 Arrow Link", "seofication"),
					"section" => "banner_lite",
					"settings" => "service2_arrow_link",
					"type" => "url",
					)
			));
			
			// services section 3 heading
			$wp_customize->add_setting("sub_heading3", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"sub_heading3",
				array(
					"label" => __("Services Sub Heading 3", "seofication"),
					"section" => "banner_lite",
					"settings" => "sub_heading3",
					"type" => "text",
					
				)
			));
			
			// services section 3 content
			$wp_customize->add_setting("sub_content3", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"sub_content3",
				array(
					"label" => __("Services Sub Content 3", "seofication"),
					"section" => "banner_lite",
					"settings" => "sub_content3",
					"type" => "text",
					
				)
			));
			
			// services section 3 arrow link
			$wp_customize->add_setting("service3_arrow_link", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"service3_arrow_link",
			array(
					"label" => __("Services Section 3 Arrow Link", "seofication"),
					"section" => "banner_lite",
					"settings" => "service3_arrow_link",
					"type" => "url",
					)
			));
			
			
	//Side banner section
	$wp_customize->add_section("side_banner", array(
		"title" => __("Side Banner Section", "seofication"),
		"priority" => 32,
	));	
	
			// for side banner section on off option
			$wp_customize->add_setting("side_baner_on_off", array(
				"default" => 'off',
				"transport" => "refresh",
				'sanitize_callback' => 'seofication_radio_sanitize_row',
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"side_baner_on_off",
				array(
				'type' => 'radio',
				'label' => __("Side Banner Section On/Off", "seofication"),
				'section' => 'side_banner',
				'choices' => array(
					'on' => 'On',
					'off' => 'Off',
				),
			)
			));
			
			// for side banner heading
			$wp_customize->add_setting("side_banner_heading", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"side_banner_heading",
				array(
					"label" => __("Side Banner Section Heading", "seofication"),
					"section" => "side_banner",
					"settings" => "side_banner_heading",
					"type" => "text",
					
				)
			));
			
			// for side banner content
			$wp_customize->add_setting("side_banner_content", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"side_banner_content",
				array(
					"label" => __("Side Banner Section Content", "seofication"),
					"section" => "side_banner",
					"settings" => "side_banner_content",
					"type" => "text",
					
				)
			));
			
			// for side banner button1
			$wp_customize->add_setting("side_banner_button1", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"side_banner_button1",
				array(
					"label" => __("Side Banner Section Button 1", "seofication"),
					"section" => "side_banner",
					"settings" => "side_banner_button1",
					"type" => "text",
					
				)
			));
			
			// for side banner button1 link
			$wp_customize->add_setting("side_banner_btn1_link", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"side_banner_btn1_link",
			array(
					"label" => __("Side Banner Button 1 Link", "seofication"),
					"section" => "side_banner",
					"settings" => "side_banner_btn1_link",
					"type" => "url",
					)
			));
			
			// for side banner button2
			$wp_customize->add_setting("side_banner_button2", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"side_banner_button2",
				array(
					"label" => __("Side Banner Section Button 2", "seofication"),
					"section" => "side_banner",
					"settings" => "side_banner_button2",
					"type" => "text",
					
				)
			));
			
			// for side banner button2 link
			$wp_customize->add_setting("side_banner_btn2_link", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"side_banner_btn2_link",
			array(
					"label" => __("Side Banner Button 2 Link", "seofication"),
					"section" => "side_banner",
					"settings" => "side_banner_btn2_link",
					"type" => "url",
					)
			));
			
			// for side banner image
			$wp_customize->add_setting("side_banner_img", array(
				"default" => "",
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw'
			));
			$wp_customize->add_control(new WP_Customize_Image_Control(
				$wp_customize,
				"side_banner_img",
				array(
					"label" => __("Side Banner Image", "seofication"),
					"section" => "side_banner",
					"settings" => "side_banner_img",
					
				)
			));


			
	// feature section
	$wp_customize->add_section("feature_pro", array(
		"title" => __("Feature Section", "seofication"),
		"priority" => 33,
	));
			
			// for feature section on/off option
			$wp_customize->add_setting("feature_sec_on_off", array(
				"default" => 'off',
				"transport" => "refresh",
				'sanitize_callback' => 'seofication_radio_sanitize_row',
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_sec_on_off",
				array(
				'type' => 'radio',
				'label' => __("Featured Section On/Off", "seofication"),
				'section' => 'feature_pro',
				'choices' => array(
					'on' => 'On',
					'off' => 'Off',
				),
			)
			));
			
			// for feature section main heading
			$wp_customize->add_setting("feature_heading", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_heading",
				array(
					"label" => __("Feature Section Main Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_heading",
					"type" => "text",
					
				)
			));
			
			// for feature section main sub-heading
			$wp_customize->add_setting("feature_content", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_content",
				array(
					"label" => __("Feature Section Main Sub Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_content",
					"type" => "text",
					
				)
			));
			
			// setting for feature section 1
			// feature 1 image
			$wp_customize->add_setting("feature_img", array(
				"default" => "",
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw'
			));
			$wp_customize->add_control(new WP_Customize_Image_Control(
				$wp_customize,
				"feature_img",
				array(
					"label" => __("Feature Section1 Image", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_img",
					
				)
			));
			
			// feauture1 heading
			$wp_customize->add_setting("feature_sub_heading", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_sub_heading",
				array(
					"label" => __("Feature Section1 Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sub_heading",
					"type" => "text",
					
				)
			));
			
			// feauture1 hover heading
			$wp_customize->add_setting("feature_hover_heading", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_heading",
				array(
					"label" => __("Feature Section1 hover Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_heading",
					"type" => "text",
					
				)
			));
			
			// feauture1 hover content
			$wp_customize->add_setting("feature_hover_content", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_content",
				array(
					"label" => __("Feature Section1 Hover Content", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_content",
					"type" => "text",
					
				)
			));
			
			// feauture1 hover button
			$wp_customize->add_setting("feature_hover_button", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_button",
				array(
					"label" => __("Feature Section1 Hover Button", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_button",
					"type" => "text",
					
				)
			));
			
			// feauture1 hover button link
			$wp_customize->add_setting("feature_sec1_btn_link", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"feature_sec1_btn_link",
			array(
					"label" => __("Feature Section1 Hover Button Link", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sec1_btn_link",
					"type" => "url",
					)
			));

			// setting for feature section 2
			// feauture2 image
			$wp_customize->add_setting("feature_img2", array(
				"default" => "",
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw'
			));
			$wp_customize->add_control(new WP_Customize_Image_Control(
				$wp_customize,
				"feature_img2",
				array(
					"label" => __("Feature Section2 Image", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_img2",
					
				)
			));
			
			// feauture2 heading
			$wp_customize->add_setting("feature_sub_heading2", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_sub_heading2",
				array(
					"label" => __("Feature Section2 Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sub_heading2",
					"type" => "text",
					
				)
			));
			
			// feauture2 hover heading
			$wp_customize->add_setting("feature_hover_heading2", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_heading2",
				array(
					"label" => __("Feature Section2 Hover Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_heading2",
					"type" => "text",
					
				)
			));
			
			// feauture2 hover content
			$wp_customize->add_setting("feature_hover_content2", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_content2",
				array(
					"label" => __("Feature Section2 Hover Content", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_content2",
					"type" => "text",
					
				)
			));
			
			// feauture2 hover button
			$wp_customize->add_setting("feature_hover_button2", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_button2",
				array(
					"label" => __("Feature Section2 Button", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_button2",
					"type" => "text",
					
				)
			));
			
			// feauture2 hover button link
			$wp_customize->add_setting("feature_sec2_btn_link", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"feature_sec2_btn_link",
			array(
					"label" => __("Feature Section2 Hover Button Link", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sec2_btn_link",
					"type" => "url",
					)
			));

			// setting for feature section 3
			// feature3 image
			$wp_customize->add_setting("feature_img3", array(
				"default" => "",
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw'
			));
			$wp_customize->add_control(new WP_Customize_Image_Control(
				$wp_customize,
				"feature_img3",
				array(
					"label" => __("Feature Section3 Image", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_img3",
					
				)
			));
			
			// feature3 heading
			$wp_customize->add_setting("feature_sub_heading3", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_sub_heading3",
				array(
					"label" => __("Feature Section3 Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sub_heading3",
					"type" => "text",
					
				)
			));
			
			// feature3 hover heading
			$wp_customize->add_setting("feature_hover_heading3", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_heading3",
				array(
					"label" => __("Feature Section3 Hover Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_heading3",
					"type" => "text",
					
				)
			));
			
			// feature3 hover content
			$wp_customize->add_setting("feature_hover_content3", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_content3",
				array(
					"label" => __("Feature Section3 Hover Content", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_content3",
					"type" => "text",
					
				)
			));
			
			// feature3 hover button
			$wp_customize->add_setting("feature_hover_button3", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_button3",
				array(
					"label" => __("Feature Section3 Hover Button", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_button3",
					"type" => "text",
					
				)
			));
			
			// feauture3 hover button link
			$wp_customize->add_setting("feature_sec3_btn_link", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"feature_sec3_btn_link",
			array(
					"label" => __("Feature Section3 Hover Button Link", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sec3_btn_link",
					"type" => "url",
					)
			));

			// setting for feature section 4
			// feauture4 image
			$wp_customize->add_setting("feature_img4", array(
				"default" => "",
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw'
			));
			$wp_customize->add_control(new WP_Customize_Image_Control(
				$wp_customize,
				"feature_img4",
				array(
					"label" => __("Feature Section4 Image", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_img4",
					
				)
			));
			
			// feauture4 heading
			$wp_customize->add_setting("feature_sub_heading4", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_sub_heading4",
				array(
					"label" => __("Feature Section4 Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sub_heading4",
					"type" => "text",
					
				)
			));
			
			// feauture4 hover heading
			$wp_customize->add_setting("feature_hover_heading4", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_heading4",
				array(
					"label" => __("Feature Section4 Hover Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_heading4",
					"type" => "text",
					
				)
			));
			
			// feauture4 hover content
			$wp_customize->add_setting("feature_hover_content4", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_content4",
				array(
					"label" => __("Feature Section4 Hover Content", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_content4",
					"type" => "text",
					
				)
			));
			
			// feauture4 hover button
			$wp_customize->add_setting("feature_hover_button4", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_button4",
				array(
					"label" => __("Feature Section4 Hover Button", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_button4",
					"type" => "text",
					
				)
			));
			
			// feauture4 hover button link
			$wp_customize->add_setting("feature_sec4_btn_link", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"feature_sec4_btn_link",
			array(
					"label" => __("Feature Section4 Hover Button Link", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sec4_btn_link",
					"type" => "url",
					)
			));

			// setting for feature section 5
			// feauture5 Image
			$wp_customize->add_setting("feature_img5", array(
				"default" => "",
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw'
			));
			$wp_customize->add_control(new WP_Customize_Image_Control(
				$wp_customize,
				"feature_img5",
				array(
					"label" => __("Feature Section5 Image", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_img5",
					
				)
			));
			
			// feauture5 Heading
			$wp_customize->add_setting("feature_sub_heading5", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_sub_heading5",
				array(
					"label" => __("Feature Section5 Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sub_heading5",
					"type" => "text",
					
				)
			));
			
			// feauture5 hover Heading
			$wp_customize->add_setting("feature_hover_heading5", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_heading5",
				array(
					"label" => __("Feature Section5 Hover Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_heading5",
					"type" => "text",
					
				)
			));
			
			// feauture5 hover content
			$wp_customize->add_setting("feature_hover_content5", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_content5",
				array(
					"label" => __("Feature Section5 Hover Content", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_content5",
					"type" => "text",
					
				)
			));
			
			// feauture5 hover button
			$wp_customize->add_setting("feature_hover_button5", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_button5",
				array(
					"label" => __("Feature Section5 Hover Button", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_button5",
					"type" => "text",
					
				)
			));
			
			// feauture5 hover button link
			$wp_customize->add_setting("feature_sec5_btn_link", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"feature_sec5_btn_link",
			array(
					"label" => __("Feature Section5 Hover Button Link", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sec5_btn_link",
					"type" => "url",
					)
			));

			// setting for feature section 6
			// feauture6 image
			$wp_customize->add_setting("feature_img6", array(
				"default" => "",
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw'
			));
			$wp_customize->add_control(new WP_Customize_Image_Control(
				$wp_customize,
				"feature_img6",
				array(
					"label" => __("Feature Section6 Image", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_img6",
					
				)
			));
			
			// feauture6 heading
			$wp_customize->add_setting("feature_sub_heading6", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_sub_heading6",
				array(
					"label" => __("Feature Section6 Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sub_heading6",
					"type" => "text",
					
				)
			));
			
			// feauture6 hover heading
			$wp_customize->add_setting("feature_hover_heading6", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_heading6",
				array(
					"label" => __("Feature Section6 Hover Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_heading6",
					"type" => "text",
					
				)
			));
			
			// feauture6 hover content
			$wp_customize->add_setting("feature_hover_content6", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_content6",
				array(
					"label" => __("Feature Section6 Hover Content", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_content6",
					"type" => "text",
					
				)
			));
			
			// feauture6 hover button
			$wp_customize->add_setting("feature_hover_button6", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_button6",
				array(
					"label" => __("Feature Section6 Hover Button", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_button6",
					"type" => "text",
					
				)
			));
			
			// feauture6 hover button link
			$wp_customize->add_setting("feature_sec6_btn_link", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"feature_sec6_btn_link",
			array(
					"label" => __("Feature Section6 Hover Button Link", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sec6_btn_link",
					"type" => "url",
					)
			));

			// setting for feature section 7
			// feauture7 image
			$wp_customize->add_setting("feature_img7", array(
				"default" => "",
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw'
			));
			$wp_customize->add_control(new WP_Customize_Image_Control(
				$wp_customize,
				"feature_img7",
				array(
					"label" => __("Feature Section7 Image", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_img7",
					
				)
			));
			
			// feauture7 heading
			$wp_customize->add_setting("feature_sub_heading7", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_sub_heading7",
				array(
					"label" => __("Feature Section7 Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sub_heading7",
					"type" => "text",
					
				)
			));
			
			// feauture7 hover heading
			$wp_customize->add_setting("feature_hover_heading7", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_heading7",
				array(
					"label" => __("Feature Section7 Hover Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_heading7",
					"type" => "text",
					
				)
			));
			
			// feauture7 hover content
			$wp_customize->add_setting("feature_hover_content7", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_content7",
				array(
					"label" => __("Feature Section7 Hover Content", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_content7",
					"type" => "text",
					
				)
			));
			
			// feauture7 hover button
			$wp_customize->add_setting("feature_hover_button7", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_button7",
				array(
					"label" => __("Feature Section7 Hover Button", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_button7",
					"type" => "text",
					
				)
			));
			
			// feauture7 hover button link
			$wp_customize->add_setting("feature_sec7_btn_link", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"feature_sec7_btn_link",
			array(
					"label" => __("Feature Section7 Hover Button Link", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sec7_btn_link",
					"type" => "url",
					)
			));


			// setting for feature section 8
			// feauture8 image
			$wp_customize->add_setting("feature_img8", array(
				"default" => "",
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw'
			));
			$wp_customize->add_control(new WP_Customize_Image_Control(
				$wp_customize,
				"feature_img8",
				array(
					"label" => __("Feature Section8 Image", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_img8",
					
				)
			));
			
			// feauture8 heading
			$wp_customize->add_setting("feature_sub_heading8", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_sub_heading8",
				array(
					"label" => __("Feature Section8 Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sub_heading8",
					"type" => "text",
					
				)
			));
			
			// feauture8 hover heading
			$wp_customize->add_setting("feature_hover_heading8", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_heading8",
				array(
					"label" => __("Feature Section8 Hover Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_heading8",
					"type" => "text",
					
				)
			));
			
			// feauture8 hover content
			$wp_customize->add_setting("feature_hover_content8", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_content8",
				array(
					"label" => __("Feature Section8 Hover Content", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_content8",
					"type" => "text",
					
				)
			));
			
			// feauture8 hover button
			$wp_customize->add_setting("feature_hover_button8", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_button8",
				array(
					"label" => __("Feature Section8 Hover Button", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_button8",
					"type" => "text",
					
				)
			));
			
			// feauture8 hover button link
			$wp_customize->add_setting("feature_sec8_btn_link", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"feature_sec8_btn_link",
			array(
					"label" => __("Feature Section8 Hover Button Link", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sec8_btn_link",
					"type" => "url",
					)
			));


			// setting for feature section 9
			// feauture9 image
			$wp_customize->add_setting("feature_img9", array(
				"default" => "",
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw'
			));
			$wp_customize->add_control(new WP_Customize_Image_Control(
				$wp_customize,
				"feature_img9",
				array(
					"label" => __("Feature Section9 Image", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_img9",
					
				)
			));
			
			// feauture9 heading
			$wp_customize->add_setting("feature_sub_heading9", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_sub_heading9",
				array(
					"label" => __("Feature Section9 Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sub_heading9",
					"type" => "text",
					
				)
			));
			
			// feauture9 hover heading
			$wp_customize->add_setting("feature_hover_heading9", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_heading9",
				array(
					"label" => __("Feature Section9 Hover Heading", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_heading9",
					"type" => "text",
					
				)
			));
			
			// feauture9 hover content
			$wp_customize->add_setting("feature_hover_content9", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_content9",
				array(
					"label" => __("Feature Section9 Hover Content", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_content9",
					"type" => "text",
					
				)
			));
			
			// feauture9 hover button
			$wp_customize->add_setting("feature_hover_button9", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"feature_hover_button9",
				array(
					"label" => __("Feature Section9 Hover Button", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_hover_button9",
					"type" => "text",
					
				)
			));
			
			// feauture9 hover button link
			$wp_customize->add_setting("feature_sec9_btn_link", array(
				"default" => '',
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw',
			));
			$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			"feature_sec9_btn_link",
			array(
					"label" => __("Feature Section9 Hover Button Link", "seofication"),
					"section" => "feature_pro",
					"settings" => "feature_sec9_btn_link",
					"type" => "url",
					)
			));


	//  setting for statistics section
	$wp_customize->add_section("statistics_sec", array(
		"title" => __("Statistics Counter Section", "seofication"),
		"priority" => 33,
	));

			// for statistics section on/off option
			$wp_customize->add_setting("statistics_sec_on_off", array(
				"default" => 'off',
				"transport" => "refresh",
				'sanitize_callback' => 'seofication_radio_sanitize_row',
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"statistics_sec_on_off",
				array(
				'type' => 'radio',
				'label' => __("Statistics Section On/Off", "seofication"),
				'section' => 'statistics_sec',
				'choices' => array(
					'on' => 'On',
					'off' => 'Off',
				),
			)
			));
			
			//  statistics count 1
			$wp_customize->add_setting("statistics_count1", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"statistics_count1",
				array(
					"label" => __("Statistics Count 1", "seofication"),
					"section" => "statistics_sec",
					"settings" => "statistics_count1",
					"type" => "text",
					
				)
			));

			//  statistics Result 1
			$wp_customize->add_setting("statistics_result1", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"statistics_result1",
				array(
					"label" => __("Statistics Result 1", "seofication"),
					"section" => "statistics_sec",
					"settings" => "statistics_result1",
					"type" => "text",
					
				)
			));


			//  statistics count 2
			$wp_customize->add_setting("statistics_count2", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"statistics_count2",
				array(
					"label" => __("Statistics Count 2", "seofication"),
					"section" => "statistics_sec",
					"settings" => "statistics_count2",
					"type" => "text",
					
				)
			));

			//  statistics Result 2
			$wp_customize->add_setting("statistics_result2", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"statistics_result2",
				array(
					"label" => __("Statistics Result 2", "seofication"),
					"section" => "statistics_sec",
					"settings" => "statistics_result2",
					"type" => "text",
					
				)
			));


			//  statistics count 3
			$wp_customize->add_setting("statistics_count3", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"statistics_count3",
				array(
					"label" => __("Statistics Count 3", "seofication"),
					"section" => "statistics_sec",
					"settings" => "statistics_count3",
					"type" => "text",
					
				)
			));

			//  statistics Result 3
			$wp_customize->add_setting("statistics_result3", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"statistics_result3",
				array(
					"label" => __("Statistics Result 3", "seofication"),
					"section" => "statistics_sec",
					"settings" => "statistics_result3",
					"type" => "text",
					
				)
			));

			//  statistics count 4
			$wp_customize->add_setting("statistics_count4", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"statistics_count4",
				array(
					"label" => __("Statistics Count 4", "seofication"),
					"section" => "statistics_sec",
					"settings" => "statistics_count4",
					"type" => "text",
					
				)
			));

			//  statistics Result 4
			$wp_customize->add_setting("statistics_result4", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"statistics_result4",
				array(
					"label" => __("Statistics Result 4", "seofication"),
					"section" => "statistics_sec",
					"settings" => "statistics_result4",
					"type" => "text",
					
				)
			));


	// setting for Ranking section
	$wp_customize->add_section("Ranking_sec", array(
		"title" => __("Ranking Section", "seofication"),
		"priority" => 34,
	));
			
			// for ranking section on/off option
			$wp_customize->add_setting("ranking_sec_on_off", array(
				"default" => 'off',
				"transport" => "refresh",
				'sanitize_callback' => 'seofication_radio_sanitize_row',
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"ranking_sec_on_off",
				array(
				'type' => 'radio',
				'label' => __("Ranking Section On/Off", "seofication"),
				'section' => 'Ranking_sec',
				'choices' => array(
					'on' => 'On',
					'off' => 'Off',
				),
			)
			));
			
			// Ranking section heading
			$wp_customize->add_setting("ranking_heading", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"ranking_heading",
				array(
					"label" => __("Ranking Section Heading", "seofication"),
					"section" => "Ranking_sec",
					"settings" => "ranking_heading",
					"type" => "text",
					
				)
			));
			
			// Ranking section sub heading
			$wp_customize->add_setting("ranking_content", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"ranking_content",
				array(
					"label" => __("Ranking Section Content", "seofication"),
					"section" => "Ranking_sec",
					"settings" => "ranking_content",
					"type" => "text",
					
				)
			));
			
			// Ranking section image
			$wp_customize->add_setting("ranking_img", array(
				"default" => "",
				"transport" => "refresh",
				'sanitize_callback' => 'esc_url_raw'
			));
			$wp_customize->add_control(new WP_Customize_Image_Control(
				$wp_customize,
				"ranking_img",
				array(
					"label" => __("Ranking Image", "seofication"),
					"section" => "Ranking_sec",
					"settings" => "ranking_img",
					
				)
			));

	// setting for Plan & Team section
	$wp_customize->add_section("plane_team_sec", array(
		"title" => __("Plan & Team section", "seofication"),
		"priority" => 35,
	));
			
			// for Plan & Team section on/off option
			$wp_customize->add_setting("plan_team_on_off", array(
				"default" => 'off',
				"transport" => "refresh",
				'sanitize_callback' => 'seofication_radio_sanitize_row',
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"plan_team_on_off",
				array(
				'type' => 'radio',
				'label' => __("Plan & Team Section On/Off", "seofication"),
				'section' => 'plane_team_sec',
				'choices' => array(
					'on' => 'On',
					'off' => 'Off',
				),
			)
			));
			
			// Plan & Team section heading1
			$wp_customize->add_setting("plane_team_heading", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"plane_team_heading",
				array(
					"label" => __("Plan & Team Section Heading 1", "seofication"),
					"section" => "plane_team_sec",
					"settings" => "plane_team_heading",
					"type" => "text",
					
				)
			));
			
			// Plan & Team section sub heading1
			$wp_customize->add_setting("plane_sub_heading", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"plane_sub_heading",
				array(
					"label" => __("Plan & Team Section Sub Heading 1", "seofication"),
					"section" => "plane_team_sec",
					"settings" => "plane_sub_heading",
					"type" => "text",
					
				)
			));
			
			// Plan & Team section heading2
			$wp_customize->add_setting("plane_team_heading2", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"plane_team_heading2",
				array(
					"label" => __("Plan & Team Section Heading 2", "seofication"),
					"section" => "plane_team_sec",
					"settings" => "plane_team_heading2",
					"type" => "text",
					
				)
			));
			
			// Plan & Team section sub heading2		
			$wp_customize->add_setting("plane_sub_heading2", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"plane_sub_heading2",
				array(
					"label" => __("Plan & Team Section Sub Heading 2", "seofication"),
					"section" => "plane_team_sec",
					"settings" => "plane_sub_heading2",
					"type" => "text",
					
				)
			));


			// setting for Footer Section
			$wp_customize->add_section("footer_sec", array(
				"title" => __("Footer Section", "seofication"),
				"priority" => 36,
			));

			// Footer Copy Right
			$wp_customize->add_setting("seofication_copyright_text", array(
				"default" => "",
				"placeholder"=>'home',
				"transport" => "refresh",
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize,
				"seofication_copyright_text",
				array(
					"label" => __("Footer Copy Right Text", "seofication"),
					"section" => "footer_sec",
					"settings" => "seofication_copyright_text",
					"type" => "text",
					
				)
			));
	
}
add_action( 'customize_register', 'seofication_customize_register' );

// sanitize_callback function


function seofication_radio_sanitize_row($input) {
  $valid_keys = array(
		'on' => 'On',
		'off' => 'Off',
  );
  if ( array_key_exists( $input, $valid_keys ) ) {
	 return $input;
  } else {
	 return '';
  }
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function seofication_customize_preview_js() {
	wp_enqueue_script( 'seofication-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'seofication_customize_preview_js' );