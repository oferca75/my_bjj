<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package cosimo
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area nano" role="complementary">
	<div class="nano-content"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
</div><!-- #secondary -->
