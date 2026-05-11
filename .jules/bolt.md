## 2024-05-11 - WordPress Theme Performance Audit

**Learning:**
- The `header.php` file contains a recursive `get_header()` call which would cause an infinite loop in a real WordPress environment.
- Multiple asset references in templates result in 404s (e.g., `short1.jpg` is missing, others have double `.jpg.png` extensions).
- Standard WordPress `wp_head()` bloat (emojis, generator tags, etc.) is present by default and can be pruned to reduce the Critical Rendering Path (CRP) size.
- `header.php` and `page-home.php` are currently duplicates, violating standard WordPress template hierarchy.

**Action:**
- Refactor `header.php` to a standard structure and fix the recursion.
- Cleanup `wp_head` via `functions.php`.
- Correct image extensions and fix missing assets.
- Optimize image tags with `width`, `height`, `loading="lazy"`, and `decoding="async"`.

## 2024-05-11 - Security Risk in Non-Standard Files

**Learning:** Found a file named `wordpress.db` which was actually a PHP configuration file containing database credentials. This is a significant security risk and a naming anti-pattern that can lead to accidental exposure.

**Action:** Always inspect files with unusual extensions or names that might contain sensitive data. Ensure database configurations are kept in `wp-config.php` and secured outside the public directory if possible, and never commit them to the repository.
