<?php

include_once ('widgets/social-icons.php');
function menro_setup(){
    $logo_width  = 300;
    $logo_height = 100;

    register_nav_menus(
        array(
            'primary' => esc_html__( 'Header Menú', 'MENRO' ),
            'footer'  => __( 'Footer Menú', 'MENRO' ),
        )
    );
    add_theme_support(
        'custom-logo',
        array(
            'height'               => $logo_height,
            'width'                => $logo_width,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => false,
        )
    );

    // Add support for responsive embedded content.
    add_theme_support( 'responsive-embeds' );

    // Add support for custom line height controls.
    add_theme_support( 'custom-line-height' );

    // Add support for experimental link color control.
    add_theme_support( 'experimental-link-color' );

    // Add support for experimental cover block spacing.
    add_theme_support( 'custom-spacing' );

    // Add support for custom units.
    // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
    add_theme_support( 'custom-units' );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for Block Styles.
    add_theme_support( 'wp-block-styles' );

    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Add support for editor styles.
    add_theme_support( 'editor-styles' );
    $background_color = get_theme_mod( 'background_color', 'D1E4DD' );
}
add_action( 'after_setup_theme', 'menro_setup' );



function menro_styles() {

	wp_enqueue_style( 'generals', get_template_directory_uri() . '/css/generals.css', array(), wp_get_theme()->get( 'Version' ));


	// Responsive embeds script.
	// wp_enqueue_script(
	// 	'twenty-twenty-one-responsive-embeds-script',
	// 	get_template_directory_uri() . '/assets/js/responsive-embeds.js',
	// 	array( 'twenty-twenty-one-ie11-polyfills' ),
	// 	wp_get_theme()->get( 'Version' ),
	// 	true
	// );
}
add_action( 'wp_enqueue_scripts', 'menro_styles' );


function menro_widgets() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer columna 1', 'menro' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'menro' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
    );

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer columna 2', 'menro' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'menro' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
    );

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer columna 3', 'menro' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'menro' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
    );

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer columna 4', 'menro' ),
			'id'            => 'sidebar-4',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'menro' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
    );

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer columna 5', 'menro' ),
			'id'            => 'sidebar-5',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'menro' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'menro_widgets' );
