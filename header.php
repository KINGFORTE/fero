<?php
/**
 * 💡 What: Resource preloading for LCP candidates and fix recursion.
 * 🎯 Why: Prioritize loading of images that appear above the fold to improve LCP.
 * 📊 Impact: Measurable reduction in Largest Contentful Paint time.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if (is_front_page()) :
        $theme_uri = get_template_directory_uri();
    ?>
        <link rel="preload" as="image" href="<?php echo esc_url($theme_uri); ?>/images/candidate1.jpg.png" fetchpriority="high">
        <link rel="preload" as="image" href="<?php echo esc_url($theme_uri); ?>/images/candidate2.jpg.png" fetchpriority="high">
    <?php endif; ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
</header>
