<div class="map-block block <?php echo isset($block['className']) ? $block['className'] : ''; ?>">
	<div class="map-block__inner">
		<div class="map-block__content">
			<div class="map-block__map">
				<div class="map-block__map-inner">
					<div class="map-block__map-iframe">
						<iframe src="https://www.google.com/maps?z=15&output=embed&q=<?php echo get_field('lat') ?>, <?php echo get_field('lng') ?>" width="100%" height="450" frameborder="0" style="border:0"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>