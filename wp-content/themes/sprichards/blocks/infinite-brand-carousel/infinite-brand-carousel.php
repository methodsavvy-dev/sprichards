<div class="infinite-brand-carousel-block block <?php echo isset($block['className']) ? $block['className'] : ''; ?>">
	<div class="container">
		<div class="infinite-brand-carousel-block__inner">
			<div class="infinite-brand-carousel-block__content">
				<?php if (get_field('title')) : ?>
					<h2 class="infinite-brand-carousel-block__title section-title with-red-line">
						<?php the_field('title'); ?>
					</h2>
				<?php endif; ?>

				<?php if (get_field('text')) : ?>
					<div class="infinite-brand-carousel-block__text">
						<?php the_field('text'); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="infinite-brand-carousel-block__brands">
		<div class="infinite-brand-carousel-block__strip">
			<?php $image = get_field('brands_image'); ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		</div>
	</div>
</div>