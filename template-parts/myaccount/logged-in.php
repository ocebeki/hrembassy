<?php get_header(); ?>
    <div class="moje-konto">
        <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="moje-konto__wrapper">
                <div class="moje-konto__left">
                    <div class="moje-konto__navigation">
                        <?php do_action( 'woocommerce_account_navigation' ); ?>
                    </div>
                    <div class="moje-konto__left-bottom">
                        <a class="moje-konto__log-out" href="<?php echo get_permalink(); ?>?customer-logout=true"><?php get_template_part('img/svg/power.svg'); ?>Wyloguj się</a>
                    </div>
                </div>
                <div class="moje-konto__right">
                    <div class="moje-konto__right-wrapper">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php get_footer(); ?>