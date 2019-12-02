<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button btn alt" id="buy_now_button">
    <?php echo esc_html('Kup teraz'); ?>
</button>
<input type="hidden" name="is_buy_now" id="is_buy_now" value="0" />