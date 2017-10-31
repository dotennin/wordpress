<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dandy
 */

get_header(); ?>
<?php 
	$dandyBreadYes = get_theme_mod('dandy_theme_options_BreadYes', '1');
	
	if ( has_post_thumbnail() ) :?>
		<img class="singleDandyimage" src="<?php the_post_thumbnail_url('dandy-single-image'); ?>"/>		
	<?php endif; // End header image check. ?>
    <?php if ( (!is_front_page()) && ($dandyBreadYes == 1)) : ?>
		<div class="dandyBreadcrumb">
			<?php dandy_breadcrumb();?>
		</div>
	<?php endif; ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
