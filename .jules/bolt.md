# Bolt's Performance Journal

## 2025-01-24 - Initial Performance Observations
**Learning:** The current WordPress theme has several critical performance and structural issues:
1. A recursive `get_header()` call in `header.php` which would cause a memory exhaustion/infinite loop error.
2. Bloated `wp_head()` output including emojis, generator tags, and other unnecessary resources.
3. Assets have incorrect/double extensions (`.jpg.png`) and include a large unused 425KB image.
4. Missing performance attributes like `fetchpriority`, `decoding`, and `loading="lazy"`.
**Action:** Implement a standard header, clean up `wp_head`, rename and optimize assets, and add priority loading for the LCP candidate.
