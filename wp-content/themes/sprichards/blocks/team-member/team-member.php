<?php
$modalId = 'member-modal-' . $block['id'];
$photo = get_field('photo');
?>

<div class="team-member-block block <?php echo $block['className'] ?>">
	<!-- member card -->
	<div class="team-member-block__card member-card" data-micromodal-trigger="<?php echo $modalId; ?>">

		<!-- member card picture -->
		<div class="member-card__picture">
			<img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
		</div>

		<!-- member card content -->
		<div class="member-card__content">
			<div class="member-card__content__group">
				<h4 class="member-card__name"><?php the_field('name') ?></h4>
				<div class="member-card__role"><?php the_field('role'); ?></div>
			</div>
			<?php if (get_field('linkedin_link')): ?>
			<a class="member-card__link" target="_blank" href="<?php the_field('linkedin_link') ?>">
				<svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M15 0.5C6.71562 0.5 0 7.21562 0 15.5C0 23.7844 6.71562 30.5 15 30.5C23.2844 30.5 30 23.7844 30 15.5C30 7.21562 23.2844 0.5 15 0.5ZM11.3281 21.7172H8.29062V11.9422H11.3281V21.7172ZM9.79062 10.7422C8.83125 10.7422 8.21094 10.0625 8.21094 9.22187C8.21094 8.36406 8.85 7.70469 9.82969 7.70469C10.8094 7.70469 11.4094 8.36406 11.4281 9.22187C11.4281 10.0625 10.8094 10.7422 9.79062 10.7422ZM22.4219 21.7172H19.3844V16.3C19.3844 15.0391 18.9437 14.1828 17.8453 14.1828C17.0063 14.1828 16.5078 14.7625 16.2875 15.3203C16.2062 15.5188 16.1859 15.8 16.1859 16.0797V21.7156H13.1469V15.0594C13.1469 13.8391 13.1078 12.8187 13.0672 11.9406H15.7062L15.8453 13.2984H15.9062C16.3062 12.6609 17.2859 11.7203 18.925 11.7203C20.9234 11.7203 22.4219 13.0594 22.4219 15.9375V21.7172Z" fill="#85868A" />
				</svg>
			</a>
			<?php endif; ?>
		</div>
	</div>

	<!-- modal -->
	<div id="<?php echo $modalId; ?>" aria-hidden="true" class="modal">

		<div tabindex="-1" data-micromodal-close class="modal__close-overlay">

			<!-- modal container -->
			<div role="dialog" aria-modal="true" aria-labelledby="<?php echo $modalId; ?>-title" class="modal__container">

				<!-- modal header -->
				<header class="modal__header">
					<button aria-label="Close modal" data-micromodal-close>
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#d51f26" viewBox="0 0 256 256">
							<rect width="24" height="24" fill="none"></rect>
							<line x1="200" y1="56" x2="56" y2="200" fill="none" stroke="#d51f26" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line>
							<line x1="200" y1="200" x2="56" y2="56" fill="none" stroke="#d51f26" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line>
						</svg>
					</button>
				</header>

				<!-- modal body -->
				<div id="<?php echo $modalId; ?>-content" class="modal__body">

					<!-- modal picture -->
					<div class="modal__picture">
						<img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
					</div>

					<!-- modal content -->
					<div id="<?php echo $modalId; ?>-content" class="modal__content">

						<!-- modal heading -->
						<div class="modal__content-heading">
							<div class="modal__content-heading__group">
								<div class="modal__content-heading__logo">
									<svg width="85" height="61" viewBox="0 0 85 61" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_1575_56263)">
											<path d="M74.7725 0.246113L74.7796 0.926897L76.7275 0.916143L76.7629 6.22982L77.5279 6.22624L77.4925 0.908981L79.4263 0.898232L79.4227 0.213867L74.7725 0.246113Z" fill="#D51F26" />
											<path d="M84.6326 0.181972L82.9574 5.29141L81.2184 0.20347L80.1382 0.210637L80.1807 6.20867L80.9599 6.20509L80.928 1.33213L82.5784 6.19434L83.3541 6.18717L84.9407 1.30705L84.9726 6.17642L85.7518 6.17284L85.7128 0.174805L84.6326 0.181972Z" fill="#D51F26" />
											<path d="M78.4702 40.5485C78.4702 40.57 79.4088 41.5517 79.4088 41.5661C79.4088 41.5804 79.0404 41.2006 79.0404 41.2006C75.1127 36.8794 70.5899 31.6697 67.3457 27.8752C64.0979 24.0843 61.8454 21.3684 61.8915 21.3684C63.8394 21.2179 67.1651 20.6195 69.9984 18.9355C72.8318 17.2514 75.1658 14.4853 75.1375 9.99934C75.1056 5.28404 72.6653 2.77948 69.8391 1.45733C67.0128 0.135187 63.8005 -0.00455309 62.2279 0.00619608C60.659 -0.0296345 59.1148 0.0957742 57.7725 0.23193C56.4301 0.368087 55.2897 0.514993 54.5282 0.518576C54.1457 0.518576 53.5755 0.525737 52.8884 0.507822C52.1978 0.489906 51.3903 0.446914 50.5332 0.360921C50.5332 0.360921 50.5934 2.44267 50.6749 6.00065C50.7599 9.55862 50.859 14.6 50.9476 20.5156C51.0538 29.484 51.0184 34.9625 50.9653 38.2016C50.9157 41.4371 50.8484 42.4332 50.898 42.4296C51.7055 42.3328 52.5874 42.2827 53.4551 42.2755C54.3228 42.2683 55.1799 42.3078 55.9414 42.3973C55.9874 42.3973 55.8847 40.6416 55.7537 37.0478C55.6226 33.454 55.4704 28.0221 55.4208 20.6697C55.3854 15.3524 55.4066 11.3537 55.4491 8.44071C55.4881 5.52768 55.5483 3.70033 55.5908 2.72932C55.5908 2.68274 56.4195 2.42118 57.5847 2.1847C58.75 1.94463 60.2446 1.72965 61.5798 1.76548C63.0531 1.75473 65.1498 2.01987 66.8817 3.22378C68.6136 4.4241 69.9843 6.56677 70.0091 10.3111C70.0905 15.2557 67.2749 17.6348 64.1652 18.7886C61.0556 19.9423 57.6556 19.8742 56.5612 19.9244L56.3735 20.34L56.1858 20.7593C61.6011 27.1944 66.014 32.6228 69.074 36.4387C72.1305 40.2547 73.8341 42.4654 73.8341 42.4654C74.5035 42.3508 75.4137 42.2683 76.4231 42.2146C77.4325 42.1609 78.9554 42.1322 80.0215 42.1358C79.5788 41.7237 78.9625 41.0824 78.4808 40.5413" fill="#D51F26" />
											<path d="M28.6169 3.48522C28.4292 15.6318 28.7267 20.5585 28.7338 21.4722C28.7338 21.7445 43.9277 23.0129 43.8534 11.6904C43.8002 3.10899 37.0958 2.42463 35.2187 2.43538C32.8953 2.44971 29.6865 3.20215 28.6169 3.48163L27.9936 3.57837C26.8319 3.49238 24.2217 0.679682 24.2217 0.679682C24.4908 0.769259 26.0102 0.941242 27.5296 0.934076C29.1376 0.923327 31.9922 0.539944 33.331 0.529195C34.4926 0.611605 48.6843 -1.03302 48.8507 11.1995C49.1199 25.1699 29.4599 23.7474 28.6594 23.9337C28.7161 32.6979 29.2261 42.4653 29.2261 42.4653C27.7067 42.2037 25.9217 42.2145 24.6715 42.4044C24.6715 42.4044 24.8273 39.0256 24.6998 19.394C24.6113 6.06501 24.3173 1.40704 24.2217 0.679682L28.6169 3.48163V3.48522Z" fill="#D51F26" />
											<path d="M21.7178 2.24578C21.3671 3.51777 20.9315 5.06565 20.9386 6.43079L19.8619 6.25522C19.32 5.53503 17.4146 2.36761 13.0229 2.39627C4.41651 2.4536 0.998764 14.7363 12.8529 18.0148C29.5662 23.5327 22.9503 40.5558 12.9202 42.1682C5.75528 43.2144 0 40.6203 0 40.6203C0 40.6203 0.704801 38.8897 0.59855 36.077L1.4946 35.7079C2.39774 36.8796 4.93006 40.4053 9.86012 40.3731C19.3661 40.3122 22.6032 28.3053 14.5104 24.2708C11.1812 22.293 13.9685 23.7298 8.93219 21.4008C3.80734 18.9822 1.27148 15.005 1.33169 10.648C1.40252 7.37672 4.49089 0.368263 13.0122 0.400511C18.8384 0.361097 21.7213 2.24936 21.7213 2.24936" fill="#D51F26" />
											<path d="M0.276367 55.5509L0.687207 55.0671C1.10513 55.5007 1.68951 55.7658 2.2916 55.7658C3.04244 55.7658 3.48515 55.386 3.48515 54.8307C3.48515 54.2395 3.06724 54.0531 2.53598 53.8167L1.70722 53.4476C1.17596 53.2183 0.556165 52.8134 0.556165 51.9571C0.556165 51.1007 1.31409 50.4199 2.35181 50.4199C3.04953 50.4199 3.64453 50.7102 4.04474 51.1186L3.64454 51.6131C3.29391 51.2763 2.85119 51.0756 2.35181 51.0756C1.7143 51.0756 1.29638 51.4017 1.29638 51.9141C1.29638 52.4694 1.79222 52.6808 2.23848 52.8672L3.06015 53.229C3.72245 53.5121 4.23954 53.917 4.23954 54.7733C4.23954 55.6906 3.4887 56.4251 2.28452 56.4251C1.46284 56.4251 0.775748 56.0991 0.276367 55.5616" fill="#85868A" />
											<path d="M6.35742 55.8591C6.35742 55.5223 6.59472 55.293 6.8816 55.293C7.16848 55.293 7.40577 55.5223 7.40577 55.8591C7.40577 56.1959 7.16848 56.4145 6.8816 56.4145C6.59472 56.4145 6.35742 56.1851 6.35742 55.8591Z" fill="#85868A" />
											<path d="M9.97717 50.5202H11.6099C12.892 50.5202 13.7633 50.9537 13.7633 52.2221C13.7633 53.4905 12.8991 54.0137 11.6418 54.0137H10.7068V56.3068H9.97363V50.5166L9.97717 50.5202ZM11.5568 53.4153C12.552 53.4153 13.0301 53.0462 13.0301 52.2221C13.0301 51.398 12.5237 51.1186 11.5214 51.1186H10.7103V53.4117H11.5568V53.4153Z" fill="#85868A" />
											<path d="M14.9497 55.8591C14.9497 55.5223 15.187 55.293 15.4739 55.293C15.7608 55.293 15.998 55.5223 15.998 55.8591C15.998 56.1959 15.7608 56.4145 15.4739 56.4145C15.187 56.4145 14.9497 56.1851 14.9497 55.8591Z" fill="#85868A" />
											<path d="M21.5371 50.52H23.3257C24.4944 50.52 25.3338 50.9428 25.3338 52.1539C25.3338 53.0532 24.8274 53.5835 24.0517 53.7878L25.5074 56.3138H24.6786L23.3009 53.8702H22.2702V56.3138H21.5371V50.5236V50.52ZM23.2194 53.2646C24.1084 53.2646 24.5971 52.8956 24.5971 52.1539C24.5971 51.4122 24.1084 51.122 23.2194 51.122H22.2702V53.2682H23.2194V53.2646Z" fill="#85868A" />
											<path d="M28.4646 50.52H27.7314V56.3102H28.4646V50.52Z" fill="#85868A" />
											<path d="M30.9155 53.4152C30.9155 51.552 31.9957 50.4126 33.4549 50.4126C34.1526 50.4126 34.6945 50.7494 35.0345 51.1292L34.6343 51.5878C34.3297 51.2689 33.9543 51.0683 33.4656 51.0683C32.3924 51.0683 31.677 51.9605 31.677 53.3973C31.677 54.8341 32.357 55.7621 33.4408 55.7621C33.9897 55.7621 34.4006 55.5399 34.7654 55.1351L35.1656 55.5758C34.7016 56.1132 34.1456 56.4142 33.4124 56.4142C31.9816 56.4142 30.9155 55.3035 30.9155 53.4116" fill="#85868A" />
											<path d="M37.4502 50.52H38.1833V52.9386H40.8361V50.52H41.5657V56.3102H40.8361V53.5907H38.1833V56.3102H37.4502V50.52Z" fill="#85868A" />
											<path d="M45.5289 50.52H46.3647L48.2914 56.3102H47.5158L46.9739 54.5545H44.8878L44.3388 56.3102H43.5986L45.5253 50.52H45.5289ZM45.0826 53.9526H46.7933L46.5241 53.0783C46.3151 52.4334 46.131 51.7992 45.9468 51.1291H45.9114C45.7378 51.7992 45.5536 52.437 45.3518 53.0783L45.0826 53.9526Z" fill="#85868A" />
											<path d="M50.3276 50.52H52.1162C53.285 50.52 54.1243 50.9428 54.1243 52.1539C54.1243 53.0532 53.6179 53.5835 52.8423 53.7878L54.2979 56.3138H53.4691L52.0914 53.8702H51.0608V56.3138H50.3276V50.5236V50.52ZM52.0099 53.2646C52.8989 53.2646 53.3877 52.8956 53.3877 52.1539C53.3877 51.4122 52.8989 51.122 52.0099 51.122H51.0608V53.2682H52.0099V53.2646Z" fill="#85868A" />
											<path d="M56.522 50.52H57.9528C59.7166 50.52 60.6587 51.5519 60.6587 53.3901C60.6587 55.2282 59.7166 56.3102 57.9882 56.3102H56.522V50.52ZM57.8997 55.7011C59.2349 55.7011 59.8972 54.8555 59.8972 53.3901C59.8972 51.9246 59.2349 51.1291 57.8997 51.1291H57.2551V55.7011H57.8997Z" fill="#85868A" />
											<path d="M62.6987 55.5509L63.1096 55.0671C63.5275 55.5007 64.1119 55.7658 64.714 55.7658C65.4648 55.7658 65.9075 55.386 65.9075 54.8307C65.9075 54.2395 65.4896 54.0531 64.9583 53.8167L64.1296 53.4476C63.5983 53.2183 62.9785 52.8134 62.9785 51.9571C62.9785 51.1007 63.7365 50.4199 64.7742 50.4199C65.4719 50.4199 66.0669 50.7102 66.4671 51.1186L66.0669 51.6131C65.7163 51.2763 65.2736 51.0756 64.7742 51.0756C64.1367 51.0756 63.7187 51.4017 63.7187 51.9141C63.7187 52.4694 64.2146 52.6808 64.6608 52.8672L65.4825 53.229C66.1448 53.5121 66.6619 53.917 66.6619 54.7733C66.6619 55.6906 65.9111 56.4251 64.7069 56.4251C63.8852 56.4251 63.1981 56.0991 62.6987 55.5616" fill="#85868A" />
											<path d="M71.6309 53.4152C71.6309 51.552 72.7111 50.4126 74.1703 50.4126C74.868 50.4126 75.4099 50.7494 75.7499 51.1292L75.3497 51.5878C75.0451 51.2689 74.6697 51.0683 74.1809 51.0683C73.1078 51.0683 72.3923 51.9605 72.3923 53.3973C72.3923 54.8341 73.0723 55.7621 74.1561 55.7621C74.7051 55.7621 75.1159 55.5399 75.4807 55.1351L75.8809 55.5758C75.4169 56.1132 74.8609 56.4142 74.1278 56.4142C72.6969 56.4142 71.6309 55.3035 71.6309 53.4116" fill="#85868A" />
											<path d="M77.5811 53.3865C77.5811 51.5341 78.5834 50.4126 80.0248 50.4126C81.4663 50.4126 82.4757 51.5413 82.4757 53.3865C82.4757 55.2318 81.4628 56.4142 80.0248 56.4142C78.5869 56.4142 77.5811 55.2497 77.5811 53.3865ZM81.7178 53.3865C81.7178 51.9461 81.0449 51.0647 80.0248 51.0647C79.0048 51.0647 78.3425 51.9461 78.3425 53.3865C78.3425 54.8269 79.0048 55.7621 80.0248 55.7621C81.0449 55.7621 81.7178 54.8341 81.7178 53.3865Z" fill="#85868A" />
											<path d="M84.7104 55.8591C84.7104 55.5223 84.9477 55.293 85.2346 55.293C85.5215 55.293 85.7588 55.5223 85.7588 55.8591C85.7588 56.1959 85.5215 56.4145 85.2346 56.4145C84.9477 56.4145 84.7104 56.1851 84.7104 55.8591Z" fill="#85868A" />
										</g>
										<defs>
											<clipPath id="clip0_1575_56263">
												<rect width="85" height="61" fill="white" />
											</clipPath>
										</defs>
									</svg>
								</div>
								<div class="modal__content-heading__content">
									<h4 id="<?php echo $modalId; ?>-title" class="modal__name"><?php the_field('name') ?></h4>
									<div class="modal__content-heading__role"><?php the_field('role'); ?></div>
								</div>
							</div>
							<?php if (get_field('linkedin_link')): ?>
							<div class="modal__content-heading__link">
								<a target="_blank" href="<?php the_field('linkedin_link') ?>">
									<svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M15 0.5C6.71562 0.5 0 7.21562 0 15.5C0 23.7844 6.71562 30.5 15 30.5C23.2844 30.5 30 23.7844 30 15.5C30 7.21562 23.2844 0.5 15 0.5ZM11.3281 21.7172H8.29062V11.9422H11.3281V21.7172ZM9.79062 10.7422C8.83125 10.7422 8.21094 10.0625 8.21094 9.22187C8.21094 8.36406 8.85 7.70469 9.82969 7.70469C10.8094 7.70469 11.4094 8.36406 11.4281 9.22187C11.4281 10.0625 10.8094 10.7422 9.79062 10.7422ZM22.4219 21.7172H19.3844V16.3C19.3844 15.0391 18.9437 14.1828 17.8453 14.1828C17.0063 14.1828 16.5078 14.7625 16.2875 15.3203C16.2062 15.5188 16.1859 15.8 16.1859 16.0797V21.7156H13.1469V15.0594C13.1469 13.8391 13.1078 12.8187 13.0672 11.9406H15.7062L15.8453 13.2984H15.9062C16.3062 12.6609 17.2859 11.7203 18.925 11.7203C20.9234 11.7203 22.4219 13.0594 22.4219 15.9375V21.7172Z" fill="#85868A" />
									</svg>
								</a>
							</div>
							<?php endif; ?>
						</div>
						<!-- modal text -->
						<div class="modal__description"><?php the_field('description'); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>