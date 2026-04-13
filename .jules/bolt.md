## 2024-04-13 - WordPress Theme Performance Audit
**Learning:** The current WordPress theme has several critical performance bottlenecks:
1. Recursive `get_header()` call in `header.php` which causes infinite loops or crashes.
2. Unoptimized WordPress head with unnecessary scripts and links (bloat).
3. Incorrect file extensions for images (.jpg.png) causing confusion and potentially incorrect MIME types.
4. Large, unoptimized images (like `president.jpg.png` at 416KB) and missing loading optimizations (LCP).
5. Presence of `wordpress.db` which is a security risk and unnecessary codebase weight.

**Action:** Fix recursion in `header.php`, clean up `wp_head` in `functions.php`, rename images to correct extensions, optimize image loading with `fetchpriority` and `decoding`, and remove the database file.
