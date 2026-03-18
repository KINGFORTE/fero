# Bolt's Performance Journal

## 2025-05-14 - Initial Setup
**Learning:** The theme was in a broken state with `header.php` duplicating `page-home.php`, causing infinite recursion and missing critical WP hooks.
**Action:** Must always verify `header.php` contains only the document head and opening tags, and ensure `wp_head()` and `wp_footer()` are present.

## 2025-05-14 - Scope Focus and Asset Normalization
**Learning:** Combining multiple optimizations (e.g., LCP preloading, bloat removal, and asset renaming) into one PR can be flagged as "over-complete" and rejected. Additionally, inconsistent image extensions (`.jpg.png`) were found to be a codebase-specific anti-pattern.
**Action:** Prioritize a single, high-impact performance optimization per PR (e.g., LCP) and standardize assets early to ensure measurable impact and cleaner diffs.
