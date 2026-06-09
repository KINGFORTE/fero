## 2025-05-15 - Critical Rendering Path (CRP) Optimization in WordPress

**Learning:** Identical duplicates of `header.php` and `page-home.php` can lead to recursive `get_header()` calls if not structured correctly, causing infinite loops and site failure. Standard WordPress `wp_head()` output includes ~1KB of unnecessary metadata and scripts (emojis, RSD, WLW) that delay the Critical Rendering Path. Using `decoding="sync"` on hero images can be risky as it may block the main thread during image decoding.

**Action:** Always verify theme structure for recursion when modifying `header.php`. Implement surgical head cleanup via `functions.php` and prioritize LCP assets using `<link rel="preload">` with `fetchpriority="high"`. Avoid `decoding="sync"` for LCP images to prevent blocking the main thread; prefer default or omitting the attribute.
