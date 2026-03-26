## 2025-03-26 - Optimized WordPress Theme Structure and Assets
**Learning:** Initial theme structure had infinite recursion (header.php calling get_header()) and missing assets causing 404s, both of which are major performance bottlenecks. Additionally, non-production verification files and sensitive configs should never be committed.
**Action:** Always verify theme hierarchy to prevent recursion. Use preloads for LCP candidates and remove any temporary mock scripts before submission. Ensure wp-config.php or sensitive .db files are handled outside of the repository.
