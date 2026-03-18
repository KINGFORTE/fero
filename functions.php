<?php
/**
 * Figma Theme Functions
 */

function figma_theme_setup() {
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'figma-theme'),
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');

/**
 * Enqueue styles.
 */
function figma_enqueue_styles() {
    // Main stylesheet
    wp_enqueue_style('figma-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'figma_enqueue_styles');
