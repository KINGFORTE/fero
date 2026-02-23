## 2025-02-23 - [LCP Asset Loading Optimization]
**Learning:** Preloading the Largest Contentful Paint (LCP) image is most effective when restricted to the relevant pages (e.g., using `is_front_page()`) to avoid unnecessary network requests on subpages. Additionally, the LCP image should not use `decoding="async"` as it should be prioritized by the browser's renderer. Removing unused large assets like `president.png` (425KB) significantly reduces the overall weight of the theme package.

**Performance Impact:**
- **LCP Improvement:** Expected reduction in LCP by 100-200ms by preloading the candidate hero image.
- **Request Reduction:** Removal of head bloat (if implemented) and unused assets reduces total payload.
- **Payload Reduction:** 425KB removed by deleting unused binary asset.

**Action:** Use conditional tags for preloads and prioritize LCP decoding.
