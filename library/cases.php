<?php
add_action( 'init', 'create_custom_case_post_type' );
/**
 * Register a case post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_case_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Cases', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'case', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Cases', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'case', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'case', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New case', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New case', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit case', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View case', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All cases', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search cases', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent cases:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No cases found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No cases found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'case' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
 
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' )
 );

 register_post_type( 'case', $args );
}


