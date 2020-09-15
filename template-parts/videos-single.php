<?php 

$title_main = get_field('title_main');
$desc_main = get_field('desc_main');

if($title_main) {
	echo '<h1 class="video-title-main">' . $title_main . '</h1>';
	echo '<div class="video-desc-main">' . $desc_main . '</div>';
}

for( $i = 0; $i < 3; $i++) {

	$num = $i +1;
	$title = get_field('title_video_' . $num);
	$desc = get_field('video_desc_' . $num);
	$video = get_field('video_embed_' . $num);

	if($video) {
		echo '<div class="video-wrapper">';
		echo '<h3 class="video-title">' . $title . '</h3>';
		if( $desc ) { echo '<div class="video-desc">' . $desc . '</div>'; }
		echo '<div class="video-embed">' . $video . '</div>';
		echo '</div>';
	}

}
?>