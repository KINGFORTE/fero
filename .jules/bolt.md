## 2025-05-14 - Infinite Recursion in header.php
**Learning:** In this WordPress theme, `header.php` contained a call to `get_header()`, which causes infinite recursion and prevents the site from loading.
**Action:** Always verify that `header.php` contains the standard HTML head structure and does not call itself.

## 2025-05-14 - Playwright Verification of Local Assets
**Learning:** When using Playwright to verify a local HTML file (`file://` protocol), relative paths for images may fail if the working directory of the browser doesn't match the asset structure.
**Action:** Use absolute paths or ensure assets are correctly located relative to the verification HTML file.
