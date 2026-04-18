<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    /**
     * ⚡ Bolt: LCP Resource Preloading
     * 💡 What: Preloads Largest Contentful Paint (LCP) candidates.
     * 🎯 Why: Instructs the browser to prioritize critical above-the-fold images.
     * 📊 Impact: Significant reduction in LCP time.
     */
    ?>
    <link rel="preload" as="image" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/candidate1.png" fetchpriority="high">
    <link rel="preload" as="image" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/candidate2.png" fetchpriority="high">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <h1>Welcome to the Landing Page</h1>
</header>
