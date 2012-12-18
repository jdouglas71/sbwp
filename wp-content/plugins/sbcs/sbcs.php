<?php
/*
Plugin Name: SBCS
Plugin URI: http://www.douglasconsulting.net
Description: The St. Bernard's wordpress plugin.
Version: 0.6 Beta
Author: Jason Douglas
Author URI: http://www.douglasconsulting.net
License: GPL
*/

//SBCS Config File
require_once(dirname(__FILE__)."/config.php");

/** HOOKS **/

add_action('widgets_init', 'sbcs_widget_init');

/* Runs when Plugin is activated. */
register_activation_hook( __FILE__, 'sbcs_install' );

/* Runs on plugin deactivated. */
register_deactivation_hook( __FILE__, 'sbcs_uninstall' );

/** Admin Stuff **/
//add_action( 'admin_menu', 'sbcs_admin_menu' );

/**
 * Add our admin menu to the dashboard.
 */
function sbcs_admin_menu()
{
	add_options_page( 'SBCS', 'SBCS', 'administrator', 'sbcs', 'sbcs_admin_page');
}

/**
 * Show the admin page.
 */ 
function sbcs_admin_page()
{
	include( 'sbcs-admin.php' );
}

/**
 * Register our widget.
 */
function sbcs_widget_init()
{
	register_widget("SBCS_Info_Widget");
	register_widget("SBCS_HTML_Widget");
}

/** SHORTCODES **/

/** FUNCTIONS **/
/**
 * Installer function
 */
function sbcs_install()
{
}

/**
 * Uninstall Function.
 */
function sbcs_uninstall()
{
}

/**
 * Called on init of WordPress.
 */
function sbcs_init()
{
	if( !is_admin() )
	{
		//wp_enqueue_script('jquery');
		//wp_enqueue_script('timepicker', SBCS_CALLBACK_DIR.'/jquery-timepicker/jquery.timepicker.js');
		//wp_enqueue_script('timepicker-base', SBCS_CALLBACK_DIR.'/jquery-timepicker/lib/base.js');

		//wp_register_script( 'googlemaps', 'http://maps.googleapis.com/maps/api/js?key='.DCS_GOOGLE_API_KEY.'&sensor=false' );
		//wp_enqueue_script( 'googlemaps' );
	}
}

/**
 * Set up header for AJAX calls.
 */
function sbcs_js_header()
{
	wp_print_scripts( array('sack') );
	?>
	<script type='text/javascript'>
	</script>
	<?php
}

?>
