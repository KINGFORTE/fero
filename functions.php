<?php
// Theme setup
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'figma-theme'),
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');

// Enqueue styles and scripts
function figma_enqueue_styles() {
    wp_enqueue_style('figma-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'figma_enqueue_styles');

/**
 * Bolt Optimization: Clean up WordPress head and dequeue unnecessary assets.
 * This reduces the number of HTTP requests and the size of the head, improving overall performance.
 */
function bolt_optimize_head_and_assets() {
    // Remove emoji support - saves an unnecessary JS and CSS request
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

    // Remove emoji dns-prefetch
    add_filter('wp_resource_hints', function( $urls, $relation_type ) {
        if ( 'dns-prefetch' === $relation_type ) {
            $urls = array_diff( $urls, array( 'https://s.w.org/images/core/emoji/' ) );
        }
        return $urls;
    }, 10, 2);

    // Remove unnecessary meta tags from head
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rest_output_link_wp_head', 10);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10);
}
add_action('init', 'bolt_optimize_head_and_assets');

/**
 * Bolt Optimization: Dequeue core block styles as they are not used by this theme.
 * This eliminates render-blocking CSS requests.
 */
function bolt_dequeue_unused_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'bolt_dequeue_unused_styles', 100);
