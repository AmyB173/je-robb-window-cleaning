# CLAUDE.md

Project context for Claude Code working on the J E Robb Window Cleaning website (jerobb.co.uk).

This file is the brief. For operational checklists when making changes, see `README.md`.

## Project overview

A small business website for J E Robb Window Cleaning, a one-man window cleaning round operated by Jack Robb in Swindon, Wiltshire. Hosted on Hostinger, deployed via GitHub.

Stack: PHP includes, Bootstrap 5, vanilla JS, hand-written CSS in `style.css`. No framework, no build step. EmailJS for the contact form, Stripe for payments (handled outside the site).

The site exists to bring in new local customers via organic search. SEO is a primary concern. Area pages are the main acquisition surface.

## Brand voice

Jack's voice is simple, straightforward, friendly, and confident without hyperbole or marketing padding. Write the way Jack would talk to a customer at the door, not the way a marketing agency would write about him.

### Core principles

- Say it once. If a sentence is doing the job, don't add a second one to reinforce it.
- Plain words. No jargon, no marketing language.
- Quiet confidence. State what we do and how we do it. The work speaks for itself.
- Friendly, not chatty. Warm and human, but not full of filler.
- Specific over vague. "Every 8 weeks" beats "regularly". "Pure water and a reach pole" beats "modern equipment".

### Avoid

- Hyperbole: "the best", "unbeatable", "amazing results", "second to none", "highest standards"
- Padding: "we pride ourselves on", "here at J E Robb", "rest assured", "look no further"
- Over-promising: "perfect every time", "100% satisfaction guaranteed", "streak-free guarantee"
- Hard sell: urgency phrases, "book today!", exclamation marks, capitalised emphasis
- Generic filler used on its own without anything to back it up: "professional", "reliable", "high-quality", "trusted around your home"

### Hard rules

- **No em dashes anywhere.** Use commas, full stops, or brackets.
- **No "streak-free" guarantees.** Pure water as a method is fine. "Streak-free finish" or "streak-free results" reads as a guarantee and is not in voice.
- **No "Satisfaction Guaranteed" headings.** The body text describing what happens if a customer is unhappy ("Not happy? I'll come back and sort it") is fine on its own. The marketing-speak heading is not.
- **No "Pure Water, No Chemicals".** Jack uses light cleaning products occasionally for tougher jobs (builders' residue etc.), so this is not strictly accurate. Use "Pure Water Reach Pole" or describe the method instead.
- **First person ("I", "me", "my").** Jack is the business. Avoid "we" and "our team" in body copy. (Schema JSON-LD can use "Jack" in third person where it reads more naturally.)
- **No "no obligation, no hard sell".** The phrase plants the ideas of obligation and hard selling in the customer's mind before they've thought of them. Leave it out entirely.
- **Quality through specifics, not adjectives.** Instead of "high attention to detail", show it: "Frames and sills cleaned every visit", "I check every window before I leave", "awkward corners not skipped".

### Off-brand phrases currently on the site

These appear in multiple files and need replacing if you're editing the relevant section. Don't fix everything in one go unless asked, but flag any you encounter:

- "Pure Water, Streak-Free Finish" (appears in trust bars on every area page and homepage)
- "Pure Water, No Chemicals" (about sections on every area page and homepage)
- "Streak-free results..." (about section body text)
- "Satisfaction Guaranteed" (heading on every area page about section)
- "Trusted Around Your Home" (homepage trust bar, RWB and Wichelstowe trust bars)
- "150+ Happy Customers" (homepage hero, RWB hero eyebrow)
- "150+ customers trust me to keep their property looking its best" (homepage hero subhead)
- "second to none" (Old Town Tom Webb testimonial body text — leave testimonials as-is, customer quotes are theirs)

### Side-by-side examples

Off: "At J E Robb, we pride ourselves on delivering an unbeatable window cleaning service that's second to none."
On: "I clean windows for 150+ homes across Swindon and Wiltshire."

Off: "Look no further for all your window cleaning needs! We guarantee 100% satisfaction every time."
On: "If you're not happy with a clean, let me know and I'll come back and put it right."

Off: "Our highly experienced and professional team uses only the very latest cutting-edge technology."
On: "I use a water-fed pole system that gets into frames and sills as well as the glass."

## Code conventions

### Area pages

- Lat/lng for every area lives in `includes/areas-config.php`. This is the single source of truth.
- New area pages need: a slug entry in `areas-config.php`, the page file in `/areas/`, a sitemap entry. Header nav and homepage Areas section update automatically.
- Every area page includes `area-faqs.php` (shared 8-question FAQ set) and adds ONE area-specific FAQ accordion item with matching JSON-LD schema.
- LocalBusiness schema goes inline at the top. Use `<?= GOOGLE_MAPS_URL ?>` and `<?= BUSINESS_IMAGE_URL ?>` constants. **Never** add `aggregateRating`.
- FAQ schema must match visible accordion content exactly.

### Includes

- `header.php` defines `GOOGLE_MAPS_URL` and `BUSINESS_IMAGE_URL` constants. Use these everywhere, never hardcode.
- `nearby-areas.php` auto-picks closest 6 towns by haversine distance. Don't hand-curate nearby lists.
- `services.php` and `area-faqs.php` are shared across all area pages. Edits here propagate everywhere.

### URLs

- Clean URLs (no `.php`) via `.htaccess`. Always link without the extension and without trailing slash.
- Canonical tags use `https://www.jerobb.co.uk/...` (with www).

### Schema

- LocalBusiness on homepage and every area page.
- FAQPage on every area page (master + area-specific).
- BlogPosting on blog post pages.
- Validate via Google Rich Results Test before deploying schema changes.

## When making changes

For anything operational (adding a page, deploying, sitemap updates, image handling, monthly maintenance), follow the checklists in `README.md`. That file is the source of truth for process. This file is the source of truth for voice and conventions.

If you're editing copy and you spot any of the off-brand phrases listed above in the same file you're touching, fix them or flag them, even if the user didn't specifically ask. Bringing the whole site into voice over time is part of the work.

If a copy decision feels ambiguous (e.g. "is this hyperbole or just enthusiasm?"), ask. Don't guess.
