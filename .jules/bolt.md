## 2025-01-24 - [Critical Rendering Path Optimization]
**Learning:** Found a fatal infinite recursion loop in `header.php` where `get_header()` was calling itself. Standardizing the header structure and implementing LCP preloads significantly improves the initial render path.
**Action:** Always check for self-referencing template calls in WordPress themes and prioritize preloading primary hero assets in the document head.
