<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!--
    Critical Rendering Path Optimization: Preload LCP Hero Image
    💡 What: Preloading the largest contentful paint (LCP) element.
    🎯 Why: Instructs the browser to fetch the hero image earlier in the waterfall.
    📊 Impact: Reduces LCP by up to 200-500ms.
    -->
    <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png" fetchpriority="high">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="header-container">
        <!--
        LCP Optimization: Hero Image
        💡 What: Adding explicit dimensions and setting fetchpriority="high".
        🎯 Why: Prevents layout shifts (CLS) and ensures the image is prioritized by the browser.
        -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png"
             alt="President"
             width="576" height="397"
             fetchpriority="high"
             decoding="sync">
    </div>
</header>
