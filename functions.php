<?php
/**
 * Figma Landing Page functions and definitions
 *
 * @package Figma_Landing_Page
 */

// Theme setup
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag'); // Let WordPress manage the document title
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'figma-theme'),
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');

// Enqueue styles and scripts
function figma_enqueue_styles() {
    wp_enqueue_style('figma-style', get_stylesheet_uri());

    // Dequeue core block library styles to reduce CSS bloat if not using Gutenberg blocks
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // Also dequeue WooCommerce block styles if applicable
}
add_action('wp_enqueue_scripts', 'figma_enqueue_styles', 100);

// Optimize WordPress head
function figma_optimize_head() {
    // Remove emoji support scripts and styles
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');

    // Remove other head bloat
    remove_action('wp_head', 'rsd_link'); // EditURI link
    remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer link
    remove_action('wp_head', 'wp_generator'); // WordPress version
    remove_action('wp_head', 'wp_shortlink_wp_head'); // Shortlink
    remove_action('wp_head', 'rest_output_link_wp_head', 10); // REST API link
    remove_action('wp_head', 'wp_oembed_add_discovery_links', 10); // oEmbed discovery links
}
add_action('init', 'figma_optimize_head');
