<?php
/*
Template Name: Quienes Somos
*/
get_header(); ?>

<div class="container">
	 <?php while ( have_posts() ) : the_post(); ?>
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

		<?php /*comments_template();*/ ?>
		<?php endwhile;?>

</div><!-- //container -->

<div class="team">

	<?php
	$args = array( 'post_type' => 'equipo', 'order' => 'ASC', 'posts_per_page' => -1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	?>

	<?php if ( has_post_thumbnail($post->ID) ) {
	 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	 $image = $image[0];
	  } ?>

	  <div class="member">
	  	<figure style="background-image: url('<?php echo $image; ?>'); ">
	  	</figure>
	  	<div class="member-text">
	  		<?php the_content(); ?>
	  	</div>
	  </div><!-- //member -->

	<?php endwhile;
	wp_reset_query(); ?>
	
</div><!-- //team -->

<?php get_footer(); ?>
