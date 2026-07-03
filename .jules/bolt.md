## 2024-07-03 - [Critical Rendering Path Optimization]
**Learning:** Found a fatal infinite recursion loop in `header.php` where `get_header()` was called within itself. Also identified that the main LCP candidate (president.jpg.png) was not prioritized or preloaded.
**Action:** Always check for recursive `get_header()` calls in WordPress themes. Implement `<link rel="preload">` and `fetchpriority="high"` for the primary hero image to improve LCP.
