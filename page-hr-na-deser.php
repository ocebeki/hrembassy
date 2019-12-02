<?php get_header(); ?>
    <section class="section blub">
        <div class="container">
            <div class="bulb__wrapper">
                <div class="bulb__left">
                    <div>
                        <div class="bulb__text" data-scroll="fadeUp"><?php the_field('deser_tekst'); ?></div>
                        <?php if (get_field('zapisz_formularz') == 'Tak') : ?>
                            <a class="btn" href="#formularz" data-scroll="fadeIn">Weź udział</a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="bulb__right">
                    <img src="<?php the_field('deser_img'); ?>" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="section sekcja">
        <div class="container">
            <div class="sekcja__wrapper">
                <div class="sekcja__left">
                    <div>
                        <div class="sekcja__preheading" data-scroll="fadeUp"><?php the_field('startup_haslo'); ?></div>
                        <div class="sekcja__heading" data-scroll="fadeDown"><?php the_field('startup_naglowek'); ?></div>
                        <div class="sekcja__meta" data-scroll="fadeIn">
                            <div class="sekcja__meta-item">
                                <div class="sekcja__icon--small"><?php get_template_part('img/svg/date.svg'); ?></div>
                                <div class="sekcja__meta-text"><?php the_field('startup_data'); ?></div>
                            </div>
                            <div class="sekcja__meta-item">
                                <div class="sekcja__icon--small"><?php get_template_part('img/svg/place.svg'); ?></div>
                                <div class="sekcja__meta-text"><?php the_field('startup_miejsce'); ?></div>
                            </div>
                        </div>
                        <div class="sekcja__text" data-scroll="fadeUp"><?php the_field('startup_tekst'); ?></div>
                        <?php if (get_field('zapisz_formularz') == 'Tak') : ?>
                            <a class="btn" href="#formularz" data-scroll="fadeIn">Zapisz się</a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="sekcja__right">
                    <img src="<?php the_field('startup_img'); ?>" alt="" />
                </div>
            </div>
        </div>    
    </section>

    <section class="section prosta">
        <div class="container">
            <div class="prosta__wrapper">
                <div class="col-md-4">
                    <div class="prosta__item">
                        <div class="prosta__heading" data-scroll="fadeDown"><?php the_field('omowic_naglowek'); ?></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="prosta__tekst" data-scroll="fadeUp"><?php the_field('omowic_tekst'); ?></div>
                    <ul class="prosta__list" data-scroll="staggerUp">
                        <?php while ( have_rows('omowic_podpunkty') ) : the_row(); ?>
                        <li data-scroll="staggerUpItem"><?php the_sub_field('podpunkt'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section klienci">
        <div class="container">
            <div class="klienci__wrapper">
                <div class="klienci__heading" data-scroll="fadeDown">Partnerzy spotkania</div>
                <div class="klienci__slider" data-slider="klienci" data-scroll="staggerUp">
                    <?php while ( have_rows('partnerzy_slider')) : the_row(); ?>
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
        </div>
    </section>

    <section class="section program">
        <div class="container">
            <div class="program__wrapper">
                <?php if (get_field('program')) : ?>
                <div id="program" class="single-product__opis-part">
                    <div class="single-product__content">
                        <div class="row">
                            <div class="col-md-4">
                                <h2 data-scroll="fadeDown">Program<br>spotkania</h2>
                            </div>
                            <div class="col-md-8 program__line">
                                <?php while ( have_rows('program') ) : the_row(); ?>
                                    <div class="program__item <?php if (get_sub_field('program_ikona') != 'brak') { echo 'ikona'; } ?>" data-scroll="fadeUp">
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
                                            <div class="program__heading"><?php the_sub_field('program_naglowe'); ?></div>
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
            <div class="program__bottom">
                <div class="program__bottom-heading" data-scroll="fadeDown"><?php the_field('udzial'); ?></div>
                <?php if (get_field('zapisz_formularz') == 'Tak') : ?>
                <a class="btn" href="#formularz" data-scroll="fadeIn">Weź udział</a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="section trenerzy">
        <div class="container">
            <div class="trenerzy__wrapper">
                <div class="trenerzy__heading" data-scroll="fadeDown">Poznaj naszych prelegentów</div>
                <div class="trenerzy__slider-wrapper">
                    <div class="trenerzy__slider" data-slider="trenerzy">
                        <?php while ( have_rows('prelegenci_slider') ) : the_row(); ?>
                        <div class="trenerzy__heads">
                            <div class="trenerzy__head">
                                <img src="<?php the_sub_field('prelegenci_img'); ?>" alt="" />
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="trenerzy__arrow trenerzy__arrow--prev" data-slider="trenerzyPrev"><?php get_template_part('img/svg/prev.svg'); ?></div>
                    <div class="trenerzy__arrow trenerzy__arrow--next" data-slider="trenerzyNext"><?php get_template_part('img/svg/next.svg'); ?></div>
                </div>
                <div class="trenerzy__texts-slider" data-slider="trenerzy-texts" data-scroll="fadeIn">
                    <?php while ( have_rows('prelegenci_slider') ) : the_row(); ?>
                    <div class="trenerzy__texts">
                        <div class="trenerzy__name"><?php the_sub_field('prelegenci_imie'); ?></div>
                        <div class="trenerzy__tekst"><?php the_sub_field('prelegenci_tekst'); ?></div>
                        <div class="trenerzy__social">
                            <a href="<?php the_sub_field('prelegenci_social'); ?>"><?php get_template_part('img/svg/li.svg'); ?></a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section zostan">
        <div class="container">
            <div class="zostan__wrapper">
                <div class="zostan__left">
                    <div>
                        <div class="zostan__heading" data-scroll="fadeDown"><?php the_field('zostan_naglowek'); ?></div>
                        <div class="zostan__tekst" data-scroll="fadeUp"><?php the_field('zostan_tekst'); ?></div>
                        <div class="prelegentem" data-scroll="fadeIn"><?php echo do_shortcode('[contact-form-7 id="375" title="Zostań prelegentem"]'); ?></div>
                    </div>
                </div>
                <div class="zostan__right">
                    <img src="<?php the_field('zostan_img'); ?>" alt="" />
                </div>
            </div>
        </div>
    </section>

    <?php if (get_field('zapisz_formularz') == 'Tak') : ?>
    
    <section id="formularz" class="section oddzwonimy">
        <div class="container">
            <div class="oddzwonimy__wrapper">
                <div class="oddzwonimy__top">
                    <div class="oddzwonimy__upheading" data-scroll="fadeUp"><?php the_field('zapisz_haslo'); ?></div>
                    <div class="oddzwonimy__heading" data-scroll="fadeDown"><?php the_field('zapisz_naglowek'); ?></div>
                </div>
                <div class="oddzwonimy__flex">
                    <div class="oddzwonimy__left"><img src="<?php the_field('oddzwonimy_left', get_page_by_path('warsztaty-dedykowane')); ?>" alt="" /></div>
                    <div class="oddzwonimy__middle form" data-scroll="fadeIn">
                        <?php echo do_shortcode('[contact-form-7 id="380" title="Zapisz się"]'); ?>
                    </div>
                    <div class="oddzwonimy__right"><img src="<?php the_field('oddzwonimy_right', get_page_by_path('warsztaty-dedykowane')); ?>" alt="" /></div>
                </div>
            </div>       
        </div>
    </section>

    <?php else : ?>

    <section class="section newsletter">
        <div class="container">
            <?php get_template_part('template-parts/newsletter'); ?>
        </div>
    </section>

    <?php endif; ?>

    <?php if (get_field('edycje')) : ?>
    <section class="section poprzednie">
        <div class="container">
            <div class="poprzednie__wrapper">
                <div class="poprzednie__heading" data-scroll="fadeDown">Zobacz poprzednie edycje HR na deser</div>
                <div class="poprzednie__list">
                    <?php while ( have_rows('edycje') ) : the_row(); ?>
                    <a class="poprzednie__item" href="<?php the_sub_field('poprzednie_link'); ?>" data-scroll="fadeUp">
                        <div class="poprzednie__item-left">
                            <div class="poprzednie__icon"><?php echo get_row_index(); ?></div>
                            <div class="poprzednie__texts">
                                <div class="poprzednie__item-heading"><?php the_sub_field('poprzednie_nazwa'); ?></div>
                                <div class="poprzednie__text"><?php the_sub_field('poprzednie_data'); ?></div>
                            </div>
                        </div>
                        <div class="poprzednie__more">Dowiedz się więcej <?php get_template_part('img/svg/next.svg'); ?></div>
                    </a>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        if(event.detail.contactFormId == '380') {
                location = '<?php echo get_permalink(get_page_by_path('thank-you')); ?>'; 
            }
    }, false );
    </script>
    
    
<?php get_footer(); ?>