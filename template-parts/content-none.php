<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="content-none">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="cell small-12">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Nothing Found', 'foundationpress' ); ?></h1>
				</header>
			</div>
			<div class="cell small-12">
				<div class="page-content">
					<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

					<p>
						<?php
							/* translators: %1$s: new post url */
							printf( __(
								'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'foundationpress' ),
								admin_url( 'post-new.php' )
							);
						?>
					</p>

					<?php elseif ( is_search() ) : ?>

					<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'foundationpress' ); ?></p>
					<?php get_search_form(); ?>

					<?php else : ?>

					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'foundationpress' ); ?></p>
					<?php get_search_form(); ?>

					<?php endif; ?>
				</div>
			</div>

			
		</div>
	</div>

</div>
