<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package itsAGirl
 * @since itsAGirl 1.0.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Oops! 404 Not Found', 'itsAGirl' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Well, this is awkward. Try a search?', 'itsAGirl' ); ?></p>

					<p><?php get_search_form(); ?></p>
					
					<hr />
						<?php the_widget( 'WP_Widget_Recent_Posts', '', 'before_title=<h2 class="widget-title">&after_title=</h2>' ); ?>
	
						<div class="widget">
							<h2 class="widget-title"><?php _e( 'Categories', 'itsAGirl' ); ?></h2>
							<ul>
							<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 15 ) ); ?>
							</ul>
						</div>
	
						<?php
						the_widget( 'WP_Widget_Archives', 'dropdown=1', 'before_title=<h2 class="widget-title">&after_title=</h2>' );
						?>
	
						<?php the_widget( 'WP_Widget_Tag_Cloud', '', 'before_title=<h2 class="widget-title">&after_title=</h2>' ); ?>

				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary .site-content -->

<?php get_footer(); ?>