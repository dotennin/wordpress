<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seofication
 */

?>

</div><!-- #content -->
</div><!-- #page -->
</div><!-- .container -->

 <div class="container">
	
	<?php if(get_theme_mod("ranking_sec_on_off") != '' && get_theme_mod("ranking_sec_on_off") == 'on'): ?>
	<div class="row">
	
		<div class="col-sm-12 ranking">
			<h2><?php echo esc_html(get_theme_mod("ranking_heading")); ?></h2>
			<p><?php echo esc_html(get_theme_mod("ranking_content")); ?></p> 
		</div>
		
		<div class="col-sm-12 tablate">
		<?php if(get_theme_mod("ranking_img") != ''): ?>
				<img src="<?php echo esc_url(get_theme_mod("ranking_img")); ?>" />
		<?php endif;?>
		</div>
		
	</div>
	<?php endif; ?>
	
	<?php if(get_theme_mod("plan_team_on_off") != '' && get_theme_mod("plan_team_on_off") == 'on'): ?>
    <div class="row">
	
        <div class="col-sm-6 col-xs-6 plan_project">
            <p><?php echo esc_html(get_theme_mod("plane_team_heading")); ?></p>
            <h1><?php echo esc_html(get_theme_mod("plane_sub_heading")); ?></h1>
            <a href="#"><span class="fa fa-angle-right icons1"></span></a>
        </div>
		
        <div class="col-sm-6 col-xs-6 plan_project infinite">
            <p><?php echo esc_html(get_theme_mod("plane_team_heading2")); ?></p>
            <h1><?php echo esc_html(get_theme_mod("plane_sub_heading2")); ?></h1>
            <a href="#"><span class="fa fa-angle-right icons1"></span></a>
        </div>
		
    </div>
	<?php endif; ?>
	
</div> <!-- container -->

<div class="conainer-fluid main-footer">
<div class="container">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="inner-footer" class="clearfix">
			<div class="row">				
					<div id="widget-footer" class="clearfix">

						<?php if ( is_active_sidebar( !dynamic_sidebar('seo-footer1'))) : ?>
							
							<div class="col-sm-2">
									
							</div>	
						
						<?php endif; ?>
				
						<?php if ( is_active_sidebar( !dynamic_sidebar('seo-footer2'))) : ?>
						
						<div class="col-sm-2">
							
						</div>
					
						<?php endif; ?>
						
						<?php if ( is_active_sidebar( !dynamic_sidebar('seo-footer3'))) : ?>

						<div class="col-sm-2">
								
						</div>	

						<?php endif; ?>
						<?php if ( is_active_sidebar( !dynamic_sidebar('seo-footer4'))) : ?>
						
						<div class="col-sm-2">
							
						</div>
							
						<?php endif; ?>

						<?php if ( is_active_sidebar( !dynamic_sidebar('seo-footer5'))) : ?>
						
						<div class="col-sm-4">
							
						</div>
							
						<?php endif; ?>

					</div>
				</div> 
			
		</div>	
		<div class="site-info">
			<p><?php printf(esc_html(get_theme_mod("seofication_copyright_text"))); ?> <a href="<?php echo esc_url( __( 'http://phoeniixx.com/', 'seofication' ) ); ?>" rel="designer">phoeniixx</a> </p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #container -->
</div><!-- #container-fluid -->


<?php wp_footer(); ?>

</body>
</html>