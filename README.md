# JE Robb Window Cleaning — Website Update Checklist

A reference document for routine website changes. Run through the relevant section every time you touch the site.

Last updated: April 2026

---

## Before you start any change

1. Pull the latest from GitHub locally if you've been editing across machines.
2. Open the live site in a browser and screenshot or note the section you're about to change. Useful for comparison and for rolling back visually if needed.
3. Decide whether the change is small enough to edit live, or whether it needs a branch. Rule of thumb: anything that touches more than one file, or anything you're unsure about, gets a branch.

---

## When adding a new page (e.g. a new area page)

This is the change with the most moving parts. Work through it in order.

### 1. Create the page file

- Save it under the right folder. Area pages go in `/areas/`. Blog posts go in `/blog/`.
- Filename uses lowercase and hyphens, no spaces or underscores. Match the URL slug exactly.
- Include both `includes/header.php` and `includes/footer.php`.
- Set the four PHP variables at the top:
  - `$page_title`
  - `$page_description`
  - `$page_canonical` (full URL, no trailing slash, no .php extension)
  - For blog posts also set `$post_date` and `$post_author`.

### 2. LocalBusiness schema (area pages only)

- Copy the JSON-LD block from an existing area page as a starting point.
- Update `name`, `description`, `url`, `address.addressLocality`, `areaServed.name` to match the new town.
- Use `<?= GOOGLE_MAPS_URL ?>` for `sameAs` and `<?= BUSINESS_IMAGE_URL ?>` for `image`. Don't hardcode either.
- Do not include `aggregateRating`. Google ignores self-serving review schema for LocalBusiness types.
- Validate the JSON-LD by pasting the rendered page into Google's Rich Results Test (https://search.google.com/test/rich-results) before going live.

### 3. FAQPage schema (area pages only)

- Match every FAQ Question/Answer in the schema to the visible FAQ accordion on the page. Google penalises mismatches.
- Don't make up FAQs that aren't on the page. Schema must reflect what users see.

### 4. Internal linking

- Add a link to the new page from the homepage Areas section in `index.php`.
- Add a link to the new page from `includes/header.php` in the Areas dropdown nav.
- On the new page itself, link to 3-6 nearby existing area pages in the "Nearby Areas" section. Only link to pages that actually exist. Dead links are an SEO quality signal.
- Update the "Nearby Areas" sections on existing area pages to include the new town if appropriate.

### 5. Sitemap

- Add the new URL to `sitemap.xml` at the project root.
- Set `<lastmod>` to today's date.
- Use `<changefreq>monthly</changefreq>` for area pages, `<changefreq>monthly</changefreq>` for blog posts, `<changefreq>weekly</changefreq>` for the blog index.
- Use `<priority>0.8</priority>` for area pages, `<priority>0.7</priority>` for blog posts and blog index.

### 6. Test before deploying

- View the page locally or on a staging URL if you have one.
- Click every link on the new page. Check none 404.
- View on mobile (Chrome DevTools device emulation) and check the layout doesn't break.
- Check the canonical tag in the rendered HTML matches the page's actual URL.

### 7. After deploying

- Open the live page in a fresh browser tab. Confirm it loads.
- Submit the new URL to Google Search Console via URL Inspection, then click "Request Indexing". Speeds up indexing from days to hours.
- Resubmit `sitemap.xml` in Search Console (Sitemaps section) so the new entry is picked up.
- Check the page in Google's Rich Results Test using the live URL. Confirm LocalBusiness and FAQPage schema both validate without errors.

---

## When editing an existing page (content changes)

### Small content edits (fixing a typo, updating a phone number, swapping a word)

- Make the change.
- Test the page renders correctly.
- Update `<lastmod>` for that URL in `sitemap.xml` to today's date.
- Deploy.

### Larger content edits (rewriting a section, adding new content)

- All of the above, plus:
- Re-check the meta description still summarises the page accurately.
- If you've changed any FAQ text on an area page, update the matching FAQPage schema entry too. They must stay in sync.
- If you've changed any review counts or business details mentioned on the page, double-check no LocalBusiness schema fields contradict the new visible content.

### URL changes (renaming a page, changing a slug)

This is the riskiest type of edit. Avoid if possible.

- If you must rename: add a 301 redirect in `.htaccess` from the old URL to the new one before deploying.
- Update the canonical tag.
- Update every internal link that points to the old URL across the whole site. Search the codebase for the old URL string.
- Update `sitemap.xml` to remove the old URL and add the new one.
- After deploying, in Google Search Console go to the old URL and use "Request Indexing" on the new URL.

