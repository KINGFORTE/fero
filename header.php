<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    // ⚡ Bolt: Preload LCP candidates (Presidential Candidate images) for faster visual load.
    $template_uri = esc_url( get_template_directory_uri() );
    if ( is_front_page() || is_page_template( 'page-home.php' ) ) : ?>
        <link rel="preload" href="<?php echo $template_uri; ?>/images/candidate1.jpg.png" as="image" fetchpriority="high">
        <link rel="preload" href="<?php echo $template_uri; ?>/images/candidate2.jpg.png" as="image" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php /* ⚡ Bolt: Removed 425KB logo image to improve LCP; using text-based title for efficiency. */ ?>
            <h1><?php bloginfo( 'name' ); ?></h1>
        </a>
    </div>
</header>
