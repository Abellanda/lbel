<div class="quienes-somos">
	<?php
	$args = array( 'page_id' => 315 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	?>

	<div class="container">
		<?php the_content(); ?>
	</div>

	<?php endwhile;
	  wp_reset_query(); ?>
</div>
