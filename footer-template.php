    </main>
    <footer class="footer">
      <div class="footer__container">
        <div class="footer__logo">
        <?php 
          $image = get_field('logo', 'option');
          echo wp_get_attachment_image( $image, 'full');
          ?>
        </div>
        <div class="footer__copy">
          <p>© 2023 Mednefits. All rights reserved. | <a href="https://www.mednefits.com/privacy-policy/">Privacy Policy</a>
          </p>
        </div>
        <div class="footer__social">
          <a href="<?php the_field('facebook', 'option')?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M3.6 0H32.4C34.3882 0 36 1.61177 36 3.6V32.4C36 34.3882 34.3882 36 32.4 36H3.6C1.61177 36 0 34.3882 0 32.4V3.6C0 1.61177 1.61177 0 3.6 0ZM3.6 3.6V32.4H32.4V3.6H3.6ZM19.8 18.0079H16.4395V14.4079H19.8V12.6C19.8 9.61766 22.2177 7.2 25.2 7.2H27V10.8H25.2C24.2059 10.8 23.4 11.6059 23.4 12.6V14.4079H26.9684V18.0079H23.4V28.8H19.8V18.0079Z" fill="#0392CF"></path>
            </svg>
          </a>
          <a href="<?php the_field('instagram', 'option')?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0002 9.81836C13.4815 9.81836 9.81836 13.4815 9.81836 18.0002C9.81836 22.5188 13.4815 26.182 18.0002 26.182C22.5188 26.182 26.182 22.5188 26.182 18.0002C26.182 13.4815 22.5188 9.81836 18.0002 9.81836ZM13.0911 18.0002C13.0911 20.7115 15.2889 22.9093 18.0002 22.9093C20.7115 22.9093 22.9093 20.7115 22.9093 18.0002C22.9093 15.2889 20.7115 13.0911 18.0002 13.0911C15.2889 13.0911 13.0911 15.2889 13.0911 18.0002Z" fill="#0392CF"></path>
              <path d="M27.818 6.5459C26.9142 6.5459 26.1816 7.27853 26.1816 8.18226C26.1816 9.08599 26.9142 9.81863 27.818 9.81863C28.7218 9.81863 29.4544 9.08599 29.4544 8.18226C29.4544 7.27853 28.7218 6.5459 27.818 6.5459Z" fill="#0392CF"></path>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M6.54545 0C2.9305 0 0 2.9305 0 6.54545V29.4545C0 33.0694 2.9305 36 6.54545 36H29.4545C33.0694 36 36 33.0694 36 29.4545V6.54545C36 2.9305 33.0694 0 29.4545 0H6.54545ZM29.4545 3.27273H6.54545C4.73798 3.27273 3.27273 4.73798 3.27273 6.54545V29.4545C3.27273 31.2621 4.73798 32.7273 6.54545 32.7273H29.4545C31.2621 32.7273 32.7273 31.2621 32.7273 29.4545V6.54545C32.7273 4.73798 31.2621 3.27273 29.4545 3.27273Z" fill="#0392CF"></path>
            </svg>
          </a>
          <a href="<?php the_field('linkedin', 'option')?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
              <path d="M5.5 0C2.48023 0 0 2.48023 0 5.5V30.5C0 33.5198 2.48023 36 5.5 36H30.5C33.5198 36 36 33.5198 36 30.5V5.5C36 2.48023 33.5198 0 30.5 0H5.5ZM5.5 3H30.5C31.8982 3 33 4.10177 33 5.5V30.5C33 31.8982 31.8982 33 30.5 33H5.5C4.10177 33 3 31.8982 3 30.5V5.5C3 4.10177 4.10177 3 5.5 3ZM9.5 7C8.83696 7 8.20107 7.26339 7.73223 7.73223C7.26339 8.20107 7 8.83696 7 9.5C7 10.163 7.26339 10.7989 7.73223 11.2678C8.20107 11.7366 8.83696 12 9.5 12C10.163 12 10.7989 11.7366 11.2678 11.2678C11.7366 10.7989 12 10.163 12 9.5C12 8.83696 11.7366 8.20107 11.2678 7.73223C10.7989 7.26339 10.163 7 9.5 7ZM8 14C7.447 14 7 14.447 7 15V28C7 28.553 7.447 29 8 29H11C11.553 29 12 28.553 12 28V15C12 14.447 11.553 14 11 14H8ZM15 14C14.447 14 14 14.447 14 15V28C14 28.553 14.447 29 15 29H18C18.553 29 19 28.553 19 28V20.5C19 19.121 20.121 18 21.5 18C22.879 18 24 19.121 24 20.5V28C24 28.553 24.447 29 25 29H28C28.553 29 29 28.553 29 28V20C29 16.691 26.309 14 23 14C21.462 14 20.063 14.586 19 15.541V15C19 14.447 18.553 14 18 14H15Z" fill="#0392CF"></path>
            </svg>
          </a>
          <a href="<?php the_field('youtube', 'option')?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="27" viewBox="0 0 36 27" fill="none">
              <path d="M17.8747 2.5C23.8886 2.5 28.7332 3.00116 31.0719 3.41879C32.3248 3.7529 32.8329 3.7587 33 4.84455C33.5012 7.5174 33.8353 10.3573 33.8353 13.2807C33.7517 16.8724 33.3341 19.7958 33 21.884C32 23 31.5731 22.8306 31.0719 22.9977C28.065 23.5824 23.0534 24 18.0418 24C13.0302 24 7.93503 23.6659 5.0116 22.9977C3.7587 22.6636 4 22.9977 3.25058 21.884C2.58237 19.5452 2.33179 16.4548 2.33179 13.3643C2.33179 9.52204 2.66589 6.68213 3 4.92807C3.25058 3.34107 4.34339 3.66937 4.76102 3.50232C7.5174 2.91763 12.6125 2.5 17.8747 2.5ZM17.8747 0C12.3619 0 7.18329 0.417633 4.42691 1.00232C2.58933 1.41995 1.00232 2.67285 0.668213 4.59397C0.334107 6.59861 0 9.60557 0 13.3643C0 17.123 0.334107 20.0464 0.75174 22.1346C1.08585 23.9722 2.67285 25.3086 4.51044 25.7262C7.43387 26.3109 12.4455 26.7285 17.9582 26.7285C23.471 26.7285 28.4826 26.3109 31.406 25.7262C33.2436 25.3086 34.8306 24.0557 35.1647 22.1346C35.4988 20.0464 35.9165 17.0394 36 13.2807C36 9.52204 35.5824 6.51508 35.1647 4.42691C34.8306 2.58933 33.2436 1.2529 31.406 0.835267C28.4826 0.417633 23.3875 0 17.8747 0Z" fill="#0392CF"></path>
              <path d="M15.0348 9.52204L21.7169 13.3643L15.0348 17.2065V9.52204ZM13.3643 6.68213V20.0464L25.058 13.3643L13.3643 6.68213Z" fill="#0392CF"></path>
            </svg>
          </a>
        </div>
      </div>
    </footer>
  </div>
<?php wp_footer();?>
</body>

</html>