<?php
    get_header();
?>

<div class="wrapper-sec">

    
    <div class="contenedor-general-sucursales">
    <button class="back_button animate__animated animate__todos" type="button" onclick="history.back();"> « Regresar </button> 

        <div class="contenedor-sucursales animate__animated animate__todos">
            <?php if(have_rows('galeria')): ?>
            <div class="cont-slider owl-carousel owl-theme">
                <?php while(have_rows('galeria')): the_row(); ?>
                    <div class="cont-item" style="background-image: url('<?php the_sub_field('imagen'); ?>');">
                        <img src="<?php echo get_template_directory_uri().'/img/sucursal1.jpg'?>" alt="">
                    </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <div class="cont-sliderr">
                <div class="cont-item">
                    <div class="cont-info animate__animated animate__todos">
                        <?php the_field('informacion'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botones -->
        <div class="cont-button-nav">
            <?php
            $prev_post = get_previous_post();
            if($prev_post) {
            $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
            echo "\t" . '<a class="button-nav" rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class=" ">« Anterior</a>' . "\n";
            }

            $next_post = get_next_post();
            if($next_post) {
            $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
            echo "\t" . '<a class="button-nav" rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class=" ">Siguiente »</a>' . "\n";
            }
            ?>
        </div>
        <!-- Botones -->
        <div class="contenedor-presencia">
            <div class="cont-tit">
                <div class="title animate__animated animate__todos">
                    Ubicación
                </div>
            </div>
            <div class="cont-presencia animate__animated animate__todos">
                <iframe src="https://www.google.com/maps/d/embed?mid=1I6Dp_c6u1bfGy2HIphPyrRGEfu5SUiwJ&ehbc=2E312F" width="640" height="480"></iframe>
            </div>
        </div>
        
    </div>

</div>

<?php get_footer(); ?>

<script>
    $ = jQuery;
    $('.cont-slider').owlCarousel({
        loop: false,
        margin: 0,
        dots: true,
        nav: false,
        items: 1,
    });
    /*
    $('.cont-sliderr').owlCarousel({
        loop: false,
        margin: 0,
        dots: false,
        nav: false,
        items: 1,
        navText: ["<img src='<?php echo get_template_directory_uri().'/img/flecha-izq.png';?>'>", "<img src='<?php echo get_template_directory_uri().'/img/flecha-der.png';?>'>"],
    });
    */
</script>
