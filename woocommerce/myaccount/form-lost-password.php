<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.2
 */

defined( 'ABSPATH' ) || exit;


?>

<div class="moje-konto-login__panels-top">
    <a class="moje-konto-login__panel-heading active" href="<?php echo get_permalink( get_page_by_path( 'moje-konto' ) ); ?>#login"><?php esc_html_e( 'Logowanie', 'woocommerce' ); ?></a>
    <a class="moje-konto-login__panel-heading" href="<?php echo get_permalink( get_page_by_path( 'moje-konto' ) ); ?>#register"><?php esc_html_e( 'Rejestracja', 'woocommerce' ); ?></a>
</div>
<div class="moje-konto-login__panels-wrapper">
    <div>
    <div class="u-column1 moje-konto-login__panel show">
        <form method="post" class="woocommerce-ResetPassword moje-konto-login__form">
            <div class="moje-konto-login__section">
                <label for="user_login"><?php esc_html_e( 'Username or email', 'woocommerce' ); ?></label>
                <input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" autocomplete="username" />
            </div>

            <div class="clear"></div>

            <?php do_action( 'woocommerce_lostpassword_form' ); ?>

            <div class="moje-konto-login__button">
                <input type="hidden" name="wc_reset_password" value="true" />
                <button type="submit" class="woocommerce-Button btn button" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>"><?php esc_html_e( 'Reset password', 'woocommerce' ); ?></button>
            </div>

            <?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>
        </form>

    </div>
    <?php do_action( 'woocommerce_before_lost_password_form' ); ?>
        <div class="moje-konto-login__back"><a  href="<?php echo get_permalink( get_page_by_path( 'moje-konto' ) ); ?>#login">Wróć do strony logowania</a></div>
    </div>
</div>
<?php
do_action( 'woocommerce_after_lost_password_form' );
