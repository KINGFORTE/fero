# Bolt's Performance Journal

## 2026-03-23 - [LCP Optimization & Resource Loading]
**Learning:** LCP preloads should be conditional to avoid performance regressions on other pages. Preloading images globally consumes bandwidth and may compete with critical resources of non-homepage views.
**Action:** Use conditional tags like `is_front_page()` or `is_page_template()` in `header.php` to target LCP preloads.

## 2026-03-23 - [PR Focus and Clean Code]
**Learning:** Large PRs containing both theme development and performance optimization are harder to review and risk introducing test artifacts (mocks/scripts) into production.
**Action:** Keep PRs focused on specific optimizations. Ensure all temporary verification scripts are removed before submission.
