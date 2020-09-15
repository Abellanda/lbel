<?php
/**
 * Entry meta information for posts
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'site_entry_meta' ) ) :
	function site_entry_meta() {
		/* translators: %1$s: current date, %2$s: current time */
		echo '<time class="updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( 'Publicado en %1$s | %2$s.', 'foundationpress' ), get_the_date(), get_the_time() ) . '</time>';
		echo '<p class="byline author">' . __( 'Escrito por', 'foundationpress' ) . ' <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a></p>';
	}
endif;
