<?php

add_action( 'init', 'create_custom_job_post_type' );
/**
 * Register a job post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_job_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Jobs', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'job', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Jobs', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'job', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'job', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New job', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New job', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit job', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View job', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All jobs', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search jobs', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent jobs:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No jobs found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No jobs found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'job' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'taxonomies'       => array('category'),
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' )
 );

 register_post_type( 'job', $args );
}


