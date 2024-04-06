<?php 
function my_custom_services() {
  $labels = array(
    'name'               => _x( 'Services', 'post type general name' ),
    'singular_name'      => _x( 'Services', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Services' ),
    'add_new_item'       => __( 'Add New Services' ),
    'edit_item'          => __( 'Edit Services' ),
    'new_item'           => __( 'New Services' ),
    'all_items'          => __( 'All Services' ),
    'view_item'          => __( 'View Services' ),
    'search_items'       => __( 'Search Services' ),
    'not_found'          => __( 'No Services found' ),
    'not_found_in_trash' => __( 'No Services found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Services'
);

$args = array(
    'labels'        => $labels,
    'description'   => 'Services',
    'public'        => true,
    'show_ui'        => true,
    'show_in_rest' => true,
    'capability_type'  => 'post',
    'menu_position' => 4,
    'menu_icon' => 'dashicons-networking',
    'supports'      => array( 'title' , 'thumbnail', 'editor', 'page-attributes'),
    'has_archive'   => true,
    'rewrite' => array('slug' => 'services','with_front' => false),
);   

register_post_type( 'services', $args );   
}
add_action( 'init', 'my_custom_services' );

add_action( 'init', 'create_facilities_type_hierarchical_taxonomy', 0 );
  
function create_services_type_hierarchical_taxonomy() {

  $labels = array(
    'name' => _x( 'Services Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Services Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Services Type' ),
    'all_items' => __( 'All Services Type' ),
    'parent_item' => __( 'Parent Services Type' ),
    'parent_item_colon' => __( 'Parent Services Type:' ),
    'edit_item' => __( 'Edit Services Type' ), 
    'update_item' => __( 'Update Services Type' ),
    'add_new_item' => __( 'Add New Services Type' ),
    'new_item_name' => __( 'New Services Type Name' ),
    'menu_name' => __( 'Services Type' ),
  );    
  
// Now register the taxonomy
  register_taxonomy('services-type',array('services'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'services-type' ),
  ));
  
}

?>