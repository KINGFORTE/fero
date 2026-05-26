<!DOCTYPE html>
<html <?php if(function_exists('language_attributes')) language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    /**
     * ⚡ Bolt: Performance Optimization - LCP Image Preload
     * 💡 What: Preloads the main hero image with high priority.
     * 🎯 Why: Instructs the browser to fetch the LCP candidate early, before CSS/JS.
     * 📊 Impact: Significant reduction in Largest Contentful Paint (LCP) time.
     */
    ?>
    <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png" fetchpriority="high">
    <?php wp_head(); ?>
</head>
<body <?php if(function_exists('body_class')) body_class(); ?>>
<?php if(function_exists('wp_body_open')) wp_body_open(); ?>
<header>
    <div class="hero-image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png"
             alt="Presidential Candidate"
             width="576" height="397"
             fetchpriority="high"
             decoding="sync">
    </div>
</header>
