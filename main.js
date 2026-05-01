/* ============================================================
   CICI AFRICA — Main JavaScript
   Handles: nav scroll, mobile menu, inner tabs,
   scroll animations, forms, subscribe, RSVP
   ============================================================ */

'use strict';

/* ─────────────────────────────────────────────
   1. NAVBAR — scroll shadow + active link
───────────────────────────────────────────── */
(function initNavbar() {
  const navbar = document.querySelector('.navbar');
  if (!navbar) return;

  // Shadow on scroll
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 30);
  }, { passive: true });

  // Mark current page link as active
  const page = location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.navbar__link').forEach(link => {
    const href = link.getAttribute('href') || link.dataset.page || '';
    if (href && page.includes(href.replace('.html', ''))) {
      link.classList.add('active');
    }
  });
})();

/* ─────────────────────────────────────────────
   2. MOBILE MENU TOGGLE
───────────────────────────────────────────── */
(function initMobileMenu() {
  const hamburger = document.querySelector('.navbar__hamburger');
  const menu      = document.querySelector('.mobile-menu');
  if (!hamburger || !menu) return;

  hamburger.addEventListener('click', () => {
    const isOpen = menu.classList.toggle('open');
    hamburger.setAttribute('aria-expanded', isOpen);
    hamburger.innerHTML = isOpen
      ? '<i class="fa-solid fa-xmark"></i>'
      : '<i class="fa-solid fa-bars"></i>';
  });

  // Close on outside click
  document.addEventListener('click', e => {
    if (!hamburger.contains(e.target) && !menu.contains(e.target)) {
      menu.classList.remove('open');
      hamburger.setAttribute('aria-expanded', false);
      hamburger.innerHTML = '<i class="fa-solid fa-bars"></i>';
    }
  });
})();

/* ─────────────────────────────────────────────
   3. INNER TABS  (Services / Culture / Talent)
───────────────────────────────────────────── */
function initInnerTabs(containerSelector) {
  const container = document.querySelector(containerSelector);
  if (!container) return;

  const tabs   = container.querySelectorAll('.inner-tab');
  const panels = container.querySelectorAll('.tab-panel');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const target = tab.dataset.tab;

      tabs.forEach(t => t.classList.remove('active'));
      panels.forEach(p => p.classList.remove('active'));

      tab.classList.add('active');
      const panel = container.querySelector(`#${target}`);
      if (panel) panel.classList.add('active');
    });
  });
}

// Initialize for all inner-tab sections
document.addEventListener('DOMContentLoaded', () => {
  initInnerTabs('#services-tabs-section');
  initInnerTabs('#culture-tabs-section');
  initInnerTabs('#talents-tabs-section');
});

/* ─────────────────────────────────────────────
   4. SCROLL REVEAL ANIMATIONS
───────────────────────────────────────────── */
(function initScrollReveal() {
  const targets = document.querySelectorAll('.fade-up, .fade-in, .slide-left, .slide-right');
  if (!targets.length) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target); // only animate once
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

  targets.forEach(el => observer.observe(el));
})();

/* ─────────────────────────────────────────────
   5. HERO TYPEWRITER (home page only)
───────────────────────────────────────────── */
function initTypewriter(selector, words, speed = 110, pause = 2200) {
  const el = document.querySelector(selector);
  if (!el) return;

  let wIdx = 0, cIdx = 0, deleting = false;

  function tick() {
    const word = words[wIdx];
    el.textContent = deleting ? word.slice(0, cIdx--) : word.slice(0, cIdx++);

    let delay = deleting ? speed / 2 : speed;

    if (!deleting && cIdx > word.length) {
      delay = pause; deleting = true;
    } else if (deleting && cIdx < 0) {
      deleting = false; wIdx = (wIdx + 1) % words.length; cIdx = 0; delay = 400;
    }
    setTimeout(tick, delay);
  }
  tick();
}

document.addEventListener('DOMContentLoaded', () => {
  initTypewriter('#hero-typewriter', [
    'Creativity Meets Opportunity',
    'Stories Come Alive',
    'Talent Meets Industry',
    'Africa Builds Its Future',
  ]);
});

/* ─────────────────────────────────────────────
   6. COUNTER ANIMATION (stats)
───────────────────────────────────────────── */
function animateCounter(el, target, duration = 1800) {
  const start = performance.now();
  const from  = 0;

  function step(now) {
    const progress = Math.min((now - start) / duration, 1);
    const ease = 1 - Math.pow(1 - progress, 3);
    el.textContent = Math.floor(from + (target - from) * ease) + (el.dataset.suffix || '');
    if (progress < 1) requestAnimationFrame(step);
  }
  requestAnimationFrame(step);
}

(function initCounters() {
  const counters = document.querySelectorAll('[data-count]');
  if (!counters.length) return;

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el  = entry.target;
        const num = parseInt(el.dataset.count, 10);
        animateCounter(el, num);
        observer.unobserve(el);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(el => observer.observe(el));
})();

/* ─────────────────────────────────────────────
   7. BOOKING FORM (services page)
───────────────────────────────────────────── */
(function initBookingForm() {
  const form = document.getElementById('booking-form');
  if (!form) return;

  form.addEventListener('submit', e => {
    e.preventDefault();
    showToast('✅ Project brief received! We\'ll be in touch within 24 hours.', 'success');
    form.reset();
  });
})();

