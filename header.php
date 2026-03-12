<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    // Preload LCP candidates for the home page
    $template_uri = get_template_directory_uri();
    if (is_front_page()) {
        echo '<link rel="preload" href="' . esc_url($template_uri . '/images/candidate1.png') . '" as="image" fetchpriority="high">' . "\n";
        echo '<link rel="preload" href="' . esc_url($template_uri . '/images/candidate2.png') . '" as="image" fetchpriority="high">' . "\n";
    }
    ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <?php if (has_custom_logo()): ?>
        <?php the_custom_logo(); ?>
    <?php else: ?>
        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
    <?php endif; ?>
</header>
