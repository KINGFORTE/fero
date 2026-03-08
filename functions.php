<?php
// Theme setup
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
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
 * BOLT OPTIMIZATION: Reduce WordPress header bloat
 * This removes unnecessary tags that add weight to the HTML and expose the WordPress version.
 */
function bolt_optimize_head() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'bolt_optimize_head');

/**
 * BOLT OPTIMIZATION: Dequeue unused block library styles
 * The theme uses custom CSS and not Gutenberg blocks, so these styles are redundant.
 */
function bolt_dequeue_block_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // WooCommerce blocks if present
}
add_action('wp_enqueue_scripts', 'bolt_dequeue_block_styles', 100);
