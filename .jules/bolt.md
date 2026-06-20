## 2025-05-14 - [Critical Rendering Path Optimization in WordPress]
**Learning:** In legacy or "broken" WordPress themes, the most significant performance win often comes from fixing architectural errors (like infinite recursion in `header.php`) and standardizing the Critical Rendering Path. Preloading the LCP candidate with `fetchpriority="high"` provides a measurable boost to perceived performance.
**Action:** Always check `header.php` for standard HTML tags and potential recursion loops. Identify the LCP element early and use `<link rel="preload">` in the head.
