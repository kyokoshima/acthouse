<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Lovebirds
 * @since Lovebirds 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-info">
			<?php do_action( 'forever_credits' ); ?>
		<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'lovebirds' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'lovebirds' ), 'WordPress' ); ?></a>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'lovebirds' ), 'Lovebirds', '<a href="https://wordpress.com/themes/lovebirds" rel="designer">WordPress.com</a>' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>