<?php
/**
 * Theme functions and definitions
 *
 * @package watbbase
 */

// Constants
	define('DEV', true);

// Setup
	// Init
	require get_template_directory() . '/libraries/init.php';

	// Theme Functions
	require get_template_directory() . '/libraries/theme-functions.php';

	// Helper Functions
	require get_template_directory() . '/libraries/theme-helpers.php';

// Miscellaneous
	// Define custom post type capabilities for use with Members
	function grd_add_post_type_caps() {
		// grd_add_capabilities( 'post_type_name' );
	}
	add_action( 'admin_init', 'grd_add_post_type_caps' );
