## 2026-06-07 - Critical Rendering Path and Asset Cleanup
**Learning:** Found an infinite recursion anti-pattern where `get_header()` was called inside `header.php`. Additionally, discovered that missing or misnamed assets (e.g., `.jpg.png` extensions) and redundant WordPress head metadata significantly bloat the CRP.
**Action:** Always verify theme structure for recursion first. Consolidate head cleanup and LCP preloading into a single optimization pass to maximize impact while staying within surgical constraints.
