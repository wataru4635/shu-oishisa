/* ===============================================
# ドロワーメニュー
=============================================== */
document.addEventListener('DOMContentLoaded', () => {
  const hamburgerButton = document.querySelector('.js-hamburger');
  const drawer = document.querySelector('.drawer');
  const body = document.body;
  const breakpoint = 768;

  if (!drawer || !hamburgerButton) return;

  const toggleDrawer = (isOpen) => {
    if (isOpen) {
      drawer.classList.add('is-open');
      hamburgerButton.classList.add('is-open');
      body.classList.add('body-hidden');
      
      const drawerHeight = drawer.scrollHeight;
      drawer.style.height = `${drawerHeight}px`;
    } else {
      drawer.style.height = '0px';
      drawer.classList.remove('is-open');
      hamburgerButton.classList.remove('is-open');
      body.classList.remove('body-hidden');
    }
  };

  hamburgerButton.addEventListener('click', () => {
    const isOpen = !drawer.classList.contains('is-open');
    toggleDrawer(isOpen);
  });

  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      if (window.innerWidth >= breakpoint) {
        toggleDrawer(false);
      }
    }, 100);
  });
});

/* ===============================================
# アニメーション
// =============================================== */
document.addEventListener('DOMContentLoaded', () => {
  function observeElements(selector, activeClass = "is-active", options = {}, keepActive = false) {
    const elements = document.querySelectorAll(selector);

    function handleIntersect(entries, observer) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add(activeClass);

          if (!keepActive) {
            observer.unobserve(entry.target);
          }
        } else {
          if (!keepActive) {
            entry.target.classList.remove(activeClass);
          }
        }
      });
    }

    const observer = new IntersectionObserver(handleIntersect, options);
    elements.forEach((element) => observer.observe(element));
  }

  function getRootMargin(pcMargin, spMargin) {
    return window.matchMedia("(min-width: 768px)").matches ? pcMargin : spMargin;
  }
  observeElements(".js-fade-in", "is-active", {
    rootMargin: getRootMargin("0px 0px -10% 0px", "0px 0px -10% 0px")
  });

  observeElements(".js-fade-up", "is-active", {
    rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -10% 0px")
  });

  observeElements(".js-scaleImg", "is-active", {
    rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -5% 0px")
  });

  observeElements(".js-text-box", "is-active", {
    rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -5% 0px")
  });

  observeElements(".js-line-title", "is-active", {
    rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -5% 0px")
  });

  observeElements(".js-news-list", "is-active", {
    rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -5% 0px")
  });

  observeElements(".js-popUp", "is-active", {
    rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -5% 0px")
  });

});

/* ===============================================
# トップへ移動・CTA
=============================================== */

const toTopButton = document.querySelector('.to-top');
const ctaButton = document.querySelector('.cta-btn');
window.addEventListener('scroll', function () {
  const scrollPosition = window.scrollY || document.documentElement.scrollTop;
  if (scrollPosition > 300) {
    toTopButton.classList.add("js-active");
    ctaButton.classList.add("js-active");
  } else {
    toTopButton.classList.remove("js-active");
    ctaButton.classList.remove("js-active");
  }
});
toTopButton.addEventListener('click', function () {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});