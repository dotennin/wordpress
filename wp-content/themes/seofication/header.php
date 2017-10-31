 <?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seofication
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="custom-header">
	<div class="custom-header-media">
		<?php the_custom_header_markup(); ?>
	</div>
</div>

<div class="container-fluid header_main">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-lg-6 col-xs-12 leads">
				<h1 class="pull-left"><?php echo esc_html(get_theme_mod("header_text")); ?></h1>
			</div>
			<div class="col-sm-6 col-lg-6 col-xs-12 icon_menu">
				<ul>
					<?php if(get_theme_mod("social_fb_sec_on_off") != '' && get_theme_mod("social_fb_sec_on_off") == 'on'): ?>
						<li class="social-icon facebook"><a href="<?php echo esc_url(get_theme_mod("social_fb_btn_lnk"));?>"><span class="fa fa-facebook"></span></a></li>
					<?php endif; ?>
					
					<?php if(get_theme_mod("social_twitter_sec_on_off") != '' && get_theme_mod("social_twitter_sec_on_off") == 'on'): ?>
						<li class="social-icon twitter"><a href="<?php echo esc_url(get_theme_mod("social_twitter_btn_lnk"));?>"><span class="fa fa-twitter"></span></a></li>
					<?php endif; ?>
					
					<?php if(get_theme_mod("social_linkedin_sec_on_off") != '' && get_theme_mod("social_linkedin_sec_on_off") == 'on'): ?>
						<li class="social-icon linkedin"><a href="<?php echo esc_url(get_theme_mod("social_linkedin_btn_lnk"));?>"><span class="fa fa-linkedin"></span></a></li>
					<?php endif; ?>
					
					<?php if(get_theme_mod("social_google_sec_on_off") != '' && get_theme_mod("social_google_sec_on_off") == 'on'): ?>
						<li class="social-icon google"><a href="<?php echo esc_url(get_theme_mod("social_google_btn_lnk"));?>"><span class="fa fa-google-plus"></span></a></li>
					<?php endif; ?>
					
					<?php if(get_theme_mod("social_rss_sec_on_off") != '' && get_theme_mod("social_rss_sec_on_off") == 'on'): ?>
						<li class="social-icon rss"><a href="<?php echo esc_url(get_theme_mod("social_rssfeed_btn_lnk"));?>"><span class="fa fa-rss"></span></a></li>
					<?php endif; ?>
					
					<li><?php echo esc_html(get_theme_mod("company_no")); ?></li>
				</ul>
			</div>
		</div>
	</div>	
</div>

<div class="container seo-header-wrap">
	<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'seofication' ); ?></a>

		<div class="row">
			<header id="masthead" class="site-header" role="banner">
				<div class="col-sm-3 logo-site">
					<div class="site-branding">
						<?php
						seofication_custom_logo();
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-sm-9 nav-section">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' , 'container_class'=> 'seo-main-nav') ); ?>
					</nav><!-- #site-navigation --> 
				</div>
			</header><!-- #masthead -->
		</div>
	
	</div> <!--  #page end -->
</div> <!-- container end -->		

	<div class="container">		
	<div id="content" class="site-content">