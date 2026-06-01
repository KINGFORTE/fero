## 2024-05-15 - Critical Rendering Path Optimization in WordPress
**Learning:** Cleaning up `wp_head` (emojis, RSD, WLW, etc.) combined with LCP preloading and layout shift prevention provides a measurable performance boost in WordPress themes by reducing both the number of initial requests and the time to first paint.
**Action:** Always check `wp_head()` for bloat and ensure the primary hero image is preloaded and has correct dimensions.

## 2024-05-15 - Handling Unusual Asset Extensions
**Learning:** In some legacy or poorly structured repositories, assets may have double extensions (e.g., `.jpg.png`).
**Action:** Always verify the actual file extension and MIME type using `file` or `list_files` before referencing assets in templates to avoid 404s.

## 2024-05-15 - WordPress Recursive Template Loop
**Learning:** Calling `get_header()` inside `header.php` causes an infinite recursion loop in WordPress.
**Action:** Refactor `header.php` to use a standard HTML5 structure without recursive calls.
