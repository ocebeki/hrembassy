<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <?php wp_head(); ?>
</head>

<body id="conference" <?php body_class(); ?>>
    <div class="page__wrapper">
        <header class="conf-header">
            <div class="container-fluid">
                <div class="conf-header__wrapper">
                    <a class="conf-header__logo"
                        href="<?php echo home_url(); ?>"><?php get_template_part('img/svg/logo.svg'); ?></a>
                    <ul class="conf-header__menu">
                        <li class="conf-header__menu-item">
                            <a class="conf-header__menu-link" href="/">O Konferencji</a>
                        </li>
                        <li class="conf-header__menu-item">
                            <a class="conf-header__menu-link" href="/">Prelegenci</a>
                        </li>
                        <li class="conf-header__menu-item">
                            <a class="conf-header__menu-link" href="/">Program</a>
                        </li>
                        <li class="conf-header__menu-item">
                            <a class="conf-header__menu-link" href="/">Partnerzy</a>
                        </li>
                        <li class="conf-header__menu-item">
                            <a class="conf-header__menu-link" href="/">Lokalizacja</a>
                        </li>
                        <li class="conf-header__menu-item">
                            <a class="conf-header__menu-link" href="/">Bilety</a>
                        </li>
                        <li class="conf-header__menu-item">
                            <a class="conf-header__menu-link" href="/">Kontakt</a>
                        </li>
                    </ul>
                    <a class="btn">Zostań partnerem</a>
                </div>
            </div>
        </header>