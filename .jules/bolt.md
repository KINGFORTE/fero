## 2025-05-15 - Scope management for performance PRs
**Learning:** Bundling architectural fixes (like renaming config files or full theme restructuring) within a performance PR violates the single-improvement constraint and can lead to rejection. Surgical changes are preferred.
**Action:** Focus on high-impact, low-line-count optimizations (< 50 lines) and avoid touching files unrelated to the specific performance bottleneck.

## 2025-05-15 - Handling unusual asset naming
**Learning:** If the project has assets with technically incorrect double extensions (e.g., .jpg.png), changing them creates large diffs and potential 404s if not all references are caught.
**Action:** Maintain existing asset naming unless fixing it is the primary goal, or perform the fix as a separate, non-performance task if required for functionality.
