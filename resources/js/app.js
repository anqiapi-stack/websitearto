import './bootstrap';

function initHeroCarousel() {
  if (!window.__HERO_CAROUSEL_ENABLED__) return;
  if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  const container = document.querySelector('.hero-slider');
  if (!container) return;
  const imgs = Array.from(container.querySelectorAll('.hero-slider__img'));
  if (imgs.length < 2) return;

  let idx = 0;
  window.setInterval(() => {
    imgs[idx].classList.remove('opacity-100', 'z-10');
    imgs[idx].classList.add('opacity-0', 'z-0');
    imgs[idx].setAttribute('aria-hidden', 'true');

    idx = (idx + 1) % imgs.length;

    imgs[idx].classList.remove('opacity-0', 'z-0');
    imgs[idx].classList.add('opacity-100', 'z-10');
    imgs[idx].setAttribute('aria-hidden', 'false');
  }, 5000);
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initHeroCarousel);
} else {
  initHeroCarousel();
}
