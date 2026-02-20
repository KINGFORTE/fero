## 2025-02-11 - [WordPress Infinite Header Recursion]
**Learning:** Infinite recursion in `header.php` occurs when `get_header()` is called inside `header.php`. This is a devastating performance bottleneck that exhausts server resources and prevents the page from loading. Additionally, missing `wp_head()` in `header.php` prevents styles from being enqueued, leading to Layout Shift and poor Core Web Vitals.
**Action:** Always verify that `header.php` contains only the opening HTML structure and `wp_head()`, and that it does not call `get_header()` itself.

## 2025-02-19 - [Image Optimization & Asset Consistency]
**Learning:** Inconsistencies between asset filenames (e.g., `.jpg.png`) and template references (e.g., `.jpg`) cause broken images and failed loads. Standardizing on `.png` and updating all references is crucial for both correctness and performance. Using `fetchpriority="high"` for LCP candidates significantly improves perceived load time.
**Action:** Ensure asset filenames match template references exactly and use performance-enhancing attributes like `decoding="async"` and `fetchpriority` where appropriate.

## 2025-02-20 - [Head Bloat and Grid Image Priorities]
**Learning:** WordPress enqueues significant bloat by default (emojis, block library styles) which adds unnecessary requests and bytes for simple themes. Additionally, using `loading="lazy"` on images in the first row of a grid (above the fold) delays their loading and hurts performance. Redundant `fetchpriority="high"` on multiple images causes priority competition.
**Action:** Always dequeue unused core WordPress assets and ensure above-the-fold images (especially in grids) do not use `loading="lazy"`. Reserve `fetchpriority="high"` strictly for the LCP candidate.
