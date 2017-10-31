/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
	
	// for banner image on/off
	wp.customize("bnr_on_off_opt", function(value) {
		value.bind(function(newval) {
			$("#bnr_on_off_opt").html(newval);
		} );
	});
	
	// for banner image 1
	wp.customize("bnr_img1", function(value) {
		value.bind(function(newval) {
			$("#bnr_img1").html(newval);
		} );
	});

	// for Banner caption heading
	wp.customize("banner_caption", function(value) {
		value.bind(function(newval) {
			$("#banner_caption").html(newval);
		} );
	});

	// for header text
	wp.customize("header_text", function(value) {
		value.bind(function(newval) {
			$("#header_text").html(newval);
		} );
	});
	
	// for social facebook icon on off
	wp.customize("social_fb_sec_on_off", function(value) {
		value.bind(function(newval) {
			$("#social_fb_sec_on_off").html(newval);
		} );
	});
	
	// for social twitter icon on off
	wp.customize("social_twitter_sec_on_off", function(value) {
		value.bind(function(newval) {
			$("#social_twitter_sec_on_off").html(newval);
		} );
	});
	
	// for social liknedin icon on off
	wp.customize("social_linkedin_sec_on_off", function(value) {
		value.bind(function(newval) {
			$("#social_linkedin_sec_on_off").html(newval);
		} );
	});
	
	// for social google icon on off
	wp.customize("social_google_sec_on_off", function(value) {
		value.bind(function(newval) {
			$("#social_google_sec_on_off").html(newval);
		} );
	});
	
	// for social rss icon on off
	wp.customize("social_rss_sec_on_off", function(value) {
		value.bind(function(newval) {
			$("#social_rss_sec_on_off").html(newval);
		} );
	});
	
	// for social fb button link 
	wp.customize("social_fb_btn_lnk", function(value) {
		value.bind(function(newval) {
			$("#social_fb_btn_lnk").html(newval);
		} );
	});
	
	// for social twitter button link 
	wp.customize("social_twitter_btn_lnk", function(value) {
		value.bind(function(newval) {
			$("#social_twitter_btn_lnk").html(newval);
		} );
	});
	
	// for social linkedin button link  
	wp.customize("social_linkedin_btn_lnk", function(value) {
		value.bind(function(newval) {
			$("#social_linkedin_btn_lnk").html(newval);
		} );
	});
	
	// for social google button link   
	wp.customize("social_google_btn_lnk", function(value) {
		value.bind(function(newval) {
			$("#social_google_btn_lnk").html(newval);
		} );
	});
	
	// for social rss feed button link   
	wp.customize("social_rssfeed_btn_lnk", function(value) {
		value.bind(function(newval) {
			$("#social_rssfeed_btn_lnk").html(newval);
		} );
	});

	// for Banner caption content
	wp.customize("banner_content", function(value) {
		value.bind(function(newval) {
			$("#banner_caption").html(newval);
		} );
	});


	// for Banner caption BUTTON
	wp.customize("banner_button", function(value) {
		value.bind(function(newval) {
			$("#banner_button").html(newval);
		} );
	});
	
	// for Banner button link
	wp.customize("banner_btn_link", function(value) {
		value.bind(function(newval) {
			$("#banner_btn_link").html(newval);
		} );
	});

	// for customer care number
	wp.customize("company_no", function(value) {
		value.bind(function(newval) {
			$("#company_no").html(newval);
		} );
	});
	
	// for services section on/off
	wp.customize("service_sec_on_off", function(value) {
		value.bind(function(newval) {
			$("#service_sec_on_off").html(newval);
		} );
	});

	// for services heading
	wp.customize("bottom_heading", function(value) {
		value.bind(function(newval) {
			$("#bottom_heading").html(newval);
		} );
	});

	// for services content
	wp.customize("bottom_content", function(value) {
		value.bind(function(newval) {
			$("#bottom_content").html(newval);
		} );
	});

	// forservices sub heading
	wp.customize("sub_heading", function(value) {
		value.bind(function(newval) {
			$("#sub_heading").html(newval);
		} );
	});
	// forservices sub content
	wp.customize("sub_content", function(value) {
		value.bind(function(newval) {
			$("#sub_content").html(newval);
		} );
	});

	// forservices sub heading2
	wp.customize("sub_heading2", function(value) {
		value.bind(function(newval) {
			$("#sub_heading2").html(newval);
		} );
	});
	// forservices sub content2
	wp.customize("sub_content2", function(value) {
		value.bind(function(newval) {
			$("#sub_content2").html(newval);
		} );
	});

	// forservices sub heading3
	wp.customize("sub_heading3", function(value) {
		value.bind(function(newval) {
			$("#sub_heading3").html(newval);
		} );
	});

	// forservices sub content3
	wp.customize("sub_content3", function(value) {
		value.bind(function(newval) {
			$("#sub_content3").html(newval);
		} );
	});
	
	// for services section1 link
	wp.customize("service1_arrow_link", function(value) {
		value.bind(function(newval) {
			$("#service1_arrow_link").html(newval);
		} );
	});
	
	// for services section2 link
	wp.customize("service2_arrow_link", function(value) {
		value.bind(function(newval) {
			$("#service2_arrow_link").html(newval);
		} );
	});
	
	// for services section3 link
	wp.customize("service3_arrow_link", function(value) {
		value.bind(function(newval) {
			$("#service3_arrow_link").html(newval);
		} );
	});
	
	// feature heading
	wp.customize("feature_sec_on_off", function(value) {
		value.bind(function(newval) {
			$("#feature_sec_on_off").html(newval);
		} );
	});

	// feature heading
	wp.customize("feature_heading", function(value) {
		value.bind(function(newval) {
			$("#feature_heading").html(newval);
		} );
	});

	// feature content
	wp.customize("feature_content", function(value) {
		value.bind(function(newval) {
			$("#feature_content").html(newval);
		} );
	});

	// feature img
	wp.customize("feature_img", function(value) {
		value.bind(function(newval) {
			$("#feature_img").html(newval);
		} );
	});

	// feature sub heding
	wp.customize("feature_sub_heading", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading").html(newval);
		} );
	});

	// feature hover heading 1
	wp.customize("feature_hover_heading", function(value) {
		value.bind(function(newval) {
			$("#feature_content").html(newval);
		} );
	});

	// feature hover content 1
	wp.customize("feature_hover_content", function(value) {
		value.bind(function(newval) {
			$("#feature_hover_content").html(newval);
		} );
	});

	// feature hover button 1
	wp.customize("feature_hover_button", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_button").html(newval);
		} );
	});
	
	// feature hover button 1 link
	wp.customize("feature_sec1_btn_link", function(value) {
		value.bind(function(newval) {
			$("#feature_sec1_btn_link").html(newval);
		} );
	});

	// feature sub heding 2
	wp.customize("feature_sub_heading2", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading2").html(newval);
		} );
	});

	// feature hover heading  2
	wp.customize("feature_hover_heading2", function(value) {
		value.bind(function(newval) {
			$("#feature_content").html(newval);
		} );
	});

	// feature hover content 2
	wp.customize("feature_hover_content2", function(value) {
		value.bind(function(newval) {
			$("#feature_hover_content2").html(newval);
		} );
	});

	// feature hover button 2
	wp.customize("feature_hover_button2", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_button2").html(newval);
		} );
	});
	
	// feature hover button 2 link
	wp.customize("feature_sec2_btn_link", function(value) {
		value.bind(function(newval) {
			$("#feature_sec2_btn_link").html(newval);
		} );
	});

	// feature img 2
	wp.customize("feature_img2", function(value) {
		value.bind(function(newval) {
			$("#feature_img2").html(newval);
		} );
	});

	// feature sub heding 3
	wp.customize("feature_sub_heading3", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading3").html(newval);
		} );
	});

	// feature hover heading  3
	wp.customize("feature_hover_heading3", function(value) {
		value.bind(function(newval) {
			$("#feature_hover_heading3").html(newval);
		} );
	});

	// feature hover content 3
	wp.customize("feature_hover_content3", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading3").html(newval);
		} );
	});

	// feature hover button 3
	wp.customize("feature_hover_button3", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_button3").html(newval);
		} );
	});
	
	// feature hover button 3 link
	wp.customize("feature_sec3_btn_link", function(value) {
		value.bind(function(newval) {
			$("#feature_sec3_btn_link").html(newval);
		} );
	});

	// feature img 3
	wp.customize("feature_img3", function(value) {
		value.bind(function(newval) {
			$("#feature_img3").html(newval);
		} );
	});

	// feature sub heding 4
	wp.customize("feature_sub_heading4", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading4").html(newval);
		} );
	});

	// feature hover heading  4
	wp.customize("feature_hover_heading4", function(value) {
		value.bind(function(newval) {
			$("#feature_hover_heading4").html(newval);
		} );
	});

	// feature hover content 4
	wp.customize("feature_hover_content4", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading4").html(newval);
		} );
	});

	// feature hover button 4
	wp.customize("feature_hover_button4", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_button4").html(newval);
		} );
	});
	
	// feature hover button 4
	wp.customize("feature_sec4_btn_link", function(value) {
		value.bind(function(newval) {
			$("#feature_sec4_btn_link").html(newval);
		} );
	});

	// feature img 4
	wp.customize("feature_img4", function(value) {
		value.bind(function(newval) {
			$("#feature_img4").html(newval);
		} );
	});


	// feature sub heding 5
	wp.customize("feature_sub_heading5", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading5").html(newval);
		} );
	});

	// feature hover heading  5
	wp.customize("feature_hover_heading5", function(value) {
		value.bind(function(newval) {
			$("#feature_hover_heading5").html(newval);
		} );
	});

	// feature hover content 5
	wp.customize("feature_hover_content5", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading5").html(newval);
		} );
	});

	// feature hover button 5
	wp.customize("feature_hover_button5", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_button5").html(newval);
		} );
	});
	
	// feature hover button 5 link
	wp.customize("feature_sec5_btn_link", function(value) {
		value.bind(function(newval) {
			$("#feature_sec5_btn_link").html(newval);
		} );
	});

	// feature img 5
	wp.customize("feature_img5", function(value) {
		value.bind(function(newval) {
			$("#feature_img5").html(newval);
		} );
	});

	// feature sub heding 6
	wp.customize("feature_sub_heading6", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading6").html(newval);
		} );
	});

	// feature hover heading  6
	wp.customize("feature_hover_heading6", function(value) {
		value.bind(function(newval) {
			$("#feature_hover_heading6").html(newval);
		} );
	});

	// feature hover content 6
	wp.customize("feature_hover_content6", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading6").html(newval);
		} );
	});

	// feature hover button 6
	wp.customize("feature_hover_button6", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_button6").html(newval);
		} );
	});
	
	// feature hover button 6 link
	wp.customize("feature_sec6_btn_link", function(value) {
		value.bind(function(newval) {
			$("#feature_sec6_btn_link").html(newval);
		} );
	});

	// feature img 6
	wp.customize("feature_img6", function(value) {
		value.bind(function(newval) {
			$("#feature_img6").html(newval);
		} );
	});

	// feature sub heding 7
	wp.customize("feature_sub_heading7", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading7").html(newval);
		} );
	});

	// feature hover heading  7
	wp.customize("feature_hover_heading7", function(value) {
		value.bind(function(newval) {
			$("#feature_hover_heading7").html(newval);
		} );
	});

	// feature hover content 7
	wp.customize("feature_hover_content7", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading7").html(newval);
		} );
	});

	// feature hover button 7
	wp.customize("feature_hover_button7", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_button7").html(newval);
		} );
	});
	
	// feature hover button 7 link
	wp.customize("feature_sec7_btn_link", function(value) {
		value.bind(function(newval) {
			$("#feature_sec7_btn_link").html(newval);
		} );
	});

	// feature img 7
	wp.customize("feature_img7", function(value) {
		value.bind(function(newval) {
			$("#feature_img7").html(newval);
		} );
	});


	// feature sub heding 8
	wp.customize("feature_sub_heading8", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading8").html(newval);
		} );
	});

	// feature hover heading  8
	wp.customize("feature_hover_heading8", function(value) {
		value.bind(function(newval) {
			$("#feature_hover_heading8").html(newval);
		} );
	});

	// feature hover content 8
	wp.customize("feature_hover_content8", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading8").html(newval);
		} );
	});

	// feature hover button 8
	wp.customize("feature_hover_button8", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_button8").html(newval);
		} );
	});
	
	// feature hover button 8 link
	wp.customize("feature_sec8_btn_link", function(value) {
		value.bind(function(newval) {
			$("#feature_sec8_btn_link").html(newval);
		} );
	});

	// feature img 8
	wp.customize("feature_img8", function(value) {
		value.bind(function(newval) {
			$("#feature_img8").html(newval);
		} );
	});


	// feature sub heding 9
	wp.customize("feature_sub_heading9", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading9").html(newval);
		} );
	});

	// feature hover heading  9
	wp.customize("feature_hover_heading9", function(value) {
		value.bind(function(newval) {
			$("#feature_hover_heading9").html(newval);
		} );
	});

	// feature hover content 9
	wp.customize("feature_hover_content9", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_heading9").html(newval);
		} );
	});

	// feature hover button 9
	wp.customize("feature_hover_button9", function(value) {
		value.bind(function(newval) {
			$("#feature_sub_button9").html(newval);
		} );
	});
	
	// feature hover button 9 link
	wp.customize("feature_sec9_btn_link", function(value) {
		value.bind(function(newval) {
			$("#feature_sec9_btn_link").html(newval);
		} );
	});

	// feature img 9
	wp.customize("feature_img9", function(value) {
		value.bind(function(newval) {
			$("#feature_img9").html(newval);
		} );
	});

	// statistics section

	// statistics section on/off option
	wp.customize("statistics_sec_on_off", function(value) {
		value.bind(function(newval) {
			$("#statistics_sec_on_off").html(newval);
		} );
	});
	
	// statistics count1
	wp.customize("statistics_count1", function(value) {
		value.bind(function(newval) {
			$("#statistics_count1").html(newval);
		} );
	});

	// statistics Result 1
	wp.customize("statistics_result1", function(value) {
		value.bind(function(newval) {
			$("#statistics_result1").html(newval);
		} );
	});

	// statistics count2
	wp.customize("statistics_count2", function(value) {
		value.bind(function(newval) {
			$("#statistics_count2").html(newval);
		} );
	});

	// statistics Result 2
	wp.customize("statistics_result2", function(value) {
		value.bind(function(newval) {
			$("#statistics_result2").html(newval);
		} );
	});

	// statistics count3
	wp.customize("statistics_count3", function(value) {
		value.bind(function(newval) {
			$("#statistics_count3").html(newval);
		} );
	});

	// statistics Result 3
	wp.customize("statistics_result3", function(value) {
		value.bind(function(newval) {
			$("#statistics_result3").html(newval);
		} );
	});

	// statistics count4
	wp.customize("statistics_count4", function(value) {
		value.bind(function(newval) {
			$("#statistics_count4").html(newval);
		} );
	});

	// statistics Result 4
	wp.customize("statistics_result4", function(value) {
		value.bind(function(newval) {
			$("#statistics_result4").html(newval);
		} );
	});


	// Ranking section heading
	wp.customize("ranking_sec_on_off", function(value) {
		value.bind(function(newval) {
			$("#ranking_sec_on_off").html(newval);
		} );
	});
	
	// Ranking section heading
	wp.customize("ranking_heading", function(value) {
		value.bind(function(newval) {
			$("#ranking_heading").html(newval);
		} );
	});

	// Ranking section content
	wp.customize("ranking_content", function(value) {
		value.bind(function(newval) {
			$("#ranking_content").html(newval);
		} );
	});

	// Ranking section img
	wp.customize("ranking_img", function(value) {
		value.bind(function(newval) {
			$("#ranking_img").html(newval);
		} );
	});
	
	// Palne & Team section on/off option
	wp.customize("plan_team_on_off", function(value) {
		value.bind(function(newval) {
			$("#plan_team_on_off").html(newval);
		} );
	});

	// Palne & Team section heading
	wp.customize("plane_team_heading", function(value) {
		value.bind(function(newval) {
			$("#plane_team_heading").html(newval);
		} );
	});

	// Palne & Team section sub heading
	wp.customize("plane_sub_heading", function(value) {
		value.bind(function(newval) {
			$("#plane_sub_heading").html(newval);
		} );
	});

	// Palne & Team section heading 2
	wp.customize("plane_team_heading2", function(value) {
		value.bind(function(newval) {
			$("#plane_team_heading2").html(newval);
		} );
	});

	// Palne & Team section sub heading 2
	wp.customize("plane_sub_heading2", function(value) {
		value.bind(function(newval) {
			$("#plane_sub_heading2").html(newval);
		} );
	});
	
	// side banner section on/off option
	wp.customize("side_baner_on_off", function(value) {
		value.bind(function(newval) {
			$("#side_baner_on_off").html(newval);
		} );
	});

	// side banner section heading
	wp.customize("side_banner_heading", function(value) {
		value.bind(function(newval) {
			$("#side_banner_heading").html(newval);
		} );
	});

	// side banner section content
	wp.customize("side_banner_content", function(value) {
		value.bind(function(newval) {
			$("#side_banner_content").html(newval);
		} );
	});

	// side banner section button 1
	wp.customize("side_banner_button1", function(value) {
		value.bind(function(newval) {
			$("#side_banner_button1").html(newval);
		} );
	});
	
	// side banner section button 1 link
	wp.customize("side_banner_btn1_link", function(value) {
		value.bind(function(newval) {
			$("#side_banner_btn1_link").html(newval);
		} );
	});
	
	// side banner section button 2 link
	wp.customize("side_banner_btn2_link", function(value) {
		value.bind(function(newval) {
			$("#side_banner_btn2_link").html(newval);
		} );
	});

	// side banner section button 2
	wp.customize("side_banner_button2", function(value) {
		value.bind(function(newval) {
			$("#side_banner_button2").html(newval);
		} );
	});

	// side banner section img
	wp.customize("side_banner_img", function(value) {
		value.bind(function(newval) {
			$("#side_banner_img").html(newval);
		} );
	});

	// Footer Section Copy Right
	wp.customize("seofication_copyright_text", function(value) {
		value.bind(function(newval) {
			$("#seofication_copyright_text").html(newval);
		} );
	});


} )( jQuery );