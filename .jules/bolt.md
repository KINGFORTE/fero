## 2026-02-22 - [WordPress Theme Performance and Structural Fixes]
**Learning:** In WordPress themes, calling `get_header()` inside `header.php` causes infinite recursion, which is a critical performance and functional failure. Also, unoptimized `<head>` sections in WordPress contribute significant bloat via emoji scripts and unused block styles.
**Action:** Always verify `header.php` contains the standard HTML structure and `wp_head()` without calling itself. Implement head cleanup and asset preloading to improve LCP and reduce TTI.
