<?php if( have_rows('faq') ): ?>
  <?php while( have_rows('faq') ): the_row(); ?>
    <div class="faq" data-aos="fade-up">
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