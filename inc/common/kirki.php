<?php 

// Constra theme options
new \Kirki\Panel(
    'constra_theme_options',
    [
        'priority'      => 10,
        'title'         => esc_html__( 'Theme Options', 'constra' ),
        'description'   => esc_html__( 'Constra Options Panel', 'constra' ),
    ]
);

// Constra top bar info section
function constra_top_bar_info() {
    new \Kirki\Section(
        'constra_top_bar_info',
        [
            'title'       => esc_html__( 'Top Bar Info', 'constra' ),
            'description' => esc_html__( 'Top bar contact update options', 'constra' ),
            'panel'       => 'constra_theme_options',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'constra_top_bar_call',
            'label'    => esc_html__( 'Phone', 'constra' ),
            'section'  => 'constra_top_bar_info',
            'default'  => esc_html__( '+132 469 587', 'constra' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'constra_top_bar_email',
            'label'    => esc_html__( 'Email', 'constra' ),
            'section'  => 'constra_top_bar_info',
            'default'  => esc_html__( 'hello@constra.com', 'constra' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'constra_top_bar_location',
            'label'    => esc_html__( 'Location', 'constra' ),
            'section'  => 'constra_top_bar_info',
            'default'  => esc_html__( '9051 Constra Incorporate, USA', 'constra' ),
            'priority' => 10,
        ]
    );
}
constra_top_bar_info();


// Constra top bar social section
function constra_top_bar_social() {
    new \Kirki\Section(
        'constra_top_bar_social',
        [
            'title'       => esc_html__( 'Top Bar Social', 'constra' ),
            'description' => esc_html__( 'Control social info', 'constra' ),
            'panel'       => 'constra_theme_options',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'constra_top_bar_facebook_switch',
            'label'       => esc_html__( 'Facebook', 'constra' ),
            'section'     => 'constra_top_bar_social',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Show', 'constra' ),
                'off' => esc_html__( 'Hide', 'constra' ),
            ],
        ]
    );

	new \Kirki\Field\URL(
		[
			'settings' => 'constra_top_bar_facebook_url',
			'label'    => esc_html__( 'Facebook URL', 'constra' ),
			'section'  => 'constra_top_bar_social',
			'default'  => '#',
			'priority' => 10,
		]
	);
    
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'constra_top_bar_twitter_switch',
            'label'       => esc_html__( 'Twitter', 'constra' ),
            'section'     => 'constra_top_bar_social',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Show', 'constra' ),
                'off' => esc_html__( 'Hide', 'constra' ),
            ],
        ]
    );

	new \Kirki\Field\URL(
		[
			'settings' => 'constra_top_bar_twitter_url',
			'label'    => esc_html__( 'Twitter URL', 'constra' ),
			'section'  => 'constra_top_bar_social',
			'default'  => '#',
			'priority' => 10,
		]
	);
    
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'constra_top_bar_instagram_switch',
            'label'       => esc_html__( 'Instagram', 'constra' ),
            'section'     => 'constra_top_bar_social',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Show', 'constra' ),
                'off' => esc_html__( 'Hide', 'constra' ),
            ],
        ]
    );

	new \Kirki\Field\URL(
		[
			'settings' => 'constra_top_bar_instagram_url',
			'label'    => esc_html__( 'Instagram URL', 'constra' ),
			'section'  => 'constra_top_bar_social',
			'default'  => '#',
			'priority' => 10,
		]
	);
    
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'constra_top_bar_linkedin_switch',
            'label'       => esc_html__( 'LinkedIn', 'constra' ),
            'section'     => 'constra_top_bar_social',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Show', 'constra' ),
                'off' => esc_html__( 'Hide', 'constra' ),
            ],
        ]
    );

	new \Kirki\Field\URL(
		[
			'settings' => 'constra_top_bar_linkedin_url',
			'label'    => esc_html__( 'LinkedIn URL', 'constra' ),
			'section'  => 'constra_top_bar_social',
			'default'  => '',
			'priority' => 10,
		]
	);

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'constra_top_bar_youtube_switch',
            'label'       => esc_html__( 'YouTube', 'constra' ),
            'section'     => 'constra_top_bar_social',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Show', 'constra' ),
                'off' => esc_html__( 'Hide', 'constra' ),
            ],
        ]
    );

	new \Kirki\Field\URL(
		[
			'settings' => 'constra_top_bar_youtube_url',
			'label'    => esc_html__( 'YouTube URL', 'constra' ),
			'section'  => 'constra_top_bar_social',
			'default'  => '',
			'priority' => 10,
		]
	);
    
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'constra_top_bar_others_switch',
            'label'       => esc_html__( 'Others', 'constra' ),
            'section'     => 'constra_top_bar_social',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Show', 'constra' ),
                'off' => esc_html__( 'Hide', 'constra' ),
            ],
        ]
    );

	new \Kirki\Field\URL(
		[
			'settings' => 'constra_top_bar_others_url',
			'label'    => esc_html__( 'Others URL', 'constra' ),
			'section'  => 'constra_top_bar_social',
			'default'  => '',
			'priority' => 10,
		]
	);
}
constra_top_bar_social();

