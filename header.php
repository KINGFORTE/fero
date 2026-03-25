<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    // Preload LCP candidates for the homepage
    if (is_front_page() || is_page_template('page-home.php')) {
        $theme_uri = get_template_directory_uri();
        echo "\n    " . '<link rel="preload" href="' . $theme_uri . '/images/candidate1.jpg.png" as="image" fetchpriority="high">';
        echo "\n    " . '<link rel="preload" href="' . $theme_uri . '/images/candidate2.jpg.png" as="image" fetchpriority="high">';
    }
    ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
