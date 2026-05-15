<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <?php
    /**
     * ⚡ Bolt: Performance Optimization
     * 💡 What: Explicit dimensions and fetchpriority for LCP
     * 🎯 Why: Prevent CLS and prioritize LCP loading
     */
    ?>
    <img src="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png" alt="Presidential Candidate" width="576" height="397" fetchpriority="high" decoding="async">
</header>
