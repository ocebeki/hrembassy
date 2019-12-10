<section class="conf-partners" id="partners">
  <div class="container">
    <div class="conf-partners__wrapper">
      <p class="conf-partners__heading">PARTNERZY STRATEGICZNI</p>
      <div class="conf-partners__items-wrapper" data-slider="partners">
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/alfavox.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/pwd.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/nextbike.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/medicover.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/expo.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/intel.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/alfavox.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/pwd.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/nextbike.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/medicover.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/expo.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/intel.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/alfavox.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/pwd.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/nextbike.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/medicover.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/expo.jpg" />
        </div>
        <div class="conf-partners__item">
          <img src="<?php echo get_template_directory_uri(); ?>/conference/img/intel.jpg" />
        </div>
      </div>
      <?php if( have_rows('partnerzy') ): 
         while ( have_rows('partnerzy') ) : the_row(); ?>
      <p class="conf-partners__heading"><?php the_sub_field('naglowek') ?></p>
      <div class="conf-partners__items-wrapper">
        <?php if( have_rows('loga') ): 
         while ( have_rows('loga') ) : the_row(); ?>
        <div class="conf-partners__item">
          <img src="<?php the_sub_field('logo') ?>" />
        </div>
        <?php endwhile; endif; ?>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>