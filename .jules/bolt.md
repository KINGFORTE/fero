## 2024-03-28 - Identifying Recursive Includes in WordPress Themes
**Learning:** A common but critical performance and correctness bottleneck in custom WordPress themes is a `header.php` file that incorrectly calls `get_header()`, leading to infinite recursion or redundant processing.
**Action:** Always verify that `header.php` contains the opening HTML structure and `wp_head()`, but never calls `get_header()`. Similarly, `footer.php` should not call `get_footer()`.

## 2024-03-28 - Security Risks in Repository Configuration
**Learning:** Sensitive configuration files might be committed with non-standard extensions (e.g., `wordpress.db` instead of `wp-config.php`), which can bypass `.gitignore` and expose plain-text credentials if served.
**Action:** Audit the repository for any non-standard file extensions that contain configuration data and ensure they are renamed correctly to `.php` or removed entirely from the source control.
