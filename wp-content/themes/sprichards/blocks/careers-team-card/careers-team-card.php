<?php
$photo = get_field('photo');
?>

<div class="careers-team-card-block block <?php echo isset($block['className']) ? $block['className'] : ''; ?>">
	<div class="careers-team-card-block__inner-container">
		<div class="careers-team-card-block__inner">
			<div class="careers-team-card-block__image">
				<img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
			</div>
			<div class="careers-team-card-block__content">
				<div class="careers-team-card-block__content__name"><?php the_field('name') ?></div>
				<div class="careers-team-card-block__content__role"><?php the_field('role'); ?></div>
				<div class="careers-team-card-block__content__description"><?php the_field('description'); ?></div>
				<?php if (get_field('linkedin_link')): ?>
				<a class="careers-team-card-block__content__link" href="<?php the_field('linkedin_link') ?>" target="_blank" class="careers-team-card-block__content__button">
					<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_1541_55342)">
							<path d="M8.36011 0.827637C4.28817 0.827637 0.987305 4.1285 0.987305 8.20044C0.987305 12.2724 4.28817 15.5732 8.36011 15.5732C12.432 15.5732 15.7329 12.2724 15.7329 8.20044C15.7329 4.1285 12.432 0.827637 8.36011 0.827637ZM6.5553 11.2563H5.06231V6.4517H6.5553V11.2563ZM5.79959 5.86188C5.32804 5.86188 5.02314 5.5278 5.02314 5.11461C5.02314 4.69298 5.33726 4.36888 5.81879 4.36888C6.30033 4.36888 6.59524 4.69298 6.60446 5.11461C6.60446 5.5278 6.30033 5.86188 5.79959 5.86188ZM12.0081 11.2563H10.5151V8.59365C10.5151 7.97388 10.2985 7.55301 9.75863 7.55301C9.34622 7.55301 9.10122 7.83794 8.99294 8.11212C8.953 8.20965 8.94302 8.34789 8.94302 8.48537V11.2555H7.44926V7.98386C7.44926 7.38405 7.43006 6.88255 7.41009 6.45093H8.70724L8.77559 7.11832H8.80554C9.00215 6.80498 9.48369 6.34264 10.2893 6.34264C11.2716 6.34264 12.0081 7.00082 12.0081 8.41548V11.2563Z" fill="#85868A" />
						</g>
						<defs>
							<clipPath id="clip0_1541_55342">
								<rect width="15.36" height="15.36" fill="white" transform="translate(0.679688 0.52002)" />
							</clipPath>
						</defs>
					</svg>
				</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>