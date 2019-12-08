<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blank
 */

get_header('regulamin');
?>

<div class="page page-regulamin">
  <section class="section page__top">
    <div class="container">
      <div class="page__top-wrapper">
        <div class="single__column">
          <a class="page__link page__link--active" href="#">Polityka prywatności</a>
          <a class="page__link" href="<?php echo get_permalink( get_page_by_path( 'regulamin' ) ); ?>">Regulamin</a>
        </div>
      </div>
    </div>
  </section>
  <?php while ( have_posts() ) : the_post(); ?>
  <section class="single__middle">
    <div class="container">
      <div class="single__middle-wrapper">
        <div class="single__column">
          <div class="single__content single__content--full-width"><?php the_content(); ?></div>
        </div>
      </div>
    </div>
  </section>
  <?php endwhile; ?>

</div>

<?php
get_footer();