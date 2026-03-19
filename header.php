<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if (is_front_page() || is_page_template('page-home.php')) {
        $template_uri = get_template_directory_uri();
        // Preload LCP candidates for faster perceived performance
        echo '<link rel="preload" as="image" href="' . esc_url($template_uri . '/images/candidate1.jpg.png') . '" fetchpriority="high">' . "\n";
        echo '<link rel="preload" as="image" href="' . esc_url($template_uri . '/images/candidate2.jpg.png') . '" fetchpriority="high">' . "\n";
    }
    ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
    </header>
