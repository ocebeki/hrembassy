<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

?>

<tr class="warsztaty__item clearfix" data-scroll="staggerUpItem" data-link="<?php echo get_permalink(); ?>">
    <td class="warsztaty__part name">
        <div class="warsztaty__name"><?php the_title(); ?></div>
    </td>
    <td class="warsztaty__part date">
        <div class="warsztaty__date">
        <?php 
            get_template_part('img/svg/date.svg');
            the_field('data'); 
            echo ' / ';
            the_field('czas');
        ?>
        </div>
    </td>
    <td class="warsztaty__part place">
        <div class="warsztaty__place">
        <?php 
            get_template_part('img/svg/place.svg');
            the_field('miejsce'); 
        ?>
        </div>
    </td>
    <td class="warsztaty__part price">
        <div class="warsztaty__price"><strong><?php echo $product->get_price() . ' zł netto'; ?></strong></div>
        <div class="warsztaty__price-more">/ osoba</div>
    </td>
    <td class="warsztaty__part stock">
        <div class="warsztaty__stock">
<!--            <span class="warsztaty__head">-->
                <?php 
//                    get_template_part('img/svg/head.svg'); 
                ?>
<!--            </span>-->
            <span class="warsztaty__numbers">Pozostało miejsc: <?php echo $product->stock; ?></span>
        </div>
    </td>
    <td class="warsztaty__part more">
        <div class="warsztaty__more">
            <span class="btn">Szczegóły</span>
        </div>
    </td>
</tr>


