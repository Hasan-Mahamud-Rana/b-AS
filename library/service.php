<?php
add_action( 'init', 'create_custom_service_post_type' );
/**
 * Register a service post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_service_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Services', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'service', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Services', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'service', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'service', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New service', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New service', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit service', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View service', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All services', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search services', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent services:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No services found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No services found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'service' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
 
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' )
 );

 register_post_type( 'service', $args );
}


