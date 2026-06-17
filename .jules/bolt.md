## 2026-05-21 - Critical Rendering Path and Security
**Learning:** Found a misnamed 'wordpress.db' which was actually a 'wp-config.php' containing credentials. Also identified a recursive loop in 'header.php' where it called 'get_header()', leading to stack overflow. The primary LCP image was not prioritized and images lacked dimensions, causing layout shifts.
**Action:** Always check for unusual file extensions in root. Standardize 'header.php' to contain only meta/head/body start tags. Preload the primary LCP image and set explicit dimensions on all images.
