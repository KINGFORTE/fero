# Bolt's Performance Journal

## 2025-05-25 - Recursive Header Loop and Asset Resolution
**Learning:** Found a critical performance bottleneck where `header.php` called `get_header()` recursively, leading to infinite loops or extreme overhead. Also discovered assets with double extensions (e.g., `.jpg.png`) that must be referenced exactly to avoid 404s.
**Action:** Always verify theme structure for standard WordPress patterns. Ensure image references in templates match tracked filenames exactly, even if extensions seem incorrect.

## 2025-05-25 - Identifying Image Dimensions without PIL
**Learning:** When Python's `PIL` or `identify` are unavailable in the environment, the Linux `file` command is a reliable fallback for extracting image dimensions from PNGs and JPEGs.
**Action:** Use `file images/*` to quickly gather dimensions for adding `width` and `height` attributes to prevent layout shifts.

## 2025-05-25 - Security Liability in Repository
**Learning:** Found a file named `wordpress.db` which was actually a `wp-config.php` file containing database credentials. This is a major security risk and confusing naming convention.
**Action:** Always scrutinize files with unusual extensions; they might be misnamed configuration files that should be excluded from version control or renamed/integrated properly.
