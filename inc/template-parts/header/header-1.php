<?php
    // header section
    $header_section_phone_label = get_theme_mod('constra_header_calling_label', 'Call Us');
    $header_section_phone_number = get_theme_mod('constra_header_calling_number', '(+9) 847-291-4353');
    $header_section_email_label = get_theme_mod('constra_header_email_label', 'Email Us');
    $header_section_email_address = get_theme_mod('constra_header_email_address', 'office@Constra.com');
    $header_section_iso_label = get_theme_mod('constra_header_iso_label', 'Global Certificate');
    $header_section_iso_number = get_theme_mod('constra_header_iso_number', 'ISO 9001:2017');
    $header_section_button_text = get_theme_mod('constra_header_button_text', 'Get A Quote');
    $header_section_button_url = get_theme_mod('constra_top_bar_button_url', '#');
?>

<!-- Header start -->
<header id="header" class="header-one">
    <div class="bg-white">
        <div class="container">
            <div class="logo-area">
                <div class="row align-items-center">
                <!-- logo start -->
                <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                    <?php constra_header_logo(); ?>
                </div>
                <!-- logo end -->
                <div class="col-lg-9 header-right">
                    <ul class="top-info-box">
                        <?php if(!empty($header_section_phone_number)) : ?>
                        <li>
                            <div class="info-box">
                                <div class="info-box-content">
                                    <p class="info-box-title"><?php echo esc_html__($header_section_phone_label); ?></p>
                                    <p class="info-box-subtitle"><?php echo esc_html__($header_section_phone_number); ?></p>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php if(!empty($header_section_email_address)) : ?>
                        <li>
                            <div class="info-box">
                                <div class="info-box-content">
                                    <p class="info-box-title"><?php echo esc_html__($header_section_email_label); ?></p>
                                    <p class="info-box-subtitle"><?php echo esc_html__($header_section_email_address); ?></p>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php if(!empty($header_section_iso_number)) : ?>
                        <li class="last">
                            <div class="info-box last">
                                <div class="info-box-content">
                                    <p class="info-box-title"><?php echo esc_html__($header_section_iso_label); ?></p>
                                    <p class="info-box-subtitle"><?php echo esc_html__($header_section_iso_number); ?></p>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php if (!empty($header_section_button_text) && !empty($header_section_button_url)) : ?>
                        <li class="header-get-a-quote">
                            <a class="btn btn-primary" href="<?php echo esc_url($header_section_button_url); ?>">
                                <?php echo esc_html($header_section_button_text); ?>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul><!-- Ul end -->
                </div><!-- header right end -->
                </div><!-- logo area end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </div>

    <div class="site-navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                            <li class="active"><a href="index.html">Home One</a></li>
                            <li><a href="index-2.html">Home Two</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="team.html">Our People</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            </ul>
                        </li>
                
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Projects <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="projects.html">Projects All</a></li>
                            <li><a href="projects-single.html">Projects Single</a></li>
                            </ul>
                        </li>
                
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="services.html">Services All</a></li>
                            <li><a href="service-single.html">Services Single</a></li>
                            </ul>
                        </li>
                
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="404.html">404</a></li>
                            <li class="dropdown-submenu">
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Parent Menu</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#!">Child Menu 1</a></li>
                                    <li><a href="#!">Child Menu 2</a></li>
                                    <li><a href="#!">Child Menu 3</a></li>
                                </ul>
                            </li>
                            </ul>
                        </li>
                
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                            <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
                            <li><a href="news-single.html">News Single</a></li>
                            </ul>
                        </li>
                
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                </div>
                </nav>
            </div>
            <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <div class="nav-search">
            <span id="search"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->

        <div class="search-block" style="display: none;">
            <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
            </label>
            <span class="search-close">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
</header>
<!--/ Header end -->