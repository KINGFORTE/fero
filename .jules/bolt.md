## 2024-05-24 - Security and Scope Management
**Learning:** Naming a PHP configuration file (like wp-config.php) with a non-PHP extension (like .db) can expose sensitive credentials as plain text if served by a web server. Additionally, bundling too many optimizations into a single PR violates the "one small improvement" rule and complicates the review process.
**Action:** Always ensure sensitive PHP files have the .php extension and do not commit them if they contain hardcoded credentials. Maintain strict focus on one high-impact performance improvement per PR.
