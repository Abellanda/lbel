<section id="category">

	<?php
	$args = array( 'post_type' => 'blablarte_category', 'posts_per_page' => -1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	?> 

	<?php
	$category_title = get_field('category_title');
	$category_text = get_field('category_text');
	$category_img = get_field('category_img');
	$category_background_color = get_field('category_background_color');
	$category_symbol = get_field('category_symbol');
	$category_position = get_field('category_position');
	$category_url = get_field('category_url');
	?>
  
  <a id="item-<?php echo $category_position; ?>" href="<?php echo $category_url; ?>">
  	<div  
  	class="category-item"
  	<?php if($category_img) { echo 'style="background-image: url(' . $category_img . '); background-position: center center;
    background-size: cover; background-repeat: no-repeat;"';} ?>
  	<?php if($category_background_color) { echo 'style="background:' . $category_background_color . '";';} ?>
  	> 
  		<h5 class="category-item-title"><?php echo $category_title; ?></h5>
  		<p class="category-item-text"><?php echo $category_text; ?></p>
  		<div class="symbol <?php echo $category_symbol; ?>"></div>
  	</div>
  </a>

	<?php endwhile;
	wp_reset_query(); ?>

</section><?php /* end category grid */ ?>

<script type="text/javascript">

	var main = document.getElementById( 'category' );

	[].map.call( main.children, Object ).sort( function ( a, b ) {
	    return +a.id.match( /\d+/ ) - +b.id.match( /\d+/ );
	}).forEach( function ( elem ) {
	    main.appendChild( elem );
	});
	
</script>