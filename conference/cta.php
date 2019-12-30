<section class="conf-cta" id="cta">
  <div class="container">
    <h2 class="conf-heading">Program konferencji</h2>
      <div class="conf-cta__wrapper">
        <div class="conf-cta__header">
          <div class="conf-cta__column-sm conf-cta__column-top">
            <p class="conf-cta__topic">Ścieżka tematyczna</p>
            <div class="conf-cta__triangle"></div>
          </div>
          <div class="conf-cta__column-sm conf-cta__column-top">
            <p class="conf-cta__time">Godzina</p>
            <div class="conf-cta__triangle"></div>
          </div>
          <div class="conf-cta__column-lg conf-cta__column-top">
            <p class="conf-cta__title">Temat wystąpienia i prelegent</p>
            <div class="conf-cta__triangle"></div>
          </div>
        </div>
        <div class="conf-cta__content-wrapper">
          <?php if (have_rows('harmonogram')) :
            while (have_rows('harmonogram')) : the_row(); ?>
              <div class="conf-cta__item">
                <div class="conf-cta__left">
                  <p class="conf-cta__left-name"><?php the_sub_field('naglowek') ?></p>
                  <img class="conf-cta__left-icon" src="<?php the_sub_field('ikona') ?>" />
                  <a class="conf-cta__btn" href="#harmonogram">KUP BILET <?php get_template_part('img/svg/arrow.svg'); ?></a>
                </div>
                <div class="conf-cta__right">
                  <?php if (have_rows('tabelka')) :
                    while (have_rows('tabelka')) : the_row(); ?>

                      <div class="conf-cta__row">
                        <p class="conf-cta__item-time"><?php the_sub_field('godzina') ?></p>
                        <div class="conf-cta__item-box">
                          <?php if (get_sub_field('opis')) : ?>
                            <p class="conf-cta__item-text">
                              <?php the_sub_field('opis') ?>
                            </p>
                          <?php endif; ?>
                          <div class="conf-cta__item-person-wrapper">
                            <img class="conf-cta__item-img" src="<?php the_sub_field('zdjecie') ?>" />
                            <div class="conf-cta__item-name-wrapper">
                              <p class="conf-cta__item-name semi-bold"><?php the_sub_field('imie') ?></p>
                              <p class="conf-cta__item-name-bottom"><?php the_sub_field('temat') ?></p>
                            </div>
                          </div>
                        </div>
                      </div>

                  <?php endwhile;
                  endif; ?>
                </div>
              </div>
          <?php endwhile;
          endif; ?>
        </div>
      </div>
</section>