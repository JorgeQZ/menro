<?php

/**
 * Required
 */
include_once ('widgets/social-icons.php');

/**
 * Initial Setup
 */
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
    add_theme_support( 'wp-block-styles' );

    $background_color = get_theme_mod( 'background_color', 'D1E4DD' );
}
add_action( 'after_setup_theme', 'menro_setup' );

/**
 * Styles & Scripts Registration
 */
function menro_styles() {
    wp_enqueue_style( 'generals', get_template_directory_uri() . '/css/generals.css', array(), filemtime( get_stylesheet_directory() . '/css/generals.css' ), 'all');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), wp_get_theme()->get( 'Version' ));

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/noframework.waypoints.min.js', array(), false, true);
	wp_enqueue_script( 'anime', get_template_directory_uri() . '/js/anime.min.js', array(), false, true);
    wp_enqueue_script( 'custom', get_template_directory_uri().'/js/custom.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/custom.js' ), false);

	if(is_front_page()){
        wp_enqueue_style( 'front-page', get_template_directory_uri() . '/css/front-page.css', array(), filemtime( get_stylesheet_directory() . '/css/front-page.css' ), 'all');
	}

    if(is_page_template('page-nosotros.php')){
        wp_enqueue_style( 'nosotros', get_template_directory_uri() . '/css/nosotros.css', array(), filemtime( get_stylesheet_directory() . '/css/nosotros.css' ), 'all');
    }

    if(is_page_template('page-inversion.php')){
        wp_enqueue_style( 'inversion', get_template_directory_uri() . '/css/inversion.css', array(), filemtime( get_stylesheet_directory() . '/css/inversion.css' ), 'all');
        wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');
        wp_enqueue_script('owl.carousel.min.js', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/owl.carousel.min.js' ), false);
    }

	if(is_page_template('page-contacto.php')){
        wp_enqueue_style( 'contacto', get_template_directory_uri() . '/css/contacto.css', array(), filemtime( get_stylesheet_directory() . '/css/contacto.css' ), 'all');
    }

    if(is_page_template('page-proyectos.php')){
        wp_enqueue_style( 'proyectos', get_template_directory_uri() . '/css/proyectos.css', array(), filemtime( get_stylesheet_directory() . '/css/proyectos.css' ), 'all');
	}

    //if(is_page_template('page.php')){
        wp_enqueue_style( 'single-proyectos', get_template_directory_uri() . '/css/single-proyectos.css', array(), filemtime( get_stylesheet_directory() . '/css/single-proyectos.css' ), 'all');
        wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');
        wp_enqueue_script('owl.carousel.min.js', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/owl.carousel.min.js' ), false);
	//}

	if(is_home() && get_option('page_for_posts') && !is_front_page()):
        wp_enqueue_style( 'home', get_template_directory_uri() . '/css/home.css', array(), filemtime( get_stylesheet_directory() . '/css/home.css' ), 'all');
	endif;
}
add_action( 'wp_enqueue_scripts', 'menro_styles' );

/**
 * Module Tag
 */
function add_type_attribute($tag, $handle, $src) {
    if ( 'anime' !== $handle ) {return $tag;}
    $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
    return $tag;
}
// add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);


/**
 * WIDGETS
 */
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


/**
 * Custom Logos
 */
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

/**
 * Rewrite Conditions
 */
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


/**
 * Post Type Proyectos
 */


// Proyectos
function menro_register_proyectos()
{

    /**
     * Post Type: Proyectos.
     */

    $labels = [
        "name" => __("Proyectos", "menro"),
        "singular_name" => __("Proyecto", "menro"),
        "menu_name" => __("Mis Proyectos", "menro"),
        "all_items" => __("Todos los Proyectos", "menro"),
        "add_new" => __("Añadir nuevo", "menro"),
        "add_new_item" => __("Añadir nuevo Proyecto", "menro"),
        "edit_item" => __("Editar Proyecto", "menro"),
        "new_item" => __("Nuevo Proyecto", "menro"),
        "view_item" => __("Ver Proyecto", "menro"),
        "view_items" => __("Ver Proyectos", "menro"),
        "search_items" => __("Buscar Proyectos", "menro"),
        "not_found" => __("No se ha encontrado Proyectos", "menro"),
        "not_found_in_trash" => __("No se han encontrado Proyectos en la papelera", "menro"),
        "parent" => __("Proyecto superior:", "menro"),
        "featured_image" => __("Imagen destacada para Proyecto", "menro"),
        "set_featured_image" => __("Establece una imagen destacada para Proyecto", "menro"),
        "remove_featured_image" => __("Eliminar la imagen destacada de Proyecto", "menro"),
        "use_featured_image" => __("Usar como imagen destacada de Proyecto", "menro"),
        "archives" => __("Archivos de Proyecto", "menro"),
        "insert_into_item" => __("Insertar en Proyecto", "menro"),
        "uploaded_to_this_item" => __("Subir a Proyecto", "menro"),
        "filter_items_list" => __("Filtrar la lista de Proyectos", "menro"),
        "items_list_navigation" => __("Navegación de la lista de Proyectos", "menro"),
        "items_list" => __("Lista de Proyectos", "menro"),
        "attributes" => __("Atributos de Proyectos", "menro"),
        "name_admin_bar" => __("Proyecto", "menro"),
        "item_published" => __("Proyecto publicado", "menro"),
        "item_published_privately" => __("Proyecto publicado como privado.", "menro"),
        "item_reverted_to_draft" => __("Proyecto devuelto a borrador.", "menro"),
        "item_scheduled" => __("Proyecto programado", "menro"),
        "item_updated" => __("Proyecto actualizado.", "menro"),
        "parent_item_colon" => __("Proyecto superior:", "menro"),
    ];

    $args = [
        "label" => __("Proyectos", "menro"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "page",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => [ "slug" => "proyecto-sustentable", "with_front" => true ],
        "query_var" => true,
        "menu_position" => 20,
        "menu_icon" => "dashicons-admin-site",
        "supports" => [ "title", "editor", "thumbnail", "author", "page-attributes", "post-formats" ],
        "taxonomies" => [ "categoria_proyectors" ],
        "show_in_graphql" => false,
    ];

    register_post_type("proyectos", $args);
}

add_action('init', 'menro_register_proyectos');



function menro_register_tax_proyectos()
{

    /**
     * Taxonomy: Categorías de Proyectos.
     */

    $labels = [
        "name" => __("Categorías de Proyectos", "menro"),
        "singular_name" => __("Categoría de Proyectos", "menro"),
        "menu_name" => __("Categorías de Proyectos", "menro"),
        "all_items" => __("Todos los Categorías de Proyectos", "menro"),
        "edit_item" => __("Editar Categoría de Proyectos", "menro"),
        "view_item" => __("Ver Categoría de Proyectos", "menro"),
        "update_item" => __("Actualizar el nombre de Categoría de Proyectos", "menro"),
        "add_new_item" => __("Añadir nuevo Categoría de Proyectos", "menro"),
        "new_item_name" => __("Nombre del nuevo Categoría de Proyectos", "menro"),
        "parent_item" => __("Categoría de Proyectos superior", "menro"),
        "parent_item_colon" => __("Categoría de Proyectos superior:", "menro"),
        "search_items" => __("Buscar Categorías de Proyectos", "menro"),
        "popular_items" => __("Categorías de Proyectos populares", "menro"),
        "separate_items_with_commas" => __("Separar Categorías de Proyectos con comas", "menro"),
        "add_or_remove_items" => __("Añadir o eliminar Categorías de Proyectos", "menro"),
        "choose_from_most_used" => __("Escoger entre los Categorías de Proyectos más usandos", "menro"),
        "not_found" => __("No se ha encontrado Categorías de Proyectos", "menro"),
        "no_terms" => __("Ninguna Categoría de Proyectos", "menro"),
        "items_list_navigation" => __("Navegación de la lista de Categorías de Proyectos", "menro"),
        "items_list" => __("Lista de Categorías de Proyectos", "menro"),
        "back_to_items" => __("Volver a Categorías de Proyectos", "menro"),
    ];


    $args = [
        "label" => __("Categorías de Proyectos", "menro"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'categoria_proyectos', 'with_front' => true,  'hierarchical' => true, ],
        "show_admin_column" => true,
        "show_in_rest" => true,
        "rest_base" => "categoria_proyectos",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => true,
        "show_in_graphql" => false,
    ];
    register_taxonomy("categoria_proyectos", [ "proyectos" ], $args);
}
add_action('init', 'menro_register_tax_proyectos');
