</div>
<footer class="footer">
  <div class="background-lines">
    <div class="container">
      <div class="background-lines__wrapper">
        <span class="background-lines__line"></span>
        <span class="background-lines__line"></span>
        <span class="background-lines__line"></span>
        <span class="background-lines__line"></span>
        <span class="background-lines__line"></span>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="footer__wrapper">
      <div class="footer__left-wrapper">
        <div class="footer__left">
          <div class="footer__left-top">
            <div class="footer__logo" data-scroll="fadeIn"><?php get_template_part('img/svg/logo.svg'); ?></div>
          </div>
          <div class="footer__left-bottom" data-scroll="staggerUp">
            <div class="footer__link" data-scroll="staggerUpItem"><strong>Informacje prawne:</strong></div>
            <div class="footer__link" data-scroll="staggerUpItem">
              <a href="<?php echo get_permalink( get_page_by_path( 'polityka-prywatnosci' ) ); ?>">Polityka
                prywatności</a>
            </div>
            <div class="footer__link" data-scroll="staggerUpItem">
              <a href="<?php echo get_permalink( get_page_by_path( 'regulamin' ) ); ?>">Regulamin</a>
            </div>
          </div>
        </div>
        <div class="footer__middle">
          <div class="footer__strona" data-scroll="staggerUp">
            <div data-scroll="staggerUpItem"><strong>Strona:</strong></div>
            <div class="footer__menu">
              <div class="footer__menu-item" data-scroll="staggerUpItem">
                <a href="">Hr na Deser</a>
              </div>
              <div class="footer__menu-item" data-scroll="staggerUpItem">
                <a href="">I love HR</a>
              </div>
              <div class="footer__menu-item" data-scroll="staggerUpItem">
                <a href="">Blog</a>
              </div>
              <div class="footer__menu-item" data-scroll="staggerUpItem">
                <a href="">O nas</a>
              </div>
              <div class="footer__menu-item" data-scroll="staggerUpItem">
                <a href="">Kontakt</a>
              </div>
            </div>
          </div>
          <div class="footer__oferta" data-scroll="staggerUp">
            <div data-scroll="staggerUpItem"><strong>Oferta:</strong></div>
            <div class="footer__menu">
              <div class="footer__menu-item" data-scroll="staggerUpItem">
                <a href="">Warsztaty</a>
              </div>
              <div class="footer__menu-item" data-scroll="staggerUpItem">
                <a href="">Konsultacje</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__right">
        <div class="footer__shop">
          <?php get_template_part('template-parts/sklep/menu-shop'); ?>
        </div>
        <div class="footer__social">
          <div><strong>Podążaj za nami:</strong></div>
          <?php get_template_part('template-parts/social'); ?>
        </div>
      </div>
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