<?php
/**
 * Lost password confirmation text.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/lost-password-confirmation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//wc_print_notice( __( 'Password reset email has been sent.', 'woocommerce' ) );
?>

<div class="moje-konto-login__panels-top">
    <div class="moje-konto-login__panel-heading active">Wysłaliśmy Ci nowe hasło</div>
</div>
<div class="u-column1 moje-konto-login__panel show">

    <div class="moje-konto-login__password-message">
        <div><?php echo esc_html( apply_filters( 'woocommerce_lost_password_confirmation_message', __( 'Sprawdź adres email', 'woocommerce' ) ) ); ?></div>
        <a class="btn" href="<?php echo get_permalink( get_page_by_path( 'moje-konto' ) ); ?>">Strona logowania</a>
    </div>
</div>
