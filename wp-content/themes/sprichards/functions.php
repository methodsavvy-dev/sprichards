<?php

/**
 * Sprichards functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sprichards
 */

if (!defined('SPRICHARDS_VERSION')) {
	// Replace the version number of the theme on each release.
	define('SPRICHARDS_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sprichards_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on sprichards, use a find and replace
		* to change 'sprichards' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('sprichards', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'sprichards'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'sprichards_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_theme_support('align-wide');
}
add_action('after_setup_theme', 'sprichards_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sprichards_content_width()
{
	$GLOBALS['content_width'] = apply_filters('sprichards_content_width', 640);
}
add_action('after_setup_theme', 'sprichards_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sprichards_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'sprichards'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'sprichards'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	// Pre-footer
	register_sidebar(
		array(
			'name'          => esc_html__('Pre Footer', 'sprichards'),
			'id'            => 'pre-footer',
			'description'   => esc_html__('Pre-footer widget area.', 'sprichards'),
			'before_widget' => '<section id="%1$s" class="pre-footer widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	// Footer
	register_sidebar(
		array(
			'name'          => esc_html__('Footer A', 'sprichards'),
			'id'            => 'footer-area-a',
			'description'   => esc_html__('Footer Area - A.', 'sprichards'),
			'before_widget' => '<section id="%1$s" class="footer-area-a widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer B', 'sprichards'),
			'id'            => 'footer-area-b',
			'description'   => esc_html__('Footer Area - B.', 'sprichards'),
			'before_widget' => '<section id="%1$s" class="footer-area-b widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer C', 'sprichards'),
			'id'            => 'footer-area-c',
			'description'   => esc_html__('Footer Area - C.', 'sprichards'),
			'before_widget' => '<section id="%1$s" class="footer-area-c widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'sprichards_widgets_init');

/**
 * Enqueue scripts and styles.
 */

function sprichards_scripts()
{
	// Site Styles
	wp_enqueue_style('sprichards-style', get_template_directory_uri() . '/assets/css/style.css', array(), SPRICHARDS_VERSION);

	// Vendor Scripts
	wp_enqueue_script('gsap', get_template_directory_uri() . '/vendor-js/gsap.min.js', array(), SPRICHARDS_VERSION, true);
	wp_enqueue_script('gsap-scroll-trigger', get_template_directory_uri() . '/vendor-js/ScrollTrigger.min.js', array(), SPRICHARDS_VERSION, true);
	wp_enqueue_script('gsap-scroll-to', get_template_directory_uri() . '/vendor-js/ScrollToPlugin.min.js', array(), SPRICHARDS_VERSION, true);

	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/vendor-js/owl-carousel/owl.carousel.min.js', array('jquery'), SPRICHARDS_VERSION, true);
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/vendor-js/owl-carousel/assets/owl.carousel.min.css', array(), SPRICHARDS_VERSION);
	wp_enqueue_style('owl-carousel-theme', get_template_directory_uri() . '/vendor-js/owl-carousel/assets/owl.theme.default.min.css', array(), SPRICHARDS_VERSION);

	// Site Scripts
	wp_enqueue_script('sprichards-navigation', get_template_directory_uri() . '/js/navigation.js', array(), SPRICHARDS_VERSION, true);
	wp_enqueue_script('sprichards-navigation-hack', get_template_directory_uri() . '/js/navigation-hack.js', array(), SPRICHARDS_VERSION, true);
	wp_enqueue_script('sprichards-navigation-scroll', get_template_directory_uri() . '/js/navigation-scroll.js', array(), SPRICHARDS_VERSION, true);

	// Block Scripts
	wp_enqueue_script('home-counter-script', get_template_directory_uri() . '/js/home-counter.js', array('gsap', 'gsap-scroll-trigger'), SPRICHARDS_VERSION, true);
	wp_enqueue_script('home-testimonials-script', get_template_directory_uri() . '/js/testimonials.js', array('jquery', 'owl-carousel'), SPRICHARDS_VERSION, true);
	wp_enqueue_script('infinite-carousel', get_template_directory_uri() . '/js/infinite-carousel.js', array(), SPRICHARDS_VERSION, true);

	if (has_block('sprichards/team-member')) {
		wp_enqueue_script('micromodal-script', get_template_directory_uri() . '/vendor-js/micromodal.min.js', array(), SPRICHARDS_VERSION, true);
		wp_enqueue_script('team-member-script', get_template_directory_uri() . '/js/team-member.js', array('jquery'), SPRICHARDS_VERSION, true);
	}

	if (has_block('sprichards/logistics-map-block') || has_block('sprichards/logistics-editable-map')) {
		wp_enqueue_script('google-maps-script', "https://maps.googleapis.com/maps/api/js?key=AIzaSyApXmda8uDmc7JOFRUckavgQwlBF7VbMkQ", array(), SPRICHARDS_VERSION, true);
	}

	if (has_block('sprichards/logistics-map-block')) {
		wp_enqueue_script('logistics-map-script', get_template_directory_uri() . '/js/logistics-map.js', array('jquery', 'google-maps-script'), SPRICHARDS_VERSION, true);
	}

	if (has_block('sprichards/logistics-editable-map')) {
		wp_enqueue_script('logistics-map-script', get_template_directory_uri() . '/js/logistics-editable-map.js', array('jquery', 'google-maps-script'), SPRICHARDS_VERSION, true);
	}

	if (has_block('sprichards/timeline')) {
		wp_enqueue_script('timeline-script', get_template_directory_uri() . '/js/timeline.js', array('jquery', 'gsap', 'gsap-scroll-trigger'), SPRICHARDS_VERSION, true);
	}

	if (has_block('sprichards/home-hero')) {
		wp_enqueue_script('vide-script', get_template_directory_uri() . '/vendor-js/jquery.vide.min.js', array('jquery'), SPRICHARDS_VERSION, true);
		wp_enqueue_script('home-hero-script', get_template_directory_uri() . '/js/home-hero.js', array('jquery'), SPRICHARDS_VERSION, true);
	}

	if (has_block('sprichards/home-experience')) {
		wp_enqueue_script('home-experience-script', get_template_directory_uri() . '/js/home-experience.js', array('jquery'), SPRICHARDS_VERSION, true);
	}

	// Conditionals
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'sprichards_scripts');


/**
 * Enqueue block editor assets.
 * All block styles are compiled into editor-style.css
 */
function sprichards_block_editor_assets()
{
	wp_enqueue_style('sprichards-style', get_template_directory_uri() . '/assets/css/editor-style.css', array(), SPRICHARDS_VERSION);
}
add_action('enqueue_block_editor_assets', 'sprichards_block_editor_assets');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load ACF Blocks
 */
function register_acf_blocks()
{
	// Global blocks
	register_block_type(get_template_directory() . '/blocks/testimonials');
	register_block_type(get_template_directory() . '/blocks/big-panel-a');
	register_block_type(get_template_directory() . '/blocks/big-panel-b');
	register_block_type(get_template_directory() . '/blocks/big-panel-c');
	register_block_type(get_template_directory() . '/blocks/page-title');
	register_block_type(get_template_directory() . '/blocks/left-questions-form');
	register_block_type(get_template_directory() . '/blocks/product-page-menu');
	register_block_type(get_template_directory() . '/blocks/icon-card-panel');
	register_block_type(get_template_directory() . '/blocks/page-menu');
	register_block_type(get_template_directory() . '/blocks/map-block');
	register_block_type(get_template_directory() . '/blocks/tag-list');

	// Footer blocks
	register_block_type(get_template_directory() . '/blocks/footer-legal');
	register_block_type(get_template_directory() . '/blocks/footer-navigation');
	register_block_type(get_template_directory() . '/blocks/footer-contact-information');
	register_block_type(get_template_directory() . '/blocks/pre-footer-subscribe');

	// Home page blocks
	register_block_type(get_template_directory() . '/blocks/home-experience');
	register_block_type(get_template_directory() . '/blocks/home-counter');
	register_block_type(get_template_directory() . '/blocks/home-portals');
	register_block_type(get_template_directory() . '/blocks/home-hero');

	// Product page blocks
	register_block_type(get_template_directory() . '/blocks/propietary-brands');
	register_block_type(get_template_directory() . '/blocks/infinite-brand-carousel');

	// Contact page blocks
	register_block_type(get_template_directory() . '/blocks/contact-us');

	// Leadership page blocks
	register_block_type(get_template_directory() . '/blocks/team-member');

	// Careers page blocks
	register_block_type(get_template_directory() . '/blocks/join-us');
	register_block_type(get_template_directory() . '/blocks/careers-icons');
	register_block_type(get_template_directory() . '/blocks/careers-team-card');

	// Logistics page blocks
	register_block_type(get_template_directory() . '/blocks/logistics-editable-map');
	register_block_type(get_template_directory() . '/blocks/logistics-map-block');

	// History page blocks
	register_block_type(get_template_directory() . '/blocks/timeline');
}
add_action('init', 'register_acf_blocks');

/**
 * Check if the current page is a blog page
 */
function is_blog()
{
	return (is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

/**
 * Send form data to Pardot
 * @param mixed $contact_form 
 * @return void 
 */
function sprichards_pardot_contact_form_submission($contact_form)
{

	$form_id = $contact_form->id();

	if (empty($form_id)) {
		return;
	}

	$api_url = '';
	$submission = WPCF7_Submission::get_instance();
	$data = $submission->get_posted_data();

	switch ($form_id) {
		case 1388:
			$api_url = 'https://info.sprichards.com/l/922123/2023-01-25/23dpkw';
			$formData = array(
				'First Name' => $data['first-name'],
				'Last Name' => $data['last-name'],
				'Company' => $data['company'],
				'email' => $data['email'],
				'Phone' => $data['phone'],
			);
			break;
		case 1390:
			$api_url = 'https://info.sprichards.com/l/922123/2023-01-25/23dpdl';
			$formData = array(
				'email' => $data['email'],
			);
			break;
		default:
			return;
	}

	$query = http_build_query($formData);
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_URL => $api_url . '?' . $query,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_ENCODING => '',
		CURLOPT_TIMEOUT => 0,
	));
	$response = curl_exec($curl);
	curl_close($curl);
}
add_action("wpcf7_before_send_mail", "sprichards_pardot_contact_form_submission");

/**
 * Disable auto p tag for contact form 7
 */
add_filter('wpcf7_autop_or_not', '__return_false');
