<?php

// All Constra template parts calling function

// Header template calling
function constra_header(){

    get_template_part( 'inc/template-parts/header/top-bar' );
    get_template_part( 'inc/template-parts/header/header-1' );
    
/*
    $header_default_style = get_theme_mod( 'constra_header_setting', 'constra-header-1' );

    if($header_default_style == 'constra-header-1'){
        get_template_part( 'inc/template-parts/header/top-bar' );
        get_template_part( 'inc/template-parts/header/header-1' );
    }
    elseif($header_default_style == 'constra-header-2'){
        get_template_part( 'inc/template-parts/header/top-bar' );
        get_template_part( 'inc/template-parts/header/header-1' );
    }

    */
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