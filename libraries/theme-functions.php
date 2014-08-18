<?php
/**
 * Theme functions
 *
 * @package watbbase
 */

// Register widgets
function grd_widgets_init() {
	// Example Sidebar
	/*register_sidebar( array(
		'name'          => __( 'Sidebar', 'watbbase' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>'
	));*/
}

// Change menu order
function grd_custom_menu_order( $menu_ord ) {
	if( !$menu_ord ) {
		return true;
	}
	
	return array(
		// 'index.php', // Dashboard
		// 'separator1', // First separator
		// 'edit.php?post_type=page', // Pages
		// 'edit.php', // Posts
		// 'upload.php', // Media
		// 'edit-comments.php', // Comments
		// 'separator2', // Second separator
		// 'themes.php', // Appearance
		// 'plugins.php', // Plugins
		// 'users.php', // Users
		// 'tools.php', // Tools
		// 'options-general.php', // Settings
		// 'separator-last', // Last separator
	);
}

// Change text from admin footer
function grd_footer_text() {
	echo '© Desenvolvido por <a href="http://granada.ag">Granada</a>';
}

// Enqueue scripts && styles
function grd_scripts() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	if( !is_admin() ) {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/scripts/plugins.min.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/scripts/main.min.js', array('jquery'), NULL, true );
	}
}