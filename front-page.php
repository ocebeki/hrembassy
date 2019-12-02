<?php get_header(); ?>

    <section class="section top">
        <div class="container">
            <div class="top__wrapper">
                <div class="top__slider" data-slider="slider">
                    <?php while ( have_rows('slider') ) : the_row(); ?>
                    <div class="top__item" data-slider="item">
                        <div class="top__left">
                            <div class="top__left-wrapper">
                                <div>
                                    <h1 class="top__heading"><?php the_sub_field('top_naglowek'); ?></h1>
                                    <p><?php the_sub_field('top_tekst'); ?></p>
                                    
                                    <a class="btn" href="<?php the_sub_field('top_link'); ?>"><?php the_sub_field('top_btn'); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="top__right">
                            <img class="top__img" src="<?php the_sub_field('top_img'); ?>" alt="" />
                        </div>
                    </div>
                    <?php endwhile; ?>  
                </div>
                <div class="top__arrows">
                    <div class="top__arrow" data-slider="sliderPrev"><?php get_template_part('img/svg/prev.svg'); ?></div>
                    <div class="top__arrow" data-slider="sliderNext"><?php get_template_part('img/svg/next.svg'); ?></div>
                </div>
                <div class="home__mouse">
                    <?php get_template_part('img/svg/mouse.svg'); ?>
                </div>
                <div class="home__social">
                    <?php get_template_part('template-parts/social'); ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section oferujemy">
        <div class="container">
            <div class="oferujemy__wrapper">
                <div class="col-md-3 col-sm-12">
                    <div class="oferujemy__item oferujemy__item--heading">
                        <h1 data-scroll="fadeDown">Co Wam<br />
                            oferujemy?</h1>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <a class="oferujemy__item" href="<?php echo get_home_url(); ?>/warsztaty/" data-scroll="fadeUp">
                        <div class="oferujemy__heading"><?php the_field('oferujemy_naglowek1'); ?></div>
                        <div class="oferujemy__text"><?php the_field('oferujemy_tekst1'); ?></div>
                        <div class="oferujemy__more">- Dowiedz się więcej</div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4">
                    <a class="oferujemy__item" href="<?php echo get_home_url(); ?>/warsztaty-dedykowane/" data-scroll="fadeUp">
                        <div class="oferujemy__heading"><?php the_field('oferujemy_naglowek2'); ?></div>
                        <div class="oferujemy__text"><?php the_field('oferujemy_tekst2'); ?></div>
                        <div class="oferujemy__more">- Dowiedz się więcej</div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4">
                    <a class="oferujemy__item" href="<?php echo get_home_url(); ?>/konsultacje/" data-scroll="fadeUp">
                        <div class="oferujemy__heading"><?php the_field('oferujemy_naglowek3'); ?></div>
                        <div class="oferujemy__text"><?php the_field('oferujemy_tekst3'); ?></div>
                        <div class="oferujemy__more">- Dowiedz się więcej</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section home-warsztaty">
        <div class="container">
            <?php get_template_part('template-parts/sklep/home-warsztaty'); ?>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <?php get_template_part('template-parts/klienci'); ?>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <?php get_template_part('template-parts/opinie'); ?>
        </div>
    </section>
         
    <section class="section sekcja">
        <div class="container">
            <div class="sekcja__wrapper">
                <div class="sekcja__left">
                    <div>
                        <div class="sekcja__preheading" data-scroll="fadeUp"><?php the_field('deser_haslo'); ?></div>
                        <div class="sekcja__heading" data-scroll="fadeDown"><?php the_field('deser_naglowek'); ?></div>
                        <div class="sekcja__text" data-scroll="fadeUp"><?php the_field('deser_tekst'); ?></div>
                        <a class="btn" href="<?php the_field('deser_link'); ?>" data-scroll="fadeIn">Zapisz się</a>
                    </div>
                </div>
                <div class="sekcja__right">
                    <img src="<?php the_field('deser_img'); ?>" alt="" />
                </div>
            </div>
        </div>    
    </section>

    <?php
        $the_query = new WP_Query( array( 'posts_per_page' => 4 ) );

        if ( $the_query->have_posts() ) :
    ?>
    <section class="section home__blog">
        <div class="container">
            <div class="home__blog-wrapper">
                <div class="blog__wrapper">
                    <div class="blog__heading" data-scroll="fadeDown">Blog HR Embassy</div>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <a class="blog__item" href="<?php echo get_the_permalink(); ?>" data-scroll="fadeIn">
                        <div class="blog__img">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                            <div class="blog__categories">
                                <?php 
                                    $postCategories = get_the_category(); 
                        
                                    foreach ( $postCategories as $category ) { 
                                        if ( !($category->name == 'Wszystkie') ) {
                                            echo '<span class="blog__category">' . esc_attr( $category->name ) . '</span>';  
                                        } 
                                    } 
                                ?>
                            </div>
                        </div>
                        <div class="blog__date"><?php echo get_the_date('d.m.Y'); ?></div>
                        <div class="blog__name"><?php the_title(); ?></div>
                        <div class="blog_excerpt"><?php echo get_excerpt(get_the_ID()); ?></div>
                    </a>
                    <?php endwhile; ?>
                    <a class="btn blog__btn" href="<?php echo get_permalink(get_page_by_path('blog')); ?>" data-scroll="fadeIn">Więcej artykułów</a>
                </div>
            </div>
        </div>
    </section>
    <?php
        endif; 
        wp_reset_postdata();
    ?>

    <section class="section newsletter">
        <div class="container">
            <?php get_template_part('template-parts/newsletter'); ?>
        </div>
    </section>

    <section class="section poznaj">
        <div class="container">
            <div class="poznaj__wrapper">
                <div class="poznaj__left" data-scroll="zoomOut">
                    <img src="<?php the_field('poznaj_img'); ?>" alt="" data-scroll="zoomOutItem" />
                </div>
                <div class="poznaj__right">
                    <div class="poznaj__right-wrapper">
                        <div class="poznaj__heading" data-scroll="data-scroll="fadeUp""><?php the_field('poznaj_nalowek'); ?></div>
                        <div class="poznaj__text" data-scroll="fadeUp"><?php the_field('poznaj_tekst'); ?></div>
                        <div class="poznaj__subheading" data-scroll="fadeUp"><?php the_field('poznaj_subheading'); ?></div>
                        <a class="btn" href="<?php echo get_permalink(get_page_by_path('o-nas')); ?>" data-scroll="fadeIn">O nas</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section map">
        <div class="container">
            <div class="map__wrapper">
                <div class="map__top" data-scroll="staggerUp">
                    <div class="map__item" data-scroll="staggerUpItem">
                        <div class="map__heading">Główny satelita</div>
                        <div class="map__tekst"><?php the_field('map_satelita'); ?></div>
                    </div>
                    <div class="map__item" data-scroll="staggerUpItem">
                        <div class="map__heading">Stacja kosmiczna</div>
                        <div class="map__tekst"><?php the_field('map_stacja'); ?></div>
                    </div>
                    <div class="map__item" data-scroll="staggerUpItem">
                        <div class="map__heading">Telefon</div>
                        <div class="map__tekst"><?php the_field('map_telefon'); ?></div>
                    </div>
                    <div class="map__item" data-scroll="staggerUpItem">
                        <div class="map__heading">E-mail</div>
                        <div class="map__tekst"><?php the_field('map_email'); ?></div>
                    </div>
                </div>
                <div class="map__bottom" data-scroll="fadeIn">
                    <?php get_template_part('template-parts/map'); ?>
                </div>
            </div>
        </div>
    </section>
             
<?php get_footer(); ?>