<div class="pomoc__wrapper">
    <div class="pomoc__left">
        <div>
            <div class="pomoc__heading" data-scroll="fadeDown"><?php the_field('pomoc_naglowek', get_page_by_path('warsztaty')); ?></div>
            <div class="pomoc__tekst" data-scroll="fadeUp"><?php the_field('pomoc_tekst', get_page_by_path('warsztaty')); ?></div>
            <div class="pomoc__contact-wrapper" data-scroll="fadeIn">
                <div class="pomoc__contact">
                    <div class="pomoc__icon"><?php get_template_part('img/svg/tel.svg'); ?></div>
                    <a href="tel:<?php the_field('pomoc_tel', get_page_by_path('warsztaty')); ?>"><?php the_field('pomoc_tel', get_page_by_path('warsztaty')); ?></a>
                </div>
                <div class="pomoc__contact">
                    <div class="pomoc__icon"><?php get_template_part('img/svg/at.svg'); ?></div>
                    <a href="mailto:<?php the_field('pomoc_mail', get_page_by_path('warsztaty')); ?>"><?php the_field('pomoc_mail', get_page_by_path('warsztaty')); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="pomoc__right">
        <img src="<?php the_field('pomoc_img', get_page_by_path('warsztaty')); ?>" alt="" />
    </div>
</div>