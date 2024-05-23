<?php
    $display_blog_description = get_theme_mod('constra_blog_single_description_words', 50 );
    $single_blog_button_text = get_theme_mod('constra_blog_single_button_text', 'Read More' );

    // Video URL
    $video_url = get_field('add_url_here');
    $video_url = wp_oembed_get($video_url);
?>

<!-- archive post starts -->
<div id="post-<?php the_id(); ?>" <?php post_class('post constra-content-video'); ?>>

    <?php if (!empty($video_url)) : ?>
    <div class="post-media post-video">
        <div class="embed-responsive embed-responsive-16by9">
            <!-- Change the url -->
            <?php echo $video_url; ?>
        </div>
    </div>
    <?php endif; ?>

    <?php if (empty($video_url) && has_post_thumbnail()) : ?>
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