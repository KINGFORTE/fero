<?php
function get_header() { include 'header.php'; }
function get_footer() { include 'footer.php'; }
function wp_head() { echo "<!-- Mock wp_head -->\n"; }
function wp_footer() { echo "<!-- Mock wp_footer -->\n"; }
function get_template_directory_uri() { return '.'; }
function language_attributes() { echo 'lang="en-US"'; }
function bloginfo($show = '') { if ($show == 'charset') echo 'UTF-8'; }
function is_front_page() { return true; }
function body_class() { echo 'class="home"'; }
function __($text, $domain) { return $text; }

ob_start();
include 'page-home.php';
$output = ob_get_clean();
file_put_contents('mock_output_final.html', $output);
