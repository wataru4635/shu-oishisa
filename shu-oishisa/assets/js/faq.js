"use strict";

/* ===============================================
# よくある質問のアコーディオン機能
=============================================== */
const setupFaqAccordion = () => {
  const faqQuestions = document.querySelectorAll('.js-faq-question');
  if (!faqQuestions.length) return;
  faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
      const faqItem = question.closest('.faq__item');
      const isOpen = faqItem.classList.toggle('is-open');
      const answer = faqItem.querySelector('.faq__item-answer');
      if (isOpen) {
        const scrollHeight = answer.scrollHeight;
        answer.style.maxHeight = scrollHeight + 'px';
      } else {
        answer.style.maxHeight = '0';
      }
    });
  });
};
document.addEventListener('DOMContentLoaded', () => {
  setupFaqAccordion();
});