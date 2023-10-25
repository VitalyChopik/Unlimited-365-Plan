<?php if( have_rows('benefits') ): ?>
  <?php while( have_rows('benefits') ): the_row(); ?>
  <div class="benefits">
    <div class="benefits__container">
      <h2 class="benefits__title section__title"><?php the_sub_field('title');?></h2>
      <h3 class="benefits__subtitle"><?php the_sub_field('subtitle');?></h3>
      <div class="benefits__block">
      <?php if( have_rows('benefits_box') ): ?>
        <?php while( have_rows('benefits_box') ): the_row(); ?>
        <div class="benefits__box" data-aos="fade-up">
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

<!-- ready -->