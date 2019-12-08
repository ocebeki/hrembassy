   <div class="conf-header-mobile">
       <div class="container-fluid">
           <div class="conf-header-mobile__wrapper">
               <div class="conf-header-mobile__top">
                   <a class="conf-header-mobile__logo" href="<?php echo home_url(); ?>"> <img
                           class="conf-header-mobile__logo-img"
                           src="<?php echo get_template_directory_uri(); ?>/conference/img/logo.png" />
                   </a>
                   <div class="conf-header-mobile__burger">
                       <?php get_template_part('template-parts/hamburger'); ?>
                   </div>
               </div>
               <div class="conf-header-mobile__bottom">
                   <a class="conf-btn ">Zostań partnerem</a>
                   <ul class="conf-header-mobile__menu">
                       <li class="conf-header-mobile__menu-item">
                           <a class="conf-header-mobile__menu-link" href="/">O Konferencji</a>
                       </li>
                       <li class="conf-header-mobile__menu-item">
                           <a class="conf-header-mobile__menu-link" href="/">Prelegenci</a>
                       </li>
                       <li class="conf-header-mobile__menu-item">
                           <a class="conf-header-mobile__menu-link" href="/">Program</a>
                       </li>
                       <li class="conf-header-mobile__menu-item">
                           <a class="conf-header-mobile__menu-link" href="/">Partnerzy</a>
                       </li>
                       <li class="conf-header-mobile__menu-item">
                           <a class="conf-header-mobile__menu-link" href="/">Lokalizacja</a>
                       </li>
                       <li class="conf-header-mobile__menu-item">
                           <a class="conf-header-mobile__menu-link" href="/">Bilety</a>
                       </li>
                       <li class="conf-header-mobile__menu-item">
                           <a class="conf-header-mobile__menu-link" href="/">Kontakt</a>
                       </li>
                   </ul>
                   <?php get_template_part('template-parts/social'); ?>
               </div>
           </div>
       </div>
   </div>