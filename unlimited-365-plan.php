<?php
/*
Template Name: Unlimited 365 plan
Template Post Type: Page
*/
get_header('template');
?>
<!-- hero -->
<?php if( have_rows('hero') ): ?>
  <?php while( have_rows('hero') ): the_row(); ?>
  <div class="hero">
    <div class="hero__container">
      <h1 class="hero__title section__title" ><?php the_sub_field('title');?></h1>
      <h2 class="hero__subtitle section__subtitle" ><?php the_sub_field('subtitle');?></h2>
      <a href="#sign-up" class="hero__btn main__btn" ><?php the_sub_field('button_text');?></a>
      <p class="hero__text" ><?php the_sub_field('button_info');?></p>
      
      <div class="hero__image" >
        <?php 
        $image = get_sub_field('image');
        echo wp_get_attachment_image( $image, 'full');
        ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>

<!-- benefits -->
<?php if( have_rows('benefits') ): ?>
  <?php while( have_rows('benefits') ): the_row(); ?>
  <div class="benefits">
    <div class="benefits__container">
      <h2 class="benefits__title section__title"><?php the_sub_field('title');?></h2>
      <h3 class="benefits__subtitle"><?php the_sub_field('subtitle');?></h3>
      <div class="benefits__block">
      <?php if( have_rows('benefits_box') ): ?>
        <?php while( have_rows('benefits_box') ): the_row(); ?>
        <div class="benefits__box">
          <h4 class="benefits__box-value"><?php the_sub_field('box_title');?></h4>
          <p class="benefits__box-text"><?php the_sub_field('box_text');?></p>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
      <div class="benefits__note">
        <?php the_sub_field('note_text');?>
      </div>
      <a href="#sign-up" class="benefits__btn main__btn"><?php the_sub_field('button_text');?></a>
      <p class="benefits__text"><?php the_sub_field('button_info');?></p>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>

<!-- text-block -->
<?php if( have_rows('text_block') ): ?>
  <?php while( have_rows('text_block') ): the_row(); ?>
  <div class="text-block" >
    <div class="text-block__container">
      <h2 class="text-block__title section__title"><?php the_sub_field('title');?></h2>
      <div class="text-block__wrapper">
        <p class="text-block__text"><?php the_sub_field('text');?></p>
        <?php
        $image = get_sub_field('image');
        echo wp_get_attachment_image( $image, 'full', '', ['class' => 'text-block__image' ]);
        ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>
<!-- text-block -->
<?php if( have_rows('text_block2') ): ?>
  <?php while( have_rows('text_block2') ): the_row(); ?>
  <div class="text-block" >
    <div class="text-block__container">
      <h2 class="text-block__title section__title"><?php the_sub_field('title');?></h2>
      <div class="text-block__wrapper">
        <p class="text-block__text"><?php the_sub_field('text');?></p>
        <?php
        $image = get_sub_field('image');
        echo wp_get_attachment_image( $image, 'full', '', ['class' => 'text-block__image' ]);
        ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>
<!-- parnership -->
<?php if( have_rows('partnership') ): ?>
  <?php while( have_rows('partnership') ): the_row(); ?>
  <div class="partnership" >
    <div class="partnership__container">
      <h2 class="partnership__title section__title"><?php the_sub_field('title');?></h2>
      <div class="partnership__block">
        <?php if( have_rows('partnership__box') ): ?>
          <?php while( have_rows('partnership__box') ): the_row(); ?>
          <div class="partnership__box">
              <?php
              $image = get_sub_field('image');
              echo wp_get_attachment_image( $photo, 'full' , '', ['class' => 'partnership__image' ] );?>
              <h3 class="partnership__box-title"><?php the_sub_field('box_title');?></h3>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>
<!-- who -->
<?php if( have_rows('who') ): ?>
  <?php while( have_rows('who') ): the_row(); ?>
  <div class="who" >
    <div class="who__container">
      <h2 class="who__title section__title"><?php the_sub_field('title');?></h2>
      <div class="who__block">
      <?php if( have_rows('who_box') ): ?>
        <?php while( have_rows('who_box') ): the_row(); 
        $image = get_sub_field('image');
        ?>
        <div class="who__box">
          <?php echo wp_get_attachment_image( $photo, 'full' , '', ['class' => 'who__box-icon' ] );?>
          <p class="who__box-text"><?php the_sub_field('text');?></p>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
      <a href="#sign-up" class="benefits__btn main__btn"><?php the_sub_field('button_text');?></a>
      <p class="benefits__text"><?php the_sub_field('button_info');?></p>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>

<!-- finally -->
<?php if( have_rows('finally') ): ?>
  <?php while( have_rows('finally') ): the_row(); ?>
  <div class="finally" >
    <div class="finally__container">
      <h2 class="finally__title section__title"><?php the_sub_field('title');?></h2>
      <h3 class="finally__subtitle section__subtitle"><?php the_sub_field('subtitle');?></h3>
      <p class="finally__text"><?php the_sub_field('text');?></p>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>
<!-- signup -->

<?php if( have_rows('sign_up') ): ?>
  <?php while( have_rows('sign_up') ): the_row(); ?>
  <div class="sign-up"  id="sign-up">
    <div class="sign-up__container">
      <h2 class="sign-up__title section__title"><?php the_sub_field('title');?></h2>
      <div class="sign-up__block">
        <h3 class="sign-up__form-title">Only entries from registered businesses will be eligible for consideration.</h3>
        <span class="sign-up__info">Fields marked with an asterisk (*) are required.</span>
        <div id="hubspot-form-container"></div>
        <script>
          function initializeHubSpotForm() {
            hbspt.forms.create({
              region: "na1",
              portalId: "2705714",
              formId: "0a88b17a-4d32-40e8-97cd-a31dda960057",
              target: "#hubspot-form-container"
            })
          }
          function loadScript(url, callback) {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = url;
            script.async = true;
            script.onload = callback;
            document.getElementsByTagName('head')[0].appendChild(script);
          }

          if (typeof hbspt === 'undefined') {
            loadScript('//js.hsforms.net/forms/embed/v2.js', function() {
              initializeHubSpotForm();
            });
          } else {
            initializeHubSpotForm();
          }
        </script>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>
<!-- faq -->
<?php if( have_rows('faq') ): ?>
  <?php while( have_rows('faq') ): the_row(); ?>
    <div class="faq" >
      <div class="faq__container">
        <h2 class="faq__title section__title"><?php the_sub_field('title');?></h2>
        <div class="faq__block">
          <?php if( have_rows('faq__box') ): ?>
            <?php while( have_rows('faq__box') ): the_row(); ?>
              <div class="faq__box">
                <div class="faq__box-question"><?php the_sub_field('question');?></div>
                <div class="faq__box-answer"><?php the_sub_field('answer');?></div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
<!--  partners-->
<?php if( have_rows('partners') ): ?>
  <?php while( have_rows('partners') ): the_row(); ?>
    <div class="partners" >
      <div class="partners__container">
        <h2 class="partners__title"><?php the_sub_field('title');?></h2>
        <div class="partners__block">
        <?php if( have_rows('partners_box') ): ?>
          <?php while( have_rows('partners_box') ): the_row(); ?>
          <div class="partners__box">
            <?php 
              $image = get_sub_field('image');
              echo wp_get_attachment_image( $image, 'full');
            ?>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
<?php
get_footer('template');
?>

