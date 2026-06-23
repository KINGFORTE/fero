## 2026-06-23 - Critical Rendering Path and Recursion Fix
**Learning:** The theme had a fatal recursive get_header() call in header.php and multiple asset 404s due to incorrect file extensions (.jpg vs .jpg.png). Preloading the 416KB hero image significantly improves LCP discovery.
**Action:** Always verify header.php for recursive calls and use 'file' or 'identify' to confirm exact asset extensions and dimensions before optimizing loading strategies.