---

## When updating a blog post

- Update `$post_date` only if you're republishing as new. For minor edits leave the original date.
- Update `<lastmod>` in `sitemap.xml` regardless.
- Update the excerpt in `blog/index.php` if the post's focus has shifted.

---

## When adding or replacing images

- Convert to WebP before uploading. Use `cwebp` or an online converter. Aim for under 200KB per image, under 500KB for hero images.
- Resize to actual display size — no point uploading a 4000px image that displays at 600px.
- Save to `/assets/images/` with a descriptive lowercase-hyphen filename.
- Add a meaningful `alt` attribute everywhere the image is used. Decorative images get `alt=""`. Functional images get a description of what they show.
- If replacing an image used in `BUSINESS_IMAGE_URL` (jack_rectangle.webp), update the constant in `includes/header.php` rather than overwriting the file. This keeps version history cleaner.

---

## When deploying to Hostinger

- Push to GitHub.
- Confirm the GitHub-to-Hostinger deployment ran. Check Hostinger's deployment log if unsure.
- Open the live site in an incognito window (skips browser cache). Confirm changes are visible.
- If changes don't appear, clear the Hostinger cache (if enabled) and your browser cache.
- Test the changed pages on mobile, not just desktop.

---

## Monthly maintenance

Roughly once a month, run through:

- **Google Search Console**: review the Performance report. Check for ranking changes, lost queries, pages with falling impressions. Look at the Pages report under Indexing for any new errors.
- **Broken links**: run a free tool like https://www.deadlinkchecker.com against the homepage. Fix any 404s.
- **Page speed**: spot-check the homepage and one area page in PageSpeed Insights (https://pagespeed.web.dev). Aim for green scores on Core Web Vitals (LCP, INP, CLS).
- **Sitemap freshness**: confirm `sitemap.xml` still lists every page and no removed pages. Update `lastmod` dates if pages have been edited since the last sitemap update.
- **Google Business Profile**: post any new before/after photos, respond to any new reviews.

---

## Things to NEVER do

- Don't hardcode the Google Maps URL or business image URL in individual pages. Always use the constants in `includes/header.php`.
- Don't add `aggregateRating` to LocalBusiness schema. Google treats it as self-serving and won't display review stars from it. It's also a guidelines violation if the count doesn't match visible reviews.
- Don't link to pages that don't exist. If the page is planned but not built, leave the link out until the page is live.
- Don't reproduce content from other window cleaning sites. Even paraphrased competitor copy hurts rankings if Google detects the pattern.
- Don't change a published URL without a 301 redirect in place first.
- Don't delete pages without first removing all internal links to them and removing them from `sitemap.xml`.

---

## Things to ASK before doing

If you're not sure whether a change is safe, these are the situations worth pausing on:

- Adding new schema types beyond LocalBusiness and FAQPage.
- Changing the homepage's primary keyword target (currently "window cleaner Swindon").
- Adding redirects in `.htaccess` (easy to create infinite loops).
- Restructuring the navigation.
- Changing the canonical URL pattern (with/without www, with/without trailing slash).
- Adding tracking or analytics scripts.

For these, it's worth getting a second look from Claude or someone else before deploying.

---

## Files that need updating together (cheat sheet)

| When you... | Update these files |
|---|---|
| Add a new area page | New `/areas/[name].php`, `index.php` (Areas section), `includes/header.php` (nav dropdown), `sitemap.xml` |
| Add a new blog post | New `/blog/[slug].php`, `blog/index.php` ($posts array), `sitemap.xml` |
| Rename or move any page | The page file, `.htaccess` (301 redirect), every internal link to the old URL, `sitemap.xml`, canonical tag on the page |
| Change the business image | `includes/header.php` (BUSINESS_IMAGE_URL constant), the image file in `/assets/images/` |
| Update the Google Business Profile listing | `includes/header.php` (GOOGLE_MAPS_URL constant) — only if the CID changes, which is rare |
| Add or remove an FAQ on an area page | The visible accordion HTML AND the FAQPage JSON-LD schema on the same page |

---

## Useful tools and links

- Google Search Console: https://search.google.com/search-console
- Google Rich Results Test: https://search.google.com/test/rich-results
- PageSpeed Insights: https://pagespeed.web.dev
- Sitemap validator: https://www.xml-sitemaps.com/validate-xml-sitemap.html
- Dead link checker: https://www.deadlinkchecker.com
- Bing Webmaster Tools: https://www.bing.com/webmasters