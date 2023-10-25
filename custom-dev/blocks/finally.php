<?php if( have_rows('finally') ): ?>
  <?php while( have_rows('finally') ): the_row(); ?>
  <div class="finally" data-aos="fade-up">
    <div class="finally__container">
      <h2 class="finally__title section__title"><?php the_sub_field('title');?></h2>
      <h3 class="finally__subtitle section__subtitle"><?php the_sub_field('subtitle');?></h3>
      <p class="finally__text"><?php the_sub_field('text');?></p>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>