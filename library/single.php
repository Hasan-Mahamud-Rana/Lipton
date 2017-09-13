<?php
/**
* Filter the single_template with our custom function
*/
// Add filter single
add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single/single-{$cat->slug}.php"; }
	return $the_template;' )
);
?>