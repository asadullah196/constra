<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package constra
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<!-- Main container starts -->
<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
      <!-- Main blog area starts -->
      <div class="col-lg-12 mb-5 mb-lg-0">
        <?php if ( have_posts() ) : ?>
          <?php while( have_posts()  ) : the_post(); ?>
            <?php echo get_template_part( 'inc/template-parts/content-page'); ?>
          <?php endwhile; ?>
        <?php endif; ?>
        <br/>
        <!-- Blog pagination starts -->
        <?php constra_navigation(); ?>
        <!-- Blog pagination ends -->
      </div>
      <!-- Main blog area starts -->
    </div><!-- Main row end -->
  </div><!-- Container end -->
</section>
<!-- Main container end -->
<?php get_footer(); ?>