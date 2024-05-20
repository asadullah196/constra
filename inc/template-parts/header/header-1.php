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

    <?php get_template_part( 'inc/template-parts/header/nav-menu' ); ?>
</header>
<!--/ Header end -->