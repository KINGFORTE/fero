## 2025-05-14 - Small focused optimizations
**Learning:** Avoid bundling multiple distinct optimizations into one Pull Request, as it increases risk and makes review harder. Never include unused large binary assets in the codebase.
**Action:** Prioritize a single, high-impact optimization (like LCP) and keep the PR diff minimal. Verify all added assets are actually used.

## 2025-05-14 - WordPress Header Structure
**Learning:** In WordPress themes, `header.php` must not contain a recursive `get_header()` call, and it should contain the standard HTML skeleton including `wp_head()`.
**Action:** Always structure `header.php` as a proper header template and use `is_front_page()` or `is_page_template()` for conditional resource preloading.
