<?php
add_action( 'init', 'create_custom_koncern_post_type' );
/**
 * Register a koncern post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_koncern_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Koncerns', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'koncern', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Koncerns', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'koncern', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'koncern', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New koncern', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New koncern', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit koncern', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View koncern', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All koncerns', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search koncerns', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent koncerns:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No koncerns found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No koncerns found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'koncern' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'taxonomies'         => array('category'),
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' )
 );

 register_post_type( 'koncern', $args );
}


