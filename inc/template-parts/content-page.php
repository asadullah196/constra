<div id="post-<?php the_id(); ?>" <?php post_class('post-content post-single constra-regular-full-blog'); ?>>
    <?php if(has_post_thumbnail()) : ?>
    <div class="post-media post-image">
        <img loading="lazy" src="<?php echo esc_html(the_post_thumbnail_url()); ?>" class="img-fluid" alt="post-image">
    </div>
    <?php endif; ?>
    <div class="post-body">
        <div class="entry-content">
            <?php the_content( ); ?>
        </div>
    </div><!-- post-body end -->
</div><!-- post content end -->
