 <section class="conf-slider" id="prelegenci">
   <div class="container">
     <div class="conf-slider__wrapper">
       <div class="conf-slider__top">
         <h2 class="conf-slider__title">Prelegenci</h2>
         <div class="conf-slider__arrows">
           <div class="top__arrow conf-slider__arrow" data-slider="prelegenciPrev">
             <?php get_template_part('img/svg/arrow.svg'); ?>
           </div>
           <div class="top__arrow conf-slider__arrow" data-slider="prelegenciNext">
             <?php get_template_part('img/svg/arrow.svg'); ?>
           </div>
         </div>
       </div>
       <div class="conf-slider__bottom">
         <div class="conf-slider__slider" data-slider="prelegenci">
           <?php if (have_rows('prelegenci_karta')) :
              $counter = 0;
              while (have_rows('prelegenci_karta')) : the_row(); ?>
               <div class="conf-slider__item">
                 <div class="conf-slider__item-top">
                   <img class="conf-slider__item-img" src="<?php the_sub_field('zdjecie') ?>" />
                   <p class="conf-slider__item-name"><?php the_sub_field('imie'); ?></p>
                 </div>
                 <div class="conf-slider__linkedin">
                   <a target="_blank" class="social__item" href="<?php the_sub_field('linked_in'); ?>"><?php get_template_part('img/svg/li.svg'); ?></a>
                  </div>
                 <div class="conf-slider__item-midle">
                   <?php the_sub_field('tekst') ?>
                 </div>
                 <div class="conf-slider__item-btn" data-remodal-target="modal-<?php echo $counter ?>">Więcej
                   <?php get_template_part('img/svg/arrow.svg'); ?> </div>
               </div>
           <?php $counter++;
              endwhile;
            endif; ?>
         </div>
       </div>
       <?php get_template_part('conference/slider-modal') ?>
     </div>
   </div>
 </section>