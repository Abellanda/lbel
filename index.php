<?php get_header(); ?>

<main class="blog-container">
		
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php if ( has_post_thumbnail($post->ID) ) {
				 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				 $image = $image[0];
				  } ?>

				<?php if(is_home()) { ?>

					<article id="post-<?php the_ID(); ?>" class="article-blog">
						<a href="<?php the_permalink() ?>">
							<div class="article-blog-img" style="background-image: url('<?php echo $image ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center"></div>
						</a>
						<div class="article-blog-text">
							<a href="<?php the_permalink() ?>">
								<h3 class="article-blog-title"><?php the_title(); ?></h3>
							</a>
							<p class="article-blog-desc">
								<?php the_excerpt(); ?>
							</p>
						</div>
					</article>

				<?php } else {
					get_template_part( 'template-parts/content', get_post_format() );
				} ?>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; // End have_posts() check. ?>



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

	

	</main>

<?php get_footer(); ?>