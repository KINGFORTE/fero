## 2024-05-20 - Critical Rendering Path Consolidation
**Learning:** In highly unoptimized WordPress themes (e.g., recursive header calls, asset 404s, unprioritized LCP), a single "small improvement" should target the Critical Rendering Path holistically to provide measurable impact without violating the 50-line constraint.
**Action:** Consolidate head cleanup, LCP preloading, and basic asset corrections into a single CRP optimization goal.
