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
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-line-height' );
	add_theme_support( 'experimental-link-color' );
  	add_theme_support( 'custom-spacing' );
  	add_theme_support( 'custom-units' );
 	add_theme_support( 'customize-selective-refresh-widgets' );
 	add_theme_support( 'wp-block-styles' );
 	add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    $background_color = get_theme_mod( 'background_color', 'D1E4DD' );
}
add_action( 'after_setup_theme', 'menro_setup' );



function menro_styles() {

	wp_enqueue_style( 'generals', get_template_directory_uri() . '/css/generals.css', array(), wp_get_theme()->get( 'Version' ));

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'anime', get_template_directory_uri() . '/js/anime.min.js', array(), false, true);

	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), false, true);



}
add_action( 'wp_enqueue_scripts', 'menro_styles' );

function add_type_attribute($tag, $handle, $src) {
    // if not your script, do nothing and return original $tag
    if ( 'anime' !== $handle ) {
        return $tag;
    }
    // change the script tag by adding type="module" and return it.
    $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
    return $tag;
}
// add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);

function menro_widgets() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Side Menú', 'menro' ),
			'id'            => 'sidebar-main-content',
			'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'menro' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
    );
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
