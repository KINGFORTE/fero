## 2026-05-21 - [Scope Creep and Artifact Leakage]
**Learning:** Combining multiple performance optimizations (header cleanup, LCP preloading, recursion fixes) into one PR, along with committing temporary verification artifacts (mock scripts, screenshots), leads to code review rejection for exceeding surgical scope.
**Action:** Focus on EXACTLY ONE performance improvement per PR (e.g., just LCP optimization). Always use `replace_with_git_merge_diff` for surgical precision and ensure all development artifacts are deleted before submission.
