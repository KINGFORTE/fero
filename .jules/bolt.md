## 2025-06-11 - [Critical Rendering Path Optimization in WordPress Theme]
**Learning:** Found a recursive `get_header()` loop in `header.php` which would cause infinite loops. Additionally, 'wp_head' bloat and lack of LCP optimization were identified as key bottlenecks.
**Action:** Use surgical `replace_with_git_merge_diff` for template fixes. Prioritize LCP images with `fetchpriority="high"` and `<link rel="preload">`. Fix incorrect asset extensions in templates to avoid 404s.
