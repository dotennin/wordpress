<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Selma
 */
?>
	</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-content container">		
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<div id="footer-1" class="col grid_3_of_12" role="complementary">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>	
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
				<div id="footer-2" class="col grid_3_of_12" role="complementary">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>	
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
				<div id="footer-3" class="col grid_3_of_12" role="complementary">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>	
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
				<div id="footer-4" class="col grid_3_of_12" role="complementary">
					<?php dynamic_sidebar( 'footer-4' ); ?>
				</div>	
			<?php endif; ?>					
		</div>
		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'selma' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'selma' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s', 'selma' ), '<a href="http://www.purelythemes.com">Selma</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
