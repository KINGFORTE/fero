## 2025-02-11 - [WordPress Infinite Header Recursion]
**Learning:** Infinite recursion in `header.php` occurs when `get_header()` is called inside `header.php`. This is a devastating performance bottleneck that exhausts server resources and prevents the page from loading. Additionally, missing `wp_head()` in `header.php` prevents styles from being enqueued, leading to Layout Shift and poor Core Web Vitals.
**Action:** Always verify that `header.php` contains only the opening HTML structure and `wp_head()`, and that it does not call `get_header()` itself.

## 2026-02-14 - [Over-Lazy-Loading Above-the-Fold Images]
**Learning:** Adding `loading="lazy"` to images that appear in the initial viewport (e.g., the first row of a grid) can negatively impact LCP (Largest Contentful Paint) and Speed Index because the browser may delay the start of the image fetch.
**Action:** Only apply `loading="lazy"` to images that are definitely below the fold. For images in the first row or hero section, use `fetchpriority="high"` for the LCP candidate and default loading for others.

## 2025-02-17 - [LCP Resource Discovery Optimization]
**Learning:** Even with `fetchpriority="high"`, the browser must encounter the `<img>` tag in the HTML before it starts the download. For critical LCP candidates, preloading them in the `<head>` ensures discovery starts as soon as the head is parsed.
**Action:** Use `<link rel="preload">` with `as="image"` and `fetchpriority="high"` in the head for the primary LCP candidate.
