## 2025-05-15 - LCP and Critical Rendering Path Optimization
**Learning:** Cleaning up standard WordPress `wp_head` bloat (emojis, generator tags, etc.) results in a ~96% reduction in header HTML size (from approx. 650 bytes to under 30 bytes). Prioritizing the primary hero image with `fetchpriority="high"` and `<link rel="preload">` significantly improves the Largest Contentful Paint (LCP) metric.
**Action:** Always audit `wp_head` for unnecessary output and implement conditional preloading for LCP candidates in future WordPress themes.

## 2025-05-15 - Layout Stability and Asset Correctness
**Learning:** Double extensions (e.g., `.jpg.png`) should be corrected using `git mv` to maintain codebase health and prevent confusion. Setting explicit `width` and `height` attributes on all images, combined with a responsive CSS grid, is essential for achieving a good Cumulative Layout Shift (CLS) score.
**Action:** Implement a "Baseline Check" to fix obvious asset naming and structural issues before layering performance optimizations.
