<?php if( have_rows('partnership') ): ?>
  <?php while( have_rows('partnership') ): the_row(); ?>
  <div class="partnership" data-aos="fade-up">
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