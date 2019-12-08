<?php get_header(); ?>

<section class="section bulb">
  <div class="container">
    <div class="bulb__wrapper">
      <div class="bulb__left">
        <div>
          <div class="bulb__text" data-scroll="fadeUp"><?php the_field('konsultacje_tekst'); ?></div>
          <a class="btn" href="#formularz" data-scroll="fadeIn">Napisz do nas</a>
        </div>
      </div>
      <div class="bulb__right">
        <img src="<?php the_field('konsultacje_img'); ?>" alt="" />
      </div>
    </div>
  </div>
</section>

<section class="section obszary">
  <div class="container">
    <div class="obszary__wrapper">
      <div class="obszary__left">
        <div class="obszary__heading" data-scroll="fadeDown"><?php the_field('obszary_naglowek'); ?></div>
        <img class="obszary_img" src="<?php the_field('obszary_img'); ?>" alt="" data-scroll="fadeIn" />
      </div>
      <div class="obszary__right">
        <div class="obszary__item">
          <div class="obszary__subheading" data-scroll="fadeUp"><?php the_field('obszary_haslo1'); ?></div>
          <div class="obszary_text" data-scroll="fadeUp"><?php the_field('obszary_tekst1'); ?></div>
        </div>
        <div class="obszary__item">
          <div class="obszary__subheading" data-scroll="fadeUp"><?php the_field('obszary_haslo2'); ?></div>
          <ul class="obszary_list" data-scroll="staggerUp">
            <?php while ( have_rows('obszary_lista1') ) : the_row(); ?>
            <li data-scroll="staggerUpItem"><?php the_sub_field('podpunkt'); ?></li>
            <?php endwhile; ?>
          </ul>
        </div>
        <div class="obszary__item">
          <div class="obszary__subheading" data-scroll="fadeUp"><?php the_field('obszary_haslo3'); ?></div>
          <ul class="obszary_list" data-scroll="staggerUp">
            <?php while ( have_rows('obszary_lista2') ) : the_row(); ?>
            <li data-scroll="staggerUpItem"><?php the_sub_field('podpunkt'); ?></li>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section liczyc">
  <div class="container">
    <div class="liczyc__wrapper">
      <div class="trenerzy__heading" data-scroll="fadeDown">Na co możesz liczyć?</div>
      <div class="liczyc__items" data-scroll="staggerUp">
        <div class="liczyc__item" data-scroll="staggerUpItem">
          <div class="liczyc__icon"><?php get_template_part('img/svg/head.svg'); ?></div>
          <div class="liczyc__tekst"><?php the_field('liczyc_tekst_1'); ?></div>
        </div>
        <div class="liczyc__item" data-scroll="staggerUpItem">
          <div class="liczyc__icon"><?php get_template_part('img/svg/notes.svg'); ?></div>
          <div class="liczyc__tekst"><?php the_field('liczyc_tekst_2'); ?></div>
        </div>
        <div class="liczyc__item" data-scroll="staggerUpItem">
          <div class="liczyc__icon"><?php get_template_part('img/svg/notes2.svg'); ?></div>
          <div class="liczyc__tekst"><?php the_field('liczyc_tekst_3'); ?></div>
        </div>
        <div class="liczyc__item" data-scroll="staggerUpItem">
          <div class="liczyc__icon"><?php get_template_part('img/svg/cloud.svg'); ?></div>
          <div class="liczyc__tekst"><?php the_field('liczyc_tekst_4'); ?></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section trenerzy">
  <div class="container">
    <div class="trenerzy__wrapper">
      <div class="trenerzy__heading" data-scroll="fadeDown"><?php the_field('konsultanci_naglowek'); ?></div>
      <div class="trenerzy__slider-wrapper">
        <div class="trenerzy__slider" data-slider="trenerzy">
          <?php while ( have_rows('konsultanci_slider') ) : the_row(); ?>
          <div class="trenerzy__heads">
            <div class="trenerzy__head">
              <img src="<?php the_sub_field('konsultanci_img'); ?>" alt="" />
            </div>
          </div>
          <?php endwhile; ?>
        </div>
        <div class="trenerzy__arrow trenerzy__arrow--prev" data-slider="trenerzyPrev">
          <?php get_template_part('img/svg/prev.svg'); ?></div>
        <div class="trenerzy__arrow trenerzy__arrow--next" data-slider="trenerzyNext">
          <?php get_template_part('img/svg/next.svg'); ?></div>
      </div>
      <div class="trenerzy__texts-slider" data-slider="trenerzy-texts">
        <?php while ( have_rows('konsultanci_slider') ) : the_row(); ?>
        <div class="trenerzy__texts">
          <div class="trenerzy__name" data-scroll="fadeDown"><?php the_sub_field('konsultanci_imie'); ?></div>
          <div class="trenerzy__tekst" data-scroll="fadeUp"><?php the_sub_field('konsultanci_tekst'); ?></div>
          <div class="trenerzy__social" data-scroll="fadeIn">
            <a href="<?php the_sub_field('konsultanci_social'); ?>"><?php get_template_part('img/svg/li.svg'); ?></a>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>

<section id="formularz" class="section">
  <div class="container">
    <?php get_template_part('template-parts/wspolpraca'); ?>
  </div>
</section>

<?php get_footer(); ?>