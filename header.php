<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    /**
     * ⚡ Bolt: LCP Optimization
     * 💡 What: Preload Largest Contentful Paint (LCP) candidate
     * 🎯 Why: Tells the browser to download the hero image early, improving LCP metric
     * 📊 Impact: Can improve LCP by several hundred milliseconds
     */
    if (is_front_page() || is_page_template('page-home.php')) : ?>
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/president.png" as="image" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
</header>
