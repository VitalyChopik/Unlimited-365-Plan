<?php if( have_rows('who') ): ?>
  <?php while( have_rows('who') ): the_row(); ?>
  <div class="who" data-aos="fade-up">
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

<!-- ready -->