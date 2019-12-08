<?php get_header(); ?>

<div class="single">
  <?php while ( have_posts() ) : the_post(); ?>
  <?php if (has_post_thumbnail()) : ?>
  <div class="single__top-img">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
  </div>
  <?php endif; ?>
  <section class="section single__top">
    <div class="container">
      <div class="single__column--wide">
        <div class="single-top__wrapper">
          <div class="single__social">
            <?php get_template_part('template-parts/social'); ?>
          </div>
          <div class="single__categories">
            <?php get_template_part('template-parts/categories'); ?>
          </div>
          <h1 class="single__title"><?php the_title(); ?></h1>
          <?php if (get_field('autor_imie')) : ?>
          <div class="single__autor">
            <div class="single__autor-img"><img src="<?php the_field('autor_img'); ?>" alt="" /></div>
            <div class="single__autor-texts">
              <div>Autor:</div>
              <div class="single__autor-name"><?php the_field('autor_imie'); ?></div>
            </div>
          </div>
          <?php else : ?>
          <div class="single__autor">
            <div class="single__autor-img"><?php get_template_part('img/svg/hrhead.svg'); ?></div>
            <div class="single__autor-texts">
              <div>Autor:</div>
              <div class="single__autor-name">HR Embassy</div>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="single__middle">
    <div class="container">
      <div class="single__middle-wrapper">
        <div class="single__column">
          <?php if (get_field('naglowek')) : ?>
          <h2 class="single__heading" data-scroll="fadeUp"><?php the_field('naglowek'); ?></h2>
          <?php endif; ?>
          <div class="single__content"><?php the_content(); ?></div>
          <section class="single__bottom">
            <div class="single__bottom-wrapper">
              <div class="single__bottom-left">
                <div class="single__bottom-heading">
                  <?php if (get_field('autor_imie')) : ?>
                  <div class="single__autor">
                    <div class="single__autor-img"><img src="<?php the_field('autor_img'); ?>" alt="" /></div>
                    <div class="single__autor-texts">
                      <div>Autor:</div>
                      <div class="single__autor-name"><?php the_field('autor_imie'); ?></div>
                    </div>
                  </div>
                  <?php else : ?>
                  <div class="single__autor">
                    <div class="single__autor-img"><?php get_template_part('img/svg/hrhead.svg'); ?></div>
                    <div class="single__autor-texts">
                      <div>Autor:</div>
                      <div class="single__autor-name">HR Embassy</div>
                    </div>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
              <div class="single__bottom-right">
                <div class="single__bottom-heading">Udostępnij</div>
                <?php get_template_part('template-parts/social'); ?>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>

  <section class="section single__pozostale">
    <div class="container">
      <div class="blog__section">
        <div class="single__more-heading">Pozostałe artykuły:</div>
        <div class="single__query">
          <?php get_template_part('template-parts/more-posts'); ?>
        </div>
      </div>
    </div>
  </section>

  <?php endwhile; ?>
</div>

<?php get_footer();