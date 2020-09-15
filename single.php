<?php get_header(); ?>

<main class="container">

	<div class="row">
		<div class="col s12">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; // End have_posts() check. ?>

				<?php if( !is_singular('maestros') ) { comments_template(); } ?>

				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php
				if ( function_exists( 'site_pagination' ) ) :
					site_pagination();
				elseif ( is_paged() ) :
				?>
					<nav id="post-nav">
						<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'site' ) ); ?></div>
						<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'site' ) ); ?></div>
					</nav>
				<?php endif; ?>

		</div>
		<!-- div class="col s3">
			<?php //get_sidebar(); ?>
		</div -->
	</div>

	</main>

<?php get_footer(); ?>