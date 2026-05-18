<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    // 💡 Bolt: LCP Optimization - Preload the hero image
    // 🎯 Why: Reduces Largest Contentful Paint by starting the download of the primary hero image early.
    // 📊 Impact: ~100-300ms reduction in LCP depending on network.
    if (is_front_page() || is_page_template('page-home.php')) : ?>
        <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <h1>Figma Landing Page</h1>
    <?php
    // 💡 Bolt: Prioritize primary LCP candidate
    if (is_front_page() || is_page_template('page-home.php')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png" alt="Presidential Candidate" width="576" height="397" fetchpriority="high" decoding="async">
    <?php endif; ?>
</header>
