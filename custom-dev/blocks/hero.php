
<?php if( have_rows('hero') ): ?>
  <?php while( have_rows('hero') ): the_row(); ?>
  <div class="hero">
    <div class="hero__container">
      <h1 class="hero__title section__title" data-aos="fade-up"><?php the_sub_field('title');?></h1>
      <h2 class="hero__subtitle section__subtitle" data-aos="fade-up"><?php the_sub_field('subtitle');?></h2>
      <a href="#sign-up" class="hero__btn main__btn" data-aos="fade-up"><?php the_sub_field('button_text');?></a>
      <p class="hero__text" data-aos="fade-up"><?php the_sub_field('button_info');?></p>
      
      <div class="hero__image" data-aos="fade-up">
        <?php 
        $image = get_sub_field('image');
        echo wp_get_attachment_image( $image, 'full');
        ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>