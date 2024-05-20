<?php

    // Tob bar status
    $top_bar_status= get_theme_mod('constra_top_bar_switch', true);

    // Top bar content
    $top_bar_call = get_theme_mod('constra_top_bar_call', '+132 469 587');
    $top_bar_email = get_theme_mod('constra_top_bar_email', 'hello@constra.com');
    $top_bar_address = get_theme_mod('constra_top_bar_location', '9051 Constra Incorporate, USA');

    // Top bar social media
    $top_bar_facebook = get_theme_mod('constra_top_bar_facebook_switch', true);
    $top_bar_facebook_url = get_theme_mod('constra_top_bar_facebook_url', '#');
    $top_bar_x = get_theme_mod('constra_top_bar_twitter_switch', true);
    $top_bar_x_url = get_theme_mod('constra_top_bar_twitter_url', '#');
    $top_bar_instagram = get_theme_mod('constra_top_bar_instagram_switch', true);
    $top_bar_instagram_url = get_theme_mod('constra_top_bar_instagram_url', '#');
    $top_bar_linkedin = get_theme_mod('constra_top_bar_linkedin_switch', false);
    $top_bar_linkedin_url = get_theme_mod('constra_top_bar_linkedin_url', '');
    $top_bar_youtube = get_theme_mod('constra_top_bar_youtube_switch', false);
    $top_bar_youtube_url = get_theme_mod('constra_top_bar_youtube_url', '');
    $top_bar_other = get_theme_mod('constra_top_bar_others_switch', false);
    $top_bar_other_url = get_theme_mod('constra_top_bar_others_url', '');
    
?>

<!--/ Top bar end -->
<?php if ($top_bar_status == true ) : ?>
<div id="top-bar" class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <?php if(!empty($top_bar_call)) : ?>
                        <li><i class="fas fa-qrcode"></i><p class="info-text"><a href="tel:<?php echo esc_url($top_bar_call); ?>"><?php echo esc_html__($top_bar_call); ?></a></p>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($top_bar_email)) : ?>
                    <li><i class="fas fa-user-plus"></i><p class="info-text"><a href="mailto:<?php echo esc_url($top_bar_email); ?>"><?php echo esc_html__($top_bar_email); ?></a></p>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($top_bar_address)) : ?>
                    <li><i class="fas fa-map-marker-alt"></i><p class="info-text"><?php echo esc_html__($top_bar_address); ?></p>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <!--/ Top info end -->

            <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
            <ul class="list-unstyled">
                <li>
                    <?php if ($top_bar_facebook == true ) : ?>
                    <a title="Facebook" href="<?php echo esc_url($top_bar_facebook_url); ?>">
                        <span class="social-icon"><i class="fab fa-facebook-square"></i></span>
                    </a>
                    <?php endif; ?>
                    <?php if ($top_bar_x == true ) : ?>
                    <a title="Twitter" href="<?php echo esc_url($top_bar_x_url); ?>">
                        <span class="social-icon"><i class="fab fa-twitter-square"></i></span>
                    </a>
                    <?php endif; ?>
                    <?php if ($top_bar_instagram == true ) : ?>
                    <a title="Instagram" href="<?php echo esc_url($top_bar_instagram_url); ?>">
                        <span class="social-icon"><i class="fab fa-instagram-square"></i></span>
                    </a>
                    <?php endif; ?>
                    <?php if ($top_bar_linkedin == true ) : ?>
                    <a title="Linkdin" href="<?php echo esc_url($top_bar_linkedin_url); ?>">
                        <span class="social-icon"><i class="fab fa-linkedin"></i></span>
                    </a>
                    <?php endif; ?>
                    <?php if ($top_bar_youtube == true ) : ?>
                    <a title="YouTube" href="<?php echo esc_url($top_bar_youtube_url); ?>">
                        <span class="social-icon"><i class="fab fa-youtube"></i></span>
                    </a>
                    <?php endif; ?>
                    <?php if ($top_bar_other == true ) : ?>
                    <a title="Others" href="<?php echo esc_url($top_bar_other_url); ?>">
                        <span class="social-icon"><i class="fas fa-share-alt"></i></span>
                    </a>
                    <?php endif; ?>
                </li>
            </ul>
            </div>
            <!--/ Top social end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</div>
<?php endif; ?>
<!--/ Top bar end -->