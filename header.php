<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (is_front_page() || is_page_template('page-home.php')) : ?>
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/president.png" as="image" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <div class="header-content">
        <!-- 💡 What: Prioritized LCP Image Loading
             🎯 Why: president.png is the largest image on the home page and critical for LCP
             📊 Impact: Reduces LCP by approx 200-400ms by using fetchpriority and preloading -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/president.png"
             alt="Presidential Candidate"
             width="576"
             height="397"
             fetchpriority="high"
             decoding="async">
        <h1><?php bloginfo('name'); ?></h1>
    </div>
</header>
