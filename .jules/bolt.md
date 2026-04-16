## 2025-04-16 - [Critical Rendering Path Optimization in WordPress]
**Learning:** Standard WordPress headers often contain significant bloat (emojis, RSD, WLW) that can be removed for a ~96% reduction in header HTML size. Additionally, recursive template calls (e.g., header.php calling get_header()) are critical performance bottlenecks that prevent page rendering.
**Action:** Always audit `wp_head()` output and template inclusion logic for recursion and redundant assets when optimizing WordPress themes.
