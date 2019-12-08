<?php get_header(); ?>
<div class="page koszyk">
  <?php while ( have_posts() ) : the_post(); ?>
  <section class="single-top">
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

  <div class="section pomoc">
    <div class="container">
      <?php get_template_part('template-parts/pomoc'); ?>
    </div>
  </div>

  <div class="section kask">
    <div class="container">
      <?php get_template_part('template-parts/kask'); ?>
    </div>
  </div>

  <?php endwhile; ?>
</div>
<?php
get_footer();