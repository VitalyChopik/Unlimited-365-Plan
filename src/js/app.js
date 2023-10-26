
// import AOS from 'aos'
// import BaseHelpers from './helpers/BaseHelpers.js';

// // BaseHelpers.checkWebpSupport();

// BaseHelpers.addTouchClass();

// BaseHelpers.addLoadedClass();

// AOS.init();




document.addEventListener('DOMContentLoad', () => {
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



  const links = document.querySelectorAll('a[href^="#"]');

  links.forEach(function (link) {
    link.addEventListener('click', function (e) {
      e.preventDefault(); // Предотвращаем стандартное поведение ссылки

      // Получаем цель прокрутки (id из атрибута href ссылки)
      var targetId = this.getAttribute('href').substring(1);
      var targetElement = document.getElementById(targetId);

      if (targetElement) {
        // Вычисляем позицию прокрутки с учетом отступа
        var offset = 100;
        var targetPosition = targetElement.offsetTop - offset;

        window.scrollTo({
          top: targetPosition,
          behavior: "smooth"
        });
      }
    });
  });
}
);
