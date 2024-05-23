<!-- Post meta starts -->
<div class="post-meta">
    <span class="post-author">
        <i class="far fa-user"></i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> <?php the_author(); ?></a>
    </span>
    <span class="post-cat">
        <i class="far fa-folder-open"></i>
        <?php 
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
                foreach ( $categories as $category ) {
                    echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
                    // Add a separator between categories, except for the last one
                    if (end($categories) !== $category) {
                        echo ', ';
                    }
                }
            }
        ?>
    </span>
    <span class="post-meta-date">
        <i class="far fa-calendar"></i><?php echo get_the_date(); ?>
    </span>
    <span class="post-comment">
        <i class="far fa-comment"></i> 
        <?php
            $comments_number = get_comments_number();
            $comments_text = ($comments_number == 0) ? 'Comment' : 'Comments';
        ?>
        <?php echo esc_html($comments_number); ?>
        <a href="<?php comments_link(); ?>" class="comments-link">
            <?php echo esc_html($comments_text); ?>
        </a>
    </span>

</div>
<!-- Post meta ends -->