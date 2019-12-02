<?php
/**
 * Downloads
 *
 * Shows downloads on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/downloads.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$downloads     = WC()->customer->get_downloadable_products();
$has_downloads = (bool) $downloads;

do_action( 'woocommerce_before_account_downloads', $has_downloads ); ?>

<?php if ( $has_downloads ) : ?>
    <div class="student-profile__heading" data-scroll="fadeUp">
        <span class="student-profile__heading-left">E-booki</span>
        <span class="student-profile__heading-right"><?php get_template_part('img/svg/unlock.svg'); ?> <span>Materiały odblokowane</span></span>
    </div>

    <div class="student-profile__list" data-liczby="ebooki-list">
    <?php foreach ( $downloads as $download ) { ?>
        <div class="student-profile__list-item student-profile__list-item--not-click" data-scroll="fadeUp">
            <div class="student-profile__item-wrapper">
                <?php if (get_the_post_thumbnail_url($download['product_id'])) : ?>
                <div class="student-profile__list-img">
                    <img src="<?php echo get_the_post_thumbnail_url($download['product_id']); ?>" alt="" />
                </div>
                <?php else : ?>
                <div class="student-profile__list-img">
                    <?php get_template_part('img/svg/file.svg'); ?>
                </div>
                <?php endif; ?>
                <div class="student-profile__list-right">
                    <div>
                        <div class="student-profile__list-name">
                            <?php echo get_the_title($download['product_id']); ?>    
                        </div>
                        <div class="student-profile__list-meta">
                            <?php if (get_field('meta_text', $download['product_id'])) : ?>
                            <span class="student-profile__list-meta-part files"><?php get_template_part('img/svg/file.svg'); ?><?php the_field('meta_text', $download['product_id']); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="student-profile__list-excerpt">
                        <?php the_field('opis', $download['product_id']); ?>
                    </div>
                </div>
                 <a class="student-profile__list-btn" href="<?php echo $download['download_url']; ?>"><?php get_template_part('img/svg/download.svg'); ?></a>
            </div>
        </div>
    <?php } ?>
    </div>

<?php else : ?>
	<a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>" class="student-profile__brak" data-scroll="fadeUp">
        <div class="student-profile__brak-heading">Nie kupiłeś jeszcze żadnych E-booków</div>
        <div class="student-profile__brak-link"><span>Sklep <?php get_template_part('img/svg/arrow-small.svg'); ?></span></div>
    </a>
<?php endif; ?>

<?php do_action( 'woocommerce_after_account_downloads', $has_downloads ); ?>
