<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WestComfort
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://westcomfort.ru', 'westcomfort' ) ); ?>"><?php printf( esc_html__( '&copy; %s WestComfort - Private Building Company', 'westcomfort' ), date("Y") ); ?></a>
<!--			<span class="sep"> | </span>-->
			<?php // printf( esc_html__( 'Theme: %1$s by %2$s.', 'westcomfort' ), 'westcomfort', '<a href="http://alexrusin.com" rel="designer">Alex Rusin</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
