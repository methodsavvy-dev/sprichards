<div class="is-layout-flow wp-block-group">
	<div class="wp-block-group__inner-container">
		<h2>Tags</h2>

		<ul class="wp-block-tags-list wp-block-tags">
			<?php

			$tags = get_tags(array('orderby' => 'count', 'order' => 'DESC', 'number' => 20));

			foreach ((array) $tags as $tag) {
				echo '<li><a href="' . get_tag_link($tag->term_id) . '" rel="tag">' . $tag->name . '</a></li>';
			}
			?>
		</ul>
	</div>
</div>