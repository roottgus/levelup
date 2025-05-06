// resources/js/app.js

import './bootstrap';
import '../css/app.css';

// Importamos Alpine
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Importamos las librerías
import ScrollReveal from 'scrollreveal';
import { CountUp } from 'countup.js';

window.addEventListener('DOMContentLoaded', () => {
  // ——— Lógica de splash (fade-out y scroll) ———
  const splash = document.getElementById('splash');
  const btn = document.getElementById('splash-btn');
  
  function closeSplash() {
    if (!splash) return;
    splash.classList.add('transition-opacity', 'duration-700', 'opacity-0');
    setTimeout(() => {
      splash.remove();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }, 700);
  }
  btn?.addEventListener('click', closeSplash);

  // ——— ScrollReveal: animaciones al entrar en viewport ———
  const sr = ScrollReveal({ reset: false, distance: '50px', duration: 600, easing: 'ease-out' });
  sr.reveal('.reveal-from-left',   { origin: 'left' });
  sr.reveal('.reveal-from-right',  { origin: 'right' });
  sr.reveal('.reveal-fade',        { opacity: 0, duration: 800, delay: 200 });

  // ——— CountUp: estadísticas animadas en "about" ———
  document.querySelectorAll('[data-counter]').forEach(el => {
    const endVal = parseInt(el.getAttribute('data-target'), 10) || 0;
    const counter = new CountUp(el, endVal, { duration: 2, separator: ',' });
    sr.reveal(el, {
      origin: 'bottom',
      beforeReveal: () => counter.start()
    });
  });

  // ——— AJAX Contact Form Submission ———
  const contactForm = document.getElementById('contact-form');
  const contactStatus = document.getElementById('contact-status');
  if (contactForm && contactStatus) {
    contactForm.addEventListener('submit', async e => {
      e.preventDefault();
      contactStatus.innerHTML = '';
      const url = contactForm.action;
      const formData = new FormData(contactForm);
      const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

      try {
        const response = await fetch(url, {
          method: 'POST',
          headers: { 'X-CSRF-TOKEN': token, 'Accept': 'application/json' },
          body: formData
        });

        if (response.ok) {
          const json = await response.json();
          contactStatus.innerHTML = `<p class=\"inline-block bg-green-500 text-light px-4 py-2 rounded\">${json.message}</p>`;
          contactForm.reset();
        } else {
          const errorData = await response.json();
          const messages = Object.values(errorData.errors || {}).flat();
          contactStatus.innerHTML = messages.map(m => `<p class=\"text-red-400\">${m}</p>`).join('');
        }
      } catch (error) {
        console.error(error);
        contactStatus.innerHTML = `<p class=\"text-red-400\">Ocurrió un error. Intenta nuevamente.</p>`;
      }
    });
  }
});
