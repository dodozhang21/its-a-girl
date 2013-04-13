<?php
/**
 * This contains the secondary widget areas.
 *
 * @package itsAGirl
 * @since itsAGirl 1.0.0
 */
?>


		<div id="tertiary" class="widget-area" role="complementary">
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			<?php else: ?>
				<?php _e( 'Please add widgets to your Secondary Sidebar to fill this area.', 'itsAGirl' ); ?>
			<?php endif; ?>
		</div><!-- #tertiary .aside -->