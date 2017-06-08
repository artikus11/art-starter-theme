<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
/**
 * Clean up WordPress defaults
 */
if ( ! function_exists( 'ast_start_cleanup' ) ) {
	add_action( 'after_setup_theme', 'ast_start_cleanup' );
	function ast_start_cleanup() {
		// Launching operation cleanup.
		add_action( 'init', 'ast_cleanup_head' );
		// Remove WP version from RSS.
		add_filter( 'the_generator', 'ast_remove_rss_version' );
	}
}
/**
 * Clean up head.+
 * ----------------------------------------------------------------------------
 */
if ( ! function_exists( 'ast_cleanup_head' ) ) {
	function ast_cleanup_head() {
		// EditURI link.
		remove_action( 'wp_head', 'rsd_link' );
		// Category feed links.
		remove_action( 'wp_head', 'feed_links_extra', 3 );
		// Post and comment feed links.
		remove_action( 'wp_head', 'feed_links', 2 );
		// Windows Live Writer.
		remove_action( 'wp_head', 'wlwmanifest_link' );
		// Index link.
		remove_action( 'wp_head', 'index_rel_link' );
		// Previous link.
		remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
		// Start link.
		remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
		// Canonical.
		remove_action( 'wp_head', 'rel_canonical', 10, 0 );
		// Shortlink.
		remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
		// Links for adjacent posts.
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
		// WP version.
		remove_action( 'wp_head', 'wp_generator' );
		// Emoji detection script.
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		// Emoji styles.
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
	}
}
// Remove WP version from RSS.
if ( ! function_exists( 'ast_remove_rss_version' ) ) {
	function ast_remove_rss_version() {
		return '';
	}
}


