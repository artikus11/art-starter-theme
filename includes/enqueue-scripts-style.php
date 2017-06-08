<?php
/**
 * Enqueue all styles
 */
if ( ! function_exists( 'ast_scripts' ) ) :
	add_action( 'wp_enqueue_scripts', 'ast_scripts' );
	function ast_scripts() {
		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

endif;
/**
 * Enqueue all scripts
 */
if ( ! function_exists( 'ast_styles' ) ) :
	add_action( 'wp_enqueue_scripts', 'ast_styles' );
	function ast_styles() {
		wp_enqueue_style( 'ast-style', get_stylesheet_uri() );
	}

endif;