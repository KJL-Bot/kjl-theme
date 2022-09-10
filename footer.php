<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KJL_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php if ( is_active_sidebar( 'footer_center' ) ) { ?>
			<div id="footer_center" class="footer_center widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer_center' ); ?>
			</div><!-- #primary-sidebar -->
			<?php } ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
