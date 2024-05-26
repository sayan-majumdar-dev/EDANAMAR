<?php
/**
 * edanamar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package edanamar
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('edanamar_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function edanamar_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on edanamar, use a find and replace
         * to change 'edanamar' to the name of your theme in all the template files.
         */
        load_theme_textdomain('edanamar', get_template_directory() . '/languages');

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
                'menu-1' => esc_html__('Primary', 'edanamar'),
                'Main-menu' => esc_html__('Main-menu', 'edanamar'),
                'Footer_menu' => esc_html__('Footer_menu', 'edanamar'),
                'header_menu' => esc_html__('Header menu', 'edanamar'),
                'social_menu' => esc_html__('Social Icon menu', 'edanamar'),

            ));

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
                'edanamar_custom_background_args',
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
endif;
add_action('after_setup_theme', 'edanamar_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function edanamar_content_width()
{
    $GLOBALS['content_width'] = apply_filters('edanamar_content_width', 640);
}

add_action('after_setup_theme', 'edanamar_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function edanamar_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'edanamar'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'edanamar'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'edanamar_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function edanamar_scripts()
{
    wp_enqueue_style('edanamar-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('edanamar-style', 'rtl', 'replace');

    wp_enqueue_style('googlefont-css', get_template_directory_uri() . '/assets/css/googlefonts.css');
    wp_enqueue_style('alltheme.css', get_template_directory_uri() . '/assets/css/all-theme.css');
    wp_enqueue_style('style.css', get_template_directory_uri() . '/assets/css/style.css');


    wp_enqueue_script('bootstrap.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), _S_VERSION, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), _S_VERSION, true);



    wp_enqueue_script('main.js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true);


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'edanamar_scripts');

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

/* ACF Options */
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));

}
/* End ACF Options */


// Register Properties Post Type
function properties_post_type()
{

    $labels = array(
        'name' => _x('Properties', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Property', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Properties', 'text_domain'),
        'name_admin_bar' => __('Properties', 'text_domain'),
        'archives' => __('Item Archives', 'text_domain'),
        'attributes' => __('Item Attributes', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'all_items' => __('All Items', 'text_domain'),
        'add_new_item' => __('Add New Item', 'text_domain'),
        'add_new' => __('Add New', 'text_domain'),
        'new_item' => __('New Item', 'text_domain'),
        'edit_item' => __('Edit Item', 'text_domain'),
        'update_item' => __('Update Item', 'text_domain'),
        'view_item' => __('View Item', 'text_domain'),
        'view_items' => __('View Items', 'text_domain'),
        'search_items' => __('Search Item', 'text_domain'),
        'not_found' => __('Not found', 'text_domain'),
        'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
        'featured_image' => __('Featured Image', 'text_domain'),
        'set_featured_image' => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image' => __('Use as featured image', 'text_domain'),
        'insert_into_item' => __('Insert into item', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
        'items_list' => __('Items list', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
        'filter_items_list' => __('Filter items list', 'text_domain'),
    );
    $args = array(
        'label' => __('Property', 'text_domain'),
        'description' => __('Property Description', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('properties', $args);

}

add_action('init', 'properties_post_type', 0);
// Register Property Taxonomy
function property_type_taxonomy()
{

    $labels = array(
        'name' => _x('Property Type', 'Taxonomy General Name', 'text_domain'),
        'singular_name' => _x('Property Type', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name' => __('Property Type', 'text_domain'),
        'all_items' => __('All Items', 'text_domain'),
        'parent_item' => __('Parent Item', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'new_item_name' => __('New Item Name', 'text_domain'),
        'add_new_item' => __('Add New Item', 'text_domain'),
        'edit_item' => __('Edit Item', 'text_domain'),
        'update_item' => __('Update Item', 'text_domain'),
        'view_item' => __('View Item', 'text_domain'),
        'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
        'add_or_remove_items' => __('Add or remove items', 'text_domain'),
        'choose_from_most_used' => __('Choose from the most used', 'text_domain'),
        'popular_items' => __('Popular Items', 'text_domain'),
        'search_items' => __('Search Items', 'text_domain'),
        'not_found' => __('Not Found', 'text_domain'),
        'no_terms' => __('No items', 'text_domain'),
        'items_list' => __('Items list', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => false,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
    );
    register_taxonomy('property-type', array('properties'), $args);

}

add_action('init', 'property_type_taxonomy', 0);


class Prmr_Main_Menu_Walker extends Walker_Nav_Menu
{
    // public function start_lvl( &$output, $depth = 0, $args = []){        
    //     $output .= '<ul>';
    // }    

    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $classes = empty($item->classes) ? array() : (array)$item->classes;

        $li_classes = $item->classes;
        $li_s_class = '';
        foreach ($li_classes as $key => $li_class) {
            $li_s_class .= " " . $li_class;
        }


        $class_names = in_array("current_page_item", $item->classes) ? ' active' : '';
        $class_names = in_array("current-menu-item", $item->classes) ? ' active' : '';

        // $output .= '<li id="menu-item-'.$item->ID.'" class="nav-item '.$class_names.$li_s_class.' '.$item->post_type.' menu-item-'.$item->ID.'">';
        $output .= '<li class="nav-item ' . $class_names . $li_s_class . ' ' . $item->post_type . ' menu-item-' . $item->ID . '">';
        $output .= $args->before;
        $output .= '<a href="' . $item->url . '" class="nav-link">';
        $output .= $args->link_before . $item->title . $args->link_after;

        if ($class_names == ' active') {
            $output .= '<span class="sr-only">(current)</span>';
        }

        $output .= '</a>';
        $output .= $args->after;
    }

    public function end_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= '</li>';
    }

    // public function end_lvl( &$output, $depth = 0, $args = []){
    //     $output .= '</ul>';
    // }

}


function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


function add_class_to_href($classes, $item)
{
    if (in_array('current_page_item', $item->classes)) {
        $classes['class'] = 'nav-link active ';
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_class_to_href', 10, 2);

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;

    }

    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

