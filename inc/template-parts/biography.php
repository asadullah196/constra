<?php 
    // Get the post author ID
    $author_id = get_the_author_meta('ID');

    // Get the author's avatar
    $author_avatar =  80;

    // Get the author's name
    $author_name = get_the_author_meta('display_name');

    // Get the author's website address
    $author_url = get_the_author_meta('user_url'); 

    // Get the author's bio/description
    $author_bio = get_the_author_meta('description');

    // Get info with ACF plugin
    $author_designation = function_exists('get_field') ? get_field('author_designation', 'user_' . $author_id) : null;
    $facebook_url = function_exists('get_field') ? get_field('author_facebook', 'user_' . $author_id) : null;
    $twitter_url = function_exists('get_field') ? get_field('author_twitter', 'user_' . $author_id) : null;
    $linkedin_url = function_exists('get_field') ? get_field('author_linkedin', 'user_' . $author_id) : null;

    //$text = get_field('author_facebook');
?>

<div class="author-box d-nlock d-sm-flex">
    <div class="author-img mb-4 mb-md-0">
        <a href="<?php echo esc_url(get_author_posts_url($author_id)); ?>">
            <?php echo get_avatar( get_the_author_meta( 'user_email' ), $author_avatar, '', '', [ 'class' => '' ] );?>
        </a>
        </div>
        <div class="author-info">
        <h3><?php echo esc_html($author_name, 'constra'); ?>
        
        <?php if(!empty($author_designation)) : ?>
            <span><?php echo esc_html__($author_designation, 'constra'); ?></span>
        <?php endif; ?>

        </h3>
        <p class="mb-2"><?php echo esc_html($author_bio); ?></p>

        <?php if(!empty($author_url)) : ?>
        <p class="author-url mb-0"><?php esc_html__('Website: ','constra'); ?><span><a href="<?php echo esc_url($author_url); ?>"><?php echo esc_html__($author_url); ?></a></span></p>
        <?php endif; ?>

        <?php if(!empty($facebook_url) or !empty($twitter_url) or !empty($linkedin_url)) : ?>
        <ul class="post-social-icons list-unstyled">
            <li class="social-icons-head"><?php echo esc_html__('Authors Social:','constra'); ?></li>
            <?php if(!empty($facebook_url)) : ?>
                <li><a href="<?php echo esc_url($facebook_url); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($twitter_url)) : ?>
                <li><a href="<?php echo esc_url($twitter_url); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($linkedin_url)) : ?>
                <li><a href="<?php echo esc_url($linkedin_url); ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            <?php endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</div> <!-- Author box end -->