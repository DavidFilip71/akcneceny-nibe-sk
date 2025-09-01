document.addEventListener('DOMContentLoaded', () => {
  const carousel = document.querySelector('.carousel');
  if (!carousel) return;

  const inner = carousel.querySelector('.carousel-inner');
  if (!inner) return;

  const slides = Array.from(inner.querySelectorAll('.hero'));
  if (!slides.length) return;

  let current = slides.findIndex(s => s.classList.contains('is-current'));
  if (current === -1) current = 0;
  slides[current].classList.add('is-current');

  let isAnimating = false;
  const DURATION = 750; // odpovídá CSS transition
  const INTERVAL = 4000;
  let autoplayTimer = null;

  // --- AUTOPLAY ---
  function startAutoplay() {
    stopAutoplay();
    autoplayTimer = setInterval(() => {
      if (!isAnimating) goTo((current + 1) % slides.length, 'next');
    }, INTERVAL);
  }

  function stopAutoplay() {
    if (autoplayTimer) clearInterval(autoplayTimer);
    autoplayTimer = null;
  }

  // --- GO TO ---
  function goTo(nextIndex, direction = 'next') {
    if (isAnimating || nextIndex === current) return;
    isAnimating = true;

    const prev = slides[current];
    const next = slides[nextIndex];

    // odstraníme staré inline transform a třídy
    next.style.transition = 'none';
    next.style.transform = '';
    next.classList.remove('exit-left', 'exit-right', 'is-current');

    // startovní pozice pro nový slide
    next.style.transform = direction === 'next' ? 'translateX(100%)' : 'translateX(-100%)';

    void next.offsetWidth; // reflow

    // spustíme animaci
    next.style.transition = '';
    requestAnimationFrame(() => {
      next.classList.add('is-current');
      next.style.transform = ''; // CSS transform: translateX(0)

      prev.classList.remove('is-current');
      prev.classList.add(direction === 'next' ? 'exit-left' : 'exit-right');
    });

    // cleanup po animaci
    const cleanup = (ev) => {
      if (ev && ev.target !== next) return;
      next.removeEventListener('transitionend', cleanup);

      prev.classList.remove('exit-left', 'exit-right');
      prev.style.transition = '';
      prev.style.transform = '';

      current = nextIndex;
      isAnimating = false;
    };

    next.addEventListener('transitionend', cleanup);
    setTimeout(() => { if (isAnimating) cleanup(); }, DURATION + 50);
  }

  // --- inicializace ---
  slides.forEach((s,i) => {
    if(i===current) s.classList.add('is-current');
    else s.classList.remove('is-current','exit-left','exit-right','no-transition');
  });

  // --- tlačítka ---
  const btnPrev = carousel.querySelector('.carousel-control.prev');
  const btnNext = carousel.querySelector('.carousel-control.next');

  if (btnPrev) btnPrev.addEventListener('click', () => goTo((current - 1 + slides.length) % slides.length, 'prev'));
  if (btnNext) btnNext.addEventListener('click', () => goTo((current + 1) % slides.length, 'next'));

  // --- autoplay na hover ---
  carousel.addEventListener('mouseenter', stopAutoplay);
  carousel.addEventListener('mouseleave', startAutoplay);
  startAutoplay();

  // --- DOTYKOVÉ OVLÁDÁNÍ ---
  const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
  if (isTouchDevice) {
    let startX = 0, moveX = 0;
    const THRESHOLD = 50;

    inner.addEventListener('touchstart', (e) => {
      if (e.touches.length !== 1) return;
      startX = e.touches[0].clientX;
      moveX = 0;
      stopAutoplay();
    });

    inner.addEventListener('touchmove', (e) => {
      if (e.touches.length !== 1) return;
      moveX = e.touches[0].clientX - startX;
    });

    inner.addEventListener('touchend', () => {
      if (Math.abs(moveX) > THRESHOLD) {
        if (moveX < 0) goTo((current + 1) % slides.length, 'next');
        else goTo((current - 1 + slides.length) % slides.length, 'prev');
      }
      startAutoplay();
      startX = 0;
      moveX = 0;
    });
  }

  // expozice pro debug
  window.myCarousel = { goTo, startAutoplay, stopAutoplay, slides };
});
