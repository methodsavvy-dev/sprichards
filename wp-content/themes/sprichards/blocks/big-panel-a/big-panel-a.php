<div class="big-panel-a block <?php echo isset($block['className']) ? $block['className'] : ''; ?>" style="background-color: <?php echo get_field('block_background_color') ?: "#E6E7E8"; ?>">
	<div class="container-wide">
		<div class="big-panel-a__inner" data-reverse="<?php echo get_field('flip_content_on_desktop'); ?>">
			<div class="big-panel-a__image"
			<?php if (get_field('block_image')) : ?>
				style="background-image: url(<?php echo get_field('block_image')['url'] ?>)"
			<?php endif; ?>
			></div>

			<div class="big-panel-a__content">
				<div class="big-panel-a__content-container">
					<?php if (get_field('block_title')) : ?>
						<h2 class="big-panel-a__title">
							<?php the_field('block_title'); ?>
						</h2>
					<?php endif; ?>

					<?php if (get_field('block_content')) : ?>
						<div class="big-panel-a__text">
							<?php the_field('block_content'); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>