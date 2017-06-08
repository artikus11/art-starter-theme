<?php
/** Add theme support */
require_once( 'includes/theme-support.php' );
/** Enqueue scripts */
require_once( 'includes/enqueue-scripts-style.php' );
/** Various clean up functions */
require_once( 'includes/cleanup.php' );
/** Return entry meta information for posts */
require_once( 'includes/meta-data.php' );
/** Create widget areas in sidebar and footer */
require_once( 'includes/widget-areas.php' );
/** Return entry meta information for posts */
require_once( 'includes/entry-meta.php' );

/** Add Carbon Fields */
require_once( 'includes/carbon-fields/carbon-fields-plugin.php' );


add_action('carbon_register_fields', 'ast_register_custom_fields');
function ast_register_custom_fields() {
	include_once(dirname(__FILE__) . '/includes/custom-fields/post-meta.php');
	include_once(dirname(__FILE__) . '/includes/custom-fields/theme-options.php');
}