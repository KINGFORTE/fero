## 2025-05-15 - Critical Rendering Path and Recursion Fix
**Learning:** Discovered an infinite recursion loop in `header.php` where `get_header()` was called within itself. Additionally, the theme lacked a proper HTML5 document head, preventing efficient asset preloading for LCP.
**Action:** Refactor `header.php` to remove recursion, establish a proper `<head>` section, and implement `<link rel="preload">` for the hero image to optimize the Critical Rendering Path.
