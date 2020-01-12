<?php
/**
 * Freelancers Hub functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Freelancers_Hub
 */

if ( ! function_exists( 'freelancershub_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function freelancershub_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Freelancers Hub, use a find and replace
         * to change 'freelancershub' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'freelancershub', get_template_directory() . '/languages' );

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
        register_nav_menus( array(
            'primary_menu' => esc_html__( 'Primary Menu', 'freelancershub' ),
            'seo_services' => esc_html__( 'SEO Services', 'freelancershub' ),
            'target_market' => esc_html__( 'Target Market', 'freelancershub' ),
            'woocommerce_seo' => esc_html__( 'Woocommerce SEO', 'freelancershub' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'freelancershub_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
endif;
add_action( 'after_setup_theme', 'freelancershub_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function freelancershub_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'freelancershub_content_width', 640 );
}
add_action( 'after_setup_theme', 'freelancershub_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function freelancershub_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar 1', 'freelancershub' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'freelancershub' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar 2', 'freelancershub' ),
        'id'            => 'sidebar-2',
        'description'   => esc_html__( 'Add widgets here.', 'freelancershub' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar 3', 'freelancershub' ),
        'id'            => 'sidebar-3',
        'description'   => esc_html__( 'Add widgets here.', 'freelancershub' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar 4', 'freelancershub' ),
        'id'            => 'sidebar-4',
        'description'   => esc_html__( 'Add widgets here.', 'freelancershub' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'freelancershub' ),
        'id'            => 'blog-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'freelancershub' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Contact Sidebar', 'freelancershub' ),
        'id'            => 'contact-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'freelancershub' ),
        'before_widget' => '<div id="%1$s" class="widget col-md-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'freelancershub_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function freelancershub_scripts() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style('flaticon-css', get_template_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style('odometer-css', get_template_directory_uri() . '/assets/css/odometer.min.css');
    wp_enqueue_style('nice-select-css', get_template_directory_uri() . '/assets/css/nice-select.css');
    wp_enqueue_style('meanmenu-css', get_template_directory_uri() . '/assets/css/meanmenu.css');
    wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.min.css');
    wp_enqueue_style('owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/assets/css/fontawesome.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css',array(), '1.0.0');
    wp_enqueue_style('freelancershub-style', get_stylesheet_uri(),array(), '1.0.0');
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css');

    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '', true);
    wp_enqueue_script('popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap-min-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.2.0', true);
    wp_enqueue_script('meanmenu-js', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array('jquery'), '2.3.4', true);
    wp_enqueue_script('jquery.appear.min-js', get_template_directory_uri() . '/assets/js/jquery.appear.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('odometer-js', get_template_directory_uri() . '/assets/js/odometer.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('carousel.min-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('nice-select-js', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('mixitup-js', get_template_directory_uri() . '/assets/js/jquery.mixitup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('wow-min-js', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('parallax-js', get_template_directory_uri() . '/assets/js/parallax.min.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'freelancershub_scripts' );

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
/**
 * Plugin Activation
 */
require_once get_template_directory() . '/inc/plugin-activation.php';
require_once get_template_directory() . '/inc/freelancershub-helper.php';

/**
 * Metaboxes additions
 */
require_once(get_theme_file_path('/inc/metaboxes/section.php'));
require_once(get_theme_file_path('/inc/metaboxes/page.php'));
require_once(get_theme_file_path('/inc/metaboxes/section-banner.php'));
require_once(get_theme_file_path('/inc/metaboxes/section-services.php'));
require_once(get_theme_file_path('/inc/metaboxes/section-blog.php'));
require_once(get_theme_file_path('/inc/metaboxes/section-tab.php'));
require_once(get_theme_file_path('/inc/metaboxes/section-features.php'));
require_once(get_theme_file_path('/inc/metaboxes/section-testimonial.php'));
require_once(get_theme_file_path('/inc/metaboxes/section-about.php'));
require_once(get_theme_file_path('/inc/metaboxes/section-whychoose.php'));
require_once(get_theme_file_path('/inc/metaboxes/section-projects.php'));
require_once(get_theme_file_path('/inc/metaboxes/section-contact.php'));
require_once(get_theme_file_path('/inc/metaboxes/section-partner.php'));
require_once(get_theme_file_path('/inc/metaboxes/section-team.php'));
require_once(get_theme_file_path('/inc/metaboxes/section-subscription.php'));
//
//require_once(get_theme_file_path('/inc/options/freelancershub-options.php'));
//require_once(get_theme_file_path('/inc/metaboxes/freelancershub-services.php'));
//require_once(get_theme_file_path('/inc/metaboxes/web-apps-details.php'));
//require_once(get_theme_file_path('/inc/metaboxes/services.php'));
//require_once(get_theme_file_path('/inc/metaboxes/freelancershub-app-services.php'));
//require_once(get_theme_file_path('/inc/metaboxes/portfolios.php'));
//require_once(get_theme_file_path('/inc/metaboxes/ppc-services.php'));
//require_once(get_theme_file_path('/inc/metaboxes/seo-services.php'));
//require_once(get_theme_file_path('/inc/metaboxes/smm-services.php'));

function freelancershub_pagination()
{
    global $wp_query;
    $links = paginate_links(array(
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type' => 'list',
        'mid_size' => 3,
        'prev_text' => __('<i class="fa fa-arrow-left"></i>', 'freelancershub'),
        'next_text' => __('<i class="fa fa-arrow-right"></i>', 'freelancershub'),

    ));
    $links = str_replace("page-numbers", "post-navigation", $links);
    echo wp_kses_post($links);

}

/**
 * Comments Field Modify
 */
function freelancershub_comment_fields($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter('comment_form_fields', 'freelancershub_comment_fields');