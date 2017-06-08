<?php
/** Add theme support */
require get_template_directory() .'includes/theme-support.php';
/** Enqueue scripts */
require_once( 'includes/enqueue-scripts-style.php' );
/** Various clean up functions */
require_once( 'includes/cleanup.php' );
/** Return entry meta information for posts */
require_once( 'includes/meta-data.php' );
/** Create widget areas in sidebar and footer */
require_once( 'includes/widget-areas.php' );
/** Add register nav menu */
require_once( 'includes/navigation.php' );
/** Add Carbon Fields */
require_once( 'includes/carbon-fields/carbon-fields-plugin.php' );
add_action( 'carbon_register_fields', 'ast_register_custom_fields' );
function ast_register_custom_fields() {
	require get_template_directory() .'/includes/custom-fields/post-meta.php';
	require get_template_directory() . '/includes/custom-fields/theme-options.php';
}