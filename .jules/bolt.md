## 2026-05-21 - LCP Optimization and Recursion Fix
**Learning:** In WordPress themes, a recursive call to `get_header()` inside `header.php` causes an infinite loop or duplicate rendering, severely impacting performance. Additionally, mismatched image extensions in templates (e.g., `.jpg` vs `.jpg.png`) cause 404 errors that delay page load.
**Action:** Always verify `header.php` structure and ensure asset paths in templates exactly match the filesystem. Use `<link rel="preload">` with `fetchpriority="high"` for the Largest Contentful Paint (LCP) candidates identified during profiling.
