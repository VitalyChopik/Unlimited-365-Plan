
<?php if( have_rows('text_block') ): ?>
  <?php while( have_rows('text_block') ): the_row(); ?>
  <div class="text-block" data-aos="fade-up">
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