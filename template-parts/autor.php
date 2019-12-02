<?php
    global $post;
?>

<div class="autor">
    <div class="autor__left" data-scroll="fadeIn">
        <img src="<?php the_field('autor_img'); ?>" alt="" />
    </div>
    <div class="autor__right">
        <div>
            <div class="autor__upheading" data-scroll="fadeUp">Trener:</div>
            <div class="autor__name" data-scroll="fadeDown"><?php the_field('autor_imie'); ?></div>
            <div class="autor__text" data-scroll="fadeUp"><?php the_field('autor_tekst'); ?></div>
            <a class="social__item" data-scroll="fadeUp" target="_blank" href="<?php the_field('autor_linkedin'); ?>"><?php echo get_template_part('img/svg/li.svg'); ?></a>
        </div>
    </div>
</div>