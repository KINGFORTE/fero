## 2025-05-22 - [Infinite Recursion in header.php]
**Learning:** In this WordPress theme, 'header.php' was calling 'get_header()', causing an infinite recursion loop that crashes the page. This is a severe performance and functional bottleneck.
**Action:** Move global HTML structure to 'header.php' and remove 'get_header()' calls from it.

## 2025-05-22 - [Standardizing Image Extensions]
**Learning:** Inconsistent image extensions (e.g., '.jpg.png') cause confusion and potential broken links. Standardizing to single extensions makes asset management cleaner and more efficient.
**Action:** Rename all '.jpg.png' to '.png' and update template references.

## 2025-05-22 - [Sensitive Config in Repo]
**Learning:** Found a file named 'wordpress.db' which was actually a 'wp-config.php' file containing sensitive database credentials and salts. This is a severe security risk and violates repository best practices.
**Action:** Immediately remove 'wordpress.db' and ensuring no sensitive config is committed.

## 2025-05-22 - [Removing Unused Assets]
**Learning:** Large unreferenced assets (like 'president.png' at 400KB+) contribute to repository bloat and could accidentally be loaded, impacting performance.
**Action:** Identify and remove unreferenced assets to keep the theme lightweight.
