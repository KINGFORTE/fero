<?php
/* Template Name: Home */
get_header();
$template_uri = esc_url(get_template_directory_uri());
?>

<div class="grid-container">
    <!-- Presidential Candidates -->
    <div class="grid-item">
        <h3>Presidential Candidates</h3>
        <?php /* Performance: Added fetchpriority="high", explicit dimensions (139x121), and decoding="async" for LCP candidates */ ?>
        <img src="<?php echo $template_uri; ?>/images/candidate1.jpg.png" alt="Candidate" width="139" height="121" decoding="async" fetchpriority="high">
        <img src="<?php echo $template_uri; ?>/images/candidate2.jpg.png" alt="Candidate" width="139" height="121" decoding="async" fetchpriority="high">
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
        <img src="<?php echo $template_uri; ?>/images/video-thumbnail.jpg.png" alt="Video" width="268" height="144" decoding="async">
        <p>Watch now</p>
    </div>

    <!-- Nigerian Shorts -->
    <div class="grid-item">
        <h3>Nigerian Shorts</h3>
        <?php /* Note: short1.jpg.png is missing from the images directory, so only short2 is rendered to prevent 404s. */ ?>
        <img src="<?php echo $template_uri; ?>/images/short2.jpg.png" alt="Short" width="139" height="121" decoding="async">
    </div>

    <!-- Advertisement -->
    <div class="advertisement">
        <h3>Advertise Here</h3>
        <p>Your ad could be here!</p>
        <button>Contact Us</button>
    </div>
</div>

<?php get_footer(); ?>
