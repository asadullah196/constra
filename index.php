<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package constra
 * @since 1.0.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php get_header(); ?>

<!-- Main container starts -->
<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
      <!-- Main blog area starts -->
      <div class="col-lg-8 mb-5 mb-lg-0">
        <?php if ( have_posts() ) : ?>
          <?php while( have_posts()  ) : the_post(); ?>
            <?php echo get_template_part( 'inc/template-parts/content' , get_post_format() ); ?>
          <?php endwhile; ?>
        <?php else : ?>
          <?php echo get_template_part( 'inc/template-parts/content-none' ); ?>
        <?php endif; ?>
        <br/>
        <!-- Blog pagination starts -->
        <?php constra_navigation(); ?>
        <!-- Blog pagination ends -->
      </div>
      <!-- Main blog area starts -->
      <!-- Side bar area starts -->
      <div class="col-lg-4">
        <div class="sidebar sidebar-right">
          <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
              <?php get_sidebar(); ?>
          <?php else : ?>
              <h3>No Sidebar Added</h3>
          <?php endif; ?>
        </div>
      </div><!-- Side bar area starts -->
    </div><!-- Main row end -->
  </div><!-- Container end -->
</section>
<!-- Main container end -->
<?php get_footer(); ?>