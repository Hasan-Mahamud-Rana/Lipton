<?php
/*
Author: Hasan Mahamud Rana
URL: rana_imagine@yahoo.com
*/

// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walkers
require_once('library/menu-walker.php');
require_once('library/offcanvas-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

// Add slider
require_once('library/slider.php');

// Add single
require_once('library/single.php');

function register_footer_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}

//User role
add_action( 'init', 'register_footer_menu' );
$user = new WP_User( '2' );
$user->remove_cap( 'edit_others_pages' );
$user->add_cap( 'unfiltered_html' );

//User Redirect for Subscriber
function my_login_redirect( $url, $request, $user ){
    if( $user && is_object( $user ) && is_a( $user, 'WP_User' ) ) {
        if( $user->has_cap( 'subscriber' ) ) {
            $url = 'http://www.enkopstorforskel.dk/wp-admin/post.php?post=4&action=edit';
        } 
    }
    return $url;

}
add_filter('login_redirect', 'my_login_redirect', 10, 3 );
// Editor tiny-mice
function override_mce_options($initArray) {
    $opts = '*[*]';
    $initArray['valid_elements'] = $opts;
    $initArray['extended_valid_elements'] = $opts;
    return $initArray;
}

add_filter('tiny_mce_before_init', 'override_mce_options');
