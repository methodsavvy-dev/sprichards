<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sprichards
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
	sprichards_post_thumbnail();
	
	if ('post' === get_post_type()) :
	?>
	<div class="entry-meta">
		<?php
		sprichards_posted_on();
		// sprichards_posted_by();
		?>
	</div><!-- .entry-meta -->
	<?php endif; ?>

	<header class="entry-header">
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if (is_singular()) :
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'sprichards'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);
		else :
			the_excerpt();
		endif;
		
		sprichards_post_read_more();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'sprichards'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php sprichards_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php
	if (is_singular()) :
		// echo do_shortcode("[yarpp template=\"yarpp-template-list\" post_type=\"post\" require_tax='{\"category\": 1, \"post_tag\": 0}']");
	endif;
	?>
</article><!-- #post-<?php the_ID(); ?> -->