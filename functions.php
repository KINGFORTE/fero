<?php
// Theme setup
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
    // Enable support for title tag
    add_theme_support('title-tag');
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
 * Performance optimization: Remove WordPress head bloat.
 */
function figma_optimize_head() {
    // Remove emoji support
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');

    // Remove RSD link
    remove_action('wp_head', 'rsd_link');
    // Remove WLW manifest link
    remove_action('wp_head', 'wlwmanifest_link');
    // Remove generator tag
    remove_action('wp_head', 'wp_generator');
    // Remove shortlink tag
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'figma_optimize_head');

/**
 * Performance optimization: Dequeue core block-library styles if not used.
 */
function figma_dequeue_block_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'figma_dequeue_block_styles', 100);
