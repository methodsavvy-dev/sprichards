<div class="big-panel-b block <?php echo isset($block['className']) ? $block['className'] : ''; ?>">
	<div class="container">
		<div class="big-panel-b__inner" data-reverse="<?php echo get_field('flip_content_on_desktop'); ?>">
			<div class="big-panel-b__image">
				<?php if ( get_field('block_image') ) : ?>
					<img src="<?php echo get_field('block_image')['url']; ?>" alt="<?php echo get_field('block_image')['alt']; ?>">
				<?php endif; ?>	
			</div>

			<div class="big-panel-b__content">
				<?php if (get_field('block_title')) : ?>
					<h2 class="big-panel-b__title section-title with-red-line">
						<?php the_field('block_title'); ?>
					</h2>
				<?php endif; ?>

				<?php if (get_field('block_content')) : ?>
					<div class="big-panel-b__text">
						<?php the_field('block_content'); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>