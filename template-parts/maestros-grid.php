<section id="maestros">

	<div class="maestros-container">
		<?php
		$args = array( 'post_type' => 'maestros', 'posts_per_page' => -1 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		?> 

		<?php
		$teacher_position = get_field('teacher_position');
		$teacher_name = get_field('teacher_name');
		$teacher_subject = get_field('teacher_subject');
		$teacher_photo = get_field('teacher_photo');
		$teacher_age = get_field('teacher_age');
		$teacher_zodiac = get_field('teacher_zodiac');
		$teacher_schooling = get_field('teacher_schooling');
		$teacher_hobbies = get_field('teacher_hobbies');
		$teacher_book = get_field('teacher_book');
		$teacher_movie = get_field('teacher_movie');
		$teacher_actor = get_field('teacher_actor');
		$teacher_artwork = get_field('teacher_artwork');
		$teacher_country = get_field('teacher_country');
		$teacher_bio = get_field('teacher_bio');
		$teacher_instagram_account = get_field('teacher_instagram_account');
		$teacher_instagram_url = get_field('teacher_instagram_url');
		$teacher_facebook = get_field('teacher_facebook');
		$teacher_facebook_url = get_field('teacher_facebook:_url');
		$teacher_twitter = get_field('teacher_twitter');
		$teacher_twitter = get_field('teacher_twitter_url');
		$teacher_videos = get_field('teacher_videos');
		?>

		<a <?php if($teacher_position) {echo 'id="' . $teacher_position . '"';} ?> 
		href="<?php echo the_permalink(); ?>">
			<div class="maestro-item-img" style="background-image: url('<?php echo $teacher_photo; ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
			</div>
			<div class="maestro-item-content">
				<h5 class="maestro-item-title"><?php echo $teacher_name; ?></h5>
				<p class="maestro-item-text"><?php echo $teacher_subject; ?></p>
			</div>
		</a>

		<?php endwhile;
		wp_reset_query(); ?>
	</div>

</section><?php /* end category grid */ ?>

<script type="text/javascript">

	var main = document.getElementById( 'maestros-container' );

	[].map.call( main.children, Object ).sort( function ( a, b ) {
	    return +a.id.match( /\d+/ ) - +b.id.match( /\d+/ );
	}).forEach( function ( elem ) {
	    main.appendChild( elem );
	});
	
</script>