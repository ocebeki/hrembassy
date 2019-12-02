<?php get_header('null'); ?>
    <div class="moje-konto-login">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <div class="moje-konto-login__logo"><a data-fade="true" href="<?php echo home_url(); ?>"><?php get_template_part('img/svg/logo-small.svg'); ?></a></div>
            <div class="moje-konto-login__wrapper">
                <?php the_content(); ?>
            </div>
            <div class="moje-konto-login__bottom">
                <span>Copyright © Hr Embassy 2019</span>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
<?php get_footer('null'); ?>