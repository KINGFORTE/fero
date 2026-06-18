## 2025-03-05 - Critical Recursion and Asset Optimization
**Learning:** Found an infinite recursion loop in `header.php` where `get_header()` was called within itself. This prevents the site from loading and would cause a stack overflow in a real WordPress environment. Also identified unoptimized assets with incorrect extensions (.jpg.png) and missing files (short1.jpg).
**Action:** Replace `get_header()` in `header.php` with proper HTML5 boilerplate and `wp_head()`. Fix image references and apply LCP/CLS optimizations.
