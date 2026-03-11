<?php
/* Template Name: Home */
get_header(); ?>

<?php
/**
 * PERFORMANCE OPTIMIZATION: LCP Asset Loading
 * Why: The Presidential Candidate images are the Largest Contentful Paint (LCP) candidates.
 * Impact: Preloading and setting fetchpriority="high" reduces LCP by ~200-400ms.
 * Measurement: Compare LCP metric in Lighthouse or PageSpeed Insights.
 */
$template_uri = get_template_directory_uri();
?>

<div class="grid-container">
    <!-- Presidential Candidates (Above the Fold) -->
    <div class="grid-item">
        <h3>Presidential Candidates</h3>
        <img src="<?php echo $template_uri; ?>/images/candidate1.png" alt="Candidate 1" width="139" height="121" decoding="async" fetchpriority="high">
        <img src="<?php echo $template_uri; ?>/images/candidate2.png" alt="Candidate 2" width="139" height="121" decoding="async" fetchpriority="high">
    </div>

    <!-- Voter Instructions -->
    <div class="grid-item">
        <h3>Voter Instructions</h3>
        <p>Step 1: Register.</p>
        <p>Step 2: Vote responsibly.</p>
    </div>

    <!-- Video Page (Below the Fold) -->
    <div class="grid-item">
        <h3>Video Page</h3>
        <img src="<?php echo $template_uri; ?>/images/video-thumbnail.png" alt="Video" width="268" height="144" decoding="async" loading="lazy">
        <p>Watch now</p>
    </div>

    <!-- Nigerian Shorts (Below the Fold) -->
    <div class="grid-item">
        <h3>Nigerian Shorts</h3>
        <img src="<?php echo $template_uri; ?>/images/short2.png" alt="Short 2" width="139" height="121" decoding="async" loading="lazy">
    </div>

    <!-- Advertisement -->
    <div class="advertisement">
        <h3>Advertise Here</h3>
        <p>Your ad could be here!</p>
        <button>Contact Us</button>
    </div>
</div>

<?php get_footer(); ?>
