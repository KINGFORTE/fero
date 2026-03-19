<?php
/**
 * Theme setup and performance optimizations
 */

function figma_theme_setup() {
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'figma_theme_setup');

/**
 * Enqueue styles
 */
function figma_enqueue_styles() {
    // Standard theme stylesheet
    wp_enqueue_style('figma-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'figma_enqueue_styles');

/**
 * Register navigation menus
 */
register_nav_menus(array(
    'primary' => __('Primary Menu', 'figma-theme'),
));
