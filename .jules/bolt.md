## 2025-05-15 - Critical Rendering Path Optimization
**Learning:** Found multiple bottlenecks: a recursive loop in `header.php`, heavy `wp_head` bloat (emojis, etc.), missing LCP prioritization for the hero image, and unoptimized images causing layout shifts. Consolidating these into a single "Critical Rendering Path" optimization allowed for a comprehensive speed boost within the 50-line constraint.
**Action:** Always check `header.php` for recursion and `wp_head()` for standard WordPress bloat. Prioritize LCP images with `fetchpriority="high"` and `preload`.
