## 2025-05-15 - Fixing Theme Recursion and Optimizing LCP
**Learning:** In WordPress themes, calling `get_header()` inside `header.php` causes infinite recursion. Also, images with double extensions like `.jpg.png` are common in some asset exports and must be matched exactly in templates to avoid 404s.
**Action:** Always verify `header.php` doesn't call itself and check exact filesystem paths for images before referencing them in PHP templates.

## 2025-05-15 - Enhancing Performance by Removing WP Bloat
**Learning:** Default WordPress `wp_head()` includes many unnecessary tags (emojis, RSD, WLW) that increase HTML size and add HTTP requests.
**Action:** Use `remove_action` in `functions.php` to clean up `wp_head` for lean, high-performance themes.
