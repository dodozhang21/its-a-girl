<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package itsAGirl
 * @since itsAGirl 1.0.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'itsAGirl_credits' ); ?>
			<?php printf( __( 'Proudly powered by %1$s', 'itsAGirl' ), '<a href="http://wordpress.org/" title="A Semantic Personal Publishing Platform" rel="generator">WordPress</a> | ' ); ?>
			<?php printf( __( 'Theme %1$s by %2$s', 'itsAGirl' ), 'It\'s a Girl', '<a href="http://regretless.com/" rel="designer">Ying Zhang</a>' ); ?>
		</div><!-- .site-info -->
		
		<?php printf( __( '%1$s', 'itsAGirl' ), '<a id="top" href="#top">Back to top</a>' ); ?>	
	</footer><!-- .site-footer .site-footer -->
	<div class="footer-bottom"></div>
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>