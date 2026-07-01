## 2025-05-15 - [Critical Rendering Path Optimization]
**Learning:** Found a fatal infinite recursion loop in `header.php` where `get_header()` was called within itself. Additionally, identified that the primary LCP image was missing preloading and fetch priority, while other assets lacked basic optimizations like lazy loading and explicit dimensions.
**Action:** Removed recursion, implemented HTML5 boilerplate with `wp_head()`, added LCP preloading with `fetchpriority="high"`, and applied performance attributes (`loading="lazy"`, `width`, `height`) to all template images. Corrected asset extensions to prevent 404s.

## 2025-05-15 - [Surgical Precision and Repository Hygiene]
**Learning:** Development artifacts (screenshots, mock scripts) must never be committed to production branches. PHP closing tags `?>` in `functions.php` should be omitted to prevent accidental whitespace injection. Surgical precision requires modifying existing files rather than creating new theme structures from scratch.
**Action:** Used `replace_with_git_merge_diff` for surgical edits, deleted sensitive misnamed files (`wordpress.db`), removed all `verification/` artifacts, and removed trailing PHP closing tags.
