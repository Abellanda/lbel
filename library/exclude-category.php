<?php
/** exclude category on demand ID 38 from blog  */
function exclude_category_home( $query ) {
if ( $query->is_home ) {
$query->set( 'cat', '-38' );
}
return $query;
}
 
add_filter( 'pre_get_posts', 'exclude_category_home' );
?>