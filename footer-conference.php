</div>
<footer class="conf-footer">
  <div class="container">
    <div class="conf-footer__wrapper">
      <p class="conf-footer__copyright"><?php the_field('copyright'); ?>
      </p>
      <div class="conf-footer__social">
        <?php get_template_part('template-parts/social'); ?>
      </div>
      <?php the_field('link'); ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>