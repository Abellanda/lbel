<?php
$teacher_position = get_field('teacher_position');
$teacher_name = get_field('teacher_name');
$teacher_subject = get_field('teacher_subject');
$teacher_photo = get_field('teacher_photo');
$teacher_bio = get_field('teacher_bio');
$teacher_videos = get_field('teacher_videos');
?>

<?php 

/** get field social */
function field_data_social($url, $data) {
	$field_data = get_field($data);
	$field_url = get_field($url);
	$icon = '';
	if( strpos($field_url, 'instagram') !== false ){
		$icon = '<i class="fab fa-instagram" aria-hidden="true"></i>';
	} elseif( strpos($field_url, 'facebook' ) !== false) {
		$icon = '<i class="fab fa-facebook-square" aria-hidden="true"></i>';
	} elseif( strpos($field_url, 'twitter') !== false ) {
		$icon = '<i class="fab fa-twitter-square" aria-hidden="true"></i>';
	} else {
		$icon = '';
	}
	if($field_data) { echo '<a href="' . $field_url . '" target="_blank">' . $icon . ' <span>' . $field_data . '</span></a>'; }
}

/** get fields */
function field_data($title, $data) {
	$field = get_field($data);
	if($field) { echo '<p><strong>' . $title . ':</strong>' . ' ' . $field . '</p>'; }
} 

?>

<section id="maestros" class="single">

	<div id="maestros-container">

		<div class="row">
			<div class="col s12 m4 l4">

				<div class="maestro-item-photo" <?php echo 'style="background-image: url(' . $teacher_photo . '); background-position: center center; background-size: cover; background-repeat: no-repeat;"'; ?>>
				</div>
				<h5 class="maestro-item-title"><?php echo $teacher_name; ?></h5>
				<p class="maestro-item-text"><?php if ($teacher_subject) { echo $teacher_subject; } ?></p>

				<div class="maestro-item-social">
					<?php
					field_data_social('teacher_instagram_url', 'teacher_instagram_account');
					field_data_social('teacher_facebook_url', 'teacher_facebook');
					field_data_social('teacher_twitter_url', 'teacher_twitter');
					?>
				</div>

				<div class="maestro-item-data">
					<?php
					field_data('Edad', 'teacher_age');
					field_data('Signo', 'teacher_zodiac');
					field_data('Estudios', 'teacher_schooling');
					field_data('Hoobies', 'teacher_hobbies');
					field_data('Libro', 'teacher_book');
					field_data('Película', 'teacher_movie');
					field_data('Actor', 'teacher_actor');
					field_data('Obra de arte', 'teacher_artwork');
					field_data('País', 'teacher_country'); 
					?>
				</div>

			</div>

			<div class="col s12 m8 l8">
				<div class="maestros-item-subtitle"><h5>¿Quién soy?</h5></div>
				<div class="maestros-item-bio">
					<?php if($teacher_bio) { echo $teacher_bio; } ?>
				</div>

				<?php if($teacher_videos) { ?>
					<div class="maestros-item-subtitle"><h5>Mis clases</h5></div>
				<?php } ?>

				<div class="maestros-item-videos">
					<?php /** get in the object the title and the link */ ?>
					<?php if($teacher_videos) { 
						foreach ($teacher_videos as $key => $value) {
							$title = $value->post_title;
							$url = $value->guid;

              echo '<div class="maestros-item-video">';
							echo '<a href="' . $url .'" target="_blank">';
							echo '<img src="https://blablarte.com/wp-content/uploads/2020/08/blablarte-centro.png" alt="' . $title .'"/>';
							echo '<p>' . $title . '</p>';
							echo '</a>';
							echo '</div>';
						}
					} ?>

					<?php //var_dump($teacher_videos[0]); ?>

				</div>
			</div>
		</div>


	</div>

</section><?php /* end section */ ?>
