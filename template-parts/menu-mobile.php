<div class="menu-mobile">
    <div class="header header--mobile">
        <div class="container">
            <div class="header__wrapper">
                <a class="header__logo" data-fade="true" href="<?php echo home_url(); ?>">
                    <?php get_template_part('img/svg/logo.svg'); ?></a>
                <div class="header__close">
                    <a class="menu__cart cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'blank' ); ?>">
                        <?php get_template_part('img/svg/cart.svg'); ?><span class="amount">Koszyk</span>(<?php echo WC()->cart->get_cart_contents_count() ?>)
                    </a>
                     <?php get_template_part('template-parts/hamburger'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-mobile__wrapper">
        <ul class="menu menu--shop">
            <?php 
                if ( is_user_logged_in() ) : 
                $user = wp_get_current_user();
            ?>
                <li class="menu__item">
                    <div class="menu__logged-btn">
                        <div class="menu__logged-btn-links">
                            <a class="menu__logged-btn-link" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>edit-account/"><?php get_template_part('img/svg/head.svg'); ?>Panel użytkownika</a>
                            <a class="menu__logged-btn-link" href="<?php echo get_permalink(); ?>?customer-logout=true"><?php get_template_part('img/svg/power.svg'); ?>Wyloguj się</a>
                        </div>
                    </div>
                </li>
             <?php else : ?>
                <li class="menu__item">
                    <a class="menu__link" href="<?php echo get_permalink( get_page_by_path( 'moje-konto' ) ); ?>" >Zaloguj</a>
                </li>
             <?php endif; ?>
        </ul>
        <ul class="menu">
            <li class="menu__item">
                <a class="menu__link" href="<?php echo get_permalink(get_page_by_path('warsztaty')); ?>">Warsztaty</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="<?php echo get_permalink(get_page_by_path('konsultacje')); ?>">Konsultacje</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="<?php echo get_permalink(get_page_by_path('hr-na-deser')); ?>">HR na Deser</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="https://heroesconf.pl">HeroesConf</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="<?php echo get_permalink(get_page_by_path('blog')); ?>">Blog</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="<?php echo get_permalink(get_page_by_path('o-nas')); ?>">O nas</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="<?php echo get_permalink(get_page_by_path('kontakt')); ?>">Kontakt</a>
            </li>
        </ul>
        <div class="menu-mobile__social">
            <?php get_template_part('template-parts/social'); ?>
        </div>
    </div>
</div>