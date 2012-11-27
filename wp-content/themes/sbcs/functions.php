<?php

/** START function will remove the parent filter  */
add_action( 'after_setup_theme', 'child_remove_filters' );

if ( !function_exists( 'child_remove_filters' ) ):
	function child_remove_filters() 
	{
		remove_filter( 'wp_page_menu_args', 'twentyeleven_page_menu_args' );
	}
endif;
/** END function will remove the parent filter  */

?>
