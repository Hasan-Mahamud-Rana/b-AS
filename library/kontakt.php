<?php
add_action( 'init', 'create_custom_kontakt_partner_post_type' );
add_action( 'init', 'create_kontakt_taxonomies', 0 );
function create_kontakt_taxonomies() {
    register_taxonomy(
        'kontakt_partner_catagory',
        'kontakt-partners',
        array(
            'labels' => array(
                'name' => 'Kontakt partner catagories',
                'add_new_item' => 'Add New Kontakt Partner Catagory',
                'new_item_name' => "New Kontakt Partner Catagory"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'show_admin_column' => true,
          'rewrite' => array( 'hierarchical' => true, 'with_front' => false ),
        )
    );
}
add_filter( 'post_class', 'custom_taxonomy_post_class', 10, 3 );
    if( !function_exists( 'custom_taxonomy_post_class' ) ) {
        function custom_taxonomy_post_class( $classes, $class, $ID ) {
            $taxonomy = 'kontakt_partner_catagory';
            $terms = get_the_terms( (int) $ID, $taxonomy );
            if( !empty( $terms ) ) {
                foreach( (array) $terms as $order => $term ) {
                    if( !in_array( $term->slug, $classes ) ) {
                        $classes[] = $term->slug;
                    }
                }
            }
            return $classes;
        }
    }
/**
 * Register a kontakt Partner post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_kontakt_partner_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Kontakt Partners', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'Kontakt Partner', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'All Kontakt Partners', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'Kontakt Partner', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'kontakt Partner', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New kontakt Partner', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New kontakt partner', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit kontakt partner', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View kontakt partner', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All kontakt partners', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search kontakt Partner', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent kontakt Partner:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No kontakt Partners found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No kontakt Partners found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'kontakt-partners' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => true,
  'taxonomy'           => 'kontakt_partner_catagory',
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' )
 );

 register_post_type( 'kontakt-partners', $args );
}