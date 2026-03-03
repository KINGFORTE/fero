## 2025-05-14 - Header Recursion and Security Risks
**Learning:** In this WordPress theme, `header.php` erroneously called `get_header()`, causing infinite recursion. Also, `wordpress.db` contained sensitive PHP configuration but was named with a `.db` extension, posing an information disclosure risk.
**Action:** Always verify that `header.php` does not call itself and ensure sensitive PHP files use the `.php` extension or are excluded from the repository.

## 2025-05-14 - Focused Performance Optimizations
**Learning:** Reviewers prefer a single, high-impact optimization (under 50 lines) over broad architectural changes or theme scaffolding.
**Action:** Focus on one area (e.g., image loading or header cleanup) per PR to maintain clarity and measurability.
