## 2025-05-15 - Cleaning up non-production artifacts
**Learning:** Reviewers will block PRs containing non-production files like mock scripts and verification artifacts, even if they were used for valid testing.
**Action:** Always verify the removal of non-production files (e.g., `mock_render.php`, Playwright scripts) before final submission.

## 2025-05-15 - Asset correctness and bloat
**Learning:** Double extensions (e.g., `.jpg.png`) and unused large binary files (e.g., 400KB+ unused images) are considered performance and correctness issues.
**Action:** Use `git mv` to fix extensions and `grep` to identify and remove unused large assets.
