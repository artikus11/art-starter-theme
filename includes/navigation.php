<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
/**
 * Register Menus
 */
register_nav_menus(array(
	'top-bar-r'  => 'Right Top Bar',
	'mobile-nav' => 'Mobile',
));
register_nav_menus( array(
	'primary'   => esc_html__( 'Primary Menu', 'art-starter-theme' ),
	'secondary' => esc_html__( 'Secondary Menu', 'art-starter-theme' ),
	'mobile'    => esc_html__( 'Mobile Menu', 'art-starter-theme' ),
) );


if ( ! function_exists( 'ast_primary_menu' ) ) {
	function ast_primary_menu() {
		wp_nav_menu( array(
			'container'      => 'nav',
			'menu_class'     => 'primary-menu',
			'theme_location' => 'primary',
			'depth'          => 3,
			'fallback_cb'     => '__return_empty_string',
		));
	}
}
if ( ! function_exists( 'ast_secondary_menu' ) ) {
	function ast_secondary_menu() {
		wp_nav_menu( array(
			'container'      => 'nav',
			'menu_class'     => 'secondary-menu',
			'theme_location' => 'secondary',
			'depth'          => 3,
			'fallback_cb'     => '__return_empty_string',
		));
	}
}
if ( ! function_exists( 'ast_mobile_menu' ) ) {
	function ast_mobile_menu() {
		wp_nav_menu( array(
			'container'      => 'nav',
			'menu_class'     => 'mobile-menu',
			'theme_location' => 'mobile',
			'depth'          => 3,
			'fallback_cb'     => '__return_empty_string',
		));
	}
}