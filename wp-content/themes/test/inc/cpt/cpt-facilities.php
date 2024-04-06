<?php 
function my_custom_facilities() {
  $labels = array(
    'name'               => _x( 'Facilities', 'post type general name' ),
    'singular_name'      => _x( 'Facilities', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Facilities' ),
    'add_new_item'       => __( 'Add New Facilities' ),
    'edit_item'          => __( 'Edit Facilities' ),
    'new_item'           => __( 'New Facilities' ),
    'all_items'          => __( 'All Facilities' ),
    'view_item'          => __( 'View Facilities' ),
    'search_items'       => __( 'Search Facilities' ),
    'not_found'          => __( 'No Facilities found' ),
    'not_found_in_trash' => __( 'No Facilities found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Facilities'
);

$args = array(
    'labels'        => $labels,
    'description'   => 'Facilities',
    'public'        => true,
    'show_ui'        => true,
    'show_in_rest' => true,
    'capability_type'  => 'post',
    'menu_position' => 4,
    'menu_icon' => 'dashicons-unlock',
    'supports'      => array( 'title' , 'thumbnail', 'editor', 'page-attributes'),
    'has_archive'   => true,
    'rewrite' => array('slug' => 'facilities','with_front' => false),
);   

register_post_type( 'facilities', $args );   
}
add_action( 'init', 'my_custom_facilities' );

add_action( 'init', 'create_facilities_type_hierarchical_taxonomy', 0 );
  
function create_facilities_type_hierarchical_taxonomy() {

  $labels = array(
    'name' => _x( 'Facilities Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Facilities Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Facilities Type' ),
    'all_items' => __( 'All Facilities Type' ),
    'parent_item' => __( 'Parent Facilities Type' ),
    'parent_item_colon' => __( 'Parent Facilities Type:' ),
    'edit_item' => __( 'Edit Facilities Type' ), 
    'update_item' => __( 'Update Facilities Type' ),
    'add_new_item' => __( 'Add New Facilities Type' ),
    'new_item_name' => __( 'New Facilities Type Name' ),
    'menu_name' => __( 'Facilities Type' ),
  );    
  
// Now register the taxonomy
  register_taxonomy('facilities-type',array('facilities'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'facilities-type' ),
  ));
  
}

?>