// Constra header section
function constra_header_section() {
    new \Kirki\Section(
        'constra_header_section',
        [
            'title'       => esc_html__( 'Header Options', 'constra' ),
            'description' => esc_html__( 'Control different theme section', 'constra' ),
            'panel'       => 'constra_theme_options',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' 		=> 'constra_header_logo',
            'label'    		=> esc_html__( 'Header Logo', 'constra' ),
			'description' 	=> esc_html__( 'The saved photo will be your logo', 'constra' ),
            'section'  		=> 'constra_header_section',
            'default'  		=> get_template_directory_uri() . '/assets/images/logo.png',
			'priority'    	=> 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'constra_header_calling_label',
            'label'    => esc_html__( 'Phone Label', 'constra' ),
            'section'  => 'constra_header_section',
            'default'  => esc_html__( 'Call Us', 'constra' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'constra_header_calling_number',
            'label'    => esc_html__( 'Phone Number', 'constra' ),
            'section'  => 'constra_header_section',
            'default'  => esc_html__( '(+9) 847-291-4353', 'constra' ),
            'priority' => 10,
        ]
    );
        
    new \Kirki\Field\Text(
        [
            'settings' => 'constra_header_email_label',
            'label'    => esc_html__( 'Email Label', 'constra' ),
            'section'  => 'constra_header_section',
            'default'  => esc_html__( 'Email Us', 'constra' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'constra_header_email_address',
            'label'    => esc_html__( 'Email Address', 'constra' ),
            'section'  => 'constra_header_section',
            'default'  => esc_html__( 'office@Constra.com', 'constra' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'constra_header_iso_label',
            'label'    => esc_html__( 'ISO Label', 'constra' ),
            'section'  => 'constra_header_section',
            'default'  => esc_html__( 'Global Certificate', 'constra' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'constra_header_iso_number',
            'label'    => esc_html__( 'ISO Number', 'constra' ),
            'section'  => 'constra_header_section',
            'default'  => esc_html__( 'ISO 9001:2017', 'constra' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'constra_header_button_text',
            'label'    => esc_html__( 'Button Text', 'constra' ),
            'section'  => 'constra_header_section',
            'default'  => esc_html__( 'Get A Quote', 'constra' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\URL(
		[
			'settings' => 'constra_top_bar_button_url',
			'label'    => esc_html__( 'Button URL', 'constra' ),
			'section'  => 'constra_header_section',
			'default'  => '#',
			'priority' => 10,
		]
	);

}
constra_header_section();

// Constra breadcrumb section
function constra_breadcrumb_section() {
    new \Kirki\Section(
        'constra_breadcrumb_section',
        [
            'title'       => esc_html__( 'Breadcrumb', 'constra' ),
            'description' => esc_html__( 'Add breadcrumb background', 'constra' ),
            'panel'       => 'constra_theme_options',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' 		=> 'constra_breadcrumb_image',
            'label'    		=> esc_html__( 'Breadcrumb Background', 'constra' ),
			'description' 	=> esc_html__( 'The saved photo will be your breadcrumb background', 'constra' ),
            'section'  		=> 'constra_breadcrumb_section',
            'default'  		=> get_template_directory_uri() . '/assets/images/banner/banner1.jpg',
			'priority'    	=> 10,
        ]
    );

}
constra_breadcrumb_section();

// Constra theme copyright
function constra_theme_copyright_text() {
    new \Kirki\Section(
        'constra_theme_copyright_text',
        [
            'title'       => esc_html__( 'Copyright Text', 'constra' ),
            'description' => esc_html__( 'Add copyright text', 'constra' ),
            'panel'       => 'constra_theme_options',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'constra_copyright_text',
            'label'    => esc_html__( 'Copyright Message', 'constra' ),
            'section'  => 'constra_theme_copyright_text',
            'default'  => esc_html__( 'Copyright &copy; Designed &amp; Developed by <a href="https://sapwp.com">Sapwp</a>', 'constra' ),
            'priority' => 10,
        ]
    );

}
constra_theme_copyright_text();

// Constra theme settings
function constra_theme_settings() {
    new \Kirki\Section(
        'constra_theme_settings',
        [
            'title'       => esc_html__( 'Theme Settings', 'constra' ),
            'description' => esc_html__( 'Control different theme section', 'constra' ),
            'panel'       => 'constra_theme_options',
            'priority'    => 160,
        ]
    );

    // Set header style
    new \Kirki\Field\Select(
        [
            'settings'    => 'constra_header_setting',
            'label'       => esc_html__( 'Header Style', 'constra' ),
            'section'     => 'constra_theme_settings',
            'default'     => 'constra-header-1',
            'placeholder' => esc_html__( 'Choose a header style', 'constra' ),
            'choices'     => [
                'constra-header-1' => esc_html__( 'Style 1 - Menu with Info', 'constra' ),
                'constra-header-2' => esc_html__( 'Style 2 - Only Menu', 'constra' ),
            ],
        ]
    );

    // Set top info section
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'constra_top_bar_switch',
            'label'       => esc_html__( 'Top Info Bar', 'constra' ),
            'section'     => 'constra_theme_settings',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Show', 'constra' ),
                'off' => esc_html__( 'Hide', 'constra' ),
            ],
        ]
    );

    // Set footer style
    new \Kirki\Field\Select(
        [
            'settings'    => 'constra_footer_setting',
            'label'       => esc_html__( 'Footer Style', 'constra' ),
            'section'     => 'constra_theme_settings',
            'default'     => 'constra-footer-1',
            'placeholder' => esc_html__( 'Choose a footer style', 'constra' ),
            'choices'     => [
                'constra-footer-1' => esc_html__( 'Style 1 - Footer Three Column', 'constra' ),
                'constra-footer-2' => esc_html__( 'Style 2 - Footer Two Column', 'constra' ),
            ],
        ]
    );
}
constra_theme_settings();