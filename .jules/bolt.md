## 2024-05-24 - [Critical Rendering Path and Asset Cleanup]
**Learning:** Consolidating multiple interdependent fixes (recursion, head cleanup, asset prioritization) into a single "Critical Rendering Path" optimization is effective when they collectively address a single bottleneck. Also, non-production verification artifacts (mocks/scripts) must be removed before submission to maintain repository cleanliness.
**Action:** Always verify the removal of non-production files with `ls` before final submission and ensure `fetchpriority="high"` is applied exclusively to the primary LCP candidate.
