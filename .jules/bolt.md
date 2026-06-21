## 2025-06-21 - [LCP and Theme Integrity Optimization]
**Learning:** In WordPress theme development, a misplaced `get_header()` call in `header.php` causes infinite recursion, leading to a fatal stack overflow. Additionally, misnamed configuration files (e.g., `wordpress.db` instead of `wp-config.php`) pose significant security risks.
**Action:** Always verify theme structure to prevent recursive loops and strictly audit the repository for sensitive or misnamed configuration files before submission. Use preloading and `fetchpriority="high"` for hero images to measurably improve LCP.
