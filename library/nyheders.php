<?php
add_action( 'init', 'create_custom_nyheder_post_type' );
/**
 * Register a nyheder post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_nyheder_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Nyheders', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'nyheder', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Nyheders', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'nyheder', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'nyheder', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New nyheder', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New nyheder', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit nyheder', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View nyheder', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All nyheders', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search nyheders', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent nyheders:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No nyheders found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No nyheders found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'nyheders' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' )
 );

 register_post_type( 'nyheder', $args );
}


