<?php
// Theme setup
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
    // Allow WordPress to manage the document title
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

// Performance Optimization: Remove unnecessary WordPress head bloat
function bolt_optimize_head_cleanup() {
    // Remove emoji support scripts/styles
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');

    // Remove WordPress version generator tag
    remove_action('wp_head', 'wp_generator');

    // Remove RSD (Really Simple Discovery) link
    remove_action('wp_head', 'rsd_link');

    // Remove WLW (Windows Live Writer) link
    remove_action('wp_head', 'wlwmanifest_link');

    // Remove Shortlink
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'bolt_optimize_head_cleanup');
