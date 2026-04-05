# Bolt's Performance Journal

## 2024-04-05 - Initial Codebase Audit
**Learning:** Found an infinite recursion in the WordPress theme where `header.php` calls `get_header()`. Also found broken image paths (.jpg vs .jpg.png) causing 404s and a missing LCP optimization strategy.
**Action:** Replace `header.php` with a standard WP header structure to break recursion and fix image paths/add preloads.
