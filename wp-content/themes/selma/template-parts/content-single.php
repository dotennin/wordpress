<?php
/**
 * @package selma
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
	<header class="entry-header">
		<?php the_title( '<h1 class="single-title entry-title"><span>', '</span></h1>' ); ?>

		<div class="entry-meta">
			<?php selma_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
<div class="content-thumbnail-single">
			<?php the_post_thumbnail('single-main'); ?>
		</div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'selma' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php selma_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php
// Get Author Data
$author             = get_the_author();
$author_description = get_the_author_meta( 'description' );
$author_url         = esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );
$author_avatar      = get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'wpex_author_bio_avatar_size', 75 ) );

// Only display if author has a description
if ( $author_description ) : ?>

    <div class="author-info clr">
        <div class="heading-author"><h4><?php printf( __( 'Written by %s', 'selma' ), $author ); ?></h4>
		<p><a href="<?php echo $author_url; ?>" title="<?php _e( 'View all author posts', 'selma' ); ?>"><?php _e( 'View all author posts', 'selma' ); ?> &rarr;</a></p>
		</div>
        <div class="author-info-inner clr">
            <?php if ( $author_avatar ) { ?>
                <div class="author-avatar clr">
                    <a href="<?php echo $author_url; ?>" rel="author">
                        <?php echo $author_avatar; ?>
                    </a>
                </div><!-- .author-avatar -->
            <?php } ?>
            <div class="author-description">
                <p><?php echo $author_description; ?></p>
               
            </div><!-- .author-description -->
        </div><!-- .author-info-inner -->
    </div><!-- .author-info -->
<?php endif; ?>	
	




</article><!-- #post-## -->
