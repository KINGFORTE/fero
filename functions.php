<?php
// Theme setup
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'figma-theme'),
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');

// Bolt Optimization: Inline main stylesheet to eliminate a render-blocking request
// Since the stylesheet is ~1KB, inlining it saves an HTTP request and avoids a render-blocking external file.
function bolt_inline_main_styles() {
    $style_path = get_template_directory() . '/style.css';
    if (file_exists($style_path)) {
        $css = file_get_contents($style_path);
        echo "\n" . '<style id="figma-style-inline">' . $css . '</style>' . "\n";
    }
}
add_action('wp_head', 'bolt_inline_main_styles', 5);
