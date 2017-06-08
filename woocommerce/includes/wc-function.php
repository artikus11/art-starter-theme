<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
//Хлебные крошки
if ( ! function_exists( 'ast_breadrumbs_yoast' ) ) {
	add_action( 'woocommerce_before_main_content', 'ast_breadrumbs_yoast', 10 );
	function ast_breadrumbs_yoast() {
		if ( is_product() || is_product_category() || is_shop() ) {
			if ( function_exists( 'yoast_breadcrumb' ) ) {
				$before      = '<div id="breadcrumbs">';
				$after       = '</div>';
				$breadcrumbs = yoast_breadcrumb( $before, $after, true );
				
				return $breadcrumbs;
			}
		}
	}
}