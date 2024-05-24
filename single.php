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
          <?php echo get_template_part( 'inc/template-parts/content' , get_post_format() ); ?>
        <?php endwhile; ?>
      <?php endif; ?>

        <div class="relates-post">
            <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <div class="card mb-4">
                          <div class="card-body">
                              <a href="#">
                                <p class="card-text">Previous blog</p>
                                <h5 class="card-title"><i class="fas fa-angle-double-left"></i> How To Create An Effective Event Budget</h5>
                            </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="card mb-4">
                          <div class="card-body">
                            <a href="#">
                                <p class="card-text">Next blog</p>
                                <h5 class="card-title">Basic SEO Optimization For Restaurant Website <i class="fas fa-angle-double-right"></i> </h5>
                            </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>

        <div class="author-box d-nlock d-sm-flex">
          <div class="author-img mb-4 mb-md-0">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/avator1.png" alt="author">
          </div>
          <div class="author-info">
            <h3>Elton Themen<span>Site Engineer</span></h3>
            <p class="mb-2">Lisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad vene minim
              veniam, quis nostrud exercitation nisi ex ea commodo.</p>
            <p class="author-url mb-0">Website: <span><a href="#">http://www.example.com</a></span></p>

          </div>
        </div> <!-- Author box end -->

        <!-- Post comment start -->
        <div id="comments" class="comments-area">
          <h3 class="comments-heading">07 Comments</h3>

          <ul class="comments-list">
            <li>
              <div class="comment d-flex">
                <img loading="lazy" class="comment-avatar" alt="author" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/avator1.png">
                <div class="comment-body">
                  <div class="meta-data">
                    <span class="comment-author mr-3">Michelle Aimber</span>
                    <span class="comment-date float-right">January 17, 2016 at 1:38 pm</span>
                  </div>
                  <div class="comment-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p>
                  </div>
                  <div class="text-left">
                    <a class="comment-reply font-weight-bold" href="#">Reply</a>
                  </div>
                </div>
              </div><!-- Comments end -->

              <ul class="comments-reply">
                <li>
                  <div class="comment d-flex">
                    <img loading="lazy" class="comment-avatar" alt="author" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/avator2.png">
                    <div class="comment-body">
                      <div class="meta-data">
                        <span class="comment-author mr-3">Tom Harnandez</span>
                        <span class="comment-date float-right">January 17, 2016 at 1:38 pm</span>
                      </div>
                      <div class="comment-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                          laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p>
                      </div>
                      <div class="text-left">
                        <a class="comment-reply font-weight-bold" href="#">Reply</a>
                      </div>
                    </div>
                  </div><!-- Comments end -->
                </li>
              </ul><!-- comments-reply end -->
              <div class="comment d-flex last">
                <img loading="lazy" class="comment-avatar" alt="author" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/avator3.png">
                <div class="comment-body">
                  <div class="meta-data">
                    <span class="comment-author mr-3">Genelia Dusteen</span>
                    <span class="comment-date float-right">January 17, 2016 at 1:38 pm</span>
                  </div>
                  <div class="comment-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p>
                  </div>
                  <div class="text-left">
                    <a class="comment-reply font-weight-bold" href="#">Reply</a>
                  </div>
                </div>
              </div><!-- Comments end -->
            </li><!-- Comments-list li end -->
          </ul><!-- Comments-list ul end -->
        </div><!-- Post comment end -->

        <div class="comments-form border-box">
          <h3 class="title-normal">Add a comment</h3>

          <form role="form">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="message"><textarea class="form-control required-field" id="message" placeholder="Your Comment" rows="10" required></textarea></label>
                </div>
              </div><!-- Col 12 end -->

              <div class="col-md-4">
                <div class="form-group">
                  <label for="name"><input class="form-control" name="name" id="name" placeholder="Your Name" type="text" required></label>
                </div>
              </div><!-- Col 4 end -->

              <div class="col-md-4">
                <div class="form-group">
                  <label for="email"><input class="form-control" name="email" id="email" placeholder="Your Email" type="email" required></label>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="website"><input class="form-control" id="website" placeholder="Your Website" type="text" required></label>
                </div>
              </div>

            </div><!-- Form row end -->
            <div class="clearfix">
              <button class="btn btn-primary" type="submit" aria-label="post-comment">Post Comment</button>
            </div>
          </form><!-- Form end -->
        </div><!-- Comments form end -->
      </div><!-- Content Col end -->

      <div class="col-lg-4">

        <div class="sidebar sidebar-right">
          <div class="widget recent-posts">
            <h3 class="widget-title">Recent Posts</h3>
            <ul class="list-unstyled">
              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="img" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news1.jpg"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="#">We Just Completes $17.6 Million Medical Clinic In Mid-missouri</a>
                  </h4>
                </div>
              </li><!-- 1st post end-->

              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="img" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news2.jpg"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="#">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
                  </h4>
                </div>
              </li><!-- 2nd post end-->

              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="img" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news3.jpg"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="#">Silicon Bench And Cornike Begin Construction Solar Facilities</a>
                  </h4>
                </div>
              </li><!-- 3rd post end-->

            </ul>

          </div><!-- Recent post end -->

          <div class="widget">
            <h3 class="widget-title">Categories</h3>
            <ul class="arrow nav nav-tabs">
              <li><a href="#">Construction</a></li>
              <li><a href="#">Commercial</a></li>
              <li><a href="#">Building</a></li>
              <li><a href="#">Safety</a></li>
              <li><a href="#">Structure</a></li>
            </ul>
          </div><!-- Categories end -->

          <div class="widget">
            <h3 class="widget-title">Archives </h3>
            <ul class="arrow nav nav-tabs">
              <li><a href="#">Feburay 2016</a></li>
              <li><a href="#">January 2016</a></li>
              <li><a href="#">December 2015</a></li>
              <li><a href="#">November 2015</a></li>
              <li><a href="#">October 2015</a></li>
            </ul>
          </div><!-- Archives end -->

          <div class="widget widget-tags">
            <h3 class="widget-title">Tags </h3>

            <ul class="list-unstyled">
              <li><a href="#">Construction</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Project</a></li>
              <li><a href="#">Building</a></li>
              <li><a href="#">Finance</a></li>
              <li><a href="#">Safety</a></li>
              <li><a href="#">Contracting</a></li>
              <li><a href="#">Planning</a></li>
            </ul>
          </div><!-- Tags end -->


        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

    </div><!-- Main row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->
<?php get_footer(); ?>