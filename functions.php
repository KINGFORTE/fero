<?php
/**
 * Theme setup
 */
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'figma-theme'),
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');

/**
 * Bolt Optimization: Inline small CSS to eliminate render-blocking requests.
 * style.css is ~1.1KB, making it a perfect candidate for inlining.
 */
function figma_inline_styles() {
    $css_file = get_template_directory() . '/style.css';
    if (file_exists($css_file)) {
        $css = file_get_contents($css_file);
        echo '<style id="figma-inline-style">' . $css . '</style>';
    }
}
add_action('wp_head', 'figma_inline_styles', 10);

/**
 * Enqueue scripts (Styles are now inlined for performance)
 */
function figma_enqueue_scripts() {
    // Add scripts here if needed
}
add_action('wp_enqueue_scripts', 'figma_enqueue_scripts');
