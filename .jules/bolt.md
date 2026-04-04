## 2025-04-04 - Fixing Theme Recursion and Optimizing Asset Loading
**Learning:** Initial theme files in the `KINGFORTE-patch-1` branch contained a critical performance bug: `header.php` called `get_header()`, causing infinite recursion. Additionally, images had redundant `.jpg.png` extensions, leading to 404 errors when referenced as `.jpg`.
**Action:** Always verify theme structure for recursive calls and use `file` or `ls` to confirm actual asset extensions before referencing them in templates. Use `fetchpriority="high"` and preloads for LCP candidates to improve loading performance.
