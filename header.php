<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (is_front_page() || is_page_template('page-home.php')) : ?>
        <!-- 💡 Optimization: Preload LCP hero image for faster Critical Rendering Path -->
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/president.png" as="image" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="header-content">
        <!-- 🎯 Why: Primary LCP candidate, prioritized with fetchpriority="high" and decoding="async" -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/president.png"
             alt="President"
             width="576"
             height="397"
             fetchpriority="high"
             decoding="async">
    </div>
</header>
