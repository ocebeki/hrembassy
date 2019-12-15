<?php if( have_rows('prelegenci_karta') ):
  $counter = 0;
         while ( have_rows('prelegenci_karta') ) : the_row(); ?>
<div class="remodal conf-slider-modal" data-remodal-id="modal-<?php echo $counter ?>">
  <div class="conf-slider-modal__top">
    <img class="conf-slider-modal__img" src="<?php the_sub_field('zdjecie')?>" />
    <div class="conf-slider-modal__name-wrapper">
      <p class="conf-slider-modal__name"><?php the_sub_field('imie'); ?></p>
      <p class="conf-slider-modal__profession"><?php the_sub_field('pop_up_profesia'); ?></p>
    </div>
    <div data-remodal-action="close" class="remodal-close conf-slider-modal__close">
      <?php   get_template_part('/conference/img/close-circular-button-symbol.svg') ?></div>
  </div>
  <div class="conf-slider-modal__bottom">
    <p class="conf-slider-modal__text"> <?php the_sub_field('pop_up_tekst'); ?></p>
  </div>
</div>
<?php $counter++; endwhile;
               endif; ?>