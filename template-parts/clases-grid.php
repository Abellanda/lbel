<section id="clases">

	<div class="clases-main-title">
		<h3>Clases <span>+ vistas</span></h3>
	</div>

	<div id="clases-container">
		<?php
		$args = array( 'post_type' => 'clases', 'posts_per_page' => -1 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		?> 

		<?php
		$class_title = get_field('class_title');
		$class_text = get_field('class_text');
		$class_img = get_field('class_img');
		$class_background_color = get_field('class_background_color');
		$class_symbol = get_field('class_symbol');
		$class_position = get_field('class_position');
		$class_url = get_field('class_url');
		?>

		<a id="<?php echo $class_position; ?>" href="<?php echo $class_url; ?>">
			<div  
			class="clases-item"
			<?php if($class_img) { echo 'style="background-image: url(' . $class_img . '); background-position: center center; background-size: cover; background-repeat: no-repeat;"';} ?>
			<?php if($class_background_color) { echo 'style="background:' . $class_background_color . '";';} ?>
			> 
				<h5 class="clases-item-title"><?php echo $class_title; ?></h5>
				<p class="clases-item-text"><?php echo $class_text; ?></p>
			</div>
		</a>

		<?php endwhile;
		wp_reset_query(); ?>
	</div>

</section><?php /* end category grid */ ?>

<script type="text/javascript">

	var main = document.getElementById( 'clases-container' );

	[].map.call( main.children, Object ).sort( function ( a, b ) {
	    return +a.id.match( /\d+/ ) - +b.id.match( /\d+/ );
	}).forEach( function ( elem ) {
	    main.appendChild( elem );
	});
	
</script>