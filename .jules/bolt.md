## 2025-03-11 - Optimizing LCP for WordPress Themes

**Learning:** In custom WordPress themes, the Largest Contentful Paint (LCP) is often delayed by images that are discovered late by the browser's scanner. Simply adding `fetchpriority="high"` to the `<img>` tag is helpful, but preloading those assets in the `<head>` (especially for the front page) can significantly improve the LCP by starting the download even before the main HTML is fully parsed.

**Action:** Always identify LCP candidates (usually hero images or the first items in a grid) and use `<link rel="preload">` in `header.php` combined with `fetchpriority="high"` on the corresponding image tags. Ensure a baseline measurement exists to quantify the improvement.
