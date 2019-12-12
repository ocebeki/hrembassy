<?php
$products = new WP_Query(array(
    'post_type'      => 'product',
    'posts_per_page' => 4,
    'tax_query'      => array(
        array(
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => array('bilet'),
            'operator' => 'NOT IN',
        )
    )
));
?>

<?php if ($products->have_posts()) : ?>
    <div class="home-warsztaty__wrapper" data-scroll="staggerUp">
        <div class="home-warsztaty__left">
            <div class="home-warsztaty__left-wrapper">
                <div class="home-warsztaty__text-wrapper" data-scroll="staggerUpItem">
                    <h1>Warsztaty</h1>
                    <div class="home-warsztaty__text"><?php the_field('warsztaty_tekst'); ?></div>
                    <a class="btn btn--main" href="<?php echo get_home_url(); ?>/warsztaty/">Zobacz więcej</a>
                </div>
                <img class="home-warsztaty__left-img" src="<?php echo get_template_directory_uri(); ?>/img/warsztaty.png" alt="" />
            </div>
        </div>
        <div class="home-warsztaty__right">
            <?php while ($products->have_posts()) : $products->the_post(); ?>
                <a class="home-warsztaty__item" href="<?php echo get_permalink(); ?>" data-scroll="staggerUpItem">
                    <div class="home-warsztaty__item-wrapper">
                        <img class="home-warsztaty__img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                        <div class="home-warsztaty__heading"><?php the_title(); ?></div>
                        <div class="home-warsztaty__price"><?php echo get_post_meta(get_the_ID(), '_price', true); ?> <span class="home-warsztaty__price-text">zł netto</span></div>
                        <div class="home-warsztaty__meta"><?php the_field('data'); ?> / <?php the_field('miejsce'); ?> / <?php the_field('czas'); ?></div>
                        <div class="home-warsztaty__btn btn btn--main" href="#">Zobacz więcej</div>
                    </div>
                </a>
            <?php endwhile; ?>

        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>