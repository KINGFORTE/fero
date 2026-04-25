## 2026-04-25 - Recursion Anti-pattern in header.php
**Learning:** Found that `header.php` was calling `get_header()`, which leads to infinite recursion and a "white screen of death" or memory exhaustion. This is a critical performance and correctness bottleneck.
**Action:** Always ensure `header.php` contains the actual `<head>` and opening `<body>` tags and uses `wp_head()`, rather than calling `get_header()` which is intended to *include* `header.php`.
