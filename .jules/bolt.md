## 2026-05-18 - Fixing Infinite Recursion in WordPress header.php
**Learning:** A common anti-pattern in custom WordPress themes is calling `get_header()` within `header.php`, leading to infinite recursion and server crashes.
**Action:** Always ensure `header.php` contains the opening HTML structure and `wp_head()` without calling `get_header()`.
