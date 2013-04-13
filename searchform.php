<?php
/**
 * The template for displaying search forms in itsAGirl
 *
 * @package itsAGirl
 * @since itsAGirl 1.0.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'itsAGirl' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'itsAGirl' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'itsAGirl' ); ?>" />
	</form>
