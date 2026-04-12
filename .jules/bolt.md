## 2026-05-19 - [Fixing Recursive Header Loading and Head Bloat]
**Learning:** This WordPress theme was caught in a recursive loop because `header.php` called `get_header()`, which by default loads `header.php`. Additionally, the default WordPress `wp_head()` output contained significant bloat (emojis, generator tags, etc.) that accounted for the majority of the initial HTML payload in the `<head>`.
**Action:** Always verify that `header.php` does not contain a `get_header()` call. Implement a standard cleanup function in `functions.php` to prune `wp_head` for lean landing pages.
