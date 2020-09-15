<?php
// La función no será utilizada antes del 'init'.
add_action( 'init', 'slider_init' );
/* Here's how to create your customized labels */
function slider_init() {
  $labels = array(
  'name' => _x( 'Slider', 'post type general name' ),
        'singular_name' => _x( 'Slide', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevo', 'Slide' ),
        'add_new_item' => __( 'Añadir nuevo Slide' ),
        'edit_item' => __( 'Editar Slide' ),
        'new_item' => __( 'Nuevo Slide' ),
        'view_item' => __( 'Ver Slide' ),
        'search_items' => __( 'Buscar Slide' ),
        'not_found' =>  __( 'No se han encontrado sliders' ),
        'not_found_in_trash' => __( 'No se han encontrado sliders en la papelera' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
 
    register_post_type( 'slider', $args ); /* Registramos y a funcionar */
}

// La función no será utilizada antes del 'init'.
add_action( 'init', 'videos_init' );
/* Here's how to create your customized labels */
function videos_init() {
  $labels = array(
  'name' => _x( 'Videos', 'post type general name' ),
        'singular_name' => _x( 'Videos', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevo', 'Video' ),
        'add_new_item' => __( 'Añadir nuevo Video' ),
        'edit_item' => __( 'Editar Video' ),
        'new_item' => __( 'Nuevo Video' ),
        'view_item' => __( 'Ver Video' ),
        'search_items' => __( 'Buscar Video' ),
        'not_found' =>  __( 'No se han encontrado videos' ),
        'not_found_in_trash' => __( 'No se han encontrado videos en la papelera' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
 
    register_post_type( 'videos', $args ); /* Registramos y a funcionar */
}

?>