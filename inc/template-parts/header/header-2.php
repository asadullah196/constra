<?php
    // header section
    $header_section_button_text = get_theme_mod('constra_header_button_text', 'Get A Quote');
    $header_section_button_url = get_theme_mod('constra_top_bar_button_url', '#');
?>

<!-- Header start -->
<header id="header" class="header-two">
    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                    
                    <div class="logo">
                        <?php constra_header_logo(); ?>
                    </div><!-- logo end -->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="center-menu">
                        <?php constra_primary_menus(); ?>
                    </div>

                    <?php if (!empty($header_section_button_text) && !empty($header_section_button_url)) : ?>
                    <div class="get-quote">
                        <li class="header-get-a-quote">
                            <a class="btn btn-primary" href="<?php echo esc_url($header_section_button_url); ?>"><?php echo esc_html($header_section_button_text); ?></a>
                        </li>
                    </div>
                    <?php endif; ?>
                    </nav>
                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->
        </div>
    <!--/ Container end -->
    </div>
    <!--/ Navigation end -->
</header>
<!--/ Header end -->