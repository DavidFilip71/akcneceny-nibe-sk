const body = document.querySelector('body');
const hamburger = document.querySelector('.hamburger');

hamburger.addEventListener('click', function (event) {
  body.classList.toggle('showmenu');
});


const header = document.querySelector('header');
function getHeaderHeight() {
  return header ? header.offsetHeight : 0;
}

function getTargetFromHash(hash) {
  let target = null;
  switch (hash) {
    case '#benefity':
      target = document.querySelector('main');
      break;
    case '#akcni-sety':
      target = document.querySelector('section.sety');
      break;
    case '#poptavka':
      target = document.querySelector('section.poptavka');
      break;
    case '#reference':
      target = document.querySelector('section.reference');
      break;
    default:
      target = document.querySelector(hash); // fallback na id
  }
  return target;
}

function scrollToTarget(target) {
  if (!target) return;
  const headerOffset = getHeaderHeight();
  const elementPosition = target.getBoundingClientRect().top + window.scrollY;
  const offsetPosition = elementPosition - headerOffset;

  window.scrollTo({
    top: offsetPosition,
    behavior: 'smooth'
  });
}

document.querySelectorAll('nav a').forEach(link => {
  link.addEventListener('click', function (e) {
    const href = this.getAttribute('href');
    document.body.classList.remove('showmenu');

    if (!href) return;

    if (href.startsWith('#') && href.length > 1) {
      e.preventDefault();
      const target = getTargetFromHash(href);
      scrollToTarget(target);
    } else if (href === '#' || href === '') {
      e.preventDefault();
    }
  });
});

window.addEventListener('load', () => {
  if (window.location.hash) {
    const target = getTargetFromHash(window.location.hash);
    // použij timeout, protože jinak může stránka ještě renderovat
    setTimeout(() => scrollToTarget(target), 50);
  }
});