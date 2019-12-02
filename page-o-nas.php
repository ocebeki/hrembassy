<?php get_header(); ?>
     <section class="section bulb">
        <div class="container">
            <div class="bulb__wrapper">
                <div class="bulb__left">
                    <div>
                        <div class="bulb__text" data-scroll="fadeUp"><?php the_field('onas_tekst'); ?></div>
                        <a class="btn" href="<?php echo get_permalink(get_page_by_path('kontakt')); ?>" data-scroll="fadeIn">Napisz do nas</a>
                    </div>
                </div>
                <div class="bulb__right">
                    <img src="<?php the_field('onas_img'); ?>" alt="" />
                </div>
            </div>
        </div>
    </section>
    
    <section class="section opinie opinie--main">
        <div class="container">
            <div class="opinie__wrapper">
                <div class="opinie__quotesign" data-scroll="fadeIn"><?php get_template_part('img/svg/quote.svg'); ?></div>
                <div class="opinie__slider" data-slider="opinie" data-scroll="fadeUp">
                    <div class="opinie__item">
                        <div class="opinie__item-wrapper">
                            <div class="opinie__text opinie__text--onas"><?php the_field('cytat_tekst'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section gdzie">
        <div class="container">
            <div class="gdzie__wrapper">
                <div class="gdzie__left" data-scroll="zoomOut">
                    <img data-scroll="zoomOutItem" src="<?php the_field('zespol_img'); ?>" alt="" />
                </div>
                <div class="gdzie__right">
                    <div>
                        <div class="gdzie__heading" data-scroll="fadeDown"><?php the_field('zespol_naglowek'); ?></div>
                        <div class="gdzie__tekst" data-scroll="fadeUp"><?php the_field('zespol_tekst'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section trenerzy">
        <div class="container">
            <div class="trenerzy__wrapper">
                <div class="trenerzy__heading" data-scroll="fadeDown"><?php the_field('zaloga_naglowek'); ?></div>
                <div class="trenerzy__slider-wrapper">
                    <div class="trenerzy__slider" data-slider="trenerzy">
                        <?php while ( have_rows('zaloga_slider') ) : the_row(); ?>
                        <div class="trenerzy__heads">
                            <div class="trenerzy__head">
                                <img src="<?php the_sub_field('zaloga_img'); ?>" alt="" />
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="trenerzy__arrow trenerzy__arrow--prev" data-slider="trenerzyPrev"><?php get_template_part('img/svg/prev.svg'); ?></div>
                    <div class="trenerzy__arrow trenerzy__arrow--next" data-slider="trenerzyNext"><?php get_template_part('img/svg/next.svg'); ?></div>
                </div>
                <div class="trenerzy__texts-slider" data-slider="trenerzy-texts">
                    <?php while ( have_rows('zaloga_slider') ) : the_row(); ?>
                    <div class="trenerzy__texts">
                        <div class="trenerzy__name" data-scroll="fadeUp"><?php the_sub_field('zaloga_imie'); ?></div>
                        <div class="trenerzy__position" data-scroll="fadeUp"><?php the_sub_field('zaloga_pozycja'); ?></div>
                        <div class="trenerzy__tekst" data-scroll="fadeUp"><?php the_sub_field('zaloga_tekst'); ?></div>
                        <div class="trenerzy__social" data-scroll="fadeIn">
                            <a href="<?php the_sub_field('zaloga_social'); ?>"><?php get_template_part('img/svg/li.svg'); ?></a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section baner-dedykowane">
        <div class="container">
            <div class="baner-dedykowane__wrapper">
                <div class="baner-dedykowane__img"><img src="<?php the_field('chcesz_left'); ?>" alt="" /></div>
                <div class="baner-dedykowane__middle">
                    <div class="baner-dedykowane__heading" data-scroll="fadeDown"><?php the_field('chcesz_naglowek'); ?></div>
                    <div class="baner-dedykowane__tekst" data-scroll="fadeUp"><?php the_field('chcesz_tekst'); ?></div>
                    <a class="btn" href="<?php echo get_permalink(get_page_by_path('kontakt')); ?>" data-scroll="fadeIn">Napisz do nas</a>
                </div>
                <div class="baner-dedykowane__img"><img src="<?php the_field('chcesz_right'); ?>" alt="" /></div>
            </div>
        </div>
    </section>

    <section id="formularz" class="section newsletter">
        <div class="container">
            <?php get_template_part('template-parts/newsletter'); ?>
        </div>
    </section>

<?php get_footer(); ?>