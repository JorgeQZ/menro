<?php
    get_header();
?>

<div class="wrapper-sec">

    <div class="contenedor-general-sucursales">

        <div class="contenedor-sucursales">
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
                    <div class="cont-info animate__animated">
                        <?php the_field('informacion'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="contenedor-presencia">
            <div class="cont-tit">
                <div class="title animate__animated">
                    Ubicación
                </div>
            </div>
            <div class="cont-presencia">
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
