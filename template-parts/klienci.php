<div class="klienci__wrapper">
    <div class="klienci__heading" data-scroll="fadeDown">Nasi klienci</div>
    <div class="klienci__slider" data-slider="klienci" data-scroll="staggerUp">
        <?php while ( have_rows('Klienci', get_option('page_on_front')) ) : the_row(); ?>
        <div class="klienci__item" data-scroll="staggerUpItem">
            <a class="klienci__link" href="<?php the_sub_field('link'); ?>"><img src="<?php the_sub_field('logo'); ?>" alt="" /></a>
        </div>
        <?php endwhile; ?>
    </div>
    <div class="top__arrows">
        <div class="top__arrow" data-slider="klienciPrev"><?php get_template_part('img/svg/prev.svg'); ?></div>
        <div class="top__arrow" data-slider="klienciNext"><?php get_template_part('img/svg/next.svg'); ?></div>
    </div>
</div>