<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Dandy
 */


if ( ! function_exists( 'dandy_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function dandy_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'dandy' ); ?></h1>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', '<i class="fa fa-3x fa-angle-left"></i> <div class="meta-nav" aria-hidden="true"><small>' . __( 'Previous Post', 'dandy' ) . ' ' . '</small><span>%title</span></div><span class="screen-reader-text">' . __( 'Previous post link', 'dandy' ) . '</span> ' );
				next_post_link( '<div class="nav-next">%link</div>', '<div class="meta-nav" aria-hidden="true"><small>' . __( 'Next Post', 'dandy' ) . '</small><span>%title</span></div> <i class="fa fa-3x fa-angle-right"></i> ' . '<span class="screen-reader-text">' . __( 'Next Post link', 'dandy' ) . '</span> ' );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;  
 
if ( ! function_exists( 'dandy_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function dandy_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';
	$byline = '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>';

	echo '<span class="posted-on dspaceR"><i class="fa fa-clock-o spaceRight" aria-hidden="true"></i>' . $posted_on . '</span><span class="byline dspaceR"><i class="fa fa-user spaceRight" aria-hidden="true"></i>' . $byline . '</span>'; // WPCS: XSS OK.
}
endif;

if ( ! function_exists( 'dandy_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function dandy_entry_footer() {
		// Hide category and tag text for pages.
	if ( 'post' == get_post_type() && is_single() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'dandy' ) );
		if ( $categories_list && dandy_categorized_blog() ) {
			echo '<span class="cat-links"><i class="fa fa-folder-open spaceLeftRight" aria-hidden="true"></i>' . $categories_list . '</span>';
		}
	}

		if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'dandy' ) );
		if ( $tags_list ) {
			echo '<span class="tags-links"><i class="fa fa-tags spaceRight" aria-hidden="true"></i>' . $tags_list . '</span>';
		}
	}
	

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link"><i class="fa fa-comments-o spaceLeftRight" aria-hidden="true"></i>';
		comments_popup_link( esc_html__( 'Leave a comment', 'dandy' ), esc_html__( '1 Comment', 'dandy' ), esc_html__( '% Comments', 'dandy' ) );
		echo '</span>';
	}

	edit_post_link( esc_html__( 'Edit', 'dandy' ), '<span class="edit-link"><i class="fa fa-wrench spaceRight" aria-hidden="true"></i>', '</span>' );
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function dandy_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'dandy_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'dandy_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so dandy_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so dandy_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in dandy_categorized_blog.
 */
function dandy_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'dandy_categories' );
}
add_action( 'edit_category', 'dandy_category_transient_flusher' );
add_action( 'save_post',     'dandy_category_transient_flusher' );
