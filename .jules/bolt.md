## 2026-03-14 - Focused WordPress Optimizations
**Learning:** Bootstrapping a new theme structure or renaming assets via `git mv` can bloat PRs and deviate from the "single small optimization" goal. In this codebase, the `header.php` recursion and broken image paths are the most critical performance bottlenecks.
**Action:** Implement targeted fixes in existing templates rather than restructuring. Use under 50 lines of code change where possible to maintain reviewability.
