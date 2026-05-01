/* ═══════════════════════════════════════════
   THANASIS KOUFOS — PORTFOLIO
   main.js
═══════════════════════════════════════════ */

(function () {
  'use strict';

  /* ── State ── */
  const SECTIONS = ['s-hero', 's-about', 's-skills', 's-projects', 's-contact'];
  let current   = 0;
  let animating = false;

  /* ═══════════════════════════════
     CUSTOM CURSOR
  ═══════════════════════════════ */
  const cursor = document.getElementById('cursor');
  const ring   = document.getElementById('cursor-ring');
  let mx = 0, my = 0, rx = 0, ry = 0;

  document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; });

  (function animCursor() {
    cursor.style.left = mx + 'px';
    cursor.style.top  = my + 'px';
    rx += (mx - rx) * 0.12;
    ry += (my - ry) * 0.12;
    ring.style.left = rx + 'px';
    ring.style.top  = ry + 'px';
    requestAnimationFrame(animCursor);
  })();

  document.querySelectorAll('a, button, .dot, .nav-arrow, .skill-card, .project-card').forEach(el => {
    el.addEventListener('mouseenter', () => {
      cursor.style.width  = '20px'; cursor.style.height = '20px';
      ring.style.width    = '52px'; ring.style.height   = '52px';
      ring.style.opacity  = '0.6';
    });
    el.addEventListener('mouseleave', () => {
      cursor.style.width  = '10px'; cursor.style.height = '10px';
      ring.style.width    = '36px'; ring.style.height   = '36px';
      ring.style.opacity  = '0.4';
    });
  });

  /* ═══════════════════════════════
     NAVIGATION
  ═══════════════════════════════ */
  function goTo(idx) {
    if (animating || idx === current || idx < 0 || idx >= SECTIONS.length) return;
    animating = true;

    const dir  = idx > current ? 1 : -1;
    const old  = document.getElementById(SECTIONS[current]);
    const next = document.getElementById(SECTIONS[idx]);

    old.classList.remove('active');
    old.classList.add(dir > 0 ? 'exit-up' : 'exit-down');
    setTimeout(() => old.classList.remove('exit-up', 'exit-down'), 700);

    next.classList.add('active');
    current = idx;
    updateUI();

    setTimeout(() => { animating = false; }, 800);
  }

  window.goTo     = goTo;   // expose for inline onclick
  window.navigate = dir => goTo(current + dir);

  function updateUI() {
    /* dots */
    document.querySelectorAll('.dot').forEach((d, i) => d.classList.toggle('active', i === current));
    /* counter */
    document.getElementById('cnt-curr').textContent = String(current + 1).padStart(2, '0');
    /* progress bar */
    const pct = (current / (SECTIONS.length - 1)) * 100;
    document.getElementById('progress-line').style.width = pct + '%';
    /* arrow opacity */
    document.getElementById('arrow-up').style.opacity   = current > 0 ? '1' : '0.25';
    document.getElementById('arrow-down').style.opacity = current < SECTIONS.length - 1 ? '1' : '0.25';
  }

  /* dots */
  document.querySelectorAll('.dot').forEach(d => {
    d.addEventListener('click', () => goTo(+d.dataset.index));
  });

  /* keyboard */
  document.addEventListener('keydown', e => {
    if (e.key === 'ArrowDown' || e.key === 'PageDown') window.navigate(1);
    if (e.key === 'ArrowUp'   || e.key === 'PageUp')   window.navigate(-1);
  });

  /* mouse wheel */
  let wheelLock = false;
  document.addEventListener('wheel', e => {
    if (wheelLock) return;
    wheelLock = true;
    window.navigate(e.deltaY > 0 ? 1 : -1);
    setTimeout(() => { wheelLock = false; }, 900);
  }, { passive: true });

  /* touch swipe */
  let touchY = 0;
  document.addEventListener('touchstart', e => { touchY = e.touches[0].clientY; }, { passive: true });
  document.addEventListener('touchend', e => {
    const dy = touchY - e.changedTouches[0].clientY;
    if (Math.abs(dy) > 40) window.navigate(dy > 0 ? 1 : -1);
  }, { passive: true });

  /* ═══════════════════════════════
     TYPEWRITER
  ═══════════════════════════════ */
  const phrases  = ['Web Developer', 'Software Engineer', 'UI/UX Designer', 'Problem Solver'];
  let pi = 0, ci = 0, deleting = false;
  const tw = document.getElementById('typewriter');

  function type() {
    if (!tw) return;
    const word = phrases[pi];
    if (!deleting) {
      tw.textContent = word.slice(0, ++ci);
      if (ci === word.length) { deleting = true; setTimeout(type, 1800); return; }
    } else {
      tw.textContent = word.slice(0, --ci);
      if (ci === 0) { deleting = false; pi = (pi + 1) % phrases.length; setTimeout(type, 400); return; }
    }
    setTimeout(type, deleting ? 60 : 90);
  }
  setTimeout(type, 1000);

  /* ═══════════════════════════════
     INIT
  ═══════════════════════════════ */
  updateUI();

})();
