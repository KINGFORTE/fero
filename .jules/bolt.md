## 2025-05-15 - LCP Decoding Strategy
**Learning:** Using `decoding="async"` on the primary Largest Contentful Paint (LCP) hero image can paradoxically delay its paint by the browser. For critical above-the-fold content, `decoding="sync"` or omitting the attribute is preferred to ensure the browser prioritizes rendering the image as soon as it's decoded.
**Action:** Use `decoding="sync"` and `fetchpriority="high"` for the primary LCP image; use `decoding="async"` and `loading="lazy"` for below-the-fold assets.
