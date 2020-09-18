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
add_action( 'init', 'faqs_init' );
/* Here's how to create your customized labels */
function faqs_init() {
  $labels = array(
  'name' => _x( 'Faqs', 'post type general name' ),
        'singular_name' => _x( 'Faqs', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevo', 'Faq' ),
        'add_new_item' => __( 'Añadir nuevo Faq' ),
        'edit_item' => __( 'Editar Faq' ),
        'new_item' => __( 'Nuevo Faq' ),
        'view_item' => __( 'Ver Faq' ),
        'search_items' => __( 'Buscar Faq' ),
        'not_found' =>  __( 'No se han encontrado Faqs' ),
        'not_found_in_trash' => __( 'No se han encontrado Faqs en la papelera' ),
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
 
    register_post_type( 'faqs', $args ); /* Registramos y a funcionar */
}

?>