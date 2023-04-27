<div class="propietary-brands-block block <?php echo isset($block['className']) ? $block['className'] : ''; ?>">
	<div class="container">
		<div class="propietary-brands-block__inner">
			<div class="propietary-brands-block__content">
				<?php if (get_field('title')) : ?>
					<h2 class="propietary-brands-block__title section-title with-red-line">
						<?php the_field('title'); ?>
					</h2>
				<?php endif; ?>

				<?php if (get_field('text')) : ?>
					<div class="propietary-brands-block__text">
						<?php the_field('text'); ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="propietary-brands-block__brands">
				<?php if (have_rows('brands')) : ?>
					<?php while (have_rows('brands')) : the_row(); ?>
						<div class="propietary-brands-block__brand">
							<?php if (get_sub_field('brand_title')) : ?>
								<h4><?php echo get_sub_field('brand_title'); ?></h4>
							<?php endif; ?>
							<?php
							$image = get_sub_field('brand_image');
							$link = get_sub_field('brand_link');
							?>
							<?php if ($link) : ?>
								<a class="propietary-brands-block__brand__link" href="<?php echo $link; ?>" target="_blank">
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
								</a>
							<?php else : ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>