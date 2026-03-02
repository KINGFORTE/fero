## 2025-03-02 - Security Risk and Asset Bloat Avoidance
**Learning:** Naming a WordPress configuration file (containing PHP) with a non-PHP extension (like `.db`) creates a critical security vulnerability where the server may serve the contents in plain text. Additionally, adding unoptimized or large binary assets in a performance-focused PR is counter-productive.
**Action:** Always name sensitive PHP configuration files with the `.php` extension to ensure they are processed by the PHP engine. For performance PRs, prioritize existing asset optimization or head-cleanup over adding new assets.
