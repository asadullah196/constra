<?php
    $display_blog_description = get_theme_mod('constra_blog_single_description_words', 50 );
    $single_blog_button_text = get_theme_mod('constra_blog_single_button_text', 'Read More' );
?>

<?php if(is_single()) :  ?>

    <div id="post-<?php the_id(); ?>" <?php post_class('post-content post-single constra-regular-full-blog'); ?>>
        <?php if(has_post_thumbnail()) : ?>
        <div class="post-media post-image">
            <img loading="lazy" src="<?php echo esc_html(the_post_thumbnail_url()); ?>" class="img-fluid" alt="post-image">
        </div>
        <?php endif; ?>
        <div class="post-body">
            <div class="entry-header">
                <?php echo get_template_part('inc/template-parts/blog/post-meta'); ?>
                <h2 class="entry-title"><?php the_title(); ?></h2>
            </div><!-- header end -->

            <div class="entry-content">
                <?php the_content( ); ?>
            </div>

            <div class="tags-area d-flex align-items-center justify-content-between">
                <div class="post-tags">
                    <a href="#">Construction</a>
                    <a href="#">Safety</a>
                    <a href="#">Planning</a>
                </div>
                <div class="share-items">
                    <ul class="post-social-icons list-unstyled">
                        <li class="social-icons-head">Share:</li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- post-body end -->
    </div><!-- post content end -->

<?php else : ?>
    <!-- archive post starts -->
    <div id="post-<?php the_id(); ?>" <?php post_class('post constra-content-regular'); ?>>
        <?php if(has_post_thumbnail()) : ?>
            <div class="post-media post-image">
                <img loading="lazy" src="<?php echo esc_html(the_post_thumbnail_url()); ?>" class="img-fluid" alt="post-image">
            </div>
        <?php endif; ?>
        <div class="post-body">
            <div class="entry-header">
                <?php echo get_template_part('inc/template-parts/blog/post-meta'); ?>  
                <h2 class="entry-title">
                    <a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a>
                </h2>
            </div><!-- header end -->
            <div class="entry-content">
                <p>
                    <?php 
                        $post_content = get_the_content();
                        $word_limit = !empty($display_blog_description) ? $display_blog_description : 40;
                        $trimmed_content = wp_trim_words($post_content, $word_limit);
                        echo $trimmed_content;
                    ?>
                </p>
            </div>
            <div class="post-footer">
                <a href="<?php the_permalink( ); ?>" class="btn btn-primary"><?php echo esc_html__($single_blog_button_text); ?></a>
            </div>
        </div><!-- post-body end -->
    </div>
    <!-- archive post end -->
<?php endif; ?>