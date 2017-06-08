<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
/**
 * Register widget areas
 */
if ( ! function_exists( 'ast_sidebar_widgets' ) ) {
	add_action( 'widgets_init', 'ast_sidebar_widgets' );
	function ast_sidebar_widgets() {
		register_sidebar( array(
			'id'            => 'sidebar-widgets',
			'name'          => __( 'Sidebar widgets', 'art-starter-theme' ),
			'description'   => __( 'Drag widgets to this sidebar container.', 'art-starter-theme' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<div>',
			'after_title'   => '</div>',
		) );
		register_sidebar( array(
			'id'            => 'footer-widgets',
			'name'          => __( 'Footer widgets', 'art-starter-theme' ),
			'description'   => __( 'Drag widgets to this footer container', 'art-starter-theme' ),
			'before_widget' => '<aside id="%1$s" class="large-4 columns widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<div>',
			'after_title'   => '</div>',
		) );
	}
}