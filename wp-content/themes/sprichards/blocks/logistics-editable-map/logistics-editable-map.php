<div class="logistics-map-editable-block block <?php echo isset($block['className']) ? $block['className'] : ''; ?>">
	<div class="logistics-map-editable-block__inner">
		<div class="logistics-map-editable-block__content">
			<div class="container">
				<?php
				$title = get_field('block_title');
				$intro = get_field('block_intro');

				if ($title || $intro) :
				?>
					<div class="logistics-map-editable-block__heading">
						<?php if ($title) : ?>
							<h2 class="section-title with-red-line"><?php echo $title; ?></h2>
						<?php endif; ?>

						<?php if ($intro) : ?>
							<p><?php echo $intro; ?></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php
				$locations = get_field('locations');
				$locations_count = count($locations);

				if ($locations) :
				?>

					<div class="logistics-map-editable-block__app">
						<div class="logistics-map-editable-block__state-list state-list">
							<ul>
								<?php if (have_rows('locations')) : ?>
									<?php while (have_rows('locations')) : the_row(); ?>
										<li <?php
												echo 'data-id="' . get_row_index() . '" ';
												echo 'data-name="' . get_sub_field('location_name') . '" ';

												$phone_numbers = get_sub_field('phone_numbers');
												$phone_numbers_count = count($phone_numbers);
												$phone_number_index = 0;

												foreach ($phone_numbers as $phone_number) {
													echo 'data-phone' . $phone_number_index . '="' . $phone_number['phone_number'] . '" ';
													$phone_number_index++;
												}

												$location_address = get_sub_field('location_address');
												$location_address_count = count($location_address);
												$location_address_index = 0;

												foreach ($location_address as $address) {
													echo 'data-address' . $location_address_index . '="' . $address . '" ';
													$location_address_index++;
												}

												$location_google_maps_information = get_sub_field('location_google_maps_information');

												if ($location_google_maps_information) {
													echo 'data-coordinates="' . $location_google_maps_information['location_coordinates'] . '" ';
													echo 'data-map-location="' . $location_google_maps_information['location_google_maps_address'] . '" ';
												}

												echo 'data-map-overlay="' . get_sub_field('location_map_overlay') . '" ';
												?> class="state-list__item">
											<?php the_sub_field('location_name'); ?>
										</li>
									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>

						<div class="logistics-map-editable-block__network-map network-map">
							<div class="network-map__overlay"></div>
							<div class="network-map__base default"></div>
						</div>
					</div>

				<?php endif; ?>
			</div>

			<div class="logistics-map-editable-block__network-info network-info" data-name="HQ" data-phone1="770-436-6881" data-phone2="888-436-6881" data-address1="4300 Wildwood Pkwy, Suite 100" data-address2="Atlanta, GA 30339" data-coordinates="33.912991229948425, -84.45758882024086" data-map-location="S P Richards Co,4300 Wildwood Pkwy, Suite 100, Atlanta, GA 30339">
				<div class="network-info__location">
					<div class="container">
						<h4 class="network-info__name"></h4>
						<div class="network-info__location__info">
							<p class="network-info__address">
								<span class="network-info__address-01"></span><br class="network-info__address-01__br" />
								<span class="network-info__address-02"></span><br class="network-info__address-02__br" />
								<span class="network-info__address-03"></span>
							</p>
							<p class="network-info__phone-numbers">
								Phone: <a href="" class="network-info__phone-01"></a><br />
								Toll Free: <a href="" class="network-info__phone-02"></a>
							</p>
						</div>
					</div>
				</div>
				<div class="network-info__map" id="network-info__map"></div>
			</div>
		</div>
	</div>
</div>