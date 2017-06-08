<?php
if ( ! is_active_sidebar( 'sidebar-widgets' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
</div><!-- #secondary -->
