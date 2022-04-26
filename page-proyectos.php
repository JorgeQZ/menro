<?php
/**
 * Template Name: Proyectos
 */

get_header();
?>

<div class="contenedor-principal">

    <div class="title animate__animated" data-text=" <?php the_title();?>"><?php the_title();?></div>

    <!-- Opciones de tabs -->
    <?php
$tax_proy_sust = 'categoria_proyectos';
$args_cat = array(
    'taxonomy' => $tax_proy_sust,
    'hide_empty' => 1,
    'orderby' => 'id',
    'order' => 'ASC',
);
$cats = get_categories($args_cat);
if ($cats):
    $first = true;
    echo '<div class="tabs-options animate__animated">';
    foreach ($cats as $item):

    ?>
    <div class="option-item item<?php if ($first) {echo ' active';
        $first = false;}?>" data-button="tab-<?php echo _e($item->term_id, 'menro') ?>">
        <?php echo _e($item->name, 'menro') ?>
    </div>
    <?php

endforeach;
echo '</div>';
wp_reset_query();
endif;
?>
    <!-- Opciones de tabs -->

    <!-- Contenido de Tabs -->
    <div class="tabs-content animate__animated">
        <?php
if ($cats):
    $first = true;
    foreach ($cats as $item):
    ?>
        <div class="tab<?php if ($first) {echo ' active';
            $first = false;}?>" id="tab-<?php echo _e($item->term_id, 'menro') ?>" style="opacity: 1">
            <?php
                $cat_image = get_field('imagen', $tax_proy_sust . '_' . $item->term_id);
                /*
                if ($cat_image):
                    echo '<div class="image-banner">';
                    echo wp_get_attachment_image($cat_image, 'cat_image_projects');
                    echo '</div>';
                endif;
                */
            ?>
            <div class="column" style="background-image: url(<?php echo $cat_image; ?>);">
                <img src="<?php echo get_template_directory_uri().'/img/proyectos-img.jpg'?>" alt="">
            </div>
            <div class="column">

                <div class="title_project">
                    <?php echo _e($item->name, 'menro'); ?>
                </div>

                <?php

    $projects = array(
        'post_type' => 'proyectos',
        'hide_empty' => 1,
        'orderby' => 'date',
        'order' => 'ASC',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'categoria_proyectos',
                'field' => 'term_id',
                'terms' => $item->term_id,
            ),
        ),
    );
    $post_projects = new WP_Query($projects);

    if ($post_projects->have_posts()):
        echo '<ol>';
        while ($post_projects->have_posts()):
            $post_projects->the_post();
            echo '<li>';
            echo '<a href="' . get_the_permalink() . '" >' . get_the_title() . '</a>';
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
    <div class="contenedor-galerias">
        <div class="contenedor-edificaciones">
            <div class="titles">
            <?php
            if ($cats):
                $first = true;
                foreach ($cats as $item):
                ?>
                <div class="title bl <?php if ($first) {echo ' active';
        $first = false;}?>" data-text="<?php echo _e($item->name, 'menro') ?>">
                    <img src="<?php the_field('icono_slider', $tax_proy_sust . '_' . $item->term_id); ?>" alt="">
                    <?php echo _e($item->name, 'menro') ?>
                </div>
                <?php
            
            endforeach;
            wp_reset_query();
            endif;
            ?>
            </div>
            <div class="cont-edificaciones owl-carousel owl-theme">
                <?php
                if ($cats):
                    $first = true;
                    foreach ($cats as $item):
                    ?>
                    <div class="cont-item">
                        <div class="cont-img" style="background-image: url('<?php the_field('imagen_slider', $tax_proy_sust . '_' . $item->term_id); ?>');">
                            <img src="<?php echo get_template_directory_uri() . '/img/edificaciones.jpg' ?>" alt="">
                        </div>
                        <div class="cont-info">
                            <p>
                                <?php the_field('descripcion_slider', $tax_proy_sust . '_' . $item->term_id); ?>
                            </p>
                        </div>
                    </div>
                    <?php
                
                endforeach;
                wp_reset_query();
                endif;
                ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer();?>


<script>
    $ = jQuery;
    $('.cont-edificaciones').owlCarousel({
        stagePadding: 230,
        margin: 0,
        loop: false,
        dots: false,
        nav: true,
        items: 1,
        navText: ["<img src='<?php echo get_template_directory_uri() . '/img/flecha-izq.png'; ?>'>", "<img src='<?php echo get_template_directory_uri() . '/img/flecha-der.png'; ?>'>"],
        responsive: {
            0: {
                stagePadding: 0
            },
            768: {
                stagePadding: 100
            },
            1024: {
                stagePadding: 180
            },
            1280: {
                stagePadding: 230
            }
        }
    });

    $('.cont-edificaciones').on('changed.owl.carousel', function(event) {
        var item = event.item.index;
        $('.wrapper .contenedor-principal .tabs-options .item').eq(item).click();
        $('.wrapper .contenedor-galerias .contenedor-edificaciones .titles .title.active').hide();
        $('.wrapper .contenedor-galerias .contenedor-edificaciones .titles .title.active').removeClass("active");
        $('.wrapper .contenedor-galerias .contenedor-edificaciones .titles .title').eq(item).fadeIn(300);
        $('.wrapper .contenedor-galerias .contenedor-edificaciones .titles .title').eq(item).addClass("active");
    });
    $(".wrapper .contenedor-principal .tabs-options .item").click(function(){
        var a = $(this).index();
        $('.cont-edificaciones').trigger('to.owl.carousel', a);
    });
</script>
