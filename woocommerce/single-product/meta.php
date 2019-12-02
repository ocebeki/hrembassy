<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
global $post;

$terms = get_the_terms( $post->ID, 'product_cat' );
$category = $terms[0]->slug;
?>
<div class="product__meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>
    
    <?php if (has_term( 'szkolenie-stacjonarne', 'product_cat' )) : ?>
        <div class="product__address">
            <div class="product__address-line">
                <?php get_template_part('img/svg/place.svg'); ?> <?php the_field('place'); ?>
            </div>
            <div class="product__address-line">
                <?php get_template_part('img/svg/clock.svg'); ?> <?php the_field('clock'); ?>
            </div>
        </div>
    <?php elseif (get_field('meta_text')) : ?>
	<div class="product__meta-wrapper">
        <?php if ($category == 'ksiazka') : ?>
            <?php get_template_part('img/svg/book.svg'); ?>
        <?php elseif ($category == 'e-book') : ?>
            <?php get_template_part('img/svg/file.svg'); ?>
        <?php elseif ($category == 'gadzet') : ?>
            
        <?php elseif ($category == 'szkolenie-online') : ?>
            <?php get_template_part('img/svg/play.svg'); ?>
        <?php else : ?>
        
        <?php endif; ?>
        <span class="product__meta-text"><?php the_field('meta_text'); ?></span>
    </div>
    <?php endif; ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
