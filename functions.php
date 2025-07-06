<?php
/**
 * Interno functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Interno
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function interno_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Interno, use a find and replace
	 * to change 'interno' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('interno', get_template_directory() . '/languages');

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
			'menu-1' => esc_html__('Primary', 'interno'),
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
			'interno_custom_background_args',
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
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'interno_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function interno_content_width()
{
	$GLOBALS['content_width'] = apply_filters('interno_content_width', 640);
}
add_action('after_setup_theme', 'interno_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function interno_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'interno'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'interno'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'interno_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function interno_scripts()
{
	wp_enqueue_style('icons', 'https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.min.css');
	wp_enqueue_style('fonts', 'https://fonts.bunny.net/css?family=dm-serif-display:400|jost:400');
	wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
	wp_enqueue_style('styles-css', get_template_directory_uri() . '/assets/css/dist/styles.css');
	
	wp_enqueue_script('scroll-reveal', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', [], null,true);
	wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', [], null, true);
	wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/simpleParallax.min.js', [], null, true);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'interno_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Site settings
 */
add_action('acf/init', function () {
	if (function_exists('acf_add_options_page')) {

		acf_add_options_page(array(
			'page_title' => 'Site Settings',
			'menu_title' => 'Main Settings',
			'menu_slug' => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect' => false
		));
	}
});

function custom_login_styles()
{
	echo '<style type="text/css">
        /* Change background color */
        body.login {
            background-color: #F1F1F1;
        }

        /* Change logo */
        #login h1 a, .login h1 a {
            background-image: url(' . get_stylesheet_directory_uri() . '/assets/logo.png);
            background-size: contain;
            width: 100%;
            height: 50px;
        }

        .login form input[type="text"],
				.login form input[type="password"] {
						background-color: #FFFFFF !important;
						border: 2px solid #292F36 !important;
						border-radius: 12px !important;
						padding: 8px;
						outline: none !important;
						box-shadow: none !important;
				}

				 /* Eye icon color in password field */
					.wp-hide-pw .dashicons {
							color: #292F36 !important;
					}

        /* Optional: change color when focused or hovered */
        .wp-hide-pw:hover .dashicons {
            color: #CDA274 !important;
        }
						


        /* Change login button color */
        .wp-core-ui .button-primary {
            background: #CDA274 !important;
            border: none !important;
            color: #FFFFFF;
						transition: all 0.2s ease-in-out;
        }

        .wp-core-ui .button-primary:hover {
            background: #292F36 !important;
        }
    </style>';
}
add_action('login_enqueue_scripts', 'custom_login_styles');


function login_url()
{
	return home_url();
}
add_filter('login_headerurl', 'login_url');



