<?php 

    $archivePage = get_queried_object();
    $args = array(
        'taxonomy'   => "product_cat",
        'hide_empty' => true,
        'exclude' => array(18,32,33)
    );

    $product_categories = get_terms($args);
?>
<div class="kategorie kategorie--white">
    <div class="kategorie__wrapper">
        <div class="kategorie__caret"><?php get_template_part('img/svg/caret-down.svg'); ?></div>
        <div class="kategorie__list">
            <?php foreach( $product_categories as $cat ) : ?>
                <?php if ($term->slug == $cat->slug) : ?>
                    <div class="kategorie__item"><a href="<?php echo get_category_link( $cat->term_id); ?>"><?php echo $cat->name; ?></a></div>
                
                <?php endif; ?>
            <?php endforeach; ?>
            <div class="kategorie__item"><a href="<?php echo get_permalink( get_page_by_path( 'sklep' ) ); ?>">Kategorie</a></div>
            <?php foreach( $product_categories as $cat ) : ?>
                <?php if ( !($term->slug == $cat->slug) ) : ?>
                    <div class="kategorie__item"><a href="<?php echo get_category_link( $cat->term_id); ?>"><?php echo $cat->name; ?></a></div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>