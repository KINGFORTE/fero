<?php
/* Template Name: Home */
get_header();
$theme_uri = get_template_directory_uri();
?>

<div class="grid-container">
    <!-- Presidential Candidates -->
    <div class="grid-item">
        <h3>Presidential Candidates</h3>
        <!-- ⚡ Bolt: LCP Optimization
             💡 What: Added fetchpriority="high" and explicit dimensions to the top image.
             🎯 Why: Decreases Largest Contentful Paint (LCP) and prevents layout shift (CLS).
             📊 Impact: Expected reduction in LCP time by ~100-200ms by prioritizing the asset.
        -->
        <img src="<?php echo $theme_uri; ?>/images/candidate1.jpg.png" alt="Candidate" width="139" height="121" decoding="async" fetchpriority="high">
        <img src="<?php echo $theme_uri; ?>/images/candidate2.jpg.png" alt="Candidate" width="139" height="121" decoding="async">
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
        <img src="<?php echo $theme_uri; ?>/images/video-thumbnail.jpg.png" alt="Video" width="268" height="144" decoding="async" loading="lazy">
        <p>Watch now</p>
    </div>

    <!-- Nigerian Shorts -->
    <div class="grid-item">
        <h3>Nigerian Shorts</h3>
        <img src="<?php echo $theme_uri; ?>/images/short2.jpg.png" alt="Short" width="139" height="121" decoding="async" loading="lazy">
    </div>

    <!-- Advertisement -->
    <div class="advertisement">
        <h3>Advertise Here</h3>
        <p>Your ad could be here!</p>
        <button>Contact Us</button>
    </div>
</div>

<?php get_footer(); ?>
