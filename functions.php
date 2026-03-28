<?php
/**
 * Theme setup and optimizations
 */
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'figma-theme'),
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');

/**
 * Enqueue styles and scripts
 */
function figma_enqueue_styles() {
    wp_enqueue_style('figma-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'figma_enqueue_styles');

/**
 * Performance optimization: Remove WordPress bloat from wp_head()
 *
 * 💡 What: Removes unnecessary default WP actions from the head.
 * 🎯 Why: Reduces HTTP requests and overall HTML size.
 * 📊 Impact: ~5-10% reduction in head section size, fewer potential external requests.
 */
function figma_optimize_wp_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
}
add_action('init', 'figma_optimize_wp_head');
