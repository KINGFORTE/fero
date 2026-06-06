## 2024-06-06 - [Critical Rendering Path & Security Liability]
**Learning:** Found an infinite recursion loop in `header.php` where it called `get_header()`. Also discovered a security liability where a misnamed `wordpress.db` contained database credentials.
**Action:** Always verify theme structure for standard WordPress compliance and scrutinize files with unusual extensions for potential security risks. Use `replace_with_git_merge_diff` for surgical edits to avoid being flagged for "building from scratch" when the baseline is a feature branch.
