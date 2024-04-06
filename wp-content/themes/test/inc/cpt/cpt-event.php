<?php 
function my_custom_weddings_events() {
  $labels = array(
    'name'               => _x( 'Weddings & Events', 'post type general name' ),
    'singular_name'      => _x( 'Weddings & Events', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Weddings & Events' ),
    'add_new_item'       => __( 'Add New Weddings & Events' ),
    'edit_item'          => __( 'Edit Weddings & Events' ),
    'new_item'           => __( 'New Weddings & Events' ),
    'all_items'          => __( 'All Weddings & Events' ),
    'view_item'          => __( 'View Weddings & Events' ),
    'search_items'       => __( 'Search Weddings & Events' ),
    'not_found'          => __( 'No Weddings & Events found' ),
    'not_found_in_trash' => __( 'No Weddings & Events found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Weddings & Events'
);

$args = array(
    'labels'        => $labels,
    'description'   => 'Weddings & Events',
    'public'        => true,
    'show_ui'        => true,
    'show_in_rest' => true,
    'capability_type'  => 'post',
    'menu_position' => 5,
    'menu_icon' => 'dashicons-megaphone',
    'supports'      => array( 'title' , 'thumbnail', 'editor', 'page-attributes'),
    'has_archive'   => true,
    'rewrite' => array('slug' => 'weddings-events','with_front' => false),
);   

register_post_type( 'weddings-events', $args );   
}
add_action( 'init', 'my_custom_weddings_events' );

add_action( 'init', 'create_weddings_events_hierarchical_taxonomy', 0 );
  
function create_weddings_events_hierarchical_taxonomy() {

  $labels = array(
    'name' => _x( 'Event Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Event Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Event Type' ),
    'all_items' => __( 'All Event Type' ),
    'parent_item' => __( 'Parent Event Type' ),
    'parent_item_colon' => __( 'Parent Event Type:' ),
    'edit_item' => __( 'Edit Event Type' ), 
    'update_item' => __( 'Update Event Type' ),
    'add_new_item' => __( 'Add New Event Type' ),
    'new_item_name' => __( 'New Event Type Name' ),
    'menu_name' => __( 'Event Type' ),
  );    
  
// Now register the taxonomy
  register_taxonomy('event-type',array('weddings-events'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'event-type' ),
  ));
  
}

?>