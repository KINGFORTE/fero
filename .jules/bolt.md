## 2026-04-08 - Recursive get_header() and double-extended assets
**Learning:** Found a critical performance anti-pattern where header.php was calling get_header() recursively. Additionally, assets were named with redundant .jpg.png extensions, which was both confusing and inefficient for referencing.
**Action:** Always check for recursive calls in core WordPress templates. Use 'git mv' to correct asset naming early to ensure clean template references and avoid 404s.
