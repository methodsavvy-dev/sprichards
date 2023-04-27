<div id="<?php echo get_field('anchor') ?>" class="big-panel-c block <?php echo isset($block['className']) ? $block['className'] : ''; ?>" style="background-color: <?php echo get_field('block_background_color') ?: "#fff"; ?>">
	<div class="container-wide">
		<div class="big-panel-c__inner" data-reverse="<?php echo get_field('flip_content'); ?>">
			<div class="big-panel-c__image">
				<?php if (get_field('block_image')) : ?>
					<img src="<?php echo get_field('block_image')['url'] ?>" alt="<?php echo get_field('block_image')['alt'] ?>">
				<?php endif; ?>
			</div>

			<div class="big-panel-c__content">
				<div class="big-panel-c__content-container">
					<?php if (get_field('block_title')) : ?>
						<h2 class="big-panel-c__title section-title with-red-line">
							<?php the_field('block_title'); ?>
						</h2>
					<?php endif; ?>

					<?php if (get_field('block_content')) : ?>
						<div class="big-panel-c__text">
							<?php the_field('block_content'); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>