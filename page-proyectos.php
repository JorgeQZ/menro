<?php
/**
 * Template Name: Proyectos
 */

 get_header();
?>

<div class="contenedor-principal">

    <div class="title" data-text=" <?php the_title(); ?>"><?php the_title(); ?></div>

    <!-- Opciones de tabs -->
    <?php
    $tax_proy_sust = 'categoria_proyectos';
    $args_cat = array(
        'taxonomy' => $tax_proy_sust,
        'hide_empty' => 1,
        'orderby' => 'id',
        'order' => 'ASC'
    );
    $cats = get_categories($args_cat);
    if($cats):
        $first = true;
        echo  '<div class="tabs-options">';
        foreach($cats as $item):

            ?>
    <div class="item<?php if($first){ echo ' active';  $first = false; } ?>" data-button="tab-<?php echo _e($item->term_id, 'menro') ?>">
        <?php echo _e($item->name, 'menro') ?>
    </div>
    <?php

        endforeach;
        echo '</div>';
        wp_reset_query();
    endif;
    ?><!-- Opciones de tabs -->

    <!-- Contenido de Tabs -->
    <div class="tabs-content">
        <?php
        if($cats):
            $first = true;
            foreach($cats as $item):
            ?>
        <div class="tab<?php if($first){ echo ' active'; $first = false; } ?>"
        id="tab-<?php echo _e($item->term_id, 'menro') ?>" style="opacity: 1">
            <div class="column">
                <?php
                    $cat_image = get_field('imagen', $tax_proy_sust.'_'.$item->term_id);
                    if ($cat_image):
                        echo '<div class="image-banner">';
                        echo wp_get_attachment_image( $cat_image, 'cat_image_projects' );
                        echo '</div>';
                    endif;
                    ?>
            </div>
            <div class="column">

                <div class="title_project">
                    <?php echo _e($item->name, 'menro'); ?>
                </div>

                <?php

                    $projects = array(
                        'post_type'     =>  'proyectos',
                        'hide_empty'    =>  1,
                        'tax_query'     =>  array(
                            array(
                                'taxonomy'  => 'categoria_proyectos',
                                'field'     => 'term_id',
                                'terms'     => $item->term_id
                            )
                        )
                    );
                    $post_projects = new WP_Query($projects);

                    if($post_projects->have_posts()):
                        echo '<ol>';
                        while($post_projects->have_posts()):
                            $post_projects->the_post();
                            echo '<li>';
                            echo '<a href="'.get_the_permalink().'" >'.get_the_title().'</a>';
                            echo '</li>';
                        endwhile;
                        echo '</ol>';
                    endif;
                    ?>
            </div>
        </div>
        <?php
            endforeach;
            wp_reset_query();
        endif;
        ?>
    </div><!-- Contenido de Tabs -->

</div>

<div class="wrapper-sec">
    <div class="contenedor-edificaciones">
        <div class="title">
            Edificaciones
        </div>
        <div class="cont-edificaciones owl-carousel owl-theme">
            <div class="cont-item">
                <img src="<?php echo get_template_directory_uri().'/img/sucursal1.jpg'?>" alt="">
                <div class="cont-info">
                    <p>
                        Construimos las bases de los más grandes, ofreciendo alternativas sustentables para aprovechar al máximo la infraestructura de las ciudades.
                    </p>
                </div>
            </div>
            <div class="cont-item">
                <img src="<?php echo get_template_directory_uri().'/img/sucursal1.jpg'?>" alt="">
                <div class="cont-info">
                    <p>
                        Construimos las bases de los más grandes, ofreciendo alternativas sustentables para aprovechar al máximo la infraestructura de las ciudades.
                    </p>
                </div>
            </div>
            <div class="cont-item">
                <img src="<?php echo get_template_directory_uri().'/img/sucursal1.jpg'?>" alt="">
                <div class="cont-info">
                    <p>
                        Construimos las bases de los más grandes, ofreciendo alternativas sustentables para aprovechar al máximo la infraestructura de las ciudades.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>


<script>
    $ = jQuery;
    $('.cont-edificaciones').owlCarousel({
        stagePadding: 230,
        margin: 0,
        loop: true,
        dots: false,
        nav: true,
        items: 1,
        navText: ["<img src='<?php echo get_template_directory_uri().'/img/flecha-izq.png';?>'>", "<img src='<?php echo get_template_directory_uri().'/img/flecha-der.png';?>'>"],
        responsive:{
            0:{
                stagePadding: 0
            },
            768:{
                stagePadding: 100
            },
            1024:{
                stagePadding: 180
            },
            1280:{
                stagePadding: 230
            }
        }
    });
</script>