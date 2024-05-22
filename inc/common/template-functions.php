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