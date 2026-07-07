<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    // Preload the LCP hero image for better performance
    if ( is_front_page() || is_home() || is_page_template( 'page-home.php' ) ) : ?>
        <link rel="preload" as="image" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/president.jpg.png" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/president.jpg.png"
                 alt="President"
                 width="576"
                 height="397"
                 fetchpriority="high"
                 decoding="async">
        </a>
    </div>
</header>
