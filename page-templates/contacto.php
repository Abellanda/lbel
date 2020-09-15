<?php
/*
Template Name: Contacto
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php if ( has_post_thumbnail($post->ID) ) {
	 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	 $image = $image[0];
	  } ?>

	<div class="banner" style="background-image: url(<?php echo $image; ?>);">
		<h1>#HAGAMOS CONTACTO</h1>
	</div>


	<div class="container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
			</footer>
		</article>

	</div>
	 	
<?php endwhile;?>

<?php get_footer(); ?>