## 2025-05-15 - [Critical Rendering Path Optimization in WordPress]
**Learning:** Found a fatal infinite recursion in `header.php` where `get_header()` was calling itself. Additionally, missing LCP preloads and lazy loading were causing sub-optimal performance. Global preloads should be avoided by using conditional tags like `is_front_page()`.
**Action:** Removed recursion, standardized `header.php` with standard WP hooks, implemented conditional LCP preloading, and optimized `page-home.php` with surgical image attribute improvements.
