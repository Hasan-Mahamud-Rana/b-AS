<?php
add_action( 'init', 'create_custom_blog_post_type' );
/**
 * Register a Blog post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_blog_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Blogs', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'Blog', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Blogs', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'Blog', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'Blog', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New Blog', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New Blog', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit Blog', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View Blog', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All Blogs', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search Blog', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent Blog:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No Blog found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No Blog found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'blog' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
 
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' )
 );

 register_post_type( 'blog', $args );
}


