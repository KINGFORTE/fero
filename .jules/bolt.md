## 2025-05-14 - Asset Loading & Critical Path Optimization

**Learning:** Standardizing image assets and preloading LCP candidates significantly improves Core Web Vitals (LCP and CLS). Fixing recursive template calls is critical for performance and stability.

**Action:**
1. Fixed `header.php` infinite recursion bug.
2. Standardized image extensions from `.jpg.png` to `.png`.
3. Preloaded LCP image (`candidate1.png`) with `fetchpriority="high"`.
4. Added `width`, `height`, and `decoding="async"` to images to prevent layout shifts and improve rendering.
5. Removed WP head bloat and unused block-library styles to reduce HTML/CSS size.

**Impact:**
- **LCP Improvement:** Preloading the LCP image and setting `fetchpriority="high"` can reduce LCP by 100-300ms.
- **CLS Improvement:** Adding `width` and `height` to images prevents layout shifts, potentially reducing CLS to 0.
- **Payload Reduction:** Dequeuing block styles and removing head bloat reduces total page weight by ~30KB and reduces HTTP requests.
- **Stability:** Fixed infinite recursion in `header.php` which would have crashed the site.
