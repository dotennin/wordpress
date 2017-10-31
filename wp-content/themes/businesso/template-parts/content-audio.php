<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="blog-area home-gallery-col" data-aos="fade-up"  data-aos-duration="2000">
	<div class="blog-post-img home-gallery-img" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">

		<?php if ( ! is_single() ) :
			if ( ! empty( $audio ) ) :
				foreach ( $audio as $audio_html ) {
					echo '<div class="entry-audio">';
						echo $audio_html;
					echo '</div><!-- .entry-audio -->';
				}
			endif;

		endif;

		if ( is_single() || empty( $audio ) ) :
			the_content();

		endif; ?>

	</div>
	<div class="blog-post-detail">
					<div class="col-md-9">
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><i class="fa fa-user"></i> <?php the_author(); ?></a>
						 &nbsp;&nbsp;<a href="#"><i class="fa fa-tag"></i><?php the_tags('', ', '); ?></a>
						 &nbsp;<a href="#"><i class="fa fa-comment"></i><?php comments_popup_link( '0', '1', '%', '', '-'); ?></</a>
						 </div>
				<div class="blog-post-date"><span class="date"><?php echo get_the_date('j'); ?><small><?php echo get_the_date('M'); ?></small></span>
					</div>		
				</div>
				<div class="clear"></div>
				   <div class="blog-post-title">
					<div class="blog-post-title-wrapper">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
						<?php wp_link_pages( array( 'before' => '<div class="blog-pagination animate" data-anim-type="fadeInLeft">' . __( 'Pages:', 'businesso' ), 'after' => '</div>' ) ); ?>
						<div class="btn-left-area">
					      <a href="<?php the_permalink(); ?>" class="main-btn btn-more btn-left"><?php _e('More','businesso');?>
						</a>
					  </div>
					</div>
				</div>

	<?php
		$content = apply_filters( 'the_content', get_the_content() );
		$audio = false;
		if ( false === strpos( $content, 'wp-playlist-script' ) ) {
			$audio = get_media_embedded_in_content( $content, array( 'audio' ) );
		}

	?>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</div>
	<?php endif; ?>

</div>
</article>