<?php
// Theme setup
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
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

// Performance Optimizations: Remove WP Head Bloat
function bolt_optimize_head() {
    // Remove emoji support
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');

    // Remove RSD, WLW, Generator, Shortlink
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'bolt_optimize_head');

/**
 * Preload the Largest Contentful Paint (LCP) image.
 * This ensures the browser starts downloading the critical image as early as possible.
 */
function bolt_preload_lcp() {
    // candidate1.png is the first image in the grid and a primary LCP candidate
    $lcp_image_url = get_template_directory_uri() . '/images/candidate1.png';
    echo '<link rel="preload" href="' . esc_url($lcp_image_url) . '" as="image" fetchpriority="high">' . "\n";
}
add_action('wp_head', 'bolt_preload_lcp', 1);
