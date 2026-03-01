## 2025-05-24 - LCP Image Loading Optimization
**Learning:** In WordPress themes, prioritizing the Largest Contentful Paint (LCP) image through preloading and fetchpriority can significantly reduce perceived load time.
**Action:** Always identify the LCP candidate early and apply preloading with high priority.

## 2025-05-24 - Avoid Committing Sensitive/Misnamed Configs
**Learning:** Files like `wordpress.db` that contain PHP configuration (like `wp-config.php`) are security risks and confusing if misnamed.
**Action:** Scan for and remove sensitive or misnamed configuration files before submission.

## 2025-05-24 - Conditional Resource Preloading
**Learning:** Global preloading of page-specific assets in `header.php` can cause performance regressions on other pages by wasting bandwidth.
**Action:** Use WordPress conditional tags like `is_front_page()` or `is_page_template()` to scoped preloading to relevant pages only.

## 2025-05-24 - Optimized Responsive Grid
**Learning:** Using `grid-template-columns: repeat(auto-fit, minmax(280px, 1fr))` ensures a responsive layout without media queries, improving maintenance and performance.
**Action:** Use `auto-fit` with `minmax` for flexible, responsive grid containers.
