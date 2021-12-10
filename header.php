<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="body">
    <?php wp_body_open(); ?>

    <div class="wrapper" id="mainWrapper">
        <!-- Header -->
        <header>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
        </header><!-- Header -->

        <!-- Slider -->
        <div id="sliderBanner" class="slider_banner">
            <?php
            $slider = get_field('slider_revolution_shortcode');
            echo do_shortcode($slider);
            ?>
        </div>
        <!-- Slider -->

        <!-- Sidebar -->
        <div class="sidebar-content" id="sidebarContent">
            <div class="sidebar" id="sidebar">
                <?php
                if ( is_active_sidebar( 'sidebar-main-content' ) ) :
                dynamic_sidebar( 'sidebar-main-content' );
                endif;
                ?>
                <!-- .widget-area -->
            </div>
        </div><!-- Sidebar -->

        <!-- main content -->
        <div class="main-content" id="mainContent">
