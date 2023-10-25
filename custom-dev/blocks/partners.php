<?php if( have_rows('partners') ): ?>
  <?php while( have_rows('partners') ): the_row(); ?>
    <div class="partners" data-aos="fade-up">
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