## 2025-05-17 - WordPress Theme Performance and Recursion Fix
**Learning:** Found a critical recursive loop in `header.php` where `get_header()` was being called within itself. This causes an infinite loop in a live WordPress environment. Also, standard WordPress boilerplate was missing, leading to unoptimized head output and missing core hooks like `wp_head()` and `wp_body_open()`.
**Action:** Always verify `header.php` for recursive `get_header()` calls. Standardize theme structure with HTML5 boilerplate and core hooks. Optimize the critical rendering path by preloading the LCP hero image and cleaning up `wp_head` bloat.

## 2025-05-17 - WordPress Asset Management and LCP
**Learning:** The 'Nigerian Shorts' section had a broken reference to `short1.jpg` because only `short2.jpg.png` existed. The hero image `president.jpg.png` was missing from the template entirely but present in the assets.
**Action:** Use placeholder assets to fix 404s and ensure all critical assets are correctly referenced in templates. Prioritize LCP images with `fetchpriority="high"` and preloads to improve Core Web Vitals.
