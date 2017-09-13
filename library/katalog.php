<?php
add_action( 'init', 'create_custom_katalog_post_type' );
/**
 * Register a katalog post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_katalog_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Kataloger', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'katalog', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Kataloger', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'katalog', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'katalog', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New katalog', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New katalog', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit katalog', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View katalog', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All katalogs', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search katalog', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent katalog:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No katalog found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No katalog found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'katalog' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'taxonomies'         => array('category', 'post_tag'),
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')
 );

 register_post_type( 'katalog', $args );
}


