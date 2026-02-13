## 2025-05-22 - [WordPress Theme Recursion and Bloat]
**Learning:** In WordPress, calling `get_header()` inside `header.php` causes infinite recursion. Also, always check for unused binary assets in the `images/` directory which can bloat the repository without adding value.
**Action:** Verify theme template structure against WordPress standards and audit assets before submission.
