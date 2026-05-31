## 2025-05-15 - Critical Rendering Path & Theme Structure Optimization

**Learning:** Identical duplicates of `header.php` and `page-home.php` existed, with `header.php` containing a recursive `get_header()` call that would cause an infinite loop in a real WordPress environment. Additionally, the default WordPress `wp_head()` contains significant bloat (emojis, meta tags) that adds unnecessary bytes and requests.

**Action:** Refactored `header.php` to a standard structure, implemented LCP preloading for the hero image (`president.jpg.png`), and used `functions.php` to strip `wp_head` bloat. Always verify image extensions against tracked assets to avoid 404s (e.g., `.jpg.png` vs `.jpg`).
