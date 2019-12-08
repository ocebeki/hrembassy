</div>
<footer class="footer">
  <div class="container">
    <div class="footer__top">
      <div class="footer__logo"><?php get_template_part('img/svg/logo.svg'); ?></div>
      <div class="footer__menu">
        <?php get_template_part('template-parts/menu'); ?>
      </div>
    </div>
    <div class="footer__social">
      <?php get_template_part('template-parts/social'); ?>
    </div>
    <div class="footer__cookies">
      <a href="<?php echo get_permalink( get_page_by_path( 'polityka-prywatnosci' ) ); ?>">Polityka
        prywatności</a>
    </div>
    <div class="footer__regulamin">
      <a href="<?php echo get_permalink( get_page_by_path( 'regulamin' ) ); ?>">Regilamin</a>
    </div>
    <div class="footer__bottom">
      <span class="footer__copyright">Copyright © hrembassy Wszelkie prawa zastrzeżone.</span>
      <span class="footer__project">Projekt i realizacja : <a href="http://propercolors.pl/"
          target="_blank">www.propercolors.pl</a></span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>