## 2024-05-24 - WordPress Performance Baseline
**Learning:** Standardizing a WordPress theme requires more than just templates; `header.php` must not call `get_header()` recursively, and `functions.php` is the primary location for dequeuing unused core assets.
**Action:** Always verify the standard HTML structure in `header.php` and use `php -l` for syntax checks on all theme files.
