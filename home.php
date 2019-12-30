<?php get_header(); ?>

<section class="section warsztaty-menu warsztaty-menu--blog">
    <div class="container">
        <div class="warsztaty-menu__wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/warsztaty-menu.png" alt="" data-scroll="fadeLeft" />
            <div class="blog__dropdown">
                <?php get_template_part('template-parts/blog-dropdown'); ?>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/warsztaty-menu.png" alt="" data-scroll="fadeRight" />
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="blog__section">
            <div class="blog__wrapper">
                <div class="blog__heading" data-scroll="fadeDown">Blog Hr Embassy</div>
                <?php while ( have_posts() ) : the_post(); ?>
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
            </div>
        </div>
        <?php if (paginate_links()) : ?>
        <div class="pagination">
            <div class="pagination__wrapper">
                <?php 
                    echo paginate_links(array(
                        'prev_text' => '',
                       'next_text' => '',
                    )); 
                ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<section class="section newsletter">
    <div class="container">
        <?php get_template_part('template-parts/newsletter'); ?>
    </div>
</section>
<?php get_footer(); ?>