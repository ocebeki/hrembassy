<section class="conf-after-party" id="after-party">
  <div class="container">
    <div class="conf-after-party__wrapper">
      <div class="conf-after-party__heading">
        <h2 class="conf-after-party__title"><?php the_field('naglowek') ?></h2>
        <p class="conf-after-party__place"><span class="semi-bold">Lokalizacja: </span><?php the_field('miejsce')?>
        </p>
        <p class="conf-after-party__start"><span class="semi-bold">Start:</span><?php the_field('start')?></p>
      </div>
      <div class="conf-after-party__text-wrapper">
        <?php while (have_rows('tekst')) : the_row(); ?>
        <p class="conf-after-party__text"> <?php the_sub_field('teskt_zawartosc') ?> </p>
        <?php endwhile; ?>
      </div>
      <div class="conf-after-party__gallery-wrapper">
        <?php while (have_rows('galeria')) : the_row(); ?>
        <div class="conf-after-party__gallery-item">
          <img class="conf-after-party__gallery-item-img" src="<?php the_sub_field('zdjecie') ?>" />
          <p class="conf-after-party__gallery-item-title"><?php the_sub_field('naglowek') ?></p>
          <p class="conf-after-party__gallery-item-caption"><?php the_sub_field('tekst') ?></p>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="conf-after-party__video-wrapper">
        <iframe class="conf-after-party__video" src="<?php the_field('wideo')?>" frameborder="0" width="100%"
          height="100%" allowfullscreen>
        </iframe>
      </div>
    </div>
  </div>
</section>