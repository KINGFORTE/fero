## 2025-05-22 - Identifying Recursive Includes and Asset 404s
**Learning:** WordPress themes can sometimes contain critical flaws like infinite recursion in `header.php` (calling `get_header()`) and broken asset paths (404s) due to double extensions (e.g., `.jpg.png`). These issues significantly degrade both performance and correctness.
**Action:** Always check for recursive function calls in template files and verify filesystem extensions against template references.

## 2025-05-22 - WP Head Bloat and Resource Prioritization
**Learning:** Default WordPress `wp_head()` includes many unnecessary scripts and tags (emojis, generator tags) that increase payload size. Proper use of `fetchpriority="high"` and `decoding="async"` on LCP candidates significantly improves perceived load time.
**Action:** Use a cleanup function in `functions.php` to prune `wp_head()` and apply specific loading attributes to critical above-the-fold assets.
