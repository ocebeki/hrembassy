<?php 
    // the query
    $thisPostId = get_the_ID();

    $more_posts_query = new WP_Query( array(
       'posts_per_page' => 2,
       'post__not_in' => array($thisPostId),
    )); 
?>

<?php if ( $more_posts_query->have_posts() ) : ?>
    <div class="blog__wrapper" data-scroll="staggerUp">
        <?php while ( $more_posts_query->have_posts() ) : $more_posts_query->the_post(); ?>
        <div class="blog__more-wrapper">
            <a class="blog__item" href="<?php echo get_the_permalink(); ?>">
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
        </div>
        <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>