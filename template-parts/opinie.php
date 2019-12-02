<div class="opinie__wrapper">
    <img class="opinie__bg" src="<?php echo get_template_directory_uri(); ?>/img/heads.png" alt="" />
    <div class="opinie__quotesign" data-scroll="fadeIn"><?php get_template_part('img/svg/quote.svg'); ?></div>
    <div class="opinie__slider" data-slider="opinie">
        <?php while ( have_rows('opinie', get_option('page_on_front')) ) : the_row(); ?>
        <div class="opinie__item">
            <div class="opinie__item-wrapper">
                <div class="opinie__text" data-scroll="fadeDown"><?php the_sub_field('opinie_tekst'); ?></div>
                <div class="opinie__autor" data-scroll="fadeUp"><?php the_sub_field('opinie_autor'); ?></div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>