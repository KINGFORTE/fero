## 2025-05-14 - Critical Rendering Path and Recursion Fix
**Learning:** Found an infinite loop in `header.php` caused by a recursive `get_header()` call, which would crash any WordPress environment. Additionally, the Largest Contentful Paint (LCP) was hindered by lack of preloading and incorrect image extensions in templates.
**Action:** Always verify `header.php` structure for standard WordPress tags and implement `<link rel="preload">` with `fetchpriority="high"` for the primary hero image to optimize the Critical Rendering Path.
