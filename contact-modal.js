/* ═══════════════════════════════════════════
   CONTACT MODAL JS — thanasis-codes.eu
═══════════════════════════════════════════ */

(function () {
  'use strict';

  /* ── DOM refs ── */
  const overlay = document.getElementById('contact-modal-overlay');
  const form    = document.getElementById('contact-form');
  const status  = document.getElementById('modal-status');
  const submit  = document.getElementById('modal-submit-btn');

  /* ── Open ── */
  function openModal() {
    overlay.classList.add('open');
    document.body.style.overflow = 'hidden';
    // Focus first input after animation
    setTimeout(() => {
      const first = form.querySelector('input, textarea');
      if (first) first.focus();
    }, 420);
  }

  /* ── Close ── */
  function closeModal() {
    overlay.classList.remove('open');
    document.body.style.overflow = '';
    setTimeout(() => {
      status.className = 'modal-status';
      status.textContent = '';
      form.reset();
      setSubmitState('idle');
    }, 350);
  }

  /* ── Trigger buttons ── */
  document.querySelectorAll('[data-open-contact]').forEach(btn => {
    btn.addEventListener('click', e => { e.preventDefault(); openModal(); });
  });

  /* ── Close button ── */
  document.querySelector('.modal-close')?.addEventListener('click', closeModal);

  /* ── Click outside modal box ── */
  overlay.addEventListener('click', e => {
    if (e.target === overlay) closeModal();
  });

  /* ── Escape key ── */
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && overlay.classList.contains('open')) closeModal();
  });

  /* ── Submit state helper ── */
  function setSubmitState(state) {
    const spinner  = submit.querySelector('.submit-spinner');
    const text     = submit.querySelector('.submit-text');
    if (state === 'loading') {
      submit.disabled = true;
      submit.classList.add('loading');
      spinner.style.display = 'block';
      text.textContent = 'Sending...';
    } else {
      submit.disabled = false;
      submit.classList.remove('loading');
      spinner.style.display = 'none';
      text.textContent = 'Send Message';
    }
  }

  /* ── Form submit ── */
  form.addEventListener('submit', async function (e) {
    e.preventDefault();

    status.className = 'modal-status';
    status.textContent = '';
    setSubmitState('loading');

    const data = {
      name:    form.name.value.trim(),
      email:   form.email.value.trim(),
      subject: form.subject.value.trim(),
      message: form.message.value.trim(),
    };

    try {
      const res = await fetch('send_mail.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data),
      });

      const json = await res.json();

      if (json.success) {
        status.className = 'modal-status success';
        status.textContent = '✓ Message sent! I\'ll get back to you soon.';
        form.reset();
      } else {
        throw new Error(json.message || 'Unknown error');
      }
    } catch (err) {
      status.className = 'modal-status error';
      status.textContent = '✗ Something went wrong. Try emailing me directly.';
      console.error(err);
    } finally {
      setSubmitState('idle');
    }
  });

})();
