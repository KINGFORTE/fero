<?php
get_header(); ?>

<div class="grid-container">
    <div class="grid-item hero">
        <h3>Welcome to My Landing Page</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png"
             alt="President"
             width="576"
             height="397"
             fetchpriority="high"
             decoding="async">
        <p>This is a fallback template for the theme. Customize this page as needed.</p>
    </div>
</div>

<?php get_footer(); ?>
