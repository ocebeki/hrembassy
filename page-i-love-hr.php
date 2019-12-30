<?php get_header(); ?>
    <section class="section blub">
        <div class="container">
            <div class="bulb__wrapper">
                <div class="bulb__left">
                    <div>
                        <div class="bulb__text" data-scroll="fadeUp"><?php the_field('love_tekst'); ?></div>
                        <a class="btn" href="#formularz" data-scroll="fadeIn">Weź udział</a>
                    </div>
                </div>
                <div class="bulb__right">
                    <img src="<?php the_field('love_img'); ?>" alt="" />
                </div>
            </div>
        </div>
    </section>
    <section id="formularz" class="section newsletter">
        <div class="container">
            <?php get_template_part('template-parts/newsletter'); ?>
        </div>
    </section>
<?php get_footer(); ?>