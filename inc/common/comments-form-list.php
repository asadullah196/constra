<?php 


// wordpress commnets form  start
function custom_comment_form_fields($fields) {
    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');

    $fields = array(
        'author' => '<div class="row"><div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6"><div  class="form-group"><input class="form-control" type="text" name="author" id="author" placeholder="' . esc_attr__('Name*', 'harry') . '" value="' . esc_attr($commenter['comment_author']) . '" ' . ($req ? 'required' : '') . '></div>
     </div>',
        'email' => '<div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
        <div class="form-group">
           <input class="form-control" type="email" name="email" id="email" placeholder="' . esc_attr__('Email', 'harry') . '" value="' . esc_attr($commenter['comment_author_email']) . '" ' . ($req ? 'required' : '') . '>
        </div>
     </div>',
        'url' => '<div class="col-xxl-4 col-xl-4 col-lg-12">
        <div class="form-group">
           <input class="form-control" type="text" name="url" id="url" placeholder="' . esc_attr__('Website', 'harry') . '" value="' . esc_attr($commenter['comment_author_url']) . '">
        </div>
     </div></div>',
    );

    return $fields;
}
add_filter('comment_form_default_fields', 'custom_comment_form_fields');

// Customize the comment form textarea
function custom_comment_form_comment($comment_field) {
    $comment_field = '<div class="col-xxl-12">
    <div class="form-group">
       <textarea class="form-control required-field" id="comment" name="comment" placeholder="' . esc_attr__('Your Comment Here...', 'harry') . '" required></textarea>
    </div>
 </div>';

    return $comment_field;
}

add_filter('comment_form_field_comment', 'custom_comment_form_comment');




// Move the comment textarea to the bottom
function move_comment_textarea_to_bottom($fields) {
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;

    return $fields;
}

add_action('comment_form_fields', 'move_comment_textarea_to_bottom');


// Customize the comment form checkbox
function custom_comment_form_agree($fields) {
    $fields['cookies'] = '<div class="col-xxl-12"><div class="postbox__comment-agree align-items-start mb-25">' .
        '<input class="e-check-input" type="checkbox" id="e-agree" name="wp-comment-agree" value="1" checked> ' .
        '<label class="e-check-label" for="e-agree">' . esc_html__('Save my name, email, and website in this browser for the next time I comment.', 'harry') . '</label></div></div>';

    return $fields;
}

add_filter('comment_form_fields', 'custom_comment_form_agree');

// Customize the submit button
function custom_comment_form_submit_button($submit_button) {
    $submit_button = '<div class="col-xxl-12">
    <div class="postbox__comment-btn">
       <button type="submit" class="btn btn-primary">' . esc_html__('Submit Comment', 'harry') . '</button>
    </div>
 </div>';

    return $submit_button;
}

add_filter('comment_form_submit_button', 'custom_comment_form_submit_button');
// comments for end 




// custom_comment_list
function custom_comment_list($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;

    if ($comment->comment_type == 'pingback' || $comment->comment_type == 'trackback') {
        // Display pingbacks and trackbacks differently if needed
        ?>
        <li class="pingback">
            <p><?php esc_html_e('Pingback:', 'harry'); ?> <?php comment_author_link(); ?></p>
        </li>
        <?php
    } else {
        // Display regular comments
        ?>
        <li <?php comment_class('comment'); ?> id="comment-<?php comment_ID(); ?>">
                <div class="postbox__comment-box d-sm-flex align-items-start">
                    <div class="postbox__comment-info">
                        <div class="postbox__comment-avater">
                            <?php echo get_avatar($comment, 80); ?>
                        </div>
                    </div>
                    <div class="postbox__comment-text ">
                        <div class="postbox__comment-name">
                            <span class="post-meta"> <?php comment_date(); ?></span>
                            <h5><?php comment_author(); ?></h5>
                        </div>
                        <?php if ($comment->comment_approved == '0') : ?>
                            <p><?php esc_html_e('Your comment is awaiting moderation.', 'harry'); ?></p>
                        <?php endif; ?>
                        <?php comment_text(); ?>
                        <div class="postbox__comment-reply">
                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                        </div>
                    </div>
                </div>
        <?php
    }
}

// Use the custom callback for wp_list_comments
function custom_comments_list_args($args) {
    $args['callback'] = 'custom_comment_list';
    return $args;
}

add_filter('wp_list_comments_args', 'custom_comments_list_args');