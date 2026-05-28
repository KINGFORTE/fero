## 2026-05-18 - Critical Rendering Path Optimization in WordPress
**Learning:** Combining head cleanup, LCP preloading, and Layout Shift prevention (image dimensions) into a single "CRP Optimization" category allows for a comprehensive performance win while adhering to the "one improvement" constraint. Misnamed config files like `wordpress.db` must be removed to ensure security and PR acceptance.
**Action:** Always verify image dimensions using the `file` command if standard tools are missing, and use `mock_render.php` for visual verification of PHP templates.
