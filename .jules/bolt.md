## 2024-04-10 - WordPress Header and LCP Optimization
**Learning:** Standard WordPress headers contain significant bloat (emojis, RSD, WLW, etc.) that can account for over 90% of the `<head>` size in minimal themes. Additionally, including large (400KB+) unoptimized PNGs in the hero section is a major LCP bottleneck.
**Action:** Always strip unnecessary `wp_head` actions and prioritize hero image optimization (or placeholders if optimized assets are unavailable) to ensure fast initial paint. Use explicit dimensions to avoid CLS.
