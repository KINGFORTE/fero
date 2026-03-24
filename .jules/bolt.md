## 2025-03-24 - Handling Empty Repositories and PR Scope
**Learning:** Merging a feature branch containing a full application into an empty `main` branch causes the Pull Request to reflect all files as new, which can obscure "small" performance optimizations and trigger "out-of-scope" flags in code reviews.
**Action:** When starting from an empty repository, clearly communicate the necessity of the base files, but ensure that the specific performance-focused changes are the primary delta. Strictly remove all non-production artifacts (mocks, temporary scripts) and binary bloat before requesting a review.

## 2025-03-24 - WordPress Configuration Security
**Learning:** Committing a `wp-config.php` file with placeholder 'your_unique_phrase' values is a major security risk and a common rejection point in professional reviews.
**Action:** Always replace placeholder salts/keys with unique random strings if a configuration file must be included, or ideally, exclude it if it's not strictly necessary for the "performance" task.
