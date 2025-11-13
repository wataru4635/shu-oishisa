window.addEventListener('DOMContentLoaded', () => {
  const swiperElement = document.querySelector('.js-mv-swiper');
  
  if (!swiperElement) return;

  const mvSwiper = new Swiper('.js-mv-swiper', {
    loop: true,
    speed: 2000,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    allowTouchMove: false,
  });
});