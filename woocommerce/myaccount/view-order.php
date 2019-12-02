<?php
/**
 * View Order
 *
 * Shows the details of a particular order on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/view-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="view-order__top">
    <div class="view-order__top-top">
        <div class="view-order__top-top-email">
            <div class="moje-konto__heading"><?php echo $order->billing_email; ?></div>
            <div class="">Zamawiający</div>
        </div>
        <div class="view-order__top-top-btn">
            <a class="btn" href="">Pobierz fakturę</a>
        </div>
    </div>
    <div class="view-order__top-table">
        <table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive account-orders-table orders__table orders__table--main">
            <tbody>
                    <tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr( $order->get_status() ); ?> order">
                        <?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
                                <?php if ( has_action( 'woocommerce_my_account_my_orders_column_' . $column_id ) ) : ?>
                                    <?php do_action( 'woocommerce_my_account_my_orders_column_' . $column_id, $order ); ?>

                                <?php elseif ( 'order-number' === $column_id ) : ?>
                                    <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>">
                                        <?php echo _x( '#', 'hash before order number', 'woocommerce' ) . $order->get_order_number(); ?>
                                    </td>
                                <?php elseif ( 'order-date' === $column_id ) : ?>
                                    <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>">
                                        <time datetime="<?php echo esc_attr( $order->get_date_created()->date( 'c' ) ); ?>"><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></time>
                                    </td>
                                <?php elseif ( 'order-status' === $column_id ) : ?>
                                    <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>">
                                        <?php echo esc_html( wc_get_order_status_name( $order->get_status() ) ); ?>
                                    </td>
                                <?php elseif ( 'order-total' === $column_id ) : ?>
                                    <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>">
                                        <?php
                                        echo $order->get_formatted_order_total();
                                        ?>
                                    </td>
                                <?php elseif ('order-actions' === $column_id) : ?>
                                    
                                <?php endif; ?>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
                        <?php if ( !('order-actions' === $column_id) ) : ?>
                            <?php do_action( 'woocommerce_my_account_my_orders_column_' . $column_id, $order ); ?>
                            <th class="woocommerce-orders-table__header woocommerce-orders-table__header-<?php echo esc_attr( $column_id ); ?>"><span class="nobr"><?php echo esc_html( $column_name ); ?></span></th>
                       

                        <?php endif; ?>
                        <?php endforeach; ?>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
<?php
	/* translators: 1: order number 2: order date 3: order status */
//	printf(
//		__( 'Order #%1$s was placed on %2$s and is currently %3$s.', 'woocommerce' ),
//		'<mark class="order-number">' . $order->get_order_number() . '</mark>',
//		'<mark class="order-date">' . wc_format_datetime( $order->get_date_created() ) . '</mark>',
//		'<mark class="order-status">' . wc_get_order_status_name( $order->get_status() ) . '</mark>'
//	);
?>
<div class="view-order__szczegoly">
    
</div>

<?php if ( $notes = $order->get_customer_order_notes() ) : ?>
	<h2><?php _e( 'Order updates', 'woocommerce' ); ?></h2>
	<ol class="woocommerce-OrderUpdates commentlist notes">
		<?php foreach ( $notes as $note ) : ?>
		<li class="woocommerce-OrderUpdate comment note">
			<div class="woocommerce-OrderUpdate-inner comment_container">
				<div class="woocommerce-OrderUpdate-text comment-text">
					<p class="woocommerce-OrderUpdate-meta meta"><?php echo date_i18n( __( 'l jS \o\f F Y, h:ia', 'woocommerce' ), strtotime( $note->comment_date ) ); ?></p>
					<div class="woocommerce-OrderUpdate-description description">
						<?php echo wpautop( wptexturize( $note->comment_content ) ); ?>
					</div>
	  				<div class="clear"></div>
	  			</div>
				<div class="clear"></div>
			</div>
		</li>
		<?php endforeach; ?>
	</ol>
<?php endif; ?>

<?php do_action( 'woocommerce_view_order', $order_id ); ?>
