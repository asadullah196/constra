<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * This is the template that displays a 404 error page when a page or resource is not found.
 *
 * @package constra
 */
?>

<?php
    $error_page_heading = get_theme_mod('constra_error_page_heading','404');
    $error_page_sub_heading = get_theme_mod('constra_error_page_sub_heading','Ops! PAGE NOT FOUND...');
    $error_page_description = get_theme_mod('constra_error_page_description','Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolor voluptatum dolores veritatis provident reiciendis doloremque non autem soluta qui? Repudiandae, vel.');
    $error_page_btn_text = get_theme_mod('constra_error_page_button_text','Back to Home');
    $error_page_btn_url = get_theme_mod('constra_error_page_bar_button_url', '#');
?>

<!-- Calling header section -->
<?php get_header(); ?>

<section id="main-container" class="main-container">
  <div class="container">

    <div class="row">

      <div class="col-12">
        <div class="error-page text-center">
          <div class="error-code">
            <h2><strong><?php echo esc_html__($error_page_heading, 'constra'); ?></strong></h2>
          </div>
          <div class="error-message">
            <h3><?php echo esc_html__($error_page_sub_heading, 'constra'); ?></h3>
          </div>
          <div class="error-body"><?php echo esc_html__($error_page_description, 'constra'); ?><br>
            <a href="<?php echo esc_url($error_page_btn_url); ?>" class="btn btn-primary"><?php echo esc_html__($error_page_btn_text, 'constra'); ?></a>
          </div>
        </div>
      </div>

    </div><!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<!-- Calling footer section -->
<?php get_footer(); ?>