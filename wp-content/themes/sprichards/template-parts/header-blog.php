<header class="block page-title-block page-title-blog" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bg-blog.webp);">
	<div class="container">
		<?php
		if (is_single()) :
		?>
			<h2 class="page-title-block__content">Blog</h2>
		<?php else : ?>
			<h1 class="page-title-block__content">Blog</h1>
		<?php endif; ?>
	</div>
</header>

<?php
if (is_single()) :
?>
	<div class="container blog-return">
		<a class="blog-tagline__text with-red-line-mobile-only" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
			<svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M-1.63954e-07 3.74986C-0.000214746 3.86265 0.0246103 3.97408 0.0726851 4.07611C0.12076 4.17814 0.190885 4.26822 0.278 4.33986L3.224 7.27986C3.36462 7.42031 3.55525 7.4992 3.754 7.4992C3.95275 7.4992 4.14338 7.42031 4.284 7.27986C4.35348 7.2104 4.4086 7.12793 4.44621 7.03716C4.48381 6.9464 4.50317 6.84911 4.50317 6.75086C4.50317 6.65261 4.48381 6.55533 4.44621 6.46456C4.4086 6.37379 4.35348 6.29132 4.284 6.22186L2.566 4.49986L13.25 4.49986C13.4489 4.49986 13.6397 4.42085 13.7803 4.28019C13.921 4.13954 14 3.94878 14 3.74986C14 3.55095 13.921 3.36019 13.7803 3.21953C13.6397 3.07888 13.4489 2.99986 13.25 2.99986L2.556 2.99986L4.289 1.27786C4.35863 1.20838 4.41388 1.12585 4.45157 1.03499C4.48927 0.944133 4.50867 0.84673 4.50867 0.748363C4.50867 0.649995 4.48927 0.552593 4.45157 0.461734C4.41388 0.370875 4.35863 0.288342 4.289 0.218863C4.21935 0.149168 4.13665 0.0938802 4.04562 0.0561591C3.9546 0.018438 3.85703 -0.000977006 3.7585 -0.00097701C3.65997 -0.000977014 3.5624 0.018438 3.47138 0.056159C3.38035 0.0938801 3.29765 0.149168 3.228 0.218863L0.219999 3.22286C0.149793 3.29141 0.0941275 3.37341 0.0563277 3.46396C0.0185278 3.5545 -0.000629585 3.65174 -1.63954e-07 3.74986Z" fill="#D51F26" />
			</svg>
			Back to blog
		</a>
	</div>
<?php endif; ?>

<div class="container blog-tagline">
	<h3 class="blog-tagline__text with-red-line-mobile-only">SPR updates & Industry News</h3>
</div>