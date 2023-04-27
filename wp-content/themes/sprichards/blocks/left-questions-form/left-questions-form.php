<div class="left-questions-form-block block <?php echo $block['className'] ?>">
	<div class="container">
		<div class="left-questions-form-block__inner">
			<div class="left-questions-form-block__content">
				<div class="left-questions-form-block__heading">
					<?php if (get_field('title')) : ?>
						<h2 class="left-questions-form-block__title section-title blue">
							<?php the_field('title'); ?>
							<?php if (get_field('sub_title')) : ?>
								<span><?php the_field('sub_title'); ?><span>
									<?php endif; ?>
						</h2>
					<?php endif; ?>

					<?php if (get_field('content')) : ?>
						<div class="left-questions-form-block__text">
							<?php the_field('content'); ?>
						</div>
					<?php endif; ?>
				</div>

				<div class="left-questions-form-block__contact-info">
					<ul>
						<?php if (get_field('phone_number')) : ?>
							<li>
								<h4>Phone Number</h4>
								<p><b><?php echo get_field('phone_number'); ?></b></p>
							</li>
						<?php endif; ?>

						<?php if (get_field('address')) : ?>
							<li>
								<h4>Address</h4>
								<p><b><?php echo get_field('address'); ?></b></p>
							</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>

			<div class="left-questions-form-block__form">
				<h3>Contact Us</h3>
				<?php echo do_shortcode('[contact-form-7 id="1388"]'); ?>
			</div>
		</div>
	</div>
</div>