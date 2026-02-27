<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( is_front_page() || is_page_template( 'page-home.php' ) ) : ?>
        <!-- Preload the LCP image only on the homepage to improve loading speed without wasting bandwidth on other pages -->
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/candidate1.jpg.png" as="image" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
</header>
