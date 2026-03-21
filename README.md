# Thanasis Koufos — Portfolio Site

> One-page, no-scroll portfolio with dark mode, neon accents, and full-screen section navigation.

**Live site:** [thanasis-codes.eu](https://www.thanasis-codes.eu)

---

## Overview

A fully custom, handcrafted portfolio built with vanilla HTML, CSS, and JavaScript — served via PHP for server-side features. No frameworks, no build tools, no dependencies. Just clean files you can upload and run on any shared hosting with PHP support.

---

## Features

- **Full-screen sections** — 5 panels (Home, About, Skills, Projects, Contact), zero scrolling
- **Keyboard & mouse navigation** — Arrow keys, mouse wheel, swipe, or click the side dots
- **Dark mode + neon green accents** — Custom `#00f5c8` palette with ambient glow blobs and scanline overlay
- **Custom animated cursor** — Dot + ring with lag effect, reacts to hoverable elements
- **Typewriter effect** — Rotating titles on the Hero section
- **Animated skill bars** — Triggered on section enter
- **Page view counter** — PHP-powered, stored in `counter.txt`
- **Favicon** — Custom SVG with TC initials in neon style
- **Contact form ready** — `mailer.php` is wired up and waiting (see [Activating the Contact Form](#activating-the-contact-form))

---

## File Structure

```
/
├── index.php       # Main entry point — renders all 5 sections, runs page counter
├── style.css       # All styles (dark theme, layout, animations, responsive)
├── main.js         # Navigation logic, cursor, typewriter effect
├── counter.php     # Page view counter — reads/writes counter.txt
├── mailer.php      # Contact form handler (ready to activate)
├── favicon.svg     # TC initials favicon, neon style
└── counter.txt     # Auto-created on first visit — do NOT delete
```

---

## Sections

| # | Section | Key content |
|---|---------|-------------|
| 1 | **Home** | Name, animated title, CTA buttons |
| 2 | **About** | Bio, info grid, experience timeline |
| 3 | **Skills** | Animated bars — React, Node.js, Django, Python, PHP, Java + tags |
| 4 | **Projects** | Dynamic Retail Pricer, Banks' LEI Enricher, Portfolio Blog |
| 5 | **Contact** | Email, phone, LinkedIn, GitHub, blog links |

---

## Deployment (Shared Hosting via FTP)

1. Download or clone this repo
2. Connect to your server with **FileZilla** (or any FTP client)
3. Upload all files to your `public_html/` folder
4. Make sure `counter.txt` can be created — the folder needs **write permission** (`chmod 755 public_html`)
5. Visit your domain — done ✅

> **Important:** The server must support PHP 7.4+. The `index.php` file is the entry point — do not rename it to `index.html`.

---

## Activating the Contact Form

`mailer.php` is fully written and sanitises input — it just needs wiring to a `<form>` in `index.php` and your SMTP credentials.

**Option A — Simple `mail()` (works on most shared hosts):**
Already enabled. Just add a form to the Contact section in `index.php` that `POST`s to `mailer.php`.

**Option B — PHPMailer / SMTP (Gmail, etc.):**
1. Install PHPMailer: `composer require phpmailer/phpmailer`
2. Uncomment the PHPMailer block at the bottom of `mailer.php`
3. Fill in your SMTP credentials

---

## Customisation

| What | Where |
|------|-------|
| Name, bio, contact info | `index.php` — each section is clearly commented |
| Colors / neon accent | `style.css` — change `--neon` in `:root` |
| Typewriter phrases | `main.js` — `const phrases = [...]` |
| Skill percentages | `index.php` — `style="--w:88%"` on each `.skill-bar-fill` |
| Projects | `index.php` — `.project-card` blocks in section 4 |
| Page counter style | `style.css` — `#pageview-badge` |

---

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Markup | PHP (HTML templating + server logic) |
| Styles | Vanilla CSS (custom properties, animations) |
| Behaviour | Vanilla JavaScript (ES6+, no jQuery) |
| Fonts | [Syne](https://fonts.google.com/specimen/Syne) + [Space Mono](https://fonts.google.com/specimen/Space+Mono) via Google Fonts |
| Hosting | Any PHP-capable shared host |

---

## Projects Featured

### 🏷️ Dynamic Retail Pricer
Smart pricing engine for Greek e-shops. Scrapes 50+ shops and computes optimal selling prices — reducing the time spent searching for and comparing retail prices, in an e-shop or physical store, by **98%**.
→ [github.com/ThanasisSoftwareDeveloper/dynamic-retail-pricer](https://github.com/ThanasisSoftwareDeveloper/dynamic-retail-pricer)

### 🏦 Banks' LEI Enricher
Desktop app for KYC/AML compliance teams. Batch-validates LEI codes via the GLEIF API — reducing the time required to search and enter Status and Next Renewal Date to the time of a single LEI. For a list of 100 LEIs, savings reach **99%**.
→ [github.com/ThanasisSoftwareDeveloper/Banks-L.E.I.](https://github.com/ThanasisSoftwareDeveloper/Banks-L.E.I.)

### 🌐 Portfolio Blog
Full WordPress portfolio with UI/UX work, web development articles, and client projects.
→ [thanasis-codes.eu/blog](https://www.thanasis-codes.eu/blog/)

---

## License

MIT — free to use as inspiration or a starting point. If you use it, a credit or star is always appreciated. 🙏

---

*Built with passion in Greece 🇬🇷*
