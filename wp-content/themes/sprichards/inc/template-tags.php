<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package sprichards
 */

if (!function_exists('sprichards_posted_on')) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function sprichards_posted_on()
	{
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if (get_the_time('U') !== get_the_modified_time('U')) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr(get_the_date(DATE_W3C)),
			esc_html(get_the_date()),
			esc_attr(get_the_modified_date(DATE_W3C)),
			esc_html(get_the_modified_date())
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x('%s', 'post date', 'sprichards'),
			'<a href="' . esc_url(get_permalink()) . '" rel="bookmark">
			<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M2.3999 0.399902C1.86947 0.399902 1.36076 0.610616 0.985689 0.985689C0.610616 1.36076 0.399902 1.86947 0.399902 2.3999V2.7999H11.5999V2.3999C11.5999 1.86947 11.3892 1.36076 11.0141 0.985689C10.639 0.610616 10.1303 0.399902 9.5999 0.399902H2.3999ZM11.5999 3.5999H0.399902V9.5999C0.399902 10.1303 0.610616 10.639 0.985689 11.0141C1.36076 11.3892 1.86947 11.5999 2.3999 11.5999H9.5999C10.1303 11.5999 10.639 11.3892 11.0141 11.0141C11.3892 10.639 11.5999 10.1303 11.5999 9.5999V3.5999ZM4.3999 5.9999C4.3999 6.21208 4.31562 6.41556 4.16559 6.56559C4.01556 6.71562 3.81208 6.7999 3.5999 6.7999C3.38773 6.7999 3.18425 6.71562 3.03422 6.56559C2.88419 6.41556 2.7999 6.21208 2.7999 5.9999C2.7999 5.78773 2.88419 5.58425 3.03422 5.43422C3.18425 5.28419 3.38773 5.1999 3.5999 5.1999C3.81208 5.1999 4.01556 5.28419 4.16559 5.43422C4.31562 5.58425 4.3999 5.78773 4.3999 5.9999V5.9999ZM3.5999 9.1999C3.38773 9.1999 3.18425 9.11562 3.03422 8.96559C2.88419 8.81556 2.7999 8.61208 2.7999 8.3999C2.7999 8.18773 2.88419 7.98425 3.03422 7.83422C3.18425 7.68419 3.38773 7.5999 3.5999 7.5999C3.81208 7.5999 4.01556 7.68419 4.16559 7.83422C4.31562 7.98425 4.3999 8.18773 4.3999 8.3999C4.3999 8.61208 4.31562 8.81556 4.16559 8.96559C4.01556 9.11562 3.81208 9.1999 3.5999 9.1999ZM6.7999 5.9999C6.7999 6.21208 6.71562 6.41556 6.56559 6.56559C6.41556 6.71562 6.21208 6.7999 5.9999 6.7999C5.78773 6.7999 5.58425 6.71562 5.43422 6.56559C5.28419 6.41556 5.1999 6.21208 5.1999 5.9999C5.1999 5.78773 5.28419 5.58425 5.43422 5.43422C5.58425 5.28419 5.78773 5.1999 5.9999 5.1999C6.21208 5.1999 6.41556 5.28419 6.56559 5.43422C6.71562 5.58425 6.7999 5.78773 6.7999 5.9999V5.9999ZM5.9999 9.1999C5.78773 9.1999 5.58425 9.11562 5.43422 8.96559C5.28419 8.81556 5.1999 8.61208 5.1999 8.3999C5.1999 8.18773 5.28419 7.98425 5.43422 7.83422C5.58425 7.68419 5.78773 7.5999 5.9999 7.5999C6.21208 7.5999 6.41556 7.68419 6.56559 7.83422C6.71562 7.98425 6.7999 8.18773 6.7999 8.3999C6.7999 8.61208 6.71562 8.81556 6.56559 8.96559C6.41556 9.11562 6.21208 9.1999 5.9999 9.1999ZM9.1999 5.9999C9.1999 6.21208 9.11562 6.41556 8.96559 6.56559C8.81556 6.71562 8.61208 6.7999 8.3999 6.7999C8.18773 6.7999 7.98425 6.71562 7.83422 6.56559C7.68419 6.41556 7.5999 6.21208 7.5999 5.9999C7.5999 5.78773 7.68419 5.58425 7.83422 5.43422C7.98425 5.28419 8.18773 5.1999 8.3999 5.1999C8.61208 5.1999 8.81556 5.28419 8.96559 5.43422C9.11562 5.58425 9.1999 5.78773 9.1999 5.9999V5.9999Z" fill="#85868A"/>
			</svg>
			' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if (!function_exists('sprichards_posted_by')) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function sprichards_posted_by()
	{
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x('%s', 'post author', 'sprichards'),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
		);

		echo '<span class="byline">
		<svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M5.9999 0.600098C5.15121 0.600098 4.33728 0.93724 3.73716 1.53736C3.13704 2.13747 2.7999 2.9514 2.7999 3.8001C2.7999 4.64879 3.13704 5.46272 3.73716 6.06284C4.33728 6.66296 5.15121 7.0001 5.9999 7.0001C6.8486 7.0001 7.66253 6.66296 8.26264 6.06284C8.86276 5.46272 9.1999 4.64879 9.1999 3.8001C9.1999 2.9514 8.86276 2.13747 8.26264 1.53736C7.66253 0.93724 6.8486 0.600098 5.9999 0.600098ZM2.0071 7.8001C1.79641 7.79925 1.58763 7.84001 1.39272 7.92003C1.19782 8.00005 1.02063 8.11776 0.87131 8.26641C0.721994 8.41506 0.60349 8.59172 0.522595 8.78626C0.441701 8.98081 0.400006 9.1894 0.399902 9.4001C0.399902 10.7529 1.0663 11.7729 2.1079 12.4377C3.1335 13.0913 4.5159 13.4001 5.9999 13.4001C7.4839 13.4001 8.8663 13.0913 9.8919 12.4377C10.9335 11.7737 11.5999 10.7521 11.5999 9.4001C11.5999 8.97575 11.4313 8.56878 11.1313 8.26873C10.8312 7.96867 10.4242 7.8001 9.9999 7.8001H2.0071Z" fill="#85868A"/>
		</svg>
		' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if (!function_exists('sprichards_entry_footer')) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function sprichards_entry_footer()
	{
		// Hide category and tag text for pages.
		if ('post' === get_post_type()) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list(esc_html__(', ', 'sprichards'));
			if ($categories_list) {
				/* translators: 1: list of categories. */
				printf('<span class="cat-links">' . esc_html__('Posted in %1$s', 'sprichards') . '</span>', $categories_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list('', esc_html_x(' ', 'list item separator', 'sprichards'));
			if ($tags_list) {
				/* translators: 1: list of tags. */
				printf('<span class="tags-links">' . esc_html__('Tags: %1$s', 'sprichards') . '</span>', $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'sprichards'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Edit <span class="screen-reader-text">%s</span>', 'sprichards'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if (!function_exists('sprichards_post_thumbnail')) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function sprichards_post_thumbnail()
	{
		if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
			return;
		}

		if (is_singular()) :
?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
				the_post_thumbnail(
					'post-thumbnail',
					array(
						'alt' => the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)
				);
				?>
			</a>

		<?php
		endif; // End is_singular().
	}
endif;

if (!function_exists('sprichards_body_open')) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function sprichards_body_open()
	{
		do_action('sprichards_body_open');
	}
endif;

if (!function_exists('sprichards_post_read_more')) :
	/**
	 * Displays an optional post read more.
	 *
	 * Wraps the post read more in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function sprichards_post_read_more()
	{
		if (!is_singular()) :
		?>

			<div class="post-read-more">
				<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More 
					<span>
						<svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14 4.25014C14.0002 4.13735 13.9754 4.02592 13.9273 3.92389C13.8792 3.82186 13.8091 3.73178 13.722 3.66014L10.776 0.720137C10.6354 0.579686 10.4448 0.500796 10.246 0.500796C10.0472 0.500796 9.85662 0.579686 9.716 0.720137C9.64652 0.789598 9.5914 0.872068 9.55379 0.962834C9.51619 1.0536 9.49683 1.15089 9.49683 1.24914C9.49683 1.34738 9.51619 1.44467 9.55379 1.53544C9.5914 1.62621 9.64652 1.70867 9.716 1.77814L11.434 3.50014L0.75 3.50014C0.551087 3.50014 0.360322 3.57915 0.21967 3.71981C0.0790174 3.86046 -1.72649e-07 4.05122 -1.63954e-07 4.25014C-1.5526e-07 4.44905 0.0790174 4.63981 0.21967 4.78047C0.360322 4.92112 0.551087 5.00014 0.75 5.00014L11.444 5.00014L9.711 6.72214C9.64137 6.79162 9.58612 6.87415 9.54843 6.96501C9.51073 7.05587 9.49133 7.15327 9.49133 7.25164C9.49133 7.35 9.51073 7.44741 9.54843 7.53827C9.58612 7.62912 9.64137 7.71166 9.711 7.78114C9.78065 7.85083 9.86335 7.90612 9.95438 7.94384C10.0454 7.98156 10.143 8.00098 10.2415 8.00098C10.34 8.00098 10.4376 7.98156 10.5286 7.94384C10.6196 7.90612 10.7023 7.85083 10.772 7.78114L13.78 4.77714C13.8502 4.70859 13.9059 4.62659 13.9437 4.53604C13.9815 4.44549 14.0006 4.34826 14 4.25014Z" fill="#D51F26" />
						</svg>
					</span>
				</a>
			</div><!-- .post-read-more -->
<?php
		endif; // End !is_singular().
	}
endif;
