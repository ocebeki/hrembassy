<section class="conf-map" id="mapa">
  <div class="container" id="kontakt">
    <div class="conf-map__wrapper">
      <div class="conf-map__adress-wrapper">
        <?php if( have_rows('mapa_adres') ): 
         while ( have_rows('mapa_adres') ) : the_row(); ?>
        <div class="conf-map__adress-item">
          <img src="<?php the_sub_field('ikona'); ?>" class="conf-map__icon" />
          <p class="conf-map__heading"><?php the_sub_field('naglowek'); ?></p>
          <div class="conf-map__heading-bottom">
            <p class="conf-map__first-line"><?php the_sub_field('gorna_linijka'); ?></p>
            <p class="conf-map__second-line"><?php the_sub_field('dolna_linijka'); ?></p>
          </div>
        </div>
        <?php endwhile;
               endif; ?>
      </div>
      <div class="conf-map">
        <?php get_template_part('template-parts/conf-map'); ?>
      </div>
    </div>
    <a class="conf-btn">Zostań partenrem <?php get_template_part('img/svg/arrow.svg'); ?></a>
  </div>
</section>