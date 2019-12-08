<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
  <?php wp_head(); ?>
</head>

<body id="about" id="about" <?php body_class(); ?>>
  <div class="page__wrapper">
    <div class="background-lines">
      <div class="container">
        <div class="background-lines__wrapper">
          <span class="background-lines__line"></span>
          <span class="background-lines__line"></span>
          <span class="background-lines__line"></span>
          <span class="background-lines__line"></span>
          <span class="background-lines__line"></span>
        </div>
      </div>
    </div>
    <div class="page-regulamin">
      <header class="header">
        <div class="container">
          <div class="header__wrapper">
            <div class="header__left" data-scroll="fadeIn">
              <a class="header__logo" data-fade="true"
                href="<?php echo home_url(); ?>"><?php get_template_part('img/svg/logo.svg'); ?></a>
            </div>
            <div class="header__center">
              <?php get_template_part('template-parts/menu'); ?>
            </div>
            <div class="header__right" data-scroll="fadeIn">
              <?php get_template_part('template-parts/sklep/menu-shop'); ?>
              <div class="header__close">
                <a class="menu__cart cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>"
                  title="<?php esc_attr_e( 'View your shopping cart', 'blank' ); ?>">
                  <?php get_template_part('img/svg/cart.svg'); ?><span
                    class="menu-cart__number"><?php echo WC()->cart->get_cart_contents_count() ?></span>
                </a>
                <?php get_template_part('template-parts/hamburger'); ?>
              </div>
            </div>
          </div>
        </div>
      </header>
      <?php get_template_part('template-parts/menu-mobile'); ?>
    </div>