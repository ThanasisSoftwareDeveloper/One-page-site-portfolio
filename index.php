<?php
/* ═══════════════════════════════════════════
   THANASIS KOUFOS — PORTFOLIO
   index.php  —  Main entry point
═══════════════════════════════════════════ */

/* Page view counter */
$pageviews = require __DIR__ . '/counter.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thanasis Koufos — Software Developer</title>
  <meta name="description" content="Thanasis Koufos — Web & Software Developer based in Greece. Node.js, React, Django, Python.">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="favicon.svg">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&family=Syne:wght@400;600;700;800&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="style.css">
  <!-- Contact Modal Styles -->
  <link rel="stylesheet" href="contact-modal.css">
</head>
<body>

  <!-- Custom cursor -->
  <div id="cursor"></div>
  <div id="cursor-ring"></div>

  <!-- Ambient blobs -->
  <div class="blob blob-1"></div>
  <div class="blob blob-2"></div>
  <div class="blob blob-3"></div>

  <!-- Top progress line -->
  <div id="progress-line"></div>

  <!-- Logo -->
  <div id="logo">thanasis_codes</div>

  <!-- Page view counter badge -->
  <div id="pageview-badge">
    👁 <span><?= number_format($pageviews) ?></span> views
  </div>

  <!-- Section counter -->
  <div id="section-counter">
    <span id="cnt-curr">01</span> / <span>05</span>
  </div>

  <!-- Side nav dots -->
  <nav id="nav-dots">
    <div class="dot active"  data-index="0" data-label="HOME"></div>
    <div class="dot"         data-index="1" data-label="ABOUT"></div>
    <div class="dot"         data-index="2" data-label="SKILLS"></div>
    <div class="dot"         data-index="3" data-label="PROJECTS"></div>
    <div class="dot"         data-index="4" data-label="CONTACT"></div>
  </nav>

  <!-- Nav arrows -->
  <div class="nav-arrow" id="arrow-up"   onclick="navigate(-1)">↑</div>
  <div class="nav-arrow" id="arrow-down" onclick="navigate(1)">↓</div>


  <!-- ════════════════════════════════
       SECTION 1 — HERO
  ════════════════════════════════ -->
  <section class="section active" id="s-hero">
    <div class="hero-eyebrow">Software Developer</div>

    <h1 class="hero-name">
      <span class="neon-word">Thanasis</span><br>
      Koufos
    </h1>

    <p class="hero-title">
      <span class="typewriter" id="typewriter"></span>
    </p>

    <p class="hero-desc">
      Enthusiastic web &amp; software developer based in Greece, with 5+ years of
      experience in websites &amp; applications' development. Building fast, clean, scalable
      solutions — for businesses worldwide.
    </p>

    <div class="hero-cta">
      <a href="#" class="btn-primary" onclick="goTo(3); return false;">View Projects →</a>
      <!-- "Get in Touch" opens the contact modal -->
      <a href="#" class="btn-ghost" data-open-contact>Get in Touch</a>
    </div>
  </section>


  <!-- ════════════════════════════════
       SECTION 2 — ABOUT
  ════════════════════════════════ -->
  <section class="section" id="s-about">

    <div class="about-left">
      <div class="section-label">About Me</div>
      <h2 class="section-title">
        Building <em class="neon-word">digital</em><br>experiences
      </h2>
      <p class="about-text">
        Enthusiastic Software and Web Developer based in Greece, with over 5 years of experience
        in website &amp; applications life cycle. I've worked across front-end development,
        landing pages, UI/UX, and mobile apps.
      </p>
      <p class="about-text">
        Currently working at <strong>AspectSoft</strong> as a Software Developer
        and <strong>TechPlace</strong> as a Web Developer, delivering fast,
        responsive solutions for businesses worldwide.
      </p>

      <div class="info-grid">
        <div class="info-item">
          <div class="info-label">Location</div>
          <div class="info-value">Greece 🇬🇷</div>
        </div>
        <div class="info-item">
          <div class="info-label">Email</div>
          <div class="info-value" style="font-size:11px">thanasis.koufos1@gmail.com</div>
        </div>
        <div class="info-item">
          <div class="info-label">Phone</div>
          <div class="info-value">+30 6981106438</div>
        </div>
        <div class="info-item">
          <div class="info-label">Education</div>
          <div class="info-value">MSc Information Systems</div>
        </div>
      </div>
    </div>

    <div class="about-right">
      <div class="section-label">Experience</div>
      <div class="exp-timeline stagger">
        <div class="exp-item">
          <div class="exp-date">Jun 2025 — Present</div>
          <div class="exp-role">Software Developer</div>
          <div class="exp-company">AspectSoft</div>
        </div>
        <div class="exp-item">
          <div class="exp-date">Jun 2024 — Jun 2026</div>
          <div class="exp-role">Web Developer</div>
          <div class="exp-company">TechPlace</div>
        </div>
        <div class="exp-item">
          <div class="exp-date">Sep 2020 — Oct 2023</div>
          <div class="exp-role">MSc Information Systems</div>
          <div class="exp-company">Hellenic Open University</div>
        </div>
      </div>
    </div>

  </section>


  <!-- ════════════════════════════════
       SECTION 3 — SKILLS
  ════════════════════════════════ -->
  <section class="section" id="s-skills">

    <div class="skills-header">
      <div class="section-label">Tech Stack</div>
      <h2 class="section-title">Skills &amp; <em class="neon-word">Tools</em></h2>
    </div>

    <div class="skills-grid stagger">
      <div class="skill-card">
        <span class="skill-icon">⚛️</span>
        <div class="skill-name">React</div>
        <div class="skill-bar">
          <div class="skill-bar-fill" style="--w:88%"></div>
          <span class="skill-pct">88%</span>
        </div>
      </div>
      <div class="skill-card">
        <span class="skill-icon">🟩</span>
        <div class="skill-name">Node.js</div>
        <div class="skill-bar">
          <div class="skill-bar-fill" style="--w:82%"></div>
          <span class="skill-pct">82%</span>
        </div>
      </div>
      <div class="skill-card">
        <span class="skill-icon">🎯</span>
        <div class="skill-name">Django</div>
        <div class="skill-bar">
          <div class="skill-bar-fill" style="--w:78%"></div>
          <span class="skill-pct">78%</span>
        </div>
      </div>
      <div class="skill-card">
        <span class="skill-icon">🐍</span>
        <div class="skill-name">Python</div>
        <div class="skill-bar">
          <div class="skill-bar-fill" style="--w:85%"></div>
          <span class="skill-pct">85%</span>
        </div>
      </div>
      <div class="skill-card">
        <span class="skill-icon">🐘</span>
        <div class="skill-name">PHP</div>
        <div class="skill-bar">
          <div class="skill-bar-fill" style="--w:72%"></div>
          <span class="skill-pct">72%</span>
        </div>
      </div>
      <div class="skill-card">
        <span class="skill-icon">☕</span>
        <div class="skill-name">Java</div>
        <div class="skill-bar">
          <div class="skill-bar-fill" style="--w:68%"></div>
          <span class="skill-pct">68%</span>
        </div>
      </div>
    </div>

    <div class="skills-tags stagger">
      <span class="skill-tag">WordPress</span>
      <span class="skill-tag">OpenCart</span>
      <span class="skill-tag">React</span>
      <span class="skill-tag">Django</span>
      <span class="skill-tag">SEO</span>
      <span class="skill-tag">UI/UX Design</span>
      <span class="skill-tag">SQLite</span>
      <span class="skill-tag">Electron</span>
      <span class="skill-tag">Mobile's Apps</span>
      <span class="skill-tag">Tailwind CSS</span>
      <span class="skill-tag">REST APIs</span>
    </div>

  </section>


  <!-- ════════════════════════════════
       SECTION 4 — PROJECTS
  ════════════════════════════════ -->
  <section class="section" id="s-projects">

    <div class="projects-header">
      <div class="section-label">Portfolio</div>
      <h2 class="section-title">Featured <em class="neon-word">Projects</em></h2>
    </div>

    <div class="projects-grid stagger">

      <!-- Project 1 — Banks' LEI Enricher -->
      <a class="project-card"
         href="https://github.com/ThanasisSoftwareDeveloper/Banks-L.E.I."
         target="_blank" rel="noopener">
        <div class="project-num">01 / PROJECT</div>
        <div class="project-icon">🏦</div>
        <div class="project-name">Banks' LEI Enricher</div>
        <div class="project-desc">
          Desktop app for KYC/AML compliance teams. Batch-validates LEI codes via
          the GLEIF API and enriches Excel spreadsheets with entity status and
          renewal dates —
          <span class="project-highlight">reducing the time required to search for
          and enter the Status and Next Renewal Date to the time required for a
          single LEI. If the list contains 100 LEIs, by 99%.</span>
        </div>
        <div class="project-tags">
          <span class="project-tag">Python</span>
          <span class="project-tag">GUI</span>
          <span class="project-tag">GLEIF API</span>
          <span class="project-tag">Excel</span>
        </div>
        <span class="project-link">View on GitHub →</span>
      </a>

      <!-- Project 2 — Calendar App Desktop -->
      <a class="project-card"
         href="https://calendar-app-desktop.vercel.app/"
         target="_blank" rel="noopener">
        <div class="project-num">02 / PROJECT</div>
        <div class="project-icon">🗓️</div>
        <div class="project-name">Calendar App Desktop</div>
        <div class="project-desc">
          Developer-grade task &amp; calendar desktop app with Google Calendar sync,
          Gmail integration, and drag-and-drop scheduling —
          <span class="project-highlight">built for daily use with month / week / day
          views, OAuth sign-in, and automatic background sync via Celery.</span>
        </div>
        <div class="project-tags">
          <span class="project-tag">React</span>
          <span class="project-tag">Django</span>
          <span class="project-tag">PostgreSQL</span>
          <span class="project-tag">Google APIs</span>
        </div>
        <span class="project-link">View on GitHub →</span>
      </a>

      <!-- Project 3 — Portfolio Blog -->
      <a class="project-card"
         href="https://www.thanasis-codes.eu/blog/"
         target="_blank" rel="noopener">
        <div class="project-num">03 / PROJECT</div>
        <div class="project-icon">
          <img
            src="https://www.thanasis-codes.eu/blog/favicon.ico"
            alt="TC"
            style="width:28px;height:28px;object-fit:contain;display:block;"
            onerror="this.style.display='none';this.nextElementSibling.style.display='inline';"
          ><span style="display:none;">🌐</span>
        </div>
        <div class="project-name">Portfolio Blog</div>
        <div class="project-desc">
          Full-featured WordPress portfolio showcasing UI/UX work, web development
          projects, and software developer. Based in Greece, working worldwide.
        </div>
        <div class="project-tags">
          <span class="project-tag">WordPress</span>
          <span class="project-tag">OpenCart</span>
          <span class="project-tag">PHP</span>
          <span class="project-tag">React</span>
          <span class="project-tag">Django</span>
        </div>
        <span class="project-link">Visit Site →</span>
      </a>

      <!-- Project 4 — Dynamic Retail Pricer -->
      <a class="project-card"
         href="https://github.com/ThanasisSoftwareDeveloper/dynamic-retail-pricer"
         target="_blank" rel="noopener">
        <div class="project-num">04 / PROJECT</div>
        <div class="project-icon">🏷️</div>
        <div class="project-name">Dynamic Retail Pricer</div>
        <div class="project-desc">
          Smart pricing engine for Greek e-shops. Scrapes 50+ shops, compares
          market competition, and computes optimal selling prices with configurable
          markup rules —
          <span class="project-highlight">reducing the time spent searching for and
          comparing retail prices, in an e-shop or physical store, by 98%.</span>
        </div>
        <div class="project-tags">
          <span class="project-tag">Node.js</span>
          <span class="project-tag">Electron</span>
          <span class="project-tag">React</span>
          <span class="project-tag">Playwright</span>
        </div>
        <span class="project-link">View on GitHub →</span>
      </a>

    </div>
  </section>


  <!-- ════════════════════════════════
       SECTION 5 — CONTACT
  ════════════════════════════════ -->
  <section class="section" id="s-contact">

    <div class="section-label">Contact</div>
    <h2 class="contact-title">
      Let's <em class="neon-word">work</em><br>together
    </h2>
    <p class="contact-sub">
      Based in Greece, working worldwide. Available for freelance projects,
      collaborations, and full-time opportunities.
    </p>

    <!-- ✉️ Contact Form Button -->
    <button class="btn-contact-modal" data-open-contact>
      <span class="btn-icon">✉️</span>
      Send a Message
    </button>

    <div class="contact-links stagger">
      <a class="contact-item" href="mailto:thanasis.koufos1@gmail.com">
        <span class="contact-icon">✉️</span> thanasis.koufos1@gmail.com
      </a>
      <a class="contact-item" href="tel:+306981106438">
        <span class="contact-icon">📱</span> +30 6981106438
      </a>
      <a class="contact-item"
         href="https://www.linkedin.com/in/thanasis-koufos-software-developer/"
         target="_blank" rel="noopener">
        <span class="contact-icon">💼</span> LinkedIn
      </a>
      <a class="contact-item"
         href="https://github.com/ThanasisSoftwareDeveloper"
         target="_blank" rel="noopener">
        <span class="contact-icon">🐙</span> GitHub
      </a>
      <a class="contact-item"
         href="https://www.thanasis-codes.eu/blog/"
         target="_blank" rel="noopener">
        <span class="contact-icon">🌐</span> Portfolio Blog
      </a>
    </div>

    <div class="contact-footer">
      © <?= date('Y') ?> Thanasis_Codes — Solve problems- Built with passion
    </div>

  </section>


  <!-- ════════════════════════════════
       CONTACT MODAL
  ════════════════════════════════ -->
  <div id="contact-modal-overlay" role="dialog" aria-modal="true" aria-labelledby="modal-heading">
    <div class="contact-modal">

      <div class="modal-header">
        <div>
          <div class="modal-label">Get in Touch</div>
          <h2 class="modal-title" id="modal-heading">
            Send a <em>message</em>
          </h2>
        </div>
        <button class="modal-close" aria-label="Close modal">✕</button>
      </div>

      <form id="contact-form" class="modal-form" novalidate>

        <div class="form-row">
          <div class="form-group">
            <label for="cf-name">Name</label>
            <input
              type="text"
              id="cf-name"
              name="name"
              placeholder="John Doe"
              required
              autocomplete="name"
            >
          </div>
          <div class="form-group">
            <label for="cf-email">Email</label>
            <input
              type="email"
              id="cf-email"
              name="email"
              placeholder="john@example.com"
              required
              autocomplete="email"
            >
          </div>
        </div>

        <div class="form-group">
          <label for="cf-subject">Subject</label>
          <input
            type="text"
            id="cf-subject"
            name="subject"
            placeholder="Project inquiry / Collaboration / ..."
            required
          >
        </div>

        <div class="form-group">
          <label for="cf-message">Message</label>
          <textarea
            id="cf-message"
            name="message"
            placeholder="Tell me about your project or idea..."
            required
          ></textarea>
        </div>

        <div id="modal-status" class="modal-status" role="alert"></div>

        <button type="submit" class="modal-submit" id="modal-submit-btn">
          <span class="submit-spinner"></span>
          <span class="submit-text">Send Message</span>
        </button>

      </form>
    </div>
  </div>


  <!-- JS -->
  <script src="main.js"></script>
  <!-- Contact Modal JS -->
  <script src="contact-modal.js"></script>

</body>
</html>
