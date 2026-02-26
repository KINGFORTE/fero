## 2025-05-14 - Optimizing WordPress Head and Asset Loading
**Learning:** Initializing a theme from a feature branch can lead to large PRs if not careful. Unused binary assets are a significant performance drain and should be audited. Standardizing image extensions and preloading LCP candidates significantly improves performance metrics.
**Action:** Audit for unused assets before submission. Use responsive CSS grid patterns (auto-fit) to ensure layout stability across devices. Always fix foundational bugs like infinite recursion in headers before applying optimizations.
