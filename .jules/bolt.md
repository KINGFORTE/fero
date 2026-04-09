## 2024-04-09 - WordPress Landing Page Performance Optimization
**Learning:** Initial theme files had recursive `get_header()` calls in `header.php`, causing potential infinite loops or rendering errors. The standard WordPress `<head>` outputs many unnecessary links and scripts (emojis, generator tags) that increase HTML size and requests. Large binary PNGs were incorrectly named with double extensions (.jpg.png).

**Action:** Corrected template hierarchy by fixing `header.php`. Implemented `wp_head` cleanup in `functions.php` while carefully retaining REST API and oEmbed discovery links to avoid breaking core functionality. Optimized LCP candidates using `fetchpriority="high"` and `decoding="async"`. Refactored asset names for correctness and removed unreferenced large binaries.
