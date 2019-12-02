<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="koszyk__empty">
    <?php do_action( 'woocommerce_cart_is_empty' ); ?>
    <div class="koszyk__empty-wrapper">
        <div>
            <div class="koszyk__empty-heading">Twój koszyk jest pusty...</div>
            <div class="koszyk__empty-text">Nie dodałeś żadnych produktów</div>
            <img class="koszyk__empty-img" src="<?php echo get_template_directory_uri(); ?>/img/empty.png" alt="" />

            <p class="return-to-shop">
                <a class="button btn wc-backward" href="<?php echo get_permalink(get_page_by_path('warsztaty')); ?>">
                    <?php esc_html_e( 'Zobacz warsztaty', 'woocommerce' ); ?>
                </a>
            </p>
        </div>
    </div>
</div>

