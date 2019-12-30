<?php get_header('conference'); ?>

<?php get_template_part('conference/top'); ?>
<?php get_template_part('conference/why'); ?>
<?php get_template_part('conference/hero'); ?>
<?php get_template_part('conference/slider'); ?>
<div class="container" style="margin-top: 30px;">
  <a class="conf-btn conf-btn--full" href="#harmonogram">Kupuję bilet <?php get_template_part('img/svg/arrow.svg'); ?></a>
  <a class="conf-btn conf-btn--full conf-btn--main prevent" target="_blank" href="mailto:<?php the_field('pakiet_group'); ?>">Zostań prelegentem <?php get_template_part('img/svg/arrow.svg'); ?></a>
</div>
<?php get_template_part('conference/cta'); ?>
<?php get_template_part('conference/harmonogram'); ?>
<?php get_template_part('conference/buy'); ?>
<?php get_template_part('conference/contact'); ?>
<?php get_template_part('conference/map'); ?>
<?php get_template_part('conference/partners'); ?>

<?php get_footer('conference'); ?>