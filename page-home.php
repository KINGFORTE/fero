<?php
/* Template Name: Home */
get_header();
$theme_uri = get_template_directory_uri();
?>

<div class="grid-container">
    <!-- Presidential Candidates -->
    <div class="grid-item">
        <h3>Presidential Candidates</h3>
        <!-- 💡 What: Correct extensions and add fetchpriority for LCP. -->
        <img src="<?php echo esc_url($theme_uri); ?>/images/candidate1.jpg.png" alt="Candidate" fetchpriority="high" width="139" height="121" decoding="async">
        <img src="<?php echo esc_url($theme_uri); ?>/images/candidate2.jpg.png" alt="Candidate" fetchpriority="high" width="139" height="121" decoding="async">
    </div>

    <!-- Voter Instructions -->
    <div class="grid-item">
        <h3>Voter Instructions</h3>
        <p>Step 1: Register.</p>
        <p>Step 2: Vote responsibly.</p>
    </div>

    <!-- Video Page -->
    <div class="grid-item">
        <h3>Video Page</h3>
        <img src="<?php echo esc_url($theme_uri); ?>/images/video-thumbnail.jpg.png" alt="Video" loading="lazy" width="268" height="144" decoding="async">
        <p>Watch now</p>
    </div>

    <!-- Nigerian Shorts -->
    <div class="grid-item">
        <h3>Nigerian Shorts</h3>
        <!-- Correct missing short1.jpg and extension for short2.jpg.png -->
        <!-- Note: short1.jpg is missing from filesystem, removing or leaving it as broken -->
        <!-- Looking at filesystem, only short2.jpg.png exists -->
        <img src="<?php echo esc_url($theme_uri); ?>/images/short2.jpg.png" alt="Short" loading="lazy" width="139" height="121" decoding="async">
    </div>

    <!-- Advertisement -->
    <div class="advertisement">
        <h3>Advertise Here</h3>
        <p>Your ad could be here!</p>
        <button>Contact Us</button>
    </div>
</div>

<?php get_footer(); ?>
