<?php get_header(); ?>
<script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>

<section class="section sekcja">
  <div class="container">
    <div class="sekcja__wrapper">
      <div class="sekcja__left">
        <div>
          <div class="sekcja__heading">Dziękujemy</div>
          <div class="sekcja__text" data-scroll="fadeUp">po weryfikacji zgłoszenia dostaniesz od nas potwierdzenie
            udziału w wydarzeniu lub zapis na listę rezerwową.</div>
          <span class="addeventatc" data-scroll="fadeIn">
            Dodaj do kalendarza
            <span class="start"><?php the_field('event_start'); ?></span>
            <span class="end"><?php the_field('event_koniec'); ?></span>
            <span class="timezone"><?php the_field('event_timezone'); ?></span>
            <span class="title"><?php the_field('event_title'); ?></span>
            <span class="description"><?php the_field('event_description'); ?></span>
            <span class="location"><?php the_field('event_location'); ?></span>
          </span>
          <a class="btn btn--thankyou" href="<?php the_field('fb_link'); ?>" data-scroll="fadeIn" target="_blank">Dołącz
            do wydarzenia na Facebook'u</a>
        </div>
      </div>
      <div class="sekcja__right">
        <img src="<?php the_field('obrazek'); ?>" alt="" />
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>