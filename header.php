<?php
/**
 * The header of the Constra theme.
 *
 * This file serves as the header template for Constra WordPress theme.
 * It contains the opening HTML document structure, <head> section, and
 * the beginning of the <body> section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Constra
 * @subpackage Template
 * @since 1.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php if (is_singular() && pings_open( get_queried_object() ) ) : ?>
    <?php endif; ?>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
    <meta name="generator" content="<?php echo esc_attr( 'WordPress ' . get_bloginfo( 'version' ) ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="body-inner">
        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <ul class="top-info text-center text-md-left">
                            <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">9051 Constra Incorporate, USA</p>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top info end -->

                    <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                    <ul class="list-unstyled">
                        <li>
                            <a title="Facebook" href="https://facebbok.com/themefisher.com">
                                <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                            </a>
                            <a title="Twitter" href="https://twitter.com/themefisher.com">
                                <span class="social-icon"><i class="fab fa-twitter"></i></span>
                            </a>
                            <a title="Instagram" href="https://instagram.com/themefisher.com">
                                <span class="social-icon"><i class="fab fa-instagram"></i></span>
                            </a>
                            <a title="Linkdin" href="https://github.com/themefisher.com">
                                <span class="social-icon"><i class="fab fa-github"></i></span>
                            </a>
                        </li>
                    </ul>
                    </div>
                    <!--/ Top social end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </div>
        <!--/ Topbar end -->
        <!-- Header start -->
        <header id="header" class="header-one">
            <div class="bg-white">
                <div class="container">
                    <div class="logo-area">
                        <div class="row align-items-center">
                        <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                            <a class="d-block" href="index.html">
                                <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="Constra">
                            </a>
                        </div><!-- logo end -->

                        <div class="col-lg-9 header-right">
                            <ul class="top-info-box">
                                <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Call Us</p>
                                        <p class="info-box-subtitle">(+9) 847-291-4353</p>
                                    </div>
                                </div>
                                </li>
                                <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Email Us</p>
                                        <p class="info-box-subtitle">office@Constra.com</p>
                                    </div>
                                </div>
                                </li>
                                <li class="last">
                                <div class="info-box last">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Global Certificate</p>
                                        <p class="info-box-subtitle">ISO 9001:2017</p>
                                    </div>
                                </div>
                                </li>
                                <li class="header-get-a-quote">
                                <a class="btn btn-primary" href="contact.html">Get A Quote</a>
                                </li>
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