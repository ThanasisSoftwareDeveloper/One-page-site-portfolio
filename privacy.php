<?php
// Privacy Policy - Calendar App Desktop
// thanasis-codes.eu/privacy.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Privacy Policy — Calendar App Desktop</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;800&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --bg: #080808;
      --surface: #0f0f0f;
      --border: #1a1a1a;
      --neon: #00f5c8;
      --neon-dim: rgba(0, 245, 200, 0.08);
      --text: #c8c8c8;
      --text-muted: #555;
      --font-display: 'Syne', sans-serif;
      --font-mono: 'Space Mono', monospace;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    html { scroll-behavior: smooth; }

    body {
      background: var(--bg);
      color: var(--text);
      font-family: var(--font-mono);
      font-size: 14px;
      line-height: 1.85;
      min-height: 100vh;
    }

    /* Scanline overlay */
    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background: repeating-linear-gradient(
        0deg,
        transparent,
        transparent 2px,
        rgba(0,0,0,0.03) 2px,
        rgba(0,0,0,0.03) 4px
      );
      pointer-events: none;
      z-index: 999;
    }

    /* Ambient glow */
    body::after {
      content: '';
      position: fixed;
      top: -200px;
      left: 50%;
      transform: translateX(-50%);
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(0,245,200,0.04) 0%, transparent 70%);
      pointer-events: none;
      z-index: 0;
    }

    .page-wrap {
      position: relative;
      z-index: 1;
      max-width: 760px;
      margin: 0 auto;
      padding: 80px 32px 100px;
    }

    /* Back link */
    .back {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      color: var(--neon);
      font-family: var(--font-mono);
      font-size: 12px;
      text-decoration: none;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      margin-bottom: 64px;
      opacity: 0.7;
      transition: opacity 0.2s;
    }
    .back:hover { opacity: 1; }
    .back::before { content: '←'; font-size: 14px; }

    /* Header */
    header { margin-bottom: 56px; border-bottom: 1px solid var(--border); padding-bottom: 40px; }

    .label {
      font-family: var(--font-mono);
      font-size: 11px;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--neon);
      margin-bottom: 16px;
      opacity: 0.8;
    }

    h1 {
      font-family: var(--font-display);
      font-size: clamp(28px, 5vw, 44px);
      font-weight: 800;
      color: #fff;
      line-height: 1.1;
      margin-bottom: 20px;
      letter-spacing: -0.02em;
    }

    h1 span { color: var(--neon); }

    .meta {
      font-size: 12px;
      color: var(--text-muted);
      letter-spacing: 0.05em;
    }

    /* Sections */
    section { margin-bottom: 48px; }

    h2 {
      font-family: var(--font-display);
      font-size: 16px;
      font-weight: 600;
      color: #fff;
      margin-bottom: 16px;
      padding-left: 14px;
      border-left: 2px solid var(--neon);
      letter-spacing: 0.02em;
    }

    p { margin-bottom: 14px; color: var(--text); }

    ul {
      list-style: none;
      padding: 0;
      margin-bottom: 14px;
    }

    ul li {
      padding: 6px 0 6px 20px;
      position: relative;
      color: var(--text);
    }

    ul li::before {
      content: '▸';
      position: absolute;
      left: 0;
      color: var(--neon);
      font-size: 10px;
      top: 8px;
    }

    /* Info box */
    .info-box {
      background: var(--neon-dim);
      border: 1px solid rgba(0,245,200,0.15);
      border-radius: 4px;
      padding: 20px 24px;
      margin: 32px 0;
    }

    .info-box p { margin: 0; font-size: 13px; }

    /* Contact block */
    .contact-block {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 4px;
      padding: 24px;
      margin-top: 16px;
    }

    .contact-block a {
      color: var(--neon);
      text-decoration: none;
    }

    .contact-block a:hover { text-decoration: underline; }

    /* Footer */
    footer {
      margin-top: 80px;
      padding-top: 32px;
      border-top: 1px solid var(--border);
      text-align: center;
      font-size: 12px;
      color: var(--text-muted);
    }

    footer a { color: var(--neon); text-decoration: none; opacity: 0.8; }
    footer a:hover { opacity: 1; }
  </style>
