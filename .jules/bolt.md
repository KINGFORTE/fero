# Bolt's Performance Journal

## 2025-05-15 - Fixing Theme Structure and Bloat
**Learning:** The initial theme structure had a critical recursion bug where `header.php` called `get_header()`. Also, `wordpress.db` was a misnamed `wp-config.php`, which is a security risk. Performance optimizations should be applied on top of a stable structure.
**Action:** Refactored `header.php` to a standard WordPress header, deleted the insecure `wordpress.db`, fixed broken image links and added performance attributes in `page-home.php`, and implemented `wp_head` optimizations in `functions.php`.
