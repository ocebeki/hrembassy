<section class="section conf-top">
    <img class="conf-top__bc" src="<?php echo get_template_directory_uri(); ?>/conference/img/top-bc.jpg" />
    <div class="container-fluid">
        <div class="conf-top__wrapper">
            <div class="conf-top__content-top">
                <h1 class="conf-top__title">Najbardziej interaktywna konferencja HR w Polsce</h1>
                <p class="conf-top__subtitle">27 LUTEGO, 2020 / WARSZAWA, MULTIKINO ZŁOTE TARASY</p>
                <a class="btn conf-top__btn" id="trigger">Kup biltet</a>
            </div>
            <div class="conf-top__content-bottom">
                <div class="conf-top__media">
                    <?php get_template_part('template-parts/social'); ?>
                </div>
                <div class="conf-top__counting-down">
                    <p class="conf-top__counting-down-title">Do zmiany cen biletów zostało :</p>
                    <div class="conf-top__counting-down-counters">
                        <div class="conf-top__counting-down-item"><span
                                class="conf-top__counting-down-day conf-top__counting-number"></span>dzień
                        </div>
                        <div class="conf-top__counting-down-item"><span
                                class="conf-top__counting-down-hour conf-top__counting-number"></span>h
                        </div>
                        <div class="conf-top__counting-down-item"><span
                                class="conf-top__counting-down-min conf-top__counting-number"></span>min
                        </div>
                        <div class="conf-top__counting-down-item"><span
                                class="conf-top__counting-down-sec conf-top__counting-number"></span>sek
                        </div>
                    </div>
                </div>
                <div class="conf-top__lang">
                </div>
            </div>
        </div>
    </div>
</section>