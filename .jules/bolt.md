## 2025-05-15 - Critical Rendering Path & Recursion Fix
**Learning:** Found a critical infinite recursion in `header.php` where it called `get_header()`. This made the theme unusable. Also identified standard WordPress bloat (emojis, etc.) and missing LCP optimizations.
**Action:** Always check `header.php` for self-recursion when inheriting legacy themes. Use `wp_head` hooks to surgically remove bloat and `link rel="preload"` for LCP images to improve FCP/LCP.

## 2025-05-15 - Asset Path Integrity
**Learning:** Legacy assets were named with `.jpg.png` extensions. Correcting these in the template to match the filesystem is necessary to avoid 404s, but they should be prioritized for actual conversion to modern formats if tools allow.
**Action:** Verify filesystem filenames exactly when referencing assets in templates.
