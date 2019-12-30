<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- <base target="_parent"> -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
  <?php wp_head(); ?>
  <style>
    #conference #wpadminbar {
      display: none !important
    }

    #conference .page__wrapper {
      padding-top: 0 !important
    }
  </style>
</head>

<body id="conference" <?php body_class(); ?>>
  <div class="page__wrapper">
    <header class="conf-header">
      <div class="container-fluid">
        <div class="conf-header__wrapper">
          <a class="conf-header__logo" href="#"><?php get_template_part('conference/img/heroesconf-logo.svg') ?></a>
          <ul class="conf-header__menu" data-scroll="staggerUp">
            <li class="conf-header__menu-item" data-scroll="staggerUpItem">
              <a class="conf-header__menu-link" href="#top">O Konferencji</a>
            </li>
            <li class="conf-header__menu-item" data-scroll="staggerUpItem">
              <a class="conf-header__menu-link" href="#prelegenci">Prelegenci</a>
            </li>
            <li class="conf-header__menu-item" data-scroll="staggerUpItem">
              <a class="conf-header__menu-link" href="#cta">Program</a>
            </li>
            <li class="conf-header__menu-item" data-scroll="staggerUpItem">
              <a class="conf-header__menu-link" href="#partners">Partnerzy</a>
            </li>
            <li class="conf-header__menu-item" data-scroll="staggerUpItem">
              <a class="conf-header__menu-link" href="#mapa">Lokalizacja</a>
            </li>
            <li class="conf-header__menu-item" data-scroll="staggerUpItem">
              <a class="conf-header__menu-link" href="#harmonogram">Bilety</a>
            </li>
            <li class="conf-header__menu-item" data-scroll="staggerUpItem">
              <a class="conf-header__menu-link" href="#kontakt">Kontakt</a>
            </li>
          </ul>
          <a class="conf-btn prevent" target="_blank" href="mailto:<?php the_field('pakiet_group'); ?>">Zostań partnerem</a>
        </div>
      </div>
      <?php get_template_part('conference/menu-mobile') ?>
    </header>