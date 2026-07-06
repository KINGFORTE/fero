## 2025-05-15 - Fixing Infinite Recursion and Optimizing LCP in WordPress

**Learning:**
1. Calling `get_header()` within `header.php` causes an infinite recursion loop that crashes the PHP process. This is a critical performance and stability bottleneck.
2. The Largest Contentful Paint (LCP) can be significantly improved by preloading the hero image in the `<head>` and using `fetchpriority="high"` on the `<img>` tag.
3. Assets in legacy or inherited codebases may have unconventional naming (e.g., `.jpg.png`); referencing them correctly is essential to avoid 404s that degrade the user experience and trigger unnecessary server requests.
4. Security liabilities like orphaned database files (e.g., `wordpress.db`) in the web root pose a critical risk and should be purged immediately.

**Action:**
1. Always verify that `header.php` contains the document structure and `wp_head()` but never calls `get_header()`.
2. Implement `<link rel="preload">` conditionally in `header.php` for the LCP candidate of the homepage.
3. Use `fetchpriority="high"` for the primary hero image and `loading="lazy"` for all below-the-fold assets.
4. Audit the root directory for sensitive files before finalizing any performance PR.
