<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    // Performance: Preload the Largest Contentful Paint (LCP) image for faster discovery.
    // This 416KB asset is the primary visual element and critical for CRP.
    $template_uri = get_template_directory_uri();
    echo '<link rel="preload" as="image" href="' . esc_url($template_uri . '/images/president.jpg.png') . '" fetchpriority="high">';
    ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <h1>Presidential Information Portal</h1>
    <?php /* Hero image optimized with fetchpriority="high" and dimensions to prevent Layout Shift */ ?>
    <img src="<?php echo esc_url($template_uri . '/images/president.jpg.png'); ?>" alt="President Hero Image" width="576" height="397" fetchpriority="high" decoding="async">
</header>
