<?php get_header(); ?>
<section class="section map map--kontakt">
  <div class="container">
    <div class="map__wrapper">
      <div class="map__top">
        <div class="map__item-wrapper" data-scroll="staggerUp">
          <div class="map__item" data-scroll="staggerUpItem">
            <div class="map__heading">Główny satelita</div>
            <div class="map__tekst"><?php the_field('map_satelita', get_option('page_on_front')); ?></div>
          </div>
          <div class="map__item" data-scroll="staggerUpItem">
            <div class="map__heading">Stacja kosmiczna</div>
            <div class="map__tekst"><?php the_field('map_stacja', get_option('page_on_front')); ?></div>
          </div>
          <div class="map__item" data-scroll="staggerUpItem">
            <div class="map__heading">Telefon</div>
            <div class="map__tekst"><?php the_field('map_telefon', get_option('page_on_front')); ?></div>
          </div>
          <div class="map__item" data-scroll="staggerUpItem">
            <div class="map__heading">E-mail</div>
            <div class="map__tekst"><?php echo antispambot( the_field('map_email', get_option('page_on_front'))); ?>
            </div>
          </div>
        </div>
        <div class="map__img">
          <img src="<?php the_field('map_img', get_option('page_on_front')); ?>" alt="" />
        </div>
      </div>
      <div class="map__bottom" data-scroll="fadeIn">
        <?php get_template_part('template-parts/map'); ?>
      </div>
    </div>
  </div>
</section>

<section class="section newsletter">
  <div class="container">
    <div class="oddzwonimy__wrapper">
      <div class="oddzwonimy__top">
        <div class="oddzwonimy__upheading" data-scroll="fadeUp"><?php the_field('oddzwonimy_haslo'); ?></div>
        <div class="oddzwonimy__heading" data-scroll="fadeDown"><?php the_field('oddzwonimy_naglowek'); ?></div>
      </div>
      <div class="oddzwonimy__flex">
        <div class="oddzwonimy__left"><img
            src="<?php the_field('oddzwonimy_left', get_page_by_path('warsztaty-dedykowane')); ?>" alt="" /></div>
        <div class="oddzwonimy__middle form" data-scroll="fadeIn">
          <?php echo do_shortcode('[contact-form-7 id="8" title="Oddzwonimy"]'); ?>
        </div>
        <div class="oddzwonimy__right"><img
            src="<?php the_field('oddzwonimy_right', get_page_by_path('warsztaty-dedykowane')); ?>" alt="" /></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>