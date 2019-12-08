<?php get_header(); ?>
<section id="content" class=" section warsztaty-menu">
  <div class="container">
    <div class="warsztaty-menu__wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/img/warsztaty-menu.png" alt="" data-scroll="fadeLeft" />
      <div class="warsztaty-menu__part-wrapper">
        <div class="warsztaty-menu__part" data-scroll="fadeLeft"><span
            class="warsztaty-menu__link warsztaty-menu__link--active">Warsztaty</span></div>
        <div class="warsztaty-menu__part" data-scroll="fadeRight"><a class="warsztaty-menu__link"
            href="<?php echo get_permalink( get_page_by_path( 'warsztaty-dedykowane' ) ); ?>">Warsztaty
            dedykowane</a></div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/warsztaty-menu.png" alt="" data-scroll="fadeRight" />
    </div>
  </div>
</section>
<section class="section section--no-margin section--grey">
  <div class="container">
    <?php echo do_shortcode('[products category="Warsztaty" orderby="date" order="DESC" limit="6" paginate="true" ]'); ?>
  </div>
</section>

<section class="section proces">
  <div class="container">
    <div class="proces__wrapper">
      <div class="proces__heading" data-scroll="fadeDown">PROCES WARSZTATOWY</div>
      <div class="proces__img" data-scroll="fadeIn"><img src="<?php the_field('proces_img'); ?>" alt="" /></div>
      <div class="proces__texts">
        <div class="proces__part"><?php the_field('proces1'); ?></div>
        <div class="proces__part"><?php the_field('proces2'); ?></div>
        <div class="proces__part"><?php the_field('proces3'); ?></div>
        <div class="proces__part"><?php the_field('proces4'); ?></div>
        <div class="proces__part"><?php the_field('proces5'); ?></div>
      </div>
    </div>
  </div>
</section>

<section class="section baner-dedykowane">
  <div class="container">
    <div class="baner-dedykowane__wrapper">
      <div class="baner-dedykowane__img"><img src="<?php the_field('baner_left'); ?>" alt="" /></div>
      <div class="baner-dedykowane__middle">
        <div class="baner-dedykowane__heading" data-scroll="fadeDown"><?php the_field('baner_heading'); ?></div>
        <div class="baner-dedykowane__tekst" data-scroll="fadeUp"><?php the_field('baner_tekst'); ?></div>
        <a class="btn" href="<?php echo get_permalink(get_page_by_path('warsztaty-dedykowane')); ?>"
          data-scroll="fadeIn">Zobacz więcej</a>
      </div>
      <div class="baner-dedykowane__img"><img src="<?php the_field('baner_right'); ?>" alt="" /></div>
    </div>
  </div>
</section>

<section class="section sekcja">
  <div class="container">
    <div class="sekcja__wrapper">
      <div class="sekcja__left">
        <div>
          <div class="sekcja__heading" data-scroll="fadeDown"><?php the_field('co_naglowek'); ?></div>
          <div class="sekcja__text" data-scroll="fadeUp"><?php the_field('co_tekst'); ?></div>
          <div class="sekcja__icons" data-scroll="staggerUp">
            <div class="sekcja__icons-item" data-scroll="staggerUpItem">
              <div class="sekcja__icon"><?php get_template_part('img/svg/screen.svg'); ?></div>
              <div class="skecja__icon-texts">
                <div class="sekcja__icon-heading"><?php the_field('co_icon_naglowek1'); ?></div>
                <div class="sekcja__icon-text"><?php the_field('co_icon_tekst1'); ?></div>
              </div>
            </div>
            <div class="sekcja__icons-item" data-scroll="staggerUpItem">
              <div class="sekcja__icon"><?php get_template_part('img/svg/place.svg'); ?></div>
              <div class="skecja__icon-texts">
                <div class="sekcja__icon-heading"><?php the_field('co_icon_naglowek2'); ?></div>
                <div class="sekcja__icon-text"><?php the_field('co_icon_tekst2'); ?></div>
              </div>
            </div>
            <div class="sekcja__icons-item" data-scroll="staggerUpItem">
              <div class="sekcja__icon"><?php get_template_part('img/svg/apple.svg'); ?></div>
              <div class="skecja__icon-texts">
                <div class="sekcja__icon-heading"><?php the_field('co_icon_naglowek3'); ?></div>
                <div class="sekcja__icon-text"><?php the_field('co_icon_tekst3'); ?></div>
              </div>
            </div>
            <div class="sekcja__icons-item" data-scroll="staggerUpItem">
              <div class="sekcja__icon"><?php get_template_part('img/svg/happy.svg'); ?></div>
              <div class="skecja__icon-texts">
                <div class="sekcja__icon-heading"><?php the_field('co_icon_naglowek4'); ?></div>
                <div class="sekcja__icon-text"><?php the_field('co_icon_tekst4'); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sekcja__right" data-scroll="fadeIn">
        <img src="<?php the_field('co_img'); ?>" alt="" />
      </div>
    </div>
  </div>
</section>

<section class="section trenerzy">
  <div class="container">
    <div class="trenerzy__wrapper">
      <div class="trenerzy__heading" data-scroll="fadeDown"><?php the_field('trenerzy_naglowek'); ?></div>
      <div class="trenerzy__slider-wrapper">
        <div class="trenerzy__slider" data-slider="trenerzy">
          <?php while ( have_rows('trenerzy_slider') ) : the_row(); ?>
          <div class="trenerzy__heads">
            <div class="trenerzy__head">
              <img src="<?php the_sub_field('trenerzy_img'); ?>" alt="" />
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
        <?php while ( have_rows('trenerzy_slider') ) : the_row(); ?>
        <div class="trenerzy__texts">
          <div class="trenerzy__name" data-scroll="fadeDown"><?php the_sub_field('trenerzy_imie'); ?></div>
          <div class="trenerzy__tekst" data-scroll="fadeUp"><?php the_sub_field('trenerzy_tekst'); ?></div>
          <div class="trenerzy__social" data-scroll="fadeIn">
            <a href="<?php the_sub_field('trenerzy_social'); ?>"><?php get_template_part('img/svg/li.svg'); ?></a>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>

<section class="section gdzie">
  <div class="container">
    <div class="gdzie__wrapper">
      <div class="gdzie__left" data-scroll="zoomOut">
        <img data-scroll="zoomOutItem" src="<?php the_field('gdzie_img'); ?>" alt="" />
      </div>
      <div class="gdzie__right">
        <div>
          <div class="gdzie__heading" data-scroll="fadeDown"><?php the_field('gdzie_naglowek'); ?></div>
          <div class="gdzie__tekst" data-scroll="fadeUp"><?php the_field('gdzie_tekst'); ?></div>
          <div class="gdzie_place" data-scroll="staggerUp">
            <div class="gdzie__place-name" data-scroll="staggerUpItem"><?php the_field('nazwa_1'); ?></div>
            <div class="gdzie__place-adres" data-scroll="staggerUpItem"><?php the_field('adres_1'); ?></div>
            <div class="gdzie__place-name" data-scroll="staggerUpItem"><?php the_field('nazwa_2'); ?></div>
            <div class="gdzie__place-adres" data-scroll="staggerUpItem"><?php the_field('adres_2'); ?></div>
            <div class="gdzie__place-name" data-scroll="staggerUpItem">Jeśli masz inne oczekiwania</div>
            <div class="gdzie__place-adres" data-scroll="staggerUpItem">Dopasujemy miejsce do Twoich potrzeb
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php get_template_part('template-parts/pomoc'); ?>
  </div>
</section>

<?php get_template_part('template-parts/popup'); ?>

<?php get_footer(); ?>