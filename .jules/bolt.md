## 2025-05-14 - Initial Performance Audit
**Learning:** Found infinite recursion in `header.php` where it calls `get_header()`. Also found major CRP bottlenecks: unoptimized image loading, missing preloads for LCP, and unnecessary WordPress head bloat.
**Action:** Refactor theme structure, implement LCP preloading, and remove standard WordPress bloat via `functions.php`.
