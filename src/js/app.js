
import AOS from 'aos'
import BaseHelpers from './helpers/BaseHelpers.js';

BaseHelpers.checkWebpSupport();

BaseHelpers.addTouchClass();

BaseHelpers.addLoadedClass();

AOS.init();

const faqBoxs = document.querySelectorAll('.faq__box');


if (faqBoxs[0]) {
  faqBoxs.forEach((faqBox) => {
    const question = faqBox.querySelector('.faq__box-question');
    question.addEventListener('click', () => {
      faqBox.classList.toggle('active');
    })
  });
  faqBoxs[0].click();
}

const anchorLinks = document.querySelectorAll('a[href^="#"]');
anchorLinks.forEach(function (anchor) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    const targetId = this.getAttribute('href').substring(1);
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
      const targetPosition = targetElement.offsetTop;

      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
      });
    }
  });
});