<div class="social" data-scroll="staggerLeft">
    <?php if (get_field('facebook', get_option('page_on_front'))) : ?>
    <a target="_blank" class="social__item" href="<?php the_field('facebook', get_option('page_on_front')); ?>" data-scroll="staggerLeftItem">
        <?php get_template_part('img/svg/fb.svg'); ?>
    </a>
    <?php endif; ?>
    <?php if (get_field('youtube', get_option('page_on_front'))) : ?>
    <a target="_blank" class="social__item" href="<?php the_field('youtube', get_option('page_on_front')); ?>" data-scroll="staggerLeftItem">
        <?php get_template_part('img/svg/yt.svg'); ?>
    </a>
    <?php endif; ?>
    <?php if (get_field('instagram', get_option('page_on_front'))) : ?>
    <a target="_blank" class="social__item" href="<?php the_field('instagram', get_option('page_on_front')); ?>" data-scroll="staggerLeftItem">
        <?php get_template_part('img/svg/insta.svg'); ?>
    </a>
    <?php endif; ?>
    <?php if (get_field('linked_in', get_option('page_on_front'))) : ?>
    <a target="_blank" class="social__item" href="<?php the_field('linked_in', get_option('page_on_front')); ?>" data-scroll="staggerLeftItem">
        <?php get_template_part('img/svg/li.svg'); ?>
    </a>
    <?php endif; ?>
</div>