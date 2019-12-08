<?php get_header(); ?>
<section id="content" class="section warsztaty-menu">
  <div class="container">
    <div class="warsztaty-menu__wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/img/warsztaty-menu.png" alt="" data-scroll="fadeleft" />
      <div class="warsztaty-menu__part-wrapper">
        <div class="warsztaty-menu__part" data-scroll="fadeLeft"><a class="warsztaty-menu__link"
            href="<?php echo get_permalink( get_page_by_path( 'warsztaty' ) ); ?>">Warsztaty</a></div>
        <div class="warsztaty-menu__part" data-scroll="fadeRight"><span
            class="warsztaty-menu__link warsztaty-menu__link--active">Warsztaty dedykowane</span></div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/warsztaty-menu.png" alt="" data-scroll="fadeRight" />
    </div>
  </div>
</section>

<section class="section bulb">
  <div class="container">
    <div class="bulb__wrapper">
      <div class="bulb__left">
        <div>
          <div class="bulb__text" data-scroll="fadeUp"><?php the_field('bulb_tekst'); ?></div>
          <a class="btn" href="#formularz" data-scroll="fadeIn">Napisz do nas</a>
        </div>
      </div>
      <div class="bulb__right">
        <img src="<?php the_field('bulb_img'); ?>" alt="" />
      </div>
    </div>
  </div>
</section>

<section class="section jak">
  <div class="container">
    <div class="jak__wrapper">
      <div class="jak__left">
        <div class="jak__heading" data-scroll="fadeDown">Jak pracujemy?</div>
        <div class="jak__icons" data-scroll="staggerUp">
          <div class="jak__item" data-scroll="staggerUpItem">
            <div class="jak__icon"><?php get_template_part('img/svg/pointer.svg'); ?></div>
            <div class="jak__item-text"><?php the_field('jak_tekst1'); ?></div>
          </div>
          <div class="jak__item" data-scroll="staggerUpItem">
            <div class="jak__icon"><?php get_template_part('img/svg/crosshair.svg'); ?></div>
            <div class="jak__item-text"><?php the_field('jak_tekst2'); ?></div>
          </div>
          <div class="jak__item" data-scroll="staggerUpItem">
            <div class="jak__icon"><?php get_template_part('img/svg/notes.svg'); ?></div>
            <div class="jak__item-text"><?php the_field('jak_tekst3'); ?></div>
          </div>
          <div class="jak__item" data-scroll="staggerUpItem">
            <div class="jak__icon"><?php get_template_part('img/svg/comeback.svg'); ?></div>
            <div class="jak__item-text"><?php the_field('jak_tekst4'); ?></div>
          </div>
          <div class="jak__item" data-scroll="staggerUpItem">
            <div class="jak__icon"><?php get_template_part('img/svg/rocket.svg'); ?></div>
            <div class="jak__item-text"><?php the_field('jak_tekst5'); ?></div>
          </div>
          <div class="jak__item" data-scroll="staggerUpItem">
            <div class="jak__icon"><?php get_template_part('img/svg/steps.svg'); ?></div>
            <div class="jak__item-text"><?php the_field('jak_tekst6'); ?></div>
          </div>
        </div>
      </div>
      <div class="jak__right">
        <div class="jak__heading" data-scroll="fadeUp">Na co możesz liczyć?</div>
        <ul class="jak__list" data-scroll="staggerUp">
          <?php while ( have_rows('jak_lista') ) : the_row(); ?>
          <li data-scroll="staggerUpItem"><?php the_sub_field('jak_podpunkt'); ?></li>
          <?php endwhile; ?>
        </ul>
        <div class="jak__img"><img src="<?php the_field('jak_img'); ?>" alt="" /></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="klienci__wrapper">
      <div class="klienci__heading" data-scroll="fadeDown">Nasi klienci</div>
      <div class="klienci__slider" data-slider="klienci" data-scroll="staggerUp">
        <?php while ( have_rows('klienci') ) : the_row(); ?>
        <div class="klienci__item" data-scroll="staggerUpItem">
          <span class="klienci__link klienci__btn">
            <img src="<?php the_sub_field('klienci_logo'); ?>" alt="" />
            <div class="klienci__case-study">
              <div class="klienci__popup-left">
                <div class="klienci__popup-img"><img src="<?php the_sub_field('klienci_popup_img_left'); ?>" alt="" />
                </div>
                <div class="klienci__popup-heading"><?php the_sub_field('klienci_popup_heading_left'); ?></div>
                <div class="klienci__popup-text"><?php the_sub_field('klienci_popup_text_left'); ?></div>
              </div>
              <div class="klienci__popup-middle">
                <div class="klienci__popup-img"><img src="<?php the_sub_field('klienci_popup_img_middle'); ?>" alt="" />
                </div>
                <div class="klienci__popup-heading"><?php the_sub_field('klienci_popup_heading_middle'); ?></div>
                <div class="klienci__popup-text"><?php the_sub_field('klienci_popup_text_middle'); ?></div>
              </div>
              <div class="klienci__popup-right">
                <div class="klienci__popup-img"><img src="<?php the_sub_field('klienci_popup_img_right'); ?>" alt="" />
                </div>
                <div class="klienci__popup-heading"><?php the_sub_field('klienci_popup_heading_right'); ?></div>
                <div class="klienci__popup-text"><?php the_sub_field('klienci_popup_text_right'); ?></div>
              </div>
            </div>
          </span>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="top__arrows">
        <div class="top__arrow" data-slider="klienciPrev"><?php get_template_part('img/svg/prev.svg'); ?></div>
        <div class="top__arrow" data-slider="klienciNext"><?php get_template_part('img/svg/next.svg'); ?></div>
      </div>
    </div>
  </div>
</section>

<section id="formularz" class="section">
  <div class="container">
    <?php get_template_part('template-parts/wspolpraca'); ?>
  </div>
</section>

<div class="klienci__popup">
  <div>
    <div class="klienci__popup-close"><span data-kpop="close"><?php get_template_part('img/svg/close.svg'); ?></span>
    </div>
    <div class="klienci__popup-content">
      <div class="klienci__popup-left">
        <div class="klienci__popup-img"><img data-kpop="imgleft" src="" alt="" /></div>
        <div class="klienci__popup-heading" data-kpop="headingleft"></div>
        <div class="klienci__popup-text" data-kpop="textleft"></div>
      </div>
      <div class="klienci__popup-middle">
        <div class="klienci__popup-img-center"><img data-kpop="imgmiddle" src="" alt="" /></div>
        <div class="klienci__popup-heading" data-kpop="headingmiddle"></div>
        <div class="klienci__popup-text" data-kpop="textmiddle"></div>
      </div>
      <div class="klienci__popup-right">
        <div class="klienci__popup-img"><img data-kpop="imgright" src="" alt="" /></div>
        <div class="klienci__popup-heading" data-kpop="headingright"></div>
        <div class="klienci__popup-text" data-kpop="textright"></div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>