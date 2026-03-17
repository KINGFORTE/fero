## 2025-05-14 - Fix header recursion and optimize assets
**Learning:** In this WordPress theme, `header.php` was found to be an incorrect duplicate of the home page template, causing infinite recursion. Additionally, images were incorrectly referenced with `.jpg` extensions when the filesystem had `.jpg.png`, and a missing asset `short1.jpg` was causing 404 errors.
**Action:** Refactor `header.php` to contain only the standard HTML skeleton and `wp_head()`. Update image paths and attributes in `page-home.php`. Always verify filesystem paths for assets to avoid performance-degrading 404s.
