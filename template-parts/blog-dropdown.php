<?php
$term = get_queried_object();


$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
    'exclude' => '1',
) );

?>
<div class="kategorie">
    <div class="kategorie__wrapper">
        <div class="kategorie__caret"><?php get_template_part('img/svg/caret-down.svg'); ?></div>
        <div class="kategorie__list">
            <?php foreach( $categories as $cat ) : ?>
                <?php if ($term->slug == $cat->slug) : ?>
                    <div class="kategorie__item"><a href="<?php echo get_category_link( $cat->term_id); ?>"><?php echo $cat->name; ?></a></div>
                
                <?php endif; ?>
            <?php endforeach; ?>
            <div class="kategorie__item"><a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ); ?>">Kategorie</a></div>
            <?php foreach( $categories as $cat ) : ?>
                <?php if ( !($term->slug == $cat->slug) ) : ?>
                    <div class="kategorie__item"><a href="<?php echo get_category_link( $cat->term_id); ?>"><?php echo $cat->name; ?></a></div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>