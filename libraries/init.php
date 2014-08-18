<?php
/**
 * Init setup
 *
 * @package watbbase
 */

	if( !function_exists( 'grd_theme_setup' ) ) :

		function grd_theme_setup() {
			
			// hide admin Bar
			show_admin_bar( false );
			
			// Languages - Allow theme translation
			load_theme_textdomain( 'watbbase', get_template_directory_uri() . '/languages' );
			
			// Clean up head
			remove_action( 'wp_head', 'rsd_link' );
			remove_action( 'wp_head', 'wlwmanifest_link' );
			remove_action( 'wp_head', 'wp_generator' );
			remove_action( 'wp_head', 'wp_shortlink_wp_head' );
			
			// RSS feed links to head
			add_theme_support( 'automatic-feed-links' );
			
			// Post Thumbnails
			add_theme_support( 'post-thumbnails' );
			
			// Image Sizes
			// add_image_size( $name, $width, $height, $crop );
			
			// Post formats support
			add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ));
			
			// Register Nav Menus
			register_nav_menus( array(
				'main_menu' => __( 'Menu Primário', 'watbbase' )
			));
			
			// Register Widget Areas
			// Function location: /libraries/theme-functions.php
			add_action( 'widgets_init', 'grd_widgets_init' );
			
			// Change admin menu order
			// Function location: /libraries/theme-functions.php
			add_filter( 'custom_menu_order', '__return_true' );
			add_filter( 'menu_order', 'grd_custom_menu_order' );
			
			// Change text from admin footer
			// Function location: /libraries/theme-functions.php
			add_filter( 'admin_footer_text', 'grd_footer_text' );
			
			// Add Editor Style
			add_editor_style();
			
			// Enqueue scripts
			// Function location: /libraries/theme-functions.php
			add_action( 'wp_enqueue_scripts', 'grd_scripts' );
			
		}

	endif; // grd_theme_setup
	add_action( 'after_setup_theme', 'grd_theme_setup' );