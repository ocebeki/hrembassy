<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
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
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
//		do_action( 'woocommerce_before_main_content' );
	?>

		<?php 
//            while ( have_posts() ) : the_post();
//                wc_get_template_part( 'content', 'single-product' );
//            endwhile; // end of the loop. 
        ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
//		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
//		do_action( 'woocommerce_sidebar' );
	?>
<section class="section single-product">
    <div class="container">
        <div class="single-product__wrapper" data-scroll="fadeIn">
            <?php
                while ( have_posts() ) : the_post();
                    wc_get_template_part( 'content', 'single-product' );
                endwhile;
            ?>
            <div class="single-product__mouse"><?php get_template_part('img/svg/mouse.svg'); ?></div>
        </div>
    </div>
</section>
<section class="section single-product__opis">
    <div class="container">
        <div class="single-product__opis-wrapper">
            <div class="single-product__opis-part" >
                <div class="row">
                    <div class="col-md-4">
                        <h2 data-scroll="fadeDown">O warsztacie</h2>
                    </div>
                    <div class="col-md-8" data-scroll="fadeUp">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            
            <?php if (get_field('zysk_tekst')) : ?>
            <div class="single-product__opis-part">
                <div class="single-product__content">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 data-scroll="fadeDown">Co zyskasz?</h2>
                        </div>
                        <div class="col-md-8">
                            <div class="zysk__text" data-scroll="fadeUp"><?php the_field('zysk_tekst'); ?></div>
                            <div class="zysk__list" data-scroll="staggerUp">
                                <?php while ( have_rows('zysk_list') ) : the_row(); ?>
                                    <div class="zysk__item" data-scroll="staggerUpItem">
                                        <div class="zysk__icon"><?php echo get_row_index(); ?></div>
                                        <div class="zysk__tekst">
                                            <div class="zysk__heading"><?php the_sub_field('zysk_naglowek'); ?></div>
                                            <div class="zysk__tekst"><?php the_sub_field('zysk_item_tekst'); ?></div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
            <?php if (get_field('program')) : ?>
            <div id="program" class="single-product__opis-part">
                <div class="single-product__content">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 data-scroll="fadeDown">Program warsztatu</h2>
                        </div>
                        <div class="col-md-8 program__line" data-scroll="staggerUp">
                            <?php while ( have_rows('program') ) : the_row(); ?>
                                <div data-scroll="staggerUpItem" class="program__item <?php if (get_sub_field('program_ikona') != 'brak') { echo 'ikona'; } ?>" data-scroll="fadeUp">
                                    <div class="program__godzina"><?php the_sub_field('program_godzina'); ?></div>
                                    <div class="program__icon">
                                        <?php if (get_sub_field('program_ikona') == 'head') {
                                            get_template_part('img/svg/heads.svg');
                                         } elseif (get_sub_field('program_ikona') == 'drink') {
                                            get_template_part('img/svg/drink.svg');
                                         } elseif (get_sub_field('program_ikona') == 'cup') {
                                            get_template_part('img/svg/cup.svg');
                                         } elseif (get_sub_field('program_ikona') == 'bell') {
                                            get_template_part('img/svg/bell.svg');
                                         } elseif (get_sub_field('program_ikona') == 'astronaut') {
                                            get_template_part('img/svg/astronaut.svg');
                                         } elseif (get_sub_field('program_ikona') == 'food') {
                                            get_template_part('img/svg/food.svg');
                                         } ?>
                                    </div>
                                    <div class="program__right">
                                        <div class="program__heading"><?php the_sub_field('program_naglowek'); ?></div>
                                        <?php if (have_rows('program_lista')) : ?>
                                        <div class="program__lista">
                                            <?php while ( have_rows('program_lista') ) : the_row(); ?>
                                            <div class="program__podpunkt"><?php the_sub_field('program_podpunkt'); ?></div>
                                            <?php endwhile; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <div class="single-product__summary">
            <div class="single-product__summary-wrapper">
                <div class="single-product__summary-item">
                    <div class="sklep__price-new" data-scroll="fadeDown"><?php echo get_post_meta( get_the_ID(), '_price', true); ?><span class="sklep__price-text"><strong> zł netto</strong> / <span>osoba</span></span></div>
                </div>
                <div class="single-product__summary-item"></div>
                <div class="single-product__summary-item" data-scroll="fadeUp">
                    <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                        <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
                        <div class="product__button">
                            <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button btn"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
                        </div>
                        <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                   </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php get_template_part('template-parts/autor'); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php get_template_part('template-parts/opinie'); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php get_template_part('template-parts/pomoc'); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php get_template_part('template-parts/newsletter'); ?>
    </div>
</section>


<?php get_template_part('template-parts/popup'); ?>
<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
