<?php 
function my_custom_banner() {
  $labels = array(
    'name'               => _x( 'Banner', 'post type general name' ),
    'singular_name'      => _x( 'Banner', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Banner' ),
    'add_new_item'       => __( 'Add New Banner' ),
    'edit_item'          => __( 'Edit Banner' ),
    'new_item'           => __( 'New Banner' ),
    'all_items'          => __( 'All Banner' ),
    'view_item'          => __( 'View Banner' ),
    'search_items'       => __( 'Search Banner' ),
    'not_found'          => __( 'No Banner found' ),
    'not_found_in_trash' => __( 'No Banner found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Banner'
);

$args = array(
    'labels'        => $labels,
    'description'   => 'Banner',
    'public'        => true,
    'show_ui'        => true,
    'show_in_rest' => true,
    'capability_type'  => 'post',
    'menu_position' => 4,
    'menu_icon' => 'dashicons-images-alt2',
    'supports'      => array( 'title' , 'thumbnail', 'editor', 'page-attributes'),
    'has_archive'   => true,
    'rewrite' => array('slug' => 'banner','with_front' => false),
);   

register_post_type( 'banner', $args );   
}
add_action( 'init', 'my_custom_banner' );

add_action( 'init', 'create_banner_hierarchical_taxonomy', 0 );
  
function create_banner_hierarchical_taxonomy() {

  $labels = array(
    'name' => _x( 'Banner Page', 'taxonomy general name' ),
    'singular_name' => _x( 'Banner Page', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Banner Page' ),
    'all_items' => __( 'All Banner Page' ),
    'parent_item' => __( 'Parent Banner Page' ),
    'parent_item_colon' => __( 'Parent Banner Page:' ),
    'edit_item' => __( 'Edit Banner Page' ), 
    'update_item' => __( 'Update Banner Page' ),
    'add_new_item' => __( 'Add New Banner Page' ),
    'new_item_name' => __( 'New Banner Page Name' ),
    'menu_name' => __( 'Banner Page' ),
  );    
  
// Now register the taxonomy
  register_taxonomy('banner-page',array('banner'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'banner-page' ),
  ));
  
}

?>