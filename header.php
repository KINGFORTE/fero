<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    // Optimization: Preload the LCP hero image only on relevant pages to improve Critical Rendering Path
    if ( is_front_page() || is_home() || is_page_template( 'page-home.php' ) ) : ?>
        <link rel="preload" as="image" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/president.jpg.png" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <h1><?php bloginfo( 'name' ); ?></h1>
    <?php
    // Optimization: Display hero image with high fetch priority to reduce LCP
    if ( is_front_page() || is_home() || is_page_template( 'page-home.php' ) ) : ?>
        <div class="hero-section">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/president.jpg.png"
                 alt="Presidential Hero Image"
                 width="576" height="397"
                 fetchpriority="high"
                 decoding="async">
        </div>
    <?php endif; ?>
</header>
