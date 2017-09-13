<?php

if ( ! function_exists( 'bordingweb_theme_support' ) ) :
function bordingweb_theme_support() {
	// Add language support
	load_theme_textdomain( 'bordingweb', get_template_directory() . '/languages' );

	// Add menu support
	add_theme_support( 'menus' );

	// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size(150, 150, false);

	// rss thingy
	add_theme_support( 'automatic-feed-links' );

	// Add post formarts support: http://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );

 

}

add_action( 'after_setup_theme', 'bordingweb_theme_support' );
endif;
?>