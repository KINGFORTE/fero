## 2025-02-05 - WordPress Asset and Head Optimization

**Learning:** WordPress themes often contain significant "head bloat" (emojis, RSD links, etc.) and unused core block styles that increase HTML size and number of HTTP requests. Preloading LCP images and using `fetchpriority="high"` can significantly improve the Largest Contentful Paint metric. Hardcoding image dimensions and using `decoding="async"` helps prevent layout shifts and improves perceived performance.

**Action:** Always check `functions.php` for opportunities to remove unnecessary `wp_head` actions and dequeue unused styles. Ensure LCP candidates are identified and prioritized using preload and fetchpriority.
