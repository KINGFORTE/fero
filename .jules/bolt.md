## 2026-07-02 - [Critical Rendering Path Optimization]
**Learning:** Found a fatal recursion loop in `header.php` caused by `get_header()` calling itself. Also identified that preloading the primary LCP image (`president.jpg.png`) and using `fetchpriority="high"` significantly improves the Critical Rendering Path.
**Action:** Always check for recursive calls in WordPress theme headers and prioritize hero assets using preloads and fetchpriority.
