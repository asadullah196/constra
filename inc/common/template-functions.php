<?php

// All Constra template parts calling function

// Header template calling
function constra_header(){

    $header_default_style = get_theme_mod( 'constra_header_setting', 'constra-header-1' );

    if($header_default_style == 'constra-header-1'){
        get_template_part( 'inc/template-parts/header/top-bar' );
        get_template_part( 'inc/template-parts/header/header-1' );
    }
    elseif($header_default_style == 'constra-header-2'){
        get_template_part( 'inc/template-parts/header/top-bar' );
        get_template_part( 'inc/template-parts/header/header-2' );
    }
}

// Footer template calling
function constra_footer(){

    $footer_default_style = get_theme_mod( 'constra_footer_setting', 'constra-footer-1' );

    if($footer_default_style == 'constra-footer-1'){
        get_template_part( 'inc/template-parts/footer/footer-1' );
    }
    elseif($footer_default_style == 'constra-footer-2'){
        get_template_part( 'inc/template-parts/footer/footer-2' );
    }
}

// Constra header section logo
function constra_header_logo(){
    $header_section_logo = get_theme_mod('constra_header_logo', get_template_directory_uri() . '/assets/images/Logo.png');
	if( !empty($header_section_logo) ) : ?>
        <a class="d-block" href="<?php echo esc_url(home_url('/')); ?>">
            <img loading="lazy" src="<?php echo esc_url($header_section_logo); ?>" alt="Constra">
        </a>
	<?php else : ?>
        <a class="d-block" href="<?php echo esc_url(home_url('/')); ?>">
            <p><?php bloginfo('name'); ?></p>
        </a>
	<?php endif;	
}


// Constra primary menu
function constra_primary_menus(){
    wp_nav_menu( 
        array( 
            'theme_location'  => 'primary-menu',
			'container_class' => 'collapse navbar-collapse', // div class, make it false to avoid div generation
			'container_id'    => 'navbar-collapse', // div id
            'menu_class'      => 'nav navbar-nav mr-auto', // Ul class
            'menu_id'         => '', // ul id
            'fallback_cb'     => 'Constra_Walker_Nav_Menu::fallback',
            'walker'     	  => new Constra_Walker_Nav_Menu,
			'depth'           => 4,
        ) 
    ); 
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function constra_widgets_init() {

	// Sidebar widget

	// All footer widgets
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1 - Top Left', 'constra' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'constra' ),
			'before_widget' => '<div id="%1$s" class="col-lg-4 col-md-6 footer-widget footer-about %2$s">',
			'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2 - Top Center', 'constra' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'constra' ),
			'before_widget' => '<div id="%1$s" class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0 %2$s">',
			'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3 - Top Right', 'constra' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'constra' ),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget %2$s">',
			'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 4 - Bottom Right', 'constra' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'constra' ),
			'before_widget' => '<div id="%1$s" class="footer-menu text-center text-md-right %2$s">',
			'after_widget'  => '</div>',
		)
	);
}
add_action( 'widgets_init', 'constra_widgets_init' );

// Constra copyright
function constra_copyright(){
    $copyright_text = get_theme_mod('constra_copyright_text','Copyright © 2024, Designed & Developed by Themefisher');

    if( !empty($copyright_text) ) : ?>
        <div class="copyright-info">
            <span><?php echo wp_kses_post($copyright_text); ?></span>
        </div>
	<?php else : ?>
        <div class="copyright-info">
            <span><p>Copyright &copy; Designed &amp; Developed by <a href="https://sapwp.com">Sapwp</a></p></span>
        </div>
	<?php endif;	
}

// Constra blog navigation 
function constra_navigation(){
    $pages = paginate_links( array( 
        'type' => 'array',
        'prev_text'    => __('<i class="fas fa-angle-double-left"></i> Prev'),
        'next_text'    => __('Next <i class="fas fa-angle-double-right"></i>'),
    ) );
        if( $pages ) {
        echo '<nav class="paging" aria-label="Page navigation example"><ul class="pagination">';
        foreach ( $pages as $page ) {
            echo "<li>$page</li>";
        }
        echo '</ul></nav>';
    }
}
