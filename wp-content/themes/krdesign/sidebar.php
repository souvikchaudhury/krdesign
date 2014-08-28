<?php
/**
 * The Sidebar containing the main widget area
 *
 *  @package WordPress
 *  @subpackage krdesign
 *  @since krdesign
 */
?>
<div id="secondary">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div><!-- #secondary -->