/* ─────────────────────────────────────────────
   8. TALENT BOOKING FORM
───────────────────────────────────────────── */
(function initTalentBookingForm() {
  const form = document.getElementById('talent-booking-form');
  if (!form) return;

  form.addEventListener('submit', e => {
    e.preventDefault();
    showToast('✅ Talent request sent! We\'ll match you with the right talent within 48 hours.', 'success');
    form.reset();
  });
})();

/* ─────────────────────────────────────────────
   9. TALENT SIGNUP FORM
───────────────────────────────────────────── */
(function initTalentSignupForm() {
  const form = document.getElementById('talent-signup-form');
  if (!form) return;

  form.addEventListener('submit', e => {
    e.preventDefault();
    showToast('🌟 Welcome to the Cici Africa talent network! We\'ll review your profile and reach out soon.', 'success');
    form.reset();
  });
})();

/* ─────────────────────────────────────────────
   10. SUBSCRIBE FORMS
───────────────────────────────────────────── */
(function initSubscribeForms() {
  document.querySelectorAll('.subscribe-form').forEach(form => {
    form.addEventListener('submit', e => {
      e.preventDefault();
      const input = form.querySelector('.subscribe-input');
      if (!input || !input.value.includes('@')) {
        showToast('Please enter a valid email address.', 'error');
        return;
      }
      showToast('✅ Subscribed! You\'ll receive updates on everything Cici Africa.', 'success');
      input.value = '';
    });
  });
})();

/* ─────────────────────────────────────────────
   11. RSVP BUTTONS
───────────────────────────────────────────── */
(function initRsvpButtons() {
  document.querySelectorAll('[data-rsvp]').forEach(btn => {
    btn.addEventListener('click', () => {
      const eventName = btn.dataset.rsvp || 'this event';
      const email = prompt(`Enter your email to sign up for:\n"${eventName}"`);
      if (email && email.includes('@')) {
        showToast(`🎟️ You're registered for "${eventName}"! Confirmation details coming soon.`, 'success');
      }
    });
  });
})();

/* ─────────────────────────────────────────────
   12. TOAST NOTIFICATION
───────────────────────────────────────────── */
function showToast(message, type = 'success') {
  // Remove existing toasts
  document.querySelectorAll('.toast').forEach(t => t.remove());

  const toast = document.createElement('div');
  toast.className = `toast toast--${type}`;
  toast.setAttribute('role', 'alert');
  toast.innerHTML = `<span>${message}</span>
    <button onclick="this.parentElement.remove()" aria-label="Close">&times;</button>`;

  // Inject styles if not already present
  if (!document.getElementById('toast-styles')) {
    const s = document.createElement('style');
    s.id = 'toast-styles';
    s.textContent = `
      .toast {
        position: fixed; bottom: 2rem; right: 2rem;
        background: #1a0a00; color: #fff;
        padding: 1rem 1.25rem; border-radius: 12px;
        display: flex; align-items: center; gap: 1rem;
        font-size: 0.9rem; z-index: 9999;
        max-width: min(420px, calc(100vw - 4rem));
        box-shadow: 0 12px 40px rgba(0,0,0,0.3);
        animation: toastIn 0.35s cubic-bezier(0.34,1.56,0.64,1);
      }
      .toast--success { border-left: 4px solid #c2410f; }
      .toast--error   { border-left: 4px solid #ef4444; }
      .toast button {
        background: none; border: none; color: rgba(255,255,255,0.5);
        font-size: 1.2rem; cursor: pointer; padding: 0; line-height: 1;
        flex-shrink: 0;
      }
      .toast button:hover { color: #fff; }
      @keyframes toastIn {
        from { opacity: 0; transform: translateY(20px) scale(0.95); }
        to   { opacity: 1; transform: translateY(0) scale(1); }
      }
      @media (max-width: 540px) {
        .toast { bottom: 1rem; right: 1rem; left: 1rem; max-width: none; }
      }
    `;
    document.head.appendChild(s);
  }

  document.body.appendChild(toast);
  setTimeout(() => toast.style.opacity !== '0' && toast.remove(), 5000);
}

/* ─────────────────────────────────────────────
   13. SMOOTH SCROLL for anchor links
───────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const id = a.getAttribute('href').slice(1);
      const target = document.getElementById(id);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
});

/* ─────────────────────────────────────────────
   14. ACTIVE NAV LINK — highlight current page
───────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  const currentFile = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.navbar__link[href], .mobile-menu__link[href]').forEach(link => {
    if (link.getAttribute('href') === currentFile) {
      link.classList.add('active');
    }
  });
});

/* ─────────────────────────────────────────────
   15. IMAGE FALLBACKS
───────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('img[data-fallback]').forEach(img => {
    img.addEventListener('error', function() {
      const fb = this.dataset.fallback;
      if (fb) {
        this.style.display = 'none';
        const div = document.createElement('div');
        div.className = 'img-fallback';
        div.innerHTML = fb;
        div.style.cssText = `
          width:100%; height:100%;
          background: linear-gradient(135deg, var(--brown), var(--orange));
          display:flex; align-items:center; justify-content:center;
          font-size: 3.5rem; color: rgba(255,255,255,0.25);
          border-radius: inherit;
        `;
        this.parentElement.appendChild(div);
      }
    });
  });
});

/* expose globally for inline onclick usage */
window.showToast = showToast;
