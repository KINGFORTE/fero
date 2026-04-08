<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    /**
     * ⚡ Bolt Optimization: Preload LCP Candidate
     * 🎯 Why: Speeds up Largest Contentful Paint by prioritizing the first candidate image.
     */
    if (is_front_page() || is_page_template('page-home.php')) : ?>
        <link rel="preload" as="image" href="<?php echo esc_url(get_template_directory_uri() . '/images/candidate1.png'); ?>" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
</header>
