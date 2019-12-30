<?php if (is_user_logged_in()) : ?>
    <?php get_template_part('template-parts/myaccount/logged-in'); ?>
<?php else : ?>
    <?php get_template_part('template-parts/myaccount/not-logged-in'); ?>
<?php endif; ?>
