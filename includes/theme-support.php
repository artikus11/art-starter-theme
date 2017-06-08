<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! function_exists( 'ast_theme_support' ) ) :
	add_action( 'after_setup_theme', 'ast_theme_support' );
	function ast_theme_support() {
		load_theme_textdomain( 'art-starter-theme', get_template_directory() . '/languages' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'menus' );
		// Let WordPress manage the document title
		add_theme_support( 'title-tag' );
		// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
		add_theme_support( 'post-thumbnails' );
		// RSS thingy
		add_theme_support( 'automatic-feed-links' );
		// Woocommerce support
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
		// Add foundation.css as editor style https://codex.wordpress.org/Editor_Style
		add_editor_style( 'assets/stylesheets/editor.css' );
	}
endif;