</head>
<body>
  <div class="page-wrap">

    <a href="https://www.thanasis-codes.eu" class="back">Back to Portfolio</a>

    <header>
      <div class="label">Legal · Privacy</div>
      <h1>Privacy Policy<br /><span>Calendar App Desktop</span></h1>
      <p class="meta">Effective date: May 1, 2025 &nbsp;·&nbsp; Last updated: May 1, 2025</p>
    </header>

    <div class="info-box">
      <p>This application is a personal project built for educational and portfolio purposes. It integrates with your Google Account to sync calendar events and Gmail data. Your privacy is taken seriously — this policy explains exactly what data is accessed and how it is used.</p>
    </div>

    <section>
      <h2>1. Who We Are</h2>
      <p>Calendar App Desktop is an independent web application developed by Thanasis Koufos. The application is accessible at <a href="https://calendar-app-desktop.vercel.app" style="color:var(--neon);text-decoration:none;">calendar-app-desktop.vercel.app</a> and is maintained as a personal project.</p>
      <p>Contact: <a href="mailto:thanasis.koufos1@gmail.com" style="color:var(--neon);text-decoration:none;">thanasis.koufos1@gmail.com</a></p>
    </section>

    <section>
      <h2>2. What Data We Access</h2>
      <p>To provide its functionality, the application requests access to the following Google account data via OAuth 2.0:</p>
      <ul>
        <li>Google Calendar — to read, create, and manage your calendar events</li>
        <li>Gmail — to read email metadata relevant to calendar and task management</li>
        <li>Basic profile information — your name and email address, for account identification</li>
      </ul>
      <p>We do not access any other data from your Google account beyond the scopes explicitly listed above.</p>
    </section>

    <section>
      <h2>3. How We Use Your Data</h2>
      <p>Data accessed through the Google APIs is used solely to power the features of the application:</p>
      <ul>
        <li>Displaying and syncing your Google Calendar events within the app</li>
        <li>Creating and updating tasks linked to calendar events</li>
        <li>Identifying your account for session management</li>
      </ul>
      <p>Your data is <strong style="color:#fff;">never sold, shared with third parties, or used for advertising</strong> purposes of any kind.</p>
    </section>

    <section>
      <h2>4. Data Storage</h2>
      <p>The application stores the following data on its servers:</p>
      <ul>
        <li>Your Google account email and display name</li>
        <li>OAuth tokens required to communicate with Google APIs on your behalf</li>
        <li>Tasks and categories you create within the application</li>
      </ul>
      <p>All data is stored in a PostgreSQL database hosted on Supabase. OAuth tokens are stored securely and are only used to fulfill API requests initiated by your actions within the app.</p>
    </section>

    <section>
      <h2>5. Google API Services — Limited Use Disclosure</h2>
      <p>Calendar App Desktop's use of information received from Google APIs adheres to the <a href="https://developers.google.com/terms/api-services-user-data-policy" style="color:var(--neon);text-decoration:none;" target="_blank" rel="noopener">Google API Services User Data Policy</a>, including the Limited Use requirements.</p>
      <p>Specifically:</p>
      <ul>
        <li>Data obtained via Google APIs is used only to provide or improve the features visible to the user</li>
        <li>Data is not transferred to third parties except as necessary to provide the service</li>
        <li>Data is not used for advertising or to serve ads</li>
        <li>Data is not used to train AI or machine learning models</li>
      </ul>
    </section>

    <section>
      <h2>6. Data Retention & Deletion</h2>
      <p>You can request deletion of your account and all associated data at any time by contacting us via email. Upon request, all stored data — including OAuth tokens, tasks, and profile information — will be permanently deleted within 30 days.</p>
      <p>You can also revoke the application's access to your Google account at any time through your <a href="https://myaccount.google.com/permissions" style="color:var(--neon);text-decoration:none;" target="_blank" rel="noopener">Google Account permissions page</a>.</p>
    </section>

    <section>
      <h2>7. Security</h2>
      <p>We implement standard security practices to protect your data, including encrypted connections (HTTPS), secure token storage, and Row Level Security on the database. However, no system is completely immune to security risks, and we encourage you to revoke access if you believe your account has been compromised.</p>
    </section>

    <section>
      <h2>8. Children's Privacy</h2>
      <p>This application is not intended for use by individuals under the age of 13. We do not knowingly collect personal data from children.</p>
    </section>

    <section>
      <h2>9. Changes to This Policy</h2>
      <p>This privacy policy may be updated occasionally. The "Last updated" date at the top of this page will reflect any changes. Continued use of the application after changes constitutes acceptance of the updated policy.</p>
    </section>

    <section>
      <h2>10. Contact</h2>
      <p>If you have any questions about this privacy policy or how your data is handled, please reach out:</p>
      <div class="contact-block">
        <p>Thanasis Koufos<br />
        Email: <a href="mailto:thanasis.koufos1@gmail.com">thanasis.koufos1@gmail.com</a><br />
        Website: <a href="https://www.thanasis-codes.eu">thanasis-codes.eu</a></p>
      </div>
    </section>

    <footer>
      <p>&copy; <?php echo date('Y'); ?> Thanasis Koufos &nbsp;·&nbsp; <a href="https://www.thanasis-codes.eu">Portfolio</a> &nbsp;·&nbsp; <a href="https://calendar-app-desktop.vercel.app">Calendar App</a></p>
    </footer>

  </div>
</body>
</html>
