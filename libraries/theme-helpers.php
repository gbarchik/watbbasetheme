<?php
/**
 * Theme helpers
 *
 * @package watbbase
 */

// Add capabilities for a custom post type
function grd_add_capabilities( $posttype ) {
	$role = get_role( 'administrator' );

	$role->add_cap( 'edit_' . $posttype . 's' );
	$role->add_cap( 'edit_others_' . $posttype . 's' );
	$role->add_cap( 'publish_' . $posttype . 's' );
	$role->add_cap( 'read_private_' . $posttype . 's' );
	$role->add_cap( 'delete_' . $posttype . 's' );
	$role->add_cap( 'delete_private_' . $posttype . 's' );
	$role->add_cap( 'delete_published_' . $posttype . 's' );
	$role->add_cap( 'delete_others_' . $posttype . 's' );
	$role->add_cap( 'edit_private_' . $posttype . 's' );
	$role->add_cap( 'edit_published_' . $posttype . 's' );
}

// Check URL
function grd_check_url( $url ) {
	if( parse_url( $url, PHP_URL_SCHEME ) == null ) {
		$url = 'http://' . $url;
	}
	return $url;
}

// Referrer URL
function grd_get_referer_url() {
	$url = get_bloginfo( 'url' );

	$referrer = isset( $_SERVER['HTTP_REFERER'] ) ? $_SERVER['HTTP_REFERER'] : false;
	$request  = isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : false;

	if( $referrer && $request ) {
		if( strpos( $referrer, $url ) !== false && strpos( $referrer, $request ) === false ) {
			$url = $referrer;
		}
	}

	return $url;
}

// WP Menu Items
function grd_get_menu_items( $menu_name ) {

	$navs = get_nav_menu_locations();
	$items = array();

	if( $navs[$menu_name] ) :
		$menus = wp_get_nav_menu_items( $navs[$menu_name] );
		foreach( $menus as $menu ) {
			$item = array(
				'title'   => $menu->title,
				'url'     => $menu->url,
				'classes' => $menu->classes,
				'id'      => $menu->object_id
			);
			$items[] = $item;
		}
	endif;

	return $items;
}
