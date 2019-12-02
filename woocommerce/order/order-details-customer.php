<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
?>

	<?php if ( $show_shipping ) : ?>

	<section class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">

	<?php endif; ?>

	<div class="view-order__address">
        <div class="zamowienie__heading">Dane zamawiającego</div>
        <div class="view-order__address-wrapper">
            <table class="view-order__address-left">
                <tr class="view-order__line">
                    <td class="view-order__question">Imię i nazwisko</td>
                    <td class="view-order__answer"><?php echo $order->billing_first_name . ' ' . $order->billing_last_name; ?></td>
                </tr>
                <tr class="view-order__line">
                    <td class="view-order__question">Nazwa firmy</td>
                    <td class="view-order__answer"><?php echo $order->billing_company; ?></td>
                </tr>
                <tr class="view-order__line">
                    <td class="view-order__question">NIP</td>
                    <td class="view-order__answer"><?php echo $order->billing_nip; ?></td>
                </tr>
                <tr class="view-order__line">
                    <td class="view-order__question">Adres email</td>
                    <td class="view-order__answer"><?php echo $order->billing_email; ?></td>
                </tr>
                <tr class="view-order__line">
                    <td class="view-order__question">Numer telefonu</td>
                    <td class="view-order__answer"><?php echo $order->billing_phone; ?></td>
                </tr>
            </table>
            <table class="view-order__address-right">
                <tr class="view-order__line">
                    <td class="view-order__question">Kraj</td>
                    <td class="view-order__answer">Polska</td>
                </tr>
                <tr class="view-order__line">
                    <td class="view-order__question">Ulica</td>
                    <td class="view-order__answer"><?php echo $order->billing_address_1; ?></td>
                </tr>
                <tr class="view-order__line">
                    <td class="view-order__question">Kod pocztowy</td>
                    <td class="view-order__answer"><?php echo $order->billing_postcode; ?></td>
                </tr>
                <tr class="view-order__line">
                    <td class="view-order__question">Miejscowość</td>
                    <td class="view-order__answer"><?php echo $order->billing_city; ?></td>
                </tr>
            </table>
        </div>    
    </div>

	<?php if ( $show_shipping ) : ?>

		<div class="view-order__address">
            <div class="zamowienie__heading">Adres wysyłki</div>
            <div class="view-order__address-wrapper">
                <table class="view-order__address-left">
                    <tr class="view-order__line">
                        <td class="view-order__question">Imię i nazwisko</td>
                        <td class="view-order__answer"><?php echo $order->shipping_first_name . ' ' . $order->shipping_last_name; ?></td>
                    </tr>
                    <tr class="view-order__line">
                        <td class="view-order__question">Nazwa firmy</td>
                        <td class="view-order__answer"><?php echo $order->shipping_company; ?></td>
                    </tr>
                    <tr class="view-order__line">
                        <td class="view-order__question">NIP</td>
                        <td class="view-order__answer"><?php echo $order->shipping_nip; ?></td>
                    </tr>
                    <tr class="view-order__line">
                        <td class="view-order__question">Adres email</td>
                        <td class="view-order__answer"><?php echo $order->shipping_email; ?></td>
                    </tr>
                    <tr class="view-order__line">
                        <td class="view-order__question">Numer telefonu</td>
                        <td class="view-order__answer"><?php echo $order->shipping_phone; ?></td>
                    </tr>
                </table>
                <table class="view-order__address-right">
                    <tr class="view-order__line">
                        <td class="view-order__question">Kraj</td>
                        <td class="view-order__answer">Polska</td>
                    </tr>
                    <tr class="view-order__line">
                        <td class="view-order__question">Ulica</td>
                        <td class="view-order__answer"><?php echo $order->shipping_address_1; ?></td>
                    </tr>
                    <tr class="view-order__line">
                        <td class="view-order__question">Kod pocztowy</td>
                        <td class="view-order__answer"><?php echo $order->shipping_postcode; ?></td>
                    </tr>
                    <tr class="view-order__line">
                        <td class="view-order__question">Miejscowość</td>
                        <td class="view-order__answer"><?php echo $order->shipping_city; ?></td>
                    </tr>
                </table>
            </div>    
        </div>
        </section>
	<?php endif; ?>

	<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>


