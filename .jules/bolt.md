## 2025-02-11 - [WordPress Infinite Header Recursion]
**Learning:** Infinite recursion in `header.php` occurs when `get_header()` is called inside `header.php`. This is a devastating performance bottleneck that exhausts server resources and prevents the page from loading. Additionally, missing `wp_head()` in `header.php` prevents styles from being enqueued, leading to Layout Shift and poor Core Web Vitals.
**Action:** Always verify that `header.php` contains only the opening HTML structure and `wp_head()`, and that it does not call `get_header()` itself.
