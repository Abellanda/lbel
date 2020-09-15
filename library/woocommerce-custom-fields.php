<?php
add_action( 'woocommerce_single_product_summary', 'teacher_teaches', 6 );
 
function teacher_teaches() {
	  $teacher = get_field('imparte');
	  //var_dump($teacher);
    if($teacher) {
				$title = $teacher->post_title;
				$url = $teacher->guid;
        echo '<div class="maestros-item-imparte">';
				echo '<p> Imparte: <a href="' . $url .'" target="_blank">' . $title . '</a></p>';
				echo '</div>';
    }
}
?>