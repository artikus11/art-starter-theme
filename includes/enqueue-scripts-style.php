<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
/**
 * Enqueue all styles
 */
if ( ! function_exists( 'ast_scripts' ) ) {
	add_action( 'wp_enqueue_scripts', 'ast_scripts' );
	function ast_scripts() {
		wp_enqueue_script( 'magnific-popup', get_template_directory_uri() .
		                                     '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), null, true );
		wp_enqueue_script( 'owl-script', get_template_directory_uri() .
		                                 '/assets/js/owl.carousel.min.js', array( 'jquery' ), null, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
/**
 * Enqueue all scripts
 */
if ( ! function_exists( 'ast_styles' ) ) {
	add_action( 'wp_enqueue_scripts', 'ast_styles' );
	function ast_styles() {
		wp_enqueue_style( 'ast-style', get_stylesheet_uri() );
		wp_enqueue_style( 'magnific-css', get_template_directory_uri() .
		                             '/assets/css/magnific-popup.css', array(), null, 'all' );
		wp_enqueue_style( 'owl-css', get_template_directory_uri() .
		                             '/assets/css/owl.carousel.min.css', array(), null, 'all' );
	}
}