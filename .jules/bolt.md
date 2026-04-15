## 2025-05-15 - Critical Recursion in WordPress Theme
**Learning:** Found `get_header()` being called inside `header.php`, causing infinite recursion and preventing the page from ever loading in a real WordPress environment.
**Action:** Always check for recursive template calls when auditing WordPress themes for performance.

## 2025-05-15 - Double Asset Extensions and 404s
**Learning:** Assets were named with `.jpg.png` extensions, and one referenced asset (`short1.jpg`) was completely missing. These caused 404s and broken layouts.
**Action:** Audit asset filenames and template references. Use `git mv` to fix extensions and create placeholders for missing critical assets to ensure smooth loading.
