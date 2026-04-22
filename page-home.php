<?php
/* Template Name: Home */
get_header(); ?>

<main class="grid-container">
    <!-- Presidential Candidates -->
    <section class="grid-item">
        <h3>Presidential Candidates</h3>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/candidate1.png" alt="Candidate 1" width="139" height="121" decoding="async" fetchpriority="high">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/candidate2.png" alt="Candidate 2" width="139" height="121" decoding="async" loading="lazy">
    </section>

    <!-- Voter Instructions -->
    <section class="grid-item">
        <h3>Voter Instructions</h3>
        <p>Step 1: Register.</p>
        <p>Step 2: Vote responsibly.</p>
    </section>

    <!-- Video Page -->
    <section class="grid-item">
        <h3>Video Page</h3>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/video-thumbnail.png" alt="Video Thumbnail" width="268" height="144" decoding="async" loading="lazy">
        <p>Watch now</p>
    </section>

    <!-- Nigerian Shorts -->
    <section class="grid-item">
        <h3>Nigerian Shorts</h3>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/short1.png" alt="Nigerian Short 1" width="139" height="121" decoding="async" loading="lazy">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/short2.png" alt="Nigerian Short 2" width="139" height="121" decoding="async" loading="lazy">
    </section>

    <!-- Advertisement -->
    <section class="advertisement">
        <h3>Advertise Here</h3>
        <p>Your ad could be here!</p>
        <button>Contact Us</button>
    </section>
</main>

<?php get_footer(); ?>
