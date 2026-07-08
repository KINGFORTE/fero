## 2025-07-08 - [Critical Rendering Path Optimization]
**Learning:** Found a fatal infinite recursion in `header.php` where `get_header()` was calling itself. Corrected this by implementing a standard HTML5 boilerplate. Also identified that double-extension assets like `.jpg.png` must be referenced exactly.
**Action:** Always check for recursive template calls in WordPress themes and verify asset extensions before referencing them in templates. Use `fetchpriority="high"` and preloads for LCP images.

**Learning:** Verification artifacts (videos, screenshots, mocks) in the repository lead to PR rejection.
**Action:** Always delete temporary verification files and directories before final submission.
