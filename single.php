<?php
/**
* The template for displaying all single posts.
*
* This is the template that displays all single posts by default.
* You can also create specific templates for different post types.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
      <div class="col-lg-8 mb-5 mb-lg-0">
      <?php if ( have_posts() ) : ?>
        <?php while( have_posts()  ) : the_post(); ?>
          <?php echo get_template_part( 'inc/template-parts/content' , get_post_format() );
          
          $prev_post = get_previous_post();
          $next_post = get_next_post();

        ?>

        <div class="relates-post">
            <div class="container">
              <div class="row">
                  <div class="col-md-6">
                  <?php if(!empty($prev_post)) : ?>
                      <div class="card mb-4">
                          <div class="card-body">
                              <a href="<?php echo get_the_permalink( $prev_post ); ?>">
                                <p class="card-text"><?php echo esc_html__('Previous blog','constra'); ?></p>
                                <h5 class="card-title"><i class="fas fa-angle-double-left"></i> <?php echo get_the_title($prev_post); ?></h5>
                            </a>
                          </div>
                      </div>
                      <?php endif; ?>
                  </div>
                  <div class="col-md-6">
                  <?php if(!empty($next_post)) : ?>
                      <div class="card mb-4">
                          <div class="card-body">
                            <a href="<?php echo get_the_permalink( $next_post ); ?>">
                                <p class="card-text"><?php echo esc_html__('Next blog','constra'); ?></p>
                                <h5 class="card-title"><?php echo get_the_title($next_post); ?> <i class="fas fa-angle-double-right"></i> </h5>
                            </a>
                          </div>
                      </div>
                      <?php endif; ?>
                  </div>
              </div>
          </div>
        </div>

        <?php get_template_part( 'inc/template-parts/biography' ); ?>

        <?php endwhile; ?>
      <?php endif; ?>

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>    
          <?php if ( comments_open() || get_comments_number() ) :
              comments_template();     
          else : ?>
            <h3 class="text-center">Comments has been disable!</h3>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
      
      </div><!-- Content Col end -->

      <div class="col-lg-4">

        <div class="sidebar sidebar-right">
          <?php get_sidebar(); ?>
        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

    </div><!-- Main row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->
<?php get_footer(); ?>