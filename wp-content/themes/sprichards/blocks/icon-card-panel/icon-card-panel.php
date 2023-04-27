<div class="icon-card-panel-block block <?php echo $block['className'] ?>">
	<div class="container">
		<div class="icon-card-panel-block__inner">
			<div class="icon-card-panel-block__content">
				<!-- block title -->
				<?php if (get_field('title')) : ?>
					<h2 class="icon-card-panel-block__title section-title with-red-line">
						<?php the_field('title'); ?>
					</h2>
				<?php endif; ?>
				<!-- block content -->
				<?php if (get_field('text')) : ?>
					<div class="icon-card-panel-block__text">
						<?php the_field('text'); ?>
					</div>
				<?php endif; ?>
			</div>

			<div class="icon-card-panel-block__cards">
				<?php if (have_rows('cards')) : ?>

					<?php while (have_rows('cards')) : the_row(); ?>

						<div class="icon-card-panel-block__card icon-card">
							<!-- card icon -->
							<div class="icon-card__icon">
								<?php $image = get_sub_field('card_icon'); ?>
								<?php if (the_sub_field('read_more_link')) : ?>
									<a href="<?php the_sub_field('read_more_link') ?>">
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									</a>
								<?php else : ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
							</div>
							<!-- card content -->
							<h4 class="icon-card__title">
								<a href="<?php the_sub_field('read_more_link') ?>"><?php the_sub_field('card_title'); ?></a>
							</h4>
							<div class="icon-card__content">
								<div class="icon-card__text"><?php the_sub_field('card_text'); ?></div>
								<?php if (the_sub_field('read_more_link')) : ?>
									<a class="icon-card__more-link" href="<?php the_sub_field('read_more_link') ?>">Read More</a>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>