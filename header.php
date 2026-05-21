<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    // ⚡ Bolt: Preload LCP hero image to optimize Critical Rendering Path
    // 📊 Impact: Significant reduction in LCP by starting image download earlier.
    if ( is_front_page() || is_page_template( 'page-home.php' ) ) : ?>
        <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <h1><?php bloginfo( 'name' ); ?></h1>
    <?php
    // ⚡ Bolt: Prioritize LCP image loading with fetchpriority="high" and loading="eager"
    // 📊 Impact: Tells the browser this is the most important image to load first.
    if ( is_front_page() || is_page_template( 'page-home.php' ) ) : ?>
        <div class="hero">
            <img src="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png"
                 alt="Presidential Hero"
                 width="576"
                 height="397"
                 fetchpriority="high"
                 loading="eager"
                 decoding="async">
        </div>
    <?php endif; ?>
</header>
