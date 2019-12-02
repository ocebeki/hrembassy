<?php
/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>
<div class="woocommerce-variation-add-to-cart variations_button">
	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

	<div class="product__price-wrapper">
            <div class="product__price-left">
                <div class="sklep__price-text">Cena</div>
                <div class="sklep__price">
                    <?php $variation_attributes = $product->get_variation_attributes(); ?>
                    <?php 
                        $variation =  $product->get_available_variations()[0];
                        $variation_id = $variation['variation_id'];

                        $active_price = floatval($variation['display_price']); // Active price
                        $regular_price = floatval($variation['display_regular_price']); // Regular Price
                    ?>
                    <?php if ($active_price != $regular_price) : ?>
                    <div class="sklep__price-new"><span><?php echo $active_price ?></span><span class="sklep__price-new-small">zł netto</span></div>
                    <div class="sklep__price-old"><?php echo $regular_price ?>zł netto</div>
                    <?php else : ?>
                        <div class="sklep__price-new"><?php echo $regular_price; ?><span class="sklep__price-new-small">zł netto</span></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="product__price-right">
                <?php
                do_action( 'woocommerce_before_add_to_cart_quantity' );

                woocommerce_quantity_input( array(
                    'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                    'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                    'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
                ) );

                do_action( 'woocommerce_after_add_to_cart_quantity' );
                ?>
            </div>
        </div>

	<div class="product__button">
        <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="btn alt" id="buy_now_button">
            <?php echo esc_html('Kup teraz'); ?>
        </button>
        <input type="hidden" name="is_buy_now" id="is_buy_now" value="0" />
    </div>

    <div class="product__button">
        <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button">
            <?php get_template_part('img/svg/bag.svg'); ?>
            <?php echo esc_html( $product->single_add_to_cart_text() ); ?>
        </button>
    </div>

	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>
