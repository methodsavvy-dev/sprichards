<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sprichards
 */

?>

<?php if (is_active_sidebar('pre-footer')) {
	dynamic_sidebar('pre-footer');
} ?>

<?php if (is_active_sidebar('footer-area-a') || is_active_sidebar('footer-area-b') || is_active_sidebar('footer-area-c')) { ?>
	<footer id="colophon" class="site-footer">
		<div class="footer-widget-area container">
			<?php dynamic_sidebar('footer-area-a') ?>
			<?php dynamic_sidebar('footer-area-b') ?>
			<?php dynamic_sidebar('footer-area-c') ?>
		</div>
	</footer><!-- #colophon -->
<?php } ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
