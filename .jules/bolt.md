## 2025-05-15 - [WordPress Theme Recursion and Asset Optimization]
**Learning:** Identifying and fixing a recursion bug (header.php calling get_header()) is a critical performance and correctness win. Combining this with LCP preloads and cleaning up wp_head bloat significantly improves perceived and actual load times.
**Action:** Always check for recursive function calls in WordPress template files and ensure assets are preloaded with correct fetchpriority.
