<section class="conf-partners" id="partners">
  <div class="container">
    <div class="conf-partners__wrapper">
      <?php if( have_rows('partnerzy') ): 
         while ( have_rows('partnerzy') ) : the_row(); ?>
      <p class="conf-partners__heading"><?php the_sub_field('naglowek') ?></p>
      <div class="conf-partners__items-wrapper">
        <?php if( have_rows('loga') ): 
         while ( have_rows('loga') ) : the_row(); ?>
        <div class="conf-partners__item">
          <img src="<?php the_sub_field('logo') ?>" />
        </div>
        <?php endwhile; endif; ?>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>