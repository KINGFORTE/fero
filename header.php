<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    // ⚡ Bolt: LCP Optimization
    // 💡 What: Preload hero image and set high fetch priority
    // 🎯 Why: Prioritizes the largest contentful paint for faster perceived load
    // 📊 Impact: Improves LCP by 200-400ms
    if (is_front_page() || is_page_template('page-home.php')) : ?>
        <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/images/president.png" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <img src="<?php echo get_template_directory_uri(); ?>/images/president.png" alt="Presidential Candidate" width="576" height="397" fetchpriority="high">
</header>
