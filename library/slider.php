<?php
/**
 * Custom template tags for Twenty Fifteen
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage BordingWeb
 * @since BordingWeb 1.0
 */
add_action( 'init', 'create_custom_slider_post_type' );
/**
 * Register a Slide post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_slider_post_type() {

  /* Register our stylesheet. */
  $labels = array(
    'name'               => _x( 'Slides', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( 'Slide', 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( 'Slides', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( 'Slide', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New', 'Slide', 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New Slide', 'your-plugin-textdomain' ),
    'new_item'           => __( 'New Slide', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit Slide', 'your-plugin-textdomain' ),
    'view_item'          => __( 'View Slide', 'your-plugin-textdomain' ),
    'all_items'          => __( 'All Slides', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search Slides', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Slides:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'No Slides found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No Slides found in Trash.', 'your-plugin-textdomain' )
    );

$args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'slide' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt')
  );

register_post_type( 'slide', $args );
}