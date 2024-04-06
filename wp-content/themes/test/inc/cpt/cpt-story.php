<?php 
function my_custom_story() {
  $labels = array(
    'name'               => _x( 'Our Story', 'post type general name' ),
    'singular_name'      => _x( 'Our Story', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Our Story' ),
    'add_new_item'       => __( 'Add New Our Story' ),
    'edit_item'          => __( 'Edit Our Story' ),
    'new_item'           => __( 'New Our Story' ),
    'all_items'          => __( 'All Our Story' ),
    'view_item'          => __( 'View Our Story' ),
    'search_items'       => __( 'Search Our Story' ),
    'not_found'          => __( 'No Our Story found' ),
    'not_found_in_trash' => __( 'No Our Story found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Our Story'
);

$args = array(
    'labels'        => $labels,
    'description'   => 'Our Story',
    'public'        => true,
    'show_ui'        => true,
    'show_in_rest' => true,
    'capability_type'  => 'post',
    'menu_position' => 5,
    'menu_icon' => 'dashicons-media-document',
    'supports'      => array( 'title' , 'thumbnail', 'editor', 'page-attributes'),
    'has_archive'   => true,
    'rewrite' => array('slug' => 'our-story','with_front' => false),
);   

register_post_type( 'our-story', $args );   
}
add_action( 'init', 'my_custom_story' );

// add_action( 'init', 'create_facilities_type_hierarchical_taxonomy', 0 );
  
// function create_services_type_hierarchical_taxonomy() {

//   $labels = array(
//     'name' => _x( 'Services Type', 'taxonomy general name' ),
//     'singular_name' => _x( 'Services Type', 'taxonomy singular name' ),
//     'search_items' =>  __( 'Search Services Type' ),
//     'all_items' => __( 'All Services Type' ),
//     'parent_item' => __( 'Parent Services Type' ),
//     'parent_item_colon' => __( 'Parent Services Type:' ),
//     'edit_item' => __( 'Edit Services Type' ), 
//     'update_item' => __( 'Update Services Type' ),
//     'add_new_item' => __( 'Add New Services Type' ),
//     'new_item_name' => __( 'New Services Type Name' ),
//     'menu_name' => __( 'Services Type' ),
//   );    
  
// // Now register the taxonomy
//   register_taxonomy('services-type',array('services'), array(
//     'hierarchical' => true,
//     'labels' => $labels,
//     'show_ui' => true,
//     'show_in_rest' => true,
//     'show_admin_column' => true,
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'services-type' ),
//   ));
  
// }

?>