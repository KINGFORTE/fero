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
 * Preload critical LCP image
 */
function bolt_preload_lcp_image() {
    $lcp_image_url = get_template_directory_uri() . '/images/president.jpg.png';
    echo '<link rel="preload" as="image" href="' . esc_url($lcp_image_url) . '" fetchpriority="high">';
}
add_action('wp_head', 'bolt_preload_lcp_image', 1);
