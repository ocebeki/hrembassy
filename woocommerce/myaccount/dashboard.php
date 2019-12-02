<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="edit-account__top">
    <div class="moje-konto__top-item">
        <div>
            <div class="moje-konto__witaj moje-konto__witaj--big"><strong>Witaj <span class="moje-konto__name"><?php echo $current_user->display_name; ?>!</span> Miło nam, że do nas dołączyłeś/aś.</strong></div>
            <div class="moje-konto__witaj">Nie jesteś <?php echo $current_user->display_name; ?>?<a class="moje-konto__top-logout" href="<?php echo wc_logout_url( wc_get_page_permalink( 'myaccount' ) ); ?>">Wyloguj się</a></div>
        </div>
        <div class="edit-account__top-right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/konto.png" alt="" />
        </div>
    </div>
</div>
<div class="moje-konto__dashboard">
    <p class="moje-konto__dashboard-paragraph">W ustawieniach swojego konta, możesz:</p>
    <a class="moje-konto__dashboard-part" href="<?php echo wc_get_endpoint_url( 'orders' ); ?>">
        <div class="moje-konto__dashboard-part-left">
            <div class="moje-konto__dashboard-icon"><?php get_template_part('img/svg/konto-bag.svg'); ?></div>
            <div class="moje-konto__dashboard-text">Przejrzeć swoje ostatnie zamówienia</div>
        </div>
        <div class="moje-konto__dashboard-part-right"><?php get_template_part('img/svg/arrow.svg'); ?></div>
    </a>
    <a class="moje-konto__dashboard-part" href="<?php echo wc_get_endpoint_url( 'edit-account' ); ?>">
        <div class="moje-konto__dashboard-part-left">
            <div class="moje-konto__dashboard-icon"><?php get_template_part('img/svg/konto-file.svg'); ?></div>
            <div class="moje-konto__dashboard-text">Zarządzać adresami płatności i dostawy</div>
        </div>
        <div class="moje-konto__dashboard-part-right"><?php get_template_part('img/svg/arrow.svg'); ?></div>
    </a>
    <a class="moje-konto__dashboard-part" href="<?php echo wc_get_endpoint_url( 'edit-account' ); ?>">
        <div class="moje-konto__dashboard-part-left">
            <div class="moje-konto__dashboard-icon"><?php get_template_part('img/svg/konto-head.svg'); ?></div>
            <div class="moje-konto__dashboard-text">Zmieniać hasło i szczegóły konta</div>
        </div>
        <div class="moje-konto__dashboard-part-right"><?php get_template_part('img/svg/arrow.svg'); ?></div>
    </a>
</div>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
