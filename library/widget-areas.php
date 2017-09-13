<?php
if ( ! function_exists( 'bordingweb_sidebar_widgets' ) ) :
function bordingweb_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'bordingweb' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'bordingweb' ),
	  'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
	  'after_widget' => '</div></article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'bordingweb_sidebar_widgets' );
endif;
?>
