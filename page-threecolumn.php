<?php
/**
 * The template for displaying the Secondary Sidebar
 *
 * @package itsAGirl
 * @since itsAGirl 1.0.0
 * Template Name: Three Column
 */

get_header(); ?>

		<div id="primary" class="site-content">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_sidebar(); ?>
<?php get_sidebar('secondary'); ?>
<?php get_footer(); ?>