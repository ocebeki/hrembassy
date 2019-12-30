<div class="social" data-scroll="staggerLeft">
  <?php if (get_field('facebook')) : ?>
    <a target="_blank" class="social__item" href="<?php the_field('facebook'); ?>" data-scroll="staggerLeftItem">
      <?php get_template_part('img/svg/fb.svg'); ?>
    </a>
  <?php endif; ?>
  <?php if (get_field('youtube')) : ?>
    <a target="_blank" class="social__item" href="<?php the_field('youtube'); ?>" data-scroll="staggerLeftItem">
      <?php get_template_part('img/svg/yt.svg'); ?>
    </a>
  <?php endif; ?>
  <?php if (get_field('instagram')) : ?>
    <a target="_blank" class="social__item" href="<?php the_field('instagram'); ?>" data-scroll="staggerLeftItem">
      <?php get_template_part('img/svg/insta.svg'); ?>
    </a>
  <?php endif; ?>
  <?php if (get_field('linked_in')) : ?>
    <a target="_blank" class="social__item" href="<?php the_field('linked_in'); ?>" data-scroll="staggerLeftItem">
      <?php get_template_part('img/svg/li.svg'); ?>
    </a>
  <?php endif; ?>
</div>