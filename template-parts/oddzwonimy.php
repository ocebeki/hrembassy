<div class="oddzwonimy__wrapper">
    <div class="oddzwonimy__top">
        <div class="oddzwonimy__upheading" data-scroll="fadeUp"><?php the_field('oddzwonimy_haslo'); ?></div>
        <div class="oddzwonimy__heading" data-scroll="fadeDown"><?php the_field('oddzwonimy_naglowek'); ?></div>
    </div>
    <div class="oddzwonimy__flex">
        <div class="oddzwonimy__left"><img src="<?php the_field('oddzwonimy_left', get_page_by_path('warsztaty-dedykowane')); ?>" alt="" /></div>
        <div class="oddzwonimy__middle form" data-scroll="fadeIn">
            <?php echo do_shortcode('[contact-form-7 id="8" title="Oddzwonimy"]'); ?>
        </div>
        <div class="oddzwonimy__right"><img src="<?php the_field('oddzwonimy_right', get_page_by_path('warsztaty-dedykowane')); ?>" alt="" /></div>
    </div>
</div>