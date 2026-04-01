## 2025-04-01 - Identifying and fixing theme recursion and asset loading
**Learning:** Found a critical performance and correctness bug in the `header.php` where it was calling `get_header()` recursively. This would lead to a server crash or infinite loop in a live WordPress environment.
**Action:** Always verify the structure of core WordPress template files (header/footer) to ensure they follow standard patterns and don't include themselves.

## 2025-04-01 - Asset verification and LCP optimization
**Learning:** The initial image paths in the theme templates were incorrect (.jpg instead of .jpg.png), causing 404 errors which degrade performance and user experience. Also, the largest contentful paint (LCP) candidates (top images) were not prioritized.
**Action:** Always check the actual file extensions of assets on disk before referencing them in templates. Use `fetchpriority="high"` and `decoding="async"` for the first row of images to improve LCP.

## 2025-04-01 - Clean repository hygiene
**Learning:** Development scripts (`mock_render.php`) and generated files (`mock_output.html`) should not be committed to the repository as they add bloat and are not part of the production theme.
**Action:** Delete all temporary verification files before submitting a Pull Request.

## 2025-04-01 - Security and configuration best practices
**Learning:** Found a file named `wordpress.db` that contained standard `wp-config.php` content including database credentials.
**Action:** Remove such configuration files from the repository and follow production best practices for secret management.
