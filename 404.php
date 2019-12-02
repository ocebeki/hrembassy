<?php get_header(); ?>
    <div class="page koszyk">
        <section class=" section single-top">
            <div class="container">
                <div class="single-top__wrapper">
                    <div>
                        <div class="koszyk__content">
                           <div class="koszyk__empty">
                                <div class="koszyk__empty-wrapper">
                                    <div>
                                        <img class="koszyk__empty-img" src="<?php echo get_template_directory_uri(); ?>/img/404.png" alt="" />

                                        <p class="return-to-shop">
                                            <a class="button btn wc-backward" href="<?php echo get_permalink(get_page_by_path('warsztaty')); ?>">
                                                <?php esc_html_e( 'Zobacz warsztaty', 'woocommerce' ); ?>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
get_footer();
