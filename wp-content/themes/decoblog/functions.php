<?php
/**
 * decoblog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package decoblog
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'decoblog_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function decoblog_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on decoblog, use a find and replace
		 * to change 'decoblog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'decoblog', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'header-menu' => esc_html__( 'Header menu', 'decoblog' ),
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
				'decoblog_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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


        // Add theme support for selective refresh for widgets.
        add_theme_support( 'post-formats',
            array( 'gallery', 'link', 'image', 'video', 'status', 'quote', 'audio' ) );

    }
endif;
add_action( 'after_setup_theme', 'decoblog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function decoblog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'decoblog_content_width', 640 );
}
add_action( 'after_setup_theme', 'decoblog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function decoblog_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'decoblog' ),
			'id'            => 'footer',
			'description'   => esc_html__( 'Add widgets here.', 'decoblog' ),
			'before_widget' => '<div id="%1$s" class="%2$s col-md-3 footer__column">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="footer__title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'decoblog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function decoblog_scripts() {
    wp_enqueue_style( 'decoblog-style', get_stylesheet_uri() );
    wp_enqueue_style( 'decoblog-slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'decoblog-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
    wp_enqueue_style( 'decoblog-bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css' );
    wp_enqueue_style( 'decoblog-bootstrap-icons', get_template_directory_uri() . '/assets/css/bootstrap-icons.css' );
    wp_enqueue_style( 'decoblog-fancybox', get_template_directory_uri() . '/assets/css/fancybox.css' );
    wp_enqueue_style( 'decoblog-styles', get_template_directory_uri() . '/assets/css/styles.css' );
    wp_enqueue_style( 'decoblog-custom', get_template_directory_uri() . '/assets/css/custom.css' );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js' );
    wp_enqueue_script('jquery', '' ,  array(), '', true);

    wp_enqueue_script( 'decoblog-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '' , true );
    wp_enqueue_script( 'decoblog-fancybox-js', get_template_directory_uri() . '/assets/js/fancybox.umd.js', array(), '' , true );
    wp_enqueue_script( 'decoblog-slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '' , true );
    wp_enqueue_script( 'decoblog-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '' , true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'decoblog_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//Custom functions

//Removing media from content on mains
function remove_post_media( $content )
{
    if (get_post_format() === 'audio') {
        return $content;
    } else {
        return preg_replace('/<figure([\W\w]*)<\/figure>/', '', $content);
    }
}
add_filter('the_content', 'remove_post_media');


function add_post_thumbnail($html) {
    if (get_post_format() === 'video') {
        global $wp_embed;
        preg_match('/<figure([\W\w]*)<\/figure>/', get_the_content(), $matches);
        $thumbnail_video_link = preg_replace('/<(.*)>/', '', $matches[0]);
        return $wp_embed->autoembed($thumbnail_video_link);
    } elseif (get_post_format() === 'gallery') {
        global $wp_embed;
        preg_match('/<figure([\W\w]*)<\/figure>/', get_the_content(), $matches);
        return $wp_embed->autoembed($matches[0]);
    } else {
        return $html;
    }
}
add_filter( 'post_thumbnail_html', 'add_post_thumbnail');

