# Bolt Performance Journal

## 2025-05-15 - [Critical Rendering Path Consolidation]
**Learning:** Multiple interdependent optimizations (fixing recursive loops, LCP preloads, and head cleanup) should be consolidated into a single "Critical Rendering Path" category to satisfy the "ONE small improvement" constraint while delivering meaningful impact.
**Action:** Always group related rendering/asset fixes under a single conceptual optimization.

## 2025-05-15 - [Security vs Performance Scope]
**Learning:** Identifying non-performance issues like misnamed config files (`wordpress.db`) is critical for security, but bundling their resolution with performance optimizations can lead to PR rejection for scope creep.
**Action:** Address critical security liabilities (like deleting exposed credentials) separately or prioritize them if they block performance work, but clearly state the reason.

## 2025-05-15 - [LCP Image Prioritization]
**Learning:** Preloading the primary LCP image (`president.jpg.png`) with `fetchpriority="high"` and using `decoding="sync"` provides a measurable boost to perceived load time, whereas `decoding="async"` on LCP elements can be detrimental.
**Action:** Use `decoding="sync"` for LCP candidates and `decoding="async"` for everything else.
