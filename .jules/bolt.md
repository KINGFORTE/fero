## 2025-05-15 - Critical Rendering Path and Asset Optimization in WordPress

**Learning:** An infinite recursion bug was found in `header.php` where it was calling `get_header()`, causing the server to hang or crash. Additionally, the default WordPress `wp_head()` injects significant bloat (emojis, generator tags, RSD/WLW links) that increases the document head size and adds unnecessary network requests. Also, the repository contained a misnamed `wordpress.db` which was actually a sensitive PHP config file.

**Action:**
1. Fixed the recursion by removing `get_header()` from inside `header.php` and refactoring it into a standard WordPress header structure.
2. Implemented a `bolt_optimize_wp_head` function in `functions.php` to strip out 10+ redundant hooks from `wp_head`, saving ~1.1KB of HTML and reducing potential HTTP requests.
3. Prioritized the Largest Contentful Paint (LCP) image (`president.jpg.png`) using `<link rel="preload">` and `fetchpriority="high"`.
4. Applied explicit dimensions and `loading="lazy"` to all non-critical images to eliminate Layout Shift (CLS) and defer off-screen asset loading.
5. Removed the insecure `wordpress.db` file and avoided adding new binary assets by reusing existing tracked images.
