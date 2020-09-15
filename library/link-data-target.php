<?php 
add_filter( 'nav_menu_link_attributes', 'blablarte_contact_menu_atts', 10, 3 );
function blablarte_contact_menu_atts( $atts, $item, $args )
{
  // The ID of the target menu item
  $menu_target = 616;

  // inspect $item
  if ($item->ID == $menu_target) {
    $atts['data-target'] = 'dropdown1';
    $atts['class'] = 'dropdown-trigger';
  }
  return $atts;
}
?>