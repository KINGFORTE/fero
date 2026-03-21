## 2025-05-15 - Optimizing WordPress Theme for LCP and Asset Loading
**Learning:** In WordPress, high-impact LCP improvements can be achieved by using `fetchpriority="high"` on critical viewport images and `loading="lazy"` on below-the-fold content. Cleaning up the `<head>` by removing emojis and unused links further reduces the critical path.
**Action:** Always verify image dimensions and path correctness (especially double extensions like `.jpg.png`) to avoid 404s. Ensure `header.php` doesn't accidentally duplicate home page content.

## 2025-05-15 - Avoiding Breaking Changes and Misleading Files
**Learning:** Dequeuing `wp-block-library` is a breaking change if Gutenberg blocks are used. Naming PHP configuration files with non-PHP extensions like `.db` can expose credentials.
**Action:** Keep optimizations targeted and non-breaking. Always use `.php` for files containing PHP and delete sensitive or misleading temporary files before submission.
