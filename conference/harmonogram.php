<section class="conf-harmonogram" id="harmonogram">
  <div class="container">
    <div class="conf-harmonogram__wrapper">
      <h2 class="conf-heading">Dostępne pakiety</h2>
      <div class="conf-harmonogram__package-wrapper">
        <div class="conf-harmonogram__item conf-harmonogram__item-content">
          <h3 class="conf-harmonogram__heading"><?php the_field('zawartosc_naglowek') ?></h3>
          <?php while (have_rows('podpunkty')) : the_row(); ?>
            <p class="conf-harmonogram__text"><?php the_sub_field('podpunkt') ?></p>
          <?php endwhile; ?>
        </div>
        <?php $count = 0;
        while (have_rows('pakiet')) : the_row(); ?>
          <div class="conf-harmonogram__item conf-harmonogram__item-package">
            <?php if ($count == 1) { ?>
              <div class="conf-harmonogram__option">
                <p class="conf-harmonogram__option-text">Popularna opcja</p>
              </div>
              <div class="conf-harmonogram__triangle"></div>
            <?php } ?>
            <h3 class="conf-harmonogram__heading"><?php the_sub_field('naglowek') ?></h3>
            <p class="conf-harmonogram__price"><?php the_sub_field('cena') ?></p>
            <?php while (have_rows('ikony')) : the_row(); ?>
              <div class="conf-harmonogram__icon">
                <?php if (get_sub_field('ikona') == 'zawiera') {
                  get_template_part('/conference/img/verified.svg');
                } elseif (get_sub_field('ikona') == 'brak') {
                  // get_template_part('/conference/img/close-circular-button-symbol.svg');
                }
                ?>
              </div>
            <?php endwhile; ?>
            <div class="conf-harmonogram__item-content-mobile">
              <?php while (have_rows('zawartosc_telefon')) : the_row(); ?>
                <p class="conf-harmonogram__text"> <?php the_sub_field('podpunkt') ?> </p>
              <?php endwhile; ?>
            </div>
            <a class="conf-harmonogram__btn" href="<?php echo get_site_url(); ?>/koszyk/?add-to-cart=<?php the_sub_field('produkt'); ?>" target="_blank">Kup bilet*</a>
          </div>
        <?php $count++;
        endwhile; ?>
      </div>
      <a class="conf-btn conf-btn--full prevent" target="_blank" href="mailto:<?php the_field('pakiet_group'); ?>">Kup bilet grupowy <?php get_template_part('img/svg/arrow.svg'); ?></a>
      <p class="conf-harmonogram__bottom-caption"><?php the_field('pakiet_link') ?></p>
    </div>
  </div>
</section>