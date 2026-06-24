# Bolt's Performance Journal

## 2024-06-24 - [Initial Assessment]
**Learning:** The theme has a fatal infinite recursion loop in `header.php` where `get_header()` calls itself. The LCP candidate is `images/president.jpg.png` (416KB).
**Action:** Fix recursion loop and implement LCP preloading and head cleanup.
