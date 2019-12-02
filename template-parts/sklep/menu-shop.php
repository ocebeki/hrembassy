<ul class="menu menu--shop">
    <li class="menu__item">
        <a class="menu__cart cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'blank' ); ?>">
            <?php get_template_part('img/svg/cart.svg'); ?><span class="menu__cart-number"><?php echo WC()->cart->get_cart_contents_count() ?></span>
        </a>
    </li>
    <?php 
        if ( is_user_logged_in() ) : 
        $user = wp_get_current_user();
    ?>
        <li class="menu__item">
            <div class="menu__logged-btn">
                <div class="menu__logged-btn-img">
                    <div class="edit-account__head-wrapper">
                        <?php get_template_part('img/svg/head.svg'); ?>
                    </div>
                    <div class="menu__logged-btn-caret"><?php get_template_part('img/svg/caret.svg'); ?></div>
                </div>
                <div class="menu__logged-btn-links">
                    <a class="menu__logged-btn-link" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php get_template_part('img/svg/head.svg'); ?>Panel użytkownika</a>
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