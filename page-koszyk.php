<?php get_header(); ?>
<div class="page koszyk">
  <?php while ( have_posts() ) : the_post(); ?>
  <section class=" section single-top">
    <div class="container">
      <div class="single-top__wrapper">
        <div>
          <div class="koszyk__content">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endwhile; ?>

  <div class="section pomoc">
    <div class="container">
      <?php get_template_part('template-parts/pomoc'); ?>
    </div>
  </div>
</div>
<?php
get_footer();