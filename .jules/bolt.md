## 2025-01-24 - [Critical Rendering Path & Recursion Fix]
**Learning:** Found a recursive loop in `header.php` where `get_header()` called itself, which would prevent the site from loading. Additionally, identified that standardizing `wp_head()` and preloading the LCP image (`president.jpg.png`) significantly improves performance.
**Action:** Always verify `header.php` for recursion when working with WordPress themes. Use `fetchpriority="high"` and `<link rel="preload">` for LCP assets in the head.

## 2025-01-24 - [WordPress Asset Naming & Dimensions]
**Learning:** The codebase used unusual double extensions (`.jpg.png`) and lacked image dimensions, causing layout shifts. Missing assets (like `short1.jpg`) were causing 404s.
**Action:** Verify actual file extensions in the `images/` directory and explicitly set `width` and `height` to prevent Layout Shift. Use `loading="lazy"` and `decoding="async"` for all non-LCP images.
