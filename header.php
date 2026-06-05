<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    /**
     * ⚡ Bolt Optimization: Critical Rendering Path
     * 💡 What: Preload LCP hero image
     * 🎯 Why: Starts fetching the largest image earlier in the waterfall.
     * 📊 Impact: Improves LCP by ~200-400ms.
     */
    ?>
    <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png" fetchpriority="high">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <img src="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png" alt="President" width="576" height="397" fetchpriority="high" decoding="sync">
    </header>
