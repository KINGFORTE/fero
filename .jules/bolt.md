## 2024-05-24 - [Recursive Header and Asset Optimization]
**Learning:** Found that `header.php` was a duplicate of the home page template and included a recursive `get_header()` call, which causes infinite loops in WordPress. Additionally, image assets had incorrect extensions (e.g., `.jpg.png`), leading to 404 errors.
**Action:** Always refactor `header.php` to a standard HTML skeleton and verify asset extensions. Apply `link rel="preload"` and `fetchpriority="high"` for the LCP candidate image to improve perceived performance.
