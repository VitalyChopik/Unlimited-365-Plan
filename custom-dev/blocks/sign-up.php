
<?php if( have_rows('sign_up') ): ?>
  <?php while( have_rows('sign_up') ): the_row(); ?>
  <div class="sign-up" data-aos="fade-up" id="sign-up">
    <div class="sign-up__container">
      <h2 class="sign-up__title section__title"><?php the_sub_field('title');?></h2>
      <div class="sign-up__block">
        <!-- form -->
        <?php 
        $image = get_sub_field('image');
        echo wp_get_attachment_image( $image, 'full');?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>