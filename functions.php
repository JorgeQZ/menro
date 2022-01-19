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
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails');

    $background_color = get_theme_mod( 'background_color', 'D1E4DD' );
}
add_action( 'after_setup_theme', 'menro_setup' );



function menro_styles() {
	wp_enqueue_style( 'generals', get_template_directory_uri() . '/css/generals.css', array(), '0.1.0');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), wp_get_theme()->get( 'Version' ));

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/noframework.waypoints.min.js', array(), false, true);
	wp_enqueue_script( 'anime', get_template_directory_uri() . '/js/anime.min.js', array(), false, true);
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), false, true);

	if(is_front_page()){
	wp_enqueue_style( 'front-page', get_template_directory_uri() . '/css/front-page.css', array(), '0.1.0');

	}

	if(is_page_template('page-contacto.php')){
		wp_enqueue_style( 'contacto', get_template_directory_uri() . '/css/contacto.css', array(), '0.1.0');
	}

	if(is_home() && get_option('page_for_posts') && !is_front_page()):
		wp_enqueue_style( 'home', get_template_directory_uri() . '/css/home.css', array(), '0.1.0');
	endif;
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


function menro_customize_register($wp_customize)
{
    $wp_customize->add_section('logos_header', array(
        'title' => __('Logos de Cabecera', 'textdomain'),
        'priority' => 1,
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('Blanco', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'primary_logo',
            array(
                'label'    => __('Logo Primario', 'menro'),
                'section'  => 'logos_header',
                'settings' => 'Blanco',
                'description' => 'Este es el logotipo principal en color blanco. Aparece por defecto.'
            )
        )
    );

    $wp_customize->add_setting('Color', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'secundary_logo',
            array(
                'label'    => __('Logo Secundario', 'menro'),
                'section'  => 'logos_header',
                'settings' => 'Color',
                'description' => 'Este es el logotipo secundario a color. Aparece si esta seleccionado en la página de edición.'
            )
        )
    );
}

add_action('customize_register', 'menro_customize_register');

function re_rewrite_rules() {
    global $wp_rewrite;
    // $wp_rewrite->author_base = $author_slug;
//  print_r($wp_rewrite);
    // $wp_rewrite->author_base        = 'autor';
    // $wp_rewrite->search_base        = 'buscar';
    // $wp_rewrite->comments_base      = 'comentarios';
    $wp_rewrite->pagination_base    = 'pagina';
    $wp_rewrite->flush_rules();
}
add_action('init', 're_rewrite_rules');
