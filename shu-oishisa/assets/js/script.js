"use strict";

/* ===============================================
# ドロワーメニュー
=============================================== */
document.addEventListener('DOMContentLoaded', () => {
  const hamburgerButton = document.querySelector('.js-hamburger');
  const drawer = document.querySelector('.drawer');
  const body = document.body;
  const breakpoint = 768;

  // 要素が見つからない場合は処理を終了
  if (!drawer || !hamburgerButton) return;

  // ドロワーの開閉状態を管理する関数
  const toggleDrawer = isOpen => {
    if (isOpen) {
      // 開く処理
      drawer.classList.add('is-open');
      hamburgerButton.classList.add('is-open');
      body.classList.add('body-hidden');

      // 実際の高さを取得してアニメーション
      const drawerHeight = drawer.scrollHeight;
      drawer.style.height = `${drawerHeight}px`;
    } else {
      // 閉じる処理
      drawer.style.height = '0px';
      drawer.classList.remove('is-open');
      hamburgerButton.classList.remove('is-open');
      body.classList.remove('body-hidden');
    }
  };

  // ハンバーガーボタンでドロワーをトグル
  hamburgerButton.addEventListener('click', () => {
    const isOpen = !drawer.classList.contains('is-open');
    toggleDrawer(isOpen);
  });

  // リサイズ処理の最適化（デバウンス処理）
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
  function observeElements(selector) {
    let activeClass = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "is-active";
    let options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    let keepActive = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : false;
    const elements = document.querySelectorAll(selector);
    function handleIntersect(entries, observer) {
      entries.forEach(entry => {
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
    elements.forEach(element => observer.observe(element));
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
  observeElements(".js-slide-left", "is-active", {
    rootMargin: getRootMargin("0px 0px -10% 0px", "0px 0px -10% 0px")
  });
  observeElements(".js-slide-right", "is-active", {
    rootMargin: getRootMargin("0px 0px -10% 0px", "0px 0px -10% 0px")
  });
  observeElements(".js-fade-down", "is-active", {
    rootMargin: getRootMargin("0px 0px -10% 0px", "0px 0px -10% 0px")
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