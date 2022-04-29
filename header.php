<!doctype html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo get_bloginfo(); ?></title>

    <?php wp_head();?>

</head>

<body <?php body_class();?> id="body">
    <?php
wp_body_open();

$mainLogo = get_field('logo') ? get_theme_mod(get_field('logo')) : get_theme_mod('Blanco');
$excerpt = get_the_excerpt();

if(is_singular('proyectos')){
    $mainLogo = get_theme_mod('Color');
}
$mostrarBanner = is_home() ? 'imagen' : get_field('mostrar_banner');
?>
    <div class="wrapper" id="mainWrapper <?php echo get_field('logo'); ?>">
        <!-- Header -->

        <header>
            <div class="site-logo">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo $mainLogo ?>" alt="<?php echo get_bloginfo() . ' Logo '; ?>" class="header_logo">
                </a>
            </div>
        </header><!-- Header -->

        <?php
            if ($mostrarBanner != 'no'):
                if (is_home()):
                    $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')), 'full');
                    $title_text = 'BLOG';
                else:
                    $img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                    $title_text = get_the_title();
                endif;
                $featured_image = $img ? $img[0] : get_template_directory_uri() . '/img/blog-banner.jpg';
                $slider = get_field('slider_revolution_shortcode');
                ?>


                <!-- Thumbnail -->
                <?php if ($mostrarBanner === 'imagen'): ?>

                <div class="thumbnail_banner" style="background-image: url(<?php echo $featured_image ?>)">
                    <div class="title_banner animate__animated animate__encabezados" data-text="<?php echo $title_text; ?>">
                        <?php echo $title_text; ?>
                    </div>
                    <?php if($excerpt != "" && is_singular('post')){ ?>
                    <p class="subtitle_banner animate__animated animate__encabezados">
                        <?php echo $excerpt; ?>
                    </p>
                    <?php } ?>
                </div>
                <!-- Thumbnail -->

                <!-- Slider -->
                <?php elseif ($mostrarBanner == 'slider'): ?>
                    <div id="sliderBanner" class="slider_banner">
                        <!-- Sidebar -->
                        <div class="clip">
                            <div class="inner sidebar-content" id="sidebarContent_inner">
                                <div class="sidebar" id="sidebar">
                                    <?php
                                    if (is_active_sidebar('sidebar-main-content')):
                                        dynamic_sidebar('sidebar-main-content');
                                    endif;
                                    ?>
                                    <!-- .widget-area -->
                                </div>
                            </div>
                        </div><!-- Sidebar -->
                        <?php echo do_shortcode($slider); ?>
                    </div>
                <?php endif;?>
                <!-- Slider -->
            <?php endif?>
            <!-- Sidebar -->
            <?php
            if (get_field('menu') == "Color") {
                ?>
                    <div id="siderbarPrincipal" class="slider_banner">
                        <!-- Sidebar -->
                        <div class="clip">
                            <div class="inner sidebar-content" id="sidebarContent_inner">
                                <div class="sidebar" id="sidebar">
                                    <?php
                                    if (is_active_sidebar('sidebar-main-content')):
                                        dynamic_sidebar('sidebar-main-content');
                                    endif;
                                    ?>
                                    <!-- .widget-area -->
                                </div>
                            </div>
                        </div><!-- Sidebar -->
                    </div>
                    <?php
            }
            ?>
            <div class="sidebar-content" id="sidebarContent">
                <div class="sidebar" id="sidebar">
                    <?php
                    if (is_active_sidebar('sidebar-main-content')):
                        dynamic_sidebar('sidebar-main-content');
                    endif;
                    ?>
                <!-- .widget-area -->
            </div>
        </div><!-- Sidebar -->
        <div class="cont-burguer">
            <div class="burguer">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>



        <!-- main content -->
        <div class="main-content" id="mainContent">