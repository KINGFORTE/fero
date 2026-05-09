<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if (is_front_page() || is_page_template('page-home.php')) {
        echo '<link rel="preload" href="' . get_template_directory_uri() . '/images/president.png" as="image" fetchpriority="high">';
    }
    ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <h1>Fero Landing Page</h1>
    <img src="<?php echo get_template_directory_uri(); ?>/images/president.png" alt="Presidential Candidate" width="576" height="397" fetchpriority="high" decoding="async">
</header>
