<?php
    $display_blog_description = get_theme_mod('constra_blog_single_description_words', 50 );
?>
<!-- archive post starts -->
<div class="post">
    <div class="post-media post-image">
    <?php if( !empty(get_the_post_thumbnail_url() ) ) : ?>
        <img loading="lazy" src="<?php echo esc_html(get_the_post_thumbnail_url()); ?>" class="img-fluid" alt="post-image">
    <?php endif; ?>
    </div>
    <div class="post-body">
        <div class="entry-header">
            <div class="post-meta">
                <span class="post-author">
                    <i class="far fa-user"></i><a href="#"> Admin</a>
                </span>
                <span class="post-cat">
                    <i class="far fa-folder-open"></i><a href="#"> News</a>
                </span>
                <span class="post-meta-date"><i class="far fa-calendar"></i> June 14, 2016</span>
                <span class="post-comment"><i class="far fa-comment"></i> 03<a href="#"
                    class="comments-link">Comments</a></span>
            </div>
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
            <a href="news-single.html" class="btn btn-primary">Continue Reading</a>
        </div>
    </div><!-- post-body end -->
</div>
<!-- archive post end -->