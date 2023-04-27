<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sprichards
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<meta name="google-site-verification" content="xNPEPAaoxpX-FqJCdgbxAmApnXpVRaqGTCNtIi_WWqA" />
	<meta property="og:image" content="<?php echo get_stylesheet_directory() ?>/assets/images/spr-logo-red-tagline.svg">
	<meta property="og:image:type" content="image/svg">
	<meta property="og:image:width" content="1024">
	<meta property="og:image:height" content="1024">

	<link rel="preconnect" href="https://p.typekit.net">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MBD2V5J');</script>
	<!-- End Google Tag Manager -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php sprichards_body_open(); ?>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBD2V5J"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'sprichards'); ?></a>

		<!-- Desktop Navigation -->
		<header id="masthead" class="site-header">
			<div class="container desktop-navigation">
				<div class="site-branding">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<svg width="89" height="57" viewBox="0 0 89 57" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g class="spr-logo">
								<path d="M76.877 0.248883L76.8842 0.936605L78.887 0.925741L78.9234 6.29356L79.7099 6.28995L79.6735 0.918506L81.6617 0.907648L81.6581 0.216309L76.877 0.248883Z" fill="white" />
								<path d="M87.0135 0.18351L85.2911 5.34501L83.5032 0.205227L82.3926 0.212467L82.4363 6.27162L83.2374 6.26801L83.2046 1.34539L84.9015 6.25715L85.6989 6.24991L87.3303 1.32005L87.363 6.23905L88.1641 6.23543L88.1241 0.17627L87.0135 0.18351Z" fill="white" />
								<path d="M80.6781 40.9617C80.6781 40.9834 81.6431 41.9752 81.6431 41.9896C81.6431 42.0041 81.2644 41.6204 81.2644 41.6204C77.2261 37.2552 72.5761 31.9924 69.2406 28.1593C65.9015 24.3298 63.5856 21.5861 63.6329 21.5861C65.6357 21.4341 69.0549 20.8296 71.968 19.1284C74.8811 17.4272 77.2807 14.6329 77.2516 10.1012C77.2188 5.33788 74.7099 2.80781 71.8041 1.47219C68.8983 0.136565 65.5956 -0.00459949 63.9789 0.00625922C62.3657 -0.0299365 60.7781 0.0967502 59.398 0.234294C58.0179 0.371837 56.8454 0.520241 56.0625 0.523861C55.6693 0.523861 55.083 0.531095 54.3766 0.512997C53.6665 0.494899 52.8363 0.451468 51.9551 0.364599C51.9551 0.364599 52.017 2.46756 52.1007 6.0618C52.1881 9.65603 52.2901 14.7488 52.3811 20.7247C52.4904 29.7845 52.4539 35.3188 52.3993 38.5909C52.3483 41.8593 52.2792 42.8656 52.3301 42.862C53.1604 42.7642 54.0671 42.7136 54.9592 42.7063C55.8513 42.6991 56.7325 42.7389 57.5154 42.8294C57.5628 42.8294 57.4572 41.0558 57.3224 37.4254C57.1877 33.7949 57.0311 28.3077 56.9802 20.8803C56.9437 15.5089 56.9656 11.4694 57.0093 8.52672C57.0493 5.58401 57.1112 3.73804 57.1549 2.75713C57.1549 2.71008 58.007 2.44585 59.205 2.20696C60.403 1.96445 61.9397 1.74727 63.3125 1.78347C64.8273 1.77261 66.983 2.04046 68.7636 3.25663C70.5442 4.46919 71.9534 6.63369 71.9789 10.4161C72.0627 15.4111 69.1678 17.8145 65.9707 18.98C62.7736 20.1455 59.2779 20.0768 58.1527 20.1274L57.9597 20.5473L57.7667 20.9708C63.3343 27.4715 67.8715 32.9552 71.0176 36.81C74.1601 40.6649 75.9116 42.8982 75.9116 42.8982C76.5998 42.7823 77.5356 42.6991 78.5734 42.6448C79.6112 42.5905 81.177 42.5615 82.273 42.5652C81.8179 42.1489 81.1843 41.501 80.689 40.9544" fill="white" />
								<path d="M29.4213 3.5208C29.2283 15.7911 29.5342 20.768 29.5414 21.691C29.5414 21.9661 45.1629 23.2475 45.0864 11.8096C45.0318 3.14075 38.1387 2.44941 36.2088 2.46027C33.82 2.47475 30.521 3.23485 29.4213 3.51718L28.7804 3.61491C27.586 3.52804 24.9023 0.68668 24.9023 0.68668C25.1791 0.777169 26.7412 0.950906 28.3034 0.943666C29.9565 0.932808 32.8915 0.545518 34.2679 0.534659C35.4623 0.617909 50.0532 -1.04347 50.2244 11.3137C50.5011 25.4264 30.2879 23.9895 29.465 24.1777C29.5232 33.0312 30.0476 42.8981 30.0476 42.8981C28.4854 42.6339 26.6502 42.6447 25.3648 42.8366C25.3648 42.8366 25.525 39.4233 25.3939 19.5917C25.3029 6.12689 25.0007 1.42145 24.9023 0.68668L29.4213 3.51718V3.5208Z" fill="white" />
								<path d="M22.3288 2.2685C21.9683 3.55345 21.5204 5.1171 21.5277 6.49616L20.4207 6.3188C19.8636 5.59126 17.9046 2.39156 13.3893 2.42052C4.54078 2.47843 1.02687 14.8863 13.2145 18.1982C30.3981 23.7724 23.596 40.9689 13.2837 42.5977C5.91721 43.6547 0 41.0341 0 41.0341C0 41.0341 0.724631 39.2858 0.615391 36.4445L1.53665 36.0717C2.4652 37.2553 5.06877 40.8169 10.1375 40.7843C19.911 40.7228 23.2392 28.5936 14.9186 24.518C11.4958 22.52 14.3615 23.9714 9.18351 21.6187C3.91446 19.1755 1.30725 15.1578 1.36915 10.7564C1.44198 7.45172 4.61725 0.371847 13.3784 0.404423C19.3684 0.364608 22.3325 2.27212 22.3325 2.27212" fill="white" />
							</g>
							<g class="spr-logo-tagline">
								<path d="M0.283203 56.1168L0.705602 55.6282C1.13528 56.0661 1.73611 56.334 2.35514 56.334C3.12711 56.334 3.58227 55.9503 3.58227 55.3893C3.58227 54.7921 3.1526 54.6038 2.60639 54.3649L1.75432 53.9921C1.20811 53.7605 0.570874 53.3515 0.570874 52.4864C0.570874 51.6213 1.35012 50.9336 2.41704 50.9336C3.13439 50.9336 3.74614 51.2268 4.15761 51.6394L3.74614 52.1389C3.38564 51.7987 2.93047 51.596 2.41704 51.596C1.7616 51.596 1.33192 51.9254 1.33192 52.443C1.33192 53.004 1.84171 53.2175 2.30052 53.4058L3.14531 53.7713C3.82625 54.0573 4.35788 54.4663 4.35788 55.3314C4.35788 56.258 3.58592 57 2.34785 57C1.50306 57 0.796635 56.6706 0.283203 56.1277" fill="white" />
								<path d="M6.53711 56.4281C6.53711 56.0878 6.78108 55.8562 7.07603 55.8562C7.37098 55.8562 7.61495 56.0878 7.61495 56.4281C7.61495 56.7683 7.37098 56.9891 7.07603 56.9891C6.78108 56.9891 6.53711 56.7575 6.53711 56.4281Z" fill="white" />
								<path d="M10.2575 51.0349H11.9362C13.2544 51.0349 14.1502 51.4728 14.1502 52.7542C14.1502 54.0355 13.2617 54.564 11.969 54.564H11.0077V56.8805H10.2539V51.0312L10.2575 51.0349ZM11.8816 53.9595C12.9048 53.9595 13.3964 53.5867 13.3964 52.7542C13.3964 51.9217 12.8757 51.6393 11.8452 51.6393H11.0113V53.9559H11.8816V53.9595Z" fill="white" />
								<path d="M15.3711 56.4281C15.3711 56.0878 15.6151 55.8562 15.91 55.8562C16.205 55.8562 16.4489 56.0878 16.4489 56.4281C16.4489 56.7683 16.205 56.9891 15.91 56.9891C15.6151 56.9891 15.3711 56.7575 15.3711 56.4281Z" fill="white" />
								<path d="M22.1426 51.0349H23.9815C25.1831 51.0349 26.0461 51.462 26.0461 52.6854C26.0461 53.5939 25.5254 54.1296 24.7279 54.336L26.2245 56.8878H25.3725L23.956 54.4192H22.8963V56.8878H22.1426V51.0385V51.0349ZM23.8722 53.8075C24.7862 53.8075 25.2887 53.4347 25.2887 52.6854C25.2887 51.9362 24.7862 51.643 23.8722 51.643H22.8963V53.8111H23.8722V53.8075Z" fill="white" />
								<path d="M29.2655 51.0349H28.5117V56.8841H29.2655V51.0349Z" fill="white" />
								<path d="M31.7852 53.9595C31.7852 52.0773 32.8958 50.9263 34.396 50.9263C35.1134 50.9263 35.6705 51.2665 36.0201 51.6502L35.6086 52.1135C35.2954 51.7913 34.9094 51.5886 34.4069 51.5886C33.3036 51.5886 32.568 52.4899 32.568 53.9414C32.568 55.3928 33.2672 56.3303 34.3814 56.3303C34.9459 56.3303 35.3683 56.1059 35.7433 55.6969L36.1548 56.1421C35.6778 56.685 35.1061 56.9891 34.3523 56.9891C32.8812 56.9891 31.7852 55.867 31.7852 53.9558" fill="white" />
								<path d="M38.5039 51.0349H39.2577V53.4781H41.985V51.0349H42.7352V56.8841H41.985V54.1369H39.2577V56.8841H38.5039V51.0349Z" fill="white" />
								<path d="M46.8088 51.0349H47.6681L49.649 56.8841H48.8516L48.2944 55.1105H46.1497L45.5853 56.8841H44.8242L46.8051 51.0349H46.8088ZM46.3499 54.5025H48.1087L47.832 53.6193C47.6171 52.9678 47.4278 52.3271 47.2384 51.6502H47.202C47.0236 52.3271 46.8342 52.9714 46.6267 53.6193L46.3499 54.5025Z" fill="white" />
								<path d="M51.7441 51.0349H53.583C54.7847 51.0349 55.6477 51.462 55.6477 52.6854C55.6477 53.5939 55.127 54.1296 54.3295 54.336L55.8261 56.8878H54.974L53.5575 54.4192H52.4979V56.8878H51.7441V51.0385V51.0349ZM53.4738 53.8075C54.3878 53.8075 54.8903 53.4347 54.8903 52.6854C54.8903 51.9362 54.3878 51.643 53.4738 51.643H52.4979V53.8111H53.4738V53.8075Z" fill="white" />
								<path d="M58.1133 51.0349H59.5844C61.3978 51.0349 62.3664 52.0774 62.3664 53.9342C62.3664 55.791 61.3978 56.8841 59.6208 56.8841H58.1133V51.0349ZM59.5298 56.2688C60.9026 56.2688 61.5835 55.4146 61.5835 53.9342C61.5835 52.4538 60.9026 51.6502 59.5298 51.6502H58.867V56.2688H59.5298Z" fill="white" />
								<path d="M64.4629 56.1168L64.8853 55.6282C65.315 56.0661 65.9158 56.334 66.5348 56.334C67.3068 56.334 67.762 55.9503 67.762 55.3893C67.762 54.7921 67.3323 54.6038 66.7861 54.3649L65.934 53.9921C65.3878 53.7605 64.7506 53.3515 64.7506 52.4864C64.7506 51.6213 65.5298 50.9336 66.5967 50.9336C67.3141 50.9336 67.9258 51.2268 68.3373 51.6394L67.9258 52.1389C67.5653 51.7987 67.1102 51.596 66.5967 51.596C65.9413 51.596 65.5116 51.9254 65.5116 52.443C65.5116 53.004 66.0214 53.2175 66.4802 53.4058L67.325 53.7713C68.0059 54.0573 68.5376 54.4663 68.5376 55.3314C68.5376 56.258 67.7656 57 66.5275 57C65.6827 57 64.9763 56.6706 64.4629 56.1277" fill="white" />
								<path d="M73.6465 53.9595C73.6465 52.0773 74.7571 50.9263 76.2573 50.9263C76.9747 50.9263 77.5318 51.2665 77.8814 51.6502L77.4699 52.1135C77.1568 51.7913 76.7708 51.5886 76.2683 51.5886C75.1649 51.5886 74.4294 52.4899 74.4294 53.9414C74.4294 55.3928 75.1285 56.3303 76.2428 56.3303C76.8072 56.3303 77.2296 56.1059 77.6046 55.6969L78.0161 56.1421C77.5391 56.685 76.9674 56.9891 76.2136 56.9891C74.7425 56.9891 73.6465 55.867 73.6465 53.9558" fill="white" />
								<path d="M79.7637 53.9305C79.7637 52.0592 80.7942 50.9263 82.2762 50.9263C83.7582 50.9263 84.796 52.0664 84.796 53.9305C84.796 55.7946 83.7546 56.9891 82.2762 56.9891C80.7978 56.9891 79.7637 55.8127 79.7637 53.9305ZM84.0168 53.9305C84.0168 52.4754 83.3249 51.585 82.2762 51.585C81.2275 51.585 80.5466 52.4754 80.5466 53.9305C80.5466 55.3856 81.2275 56.3303 82.2762 56.3303C83.3249 56.3303 84.0168 55.3928 84.0168 53.9305Z" fill="white" />
								<path d="M87.0938 56.4281C87.0938 56.0878 87.3377 55.8562 87.6327 55.8562C87.9276 55.8562 88.1716 56.0878 88.1716 56.4281C88.1716 56.7683 87.9276 56.9891 87.6327 56.9891C87.3377 56.9891 87.0938 56.7575 87.0938 56.4281Z" fill="white" />
							</g>
						</svg>
					</a>
				</div><!-- .site-branding -->

				<button class="open-menu-btn" aria-controls="primary-menu" aria-expanded="false"><span><?php esc_html_e('Primary Menu', 'sprichards'); ?></span></button>

				<nav id="desktop-navigation__nav" class="main-navigation desktop-navigation__nav">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #desktop-navigation -->
			</div>

			<!-- Mobile Navigation -->
			<div class="mobile-navigation">
				<div class="mobile-navigation__header">
					<div class="mobile-navigation--logo site-branding">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<svg width="89" height="57" viewBox="0 0 89 57" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g class="spr-logo">
									<path d="M76.877 0.248883L76.8842 0.936605L78.887 0.925741L78.9234 6.29356L79.7099 6.28995L79.6735 0.918506L81.6617 0.907648L81.6581 0.216309L76.877 0.248883Z" fill="white" />
									<path d="M87.0135 0.18351L85.2911 5.34501L83.5032 0.205227L82.3926 0.212467L82.4363 6.27162L83.2374 6.26801L83.2046 1.34539L84.9015 6.25715L85.6989 6.24991L87.3303 1.32005L87.363 6.23905L88.1641 6.23543L88.1241 0.17627L87.0135 0.18351Z" fill="white" />
									<path d="M80.6781 40.9617C80.6781 40.9834 81.6431 41.9752 81.6431 41.9896C81.6431 42.0041 81.2644 41.6204 81.2644 41.6204C77.2261 37.2552 72.5761 31.9924 69.2406 28.1593C65.9015 24.3298 63.5856 21.5861 63.6329 21.5861C65.6357 21.4341 69.0549 20.8296 71.968 19.1284C74.8811 17.4272 77.2807 14.6329 77.2516 10.1012C77.2188 5.33788 74.7099 2.80781 71.8041 1.47219C68.8983 0.136565 65.5956 -0.00459949 63.9789 0.00625922C62.3657 -0.0299365 60.7781 0.0967502 59.398 0.234294C58.0179 0.371837 56.8454 0.520241 56.0625 0.523861C55.6693 0.523861 55.083 0.531095 54.3766 0.512997C53.6665 0.494899 52.8363 0.451468 51.9551 0.364599C51.9551 0.364599 52.017 2.46756 52.1007 6.0618C52.1881 9.65603 52.2901 14.7488 52.3811 20.7247C52.4904 29.7845 52.4539 35.3188 52.3993 38.5909C52.3483 41.8593 52.2792 42.8656 52.3301 42.862C53.1604 42.7642 54.0671 42.7136 54.9592 42.7063C55.8513 42.6991 56.7325 42.7389 57.5154 42.8294C57.5628 42.8294 57.4572 41.0558 57.3224 37.4254C57.1877 33.7949 57.0311 28.3077 56.9802 20.8803C56.9437 15.5089 56.9656 11.4694 57.0093 8.52672C57.0493 5.58401 57.1112 3.73804 57.1549 2.75713C57.1549 2.71008 58.007 2.44585 59.205 2.20696C60.403 1.96445 61.9397 1.74727 63.3125 1.78347C64.8273 1.77261 66.983 2.04046 68.7636 3.25663C70.5442 4.46919 71.9534 6.63369 71.9789 10.4161C72.0627 15.4111 69.1678 17.8145 65.9707 18.98C62.7736 20.1455 59.2779 20.0768 58.1527 20.1274L57.9597 20.5473L57.7667 20.9708C63.3343 27.4715 67.8715 32.9552 71.0176 36.81C74.1601 40.6649 75.9116 42.8982 75.9116 42.8982C76.5998 42.7823 77.5356 42.6991 78.5734 42.6448C79.6112 42.5905 81.177 42.5615 82.273 42.5652C81.8179 42.1489 81.1843 41.501 80.689 40.9544" fill="white" />
									<path d="M29.4213 3.5208C29.2283 15.7911 29.5342 20.768 29.5414 21.691C29.5414 21.9661 45.1629 23.2475 45.0864 11.8096C45.0318 3.14075 38.1387 2.44941 36.2088 2.46027C33.82 2.47475 30.521 3.23485 29.4213 3.51718L28.7804 3.61491C27.586 3.52804 24.9023 0.68668 24.9023 0.68668C25.1791 0.777169 26.7412 0.950906 28.3034 0.943666C29.9565 0.932808 32.8915 0.545518 34.2679 0.534659C35.4623 0.617909 50.0532 -1.04347 50.2244 11.3137C50.5011 25.4264 30.2879 23.9895 29.465 24.1777C29.5232 33.0312 30.0476 42.8981 30.0476 42.8981C28.4854 42.6339 26.6502 42.6447 25.3648 42.8366C25.3648 42.8366 25.525 39.4233 25.3939 19.5917C25.3029 6.12689 25.0007 1.42145 24.9023 0.68668L29.4213 3.51718V3.5208Z" fill="white" />
									<path d="M22.3288 2.2685C21.9683 3.55345 21.5204 5.1171 21.5277 6.49616L20.4207 6.3188C19.8636 5.59126 17.9046 2.39156 13.3893 2.42052C4.54078 2.47843 1.02687 14.8863 13.2145 18.1982C30.3981 23.7724 23.596 40.9689 13.2837 42.5977C5.91721 43.6547 0 41.0341 0 41.0341C0 41.0341 0.724631 39.2858 0.615391 36.4445L1.53665 36.0717C2.4652 37.2553 5.06877 40.8169 10.1375 40.7843C19.911 40.7228 23.2392 28.5936 14.9186 24.518C11.4958 22.52 14.3615 23.9714 9.18351 21.6187C3.91446 19.1755 1.30725 15.1578 1.36915 10.7564C1.44198 7.45172 4.61725 0.371847 13.3784 0.404423C19.3684 0.364608 22.3325 2.27212 22.3325 2.27212" fill="white" />
								</g>
								<g class="spr-logo-tagline">
									<path d="M0.283203 56.1168L0.705602 55.6282C1.13528 56.0661 1.73611 56.334 2.35514 56.334C3.12711 56.334 3.58227 55.9503 3.58227 55.3893C3.58227 54.7921 3.1526 54.6038 2.60639 54.3649L1.75432 53.9921C1.20811 53.7605 0.570874 53.3515 0.570874 52.4864C0.570874 51.6213 1.35012 50.9336 2.41704 50.9336C3.13439 50.9336 3.74614 51.2268 4.15761 51.6394L3.74614 52.1389C3.38564 51.7987 2.93047 51.596 2.41704 51.596C1.7616 51.596 1.33192 51.9254 1.33192 52.443C1.33192 53.004 1.84171 53.2175 2.30052 53.4058L3.14531 53.7713C3.82625 54.0573 4.35788 54.4663 4.35788 55.3314C4.35788 56.258 3.58592 57 2.34785 57C1.50306 57 0.796635 56.6706 0.283203 56.1277" fill="white" />
									<path d="M6.53711 56.4281C6.53711 56.0878 6.78108 55.8562 7.07603 55.8562C7.37098 55.8562 7.61495 56.0878 7.61495 56.4281C7.61495 56.7683 7.37098 56.9891 7.07603 56.9891C6.78108 56.9891 6.53711 56.7575 6.53711 56.4281Z" fill="white" />
									<path d="M10.2575 51.0349H11.9362C13.2544 51.0349 14.1502 51.4728 14.1502 52.7542C14.1502 54.0355 13.2617 54.564 11.969 54.564H11.0077V56.8805H10.2539V51.0312L10.2575 51.0349ZM11.8816 53.9595C12.9048 53.9595 13.3964 53.5867 13.3964 52.7542C13.3964 51.9217 12.8757 51.6393 11.8452 51.6393H11.0113V53.9559H11.8816V53.9595Z" fill="white" />
									<path d="M15.3711 56.4281C15.3711 56.0878 15.6151 55.8562 15.91 55.8562C16.205 55.8562 16.4489 56.0878 16.4489 56.4281C16.4489 56.7683 16.205 56.9891 15.91 56.9891C15.6151 56.9891 15.3711 56.7575 15.3711 56.4281Z" fill="white" />
									<path d="M22.1426 51.0349H23.9815C25.1831 51.0349 26.0461 51.462 26.0461 52.6854C26.0461 53.5939 25.5254 54.1296 24.7279 54.336L26.2245 56.8878H25.3725L23.956 54.4192H22.8963V56.8878H22.1426V51.0385V51.0349ZM23.8722 53.8075C24.7862 53.8075 25.2887 53.4347 25.2887 52.6854C25.2887 51.9362 24.7862 51.643 23.8722 51.643H22.8963V53.8111H23.8722V53.8075Z" fill="white" />
									<path d="M29.2655 51.0349H28.5117V56.8841H29.2655V51.0349Z" fill="white" />
									<path d="M31.7852 53.9595C31.7852 52.0773 32.8958 50.9263 34.396 50.9263C35.1134 50.9263 35.6705 51.2665 36.0201 51.6502L35.6086 52.1135C35.2954 51.7913 34.9094 51.5886 34.4069 51.5886C33.3036 51.5886 32.568 52.4899 32.568 53.9414C32.568 55.3928 33.2672 56.3303 34.3814 56.3303C34.9459 56.3303 35.3683 56.1059 35.7433 55.6969L36.1548 56.1421C35.6778 56.685 35.1061 56.9891 34.3523 56.9891C32.8812 56.9891 31.7852 55.867 31.7852 53.9558" fill="white" />
									<path d="M38.5039 51.0349H39.2577V53.4781H41.985V51.0349H42.7352V56.8841H41.985V54.1369H39.2577V56.8841H38.5039V51.0349Z" fill="white" />
									<path d="M46.8088 51.0349H47.6681L49.649 56.8841H48.8516L48.2944 55.1105H46.1497L45.5853 56.8841H44.8242L46.8051 51.0349H46.8088ZM46.3499 54.5025H48.1087L47.832 53.6193C47.6171 52.9678 47.4278 52.3271 47.2384 51.6502H47.202C47.0236 52.3271 46.8342 52.9714 46.6267 53.6193L46.3499 54.5025Z" fill="white" />
									<path d="M51.7441 51.0349H53.583C54.7847 51.0349 55.6477 51.462 55.6477 52.6854C55.6477 53.5939 55.127 54.1296 54.3295 54.336L55.8261 56.8878H54.974L53.5575 54.4192H52.4979V56.8878H51.7441V51.0385V51.0349ZM53.4738 53.8075C54.3878 53.8075 54.8903 53.4347 54.8903 52.6854C54.8903 51.9362 54.3878 51.643 53.4738 51.643H52.4979V53.8111H53.4738V53.8075Z" fill="white" />
									<path d="M58.1133 51.0349H59.5844C61.3978 51.0349 62.3664 52.0774 62.3664 53.9342C62.3664 55.791 61.3978 56.8841 59.6208 56.8841H58.1133V51.0349ZM59.5298 56.2688C60.9026 56.2688 61.5835 55.4146 61.5835 53.9342C61.5835 52.4538 60.9026 51.6502 59.5298 51.6502H58.867V56.2688H59.5298Z" fill="white" />
									<path d="M64.4629 56.1168L64.8853 55.6282C65.315 56.0661 65.9158 56.334 66.5348 56.334C67.3068 56.334 67.762 55.9503 67.762 55.3893C67.762 54.7921 67.3323 54.6038 66.7861 54.3649L65.934 53.9921C65.3878 53.7605 64.7506 53.3515 64.7506 52.4864C64.7506 51.6213 65.5298 50.9336 66.5967 50.9336C67.3141 50.9336 67.9258 51.2268 68.3373 51.6394L67.9258 52.1389C67.5653 51.7987 67.1102 51.596 66.5967 51.596C65.9413 51.596 65.5116 51.9254 65.5116 52.443C65.5116 53.004 66.0214 53.2175 66.4802 53.4058L67.325 53.7713C68.0059 54.0573 68.5376 54.4663 68.5376 55.3314C68.5376 56.258 67.7656 57 66.5275 57C65.6827 57 64.9763 56.6706 64.4629 56.1277" fill="white" />
									<path d="M73.6465 53.9595C73.6465 52.0773 74.7571 50.9263 76.2573 50.9263C76.9747 50.9263 77.5318 51.2665 77.8814 51.6502L77.4699 52.1135C77.1568 51.7913 76.7708 51.5886 76.2683 51.5886C75.1649 51.5886 74.4294 52.4899 74.4294 53.9414C74.4294 55.3928 75.1285 56.3303 76.2428 56.3303C76.8072 56.3303 77.2296 56.1059 77.6046 55.6969L78.0161 56.1421C77.5391 56.685 76.9674 56.9891 76.2136 56.9891C74.7425 56.9891 73.6465 55.867 73.6465 53.9558" fill="white" />
									<path d="M79.7637 53.9305C79.7637 52.0592 80.7942 50.9263 82.2762 50.9263C83.7582 50.9263 84.796 52.0664 84.796 53.9305C84.796 55.7946 83.7546 56.9891 82.2762 56.9891C80.7978 56.9891 79.7637 55.8127 79.7637 53.9305ZM84.0168 53.9305C84.0168 52.4754 83.3249 51.585 82.2762 51.585C81.2275 51.585 80.5466 52.4754 80.5466 53.9305C80.5466 55.3856 81.2275 56.3303 82.2762 56.3303C83.3249 56.3303 84.0168 55.3928 84.0168 53.9305Z" fill="white" />
									<path d="M87.0938 56.4281C87.0938 56.0878 87.3377 55.8562 87.6327 55.8562C87.9276 55.8562 88.1716 56.0878 88.1716 56.4281C88.1716 56.7683 87.9276 56.9891 87.6327 56.9891C87.3377 56.9891 87.0938 56.7575 87.0938 56.4281Z" fill="white" />
								</g>
							</svg>
						</a>
					</div>

					<button class="close-menu-btn" aria-controls="primary-menu" aria-expanded="false"><span><?php esc_html_e('Close Primary Menu', 'sprichards'); ?></span></button>
				</div><!-- .mobile-navigation-header -->

				<div class="mobile-navigation__scroll">
					<div class="mobile-navigation__scroll-content">
						<nav id="mobile-navigation__nav" class="main-navigation mobile-navigation__nav">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-mobile-menu',
								)
							);
							?>
						</nav><!-- #mobile-site-navigation -->

						<div class="mobile-navigation__social">
							<h3>Follow Us</h3>
							<ul>
								<li class="social-facebook">
									<a href="https://www.facebook.com/SPRichardsCo" target="_blank" rel="noopener noreferrer">
										<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.7362 0.336548C5.61897 0.336548 0.660156 5.29537 0.660156 11.4125C0.660156 17.5297 5.61897 22.4885 11.7362 22.4885C17.8533 22.4885 22.8122 17.5297 22.8122 11.4125C22.8122 5.29537 17.8533 0.336548 11.7362 0.336548ZM14.3598 7.99052H12.6949C12.4976 7.99052 12.2784 8.25012 12.2784 8.59509V9.7973H14.3609L14.046 11.5118H12.2784V16.6586H10.3136V11.5118H8.53104V9.7973H10.3136V8.78892C10.3136 7.34212 11.3173 6.16645 12.6949 6.16645H14.3598V7.99052V7.99052Z" fill="#E6E7E8" />
										</svg>
									</a>
								</li>
								<li class="social-twitter">
									<a href="https://www.twitter.com/sprichards/" target="_blank" rel="noopener noreferrer">
										<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.4627 0.336548C5.34554 0.336548 0.386719 5.29537 0.386719 11.4125C0.386719 17.5297 5.34554 22.4885 11.4627 22.4885C17.5799 22.4885 22.5387 17.5297 22.5387 11.4125C22.5387 5.29537 17.5799 0.336548 11.4627 0.336548ZM15.9681 9.40964C15.9727 9.50424 15.9739 9.59885 15.9739 9.69115C15.9739 12.5755 13.7806 15.8995 9.76786 15.8995C8.58214 15.9015 7.42109 15.5609 6.42429 14.9188C6.59389 14.9396 6.76811 14.9476 6.94463 14.9476C7.96686 14.9476 8.90716 14.6004 9.65364 14.0143C9.19873 14.0053 8.75795 13.8547 8.39272 13.5833C8.02749 13.312 7.75601 12.9335 7.61612 12.5005C7.94281 12.5627 8.27935 12.5496 8.60026 12.4625C8.10652 12.3626 7.66249 12.0951 7.34349 11.7052C7.02449 11.3153 6.85015 10.8272 6.85003 10.3234V10.2969C7.14423 10.4596 7.48113 10.5588 7.83879 10.5703C7.3759 10.2622 7.04822 9.78884 6.92276 9.24711C6.7973 8.70538 6.88354 8.13619 7.16385 7.65594C7.71183 8.32973 8.3952 8.88093 9.16972 9.27385C9.94424 9.66678 10.7926 9.89267 11.66 9.9369C11.5497 9.46883 11.5972 8.97745 11.795 8.53914C11.9928 8.10083 12.3299 7.74015 12.7538 7.51318C13.1778 7.2862 13.6648 7.20566 14.1393 7.28405C14.6137 7.36245 15.049 7.5954 15.3774 7.94668C15.8656 7.85009 16.3338 7.671 16.7619 7.41711C16.5992 7.92261 16.2585 8.35185 15.8031 8.62509C16.2356 8.573 16.6579 8.45673 17.0561 8.28012C16.7636 8.71842 16.3952 9.10094 15.9681 9.40964V9.40964Z" fill="#E6E7E8" />
										</svg>
									</a>
								</li>
								<li class="social-linkedin">
									<a href="https://www.linkedin.com/company/sprichards/" target="_blank" rel="noopener noreferrer">
										<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.1854 0.336548C5.06819 0.336548 0.109375 5.29537 0.109375 11.4125C0.109375 17.5297 5.06819 22.4885 11.1854 22.4885C17.3026 22.4885 22.2614 17.5297 22.2614 11.4125C22.2614 5.29537 17.3026 0.336548 11.1854 0.336548ZM8.47406 16.0033H6.23117V8.78546H8.47406V16.0033ZM7.33877 7.89938C6.63037 7.89938 6.17233 7.3975 6.17233 6.77678C6.17233 6.14337 6.64421 5.65649 7.36762 5.65649C8.09102 5.65649 8.53406 6.14337 8.5479 6.77678C8.5479 7.3975 8.09102 7.89938 7.33877 7.89938ZM16.6657 16.0033H14.4228V12.0033C14.4228 11.0722 14.0974 10.4399 13.2864 10.4399C12.6668 10.4399 12.2987 10.868 12.1361 11.2799C12.0761 11.4264 12.0611 11.6341 12.0611 11.8406V16.0022H9.81703V11.0872C9.81703 10.1861 9.78818 9.43271 9.75819 8.7843H11.7069L11.8096 9.78691H11.8545C12.1499 9.31618 12.8733 8.62163 14.0836 8.62163C15.5592 8.62163 16.6657 9.61039 16.6657 11.7356V16.0033V16.0033Z" fill="#E6E7E8" />
										</svg>
									</a>
								</li>
							</ul>
						</div><!-- .social-links -->

						<div class="mobile-navigation__portals">
							<h3>Customer / Supplier Portals</h3>
							<ul>
								<li><a href="https://www.iteminfo.com/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/images/menu-portals-iteminfo.png" ?> " alt="iteminfo.com"></a></li>
								<li><a href="https://www.spradvantage.com/Login/Index?ReturnUrl=%2F" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/images/menu-portals-spr-advantage.png" ?>" alt="SPR Advance"></a></li>
								<li><a href="https://www.sprsupplier.com/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/images/menu-portals-spr-supplier.png" ?>" alt="SPR Supplier"></a></li>
							</ul>
						</div><!-- .mobile-navigation__portals -->
					</div><!-- .mobile-navigation-scroll -->
				</div>
			</div><!-- .mobile-navigation-container -->
		</header><!-- #masthead -->