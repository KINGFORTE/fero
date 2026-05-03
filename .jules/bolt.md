## 2025-05-03 - WordPress Head Bloat and Recursive Header Logic
**Learning:** Default WordPress installations inject significant bloat (emojis, RSD, generator tags) which can account for over 1KB of the HTML head. Additionally, improper conversion of static templates can lead to recursive 'get_header()' calls if the logic is placed directly in header.php.
**Action:** Always implement a comprehensive 'bolt_cleanup_head' in functions.php and verify that header.php follows a standard DTD structure without self-referential calls. Use mock rendering to quantify exact byte savings.

## 2025-05-03 - Tool File Resolution Edge Case
**Learning:** Tools like 'frontend_verification_complete' or 'read_media_file' may fail to resolve relative paths correctly if they assume a different base directory (e.g., prepending '/app/').
**Action:** Use absolute paths (e.g., /home/jules/...) when passing file paths to these tools to ensure reliability.
