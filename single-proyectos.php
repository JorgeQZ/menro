<?php
    get_header();
?>

<div class="wrapper-sec">

    <div class="contenedor-general-sucursales">

        <div class="contenedor-sucursales">
            <div class="cont-slider owl-carousel owl-theme">
                <div class="cont-item">
                    <img src="<?php echo get_template_directory_uri().'/img/sucursal1.jpg'?>" alt="">
                </div>
                <div class="cont-item">
                    <img src="<?php echo get_template_directory_uri().'/img/sucursal1.jpg'?>" alt="">
                </div>
                <div class="cont-item">
                    <img src="<?php echo get_template_directory_uri().'/img/sucursal1.jpg'?>" alt="">
                </div>
            </div>
            <div class="cont-sliderr">
                <div class="cont-item">
                    <div class="cont-info animate__animated">
                        <h2>Sucursal y PYME León</h2>
                        <p>
                            Para seguir fortaleciendo la presencia de BanBajío en la región, se integra una obra con el objetivo de atender y estar más cerca de los clientes. <br>
                            <strong>Ubicación:</strong> León, Guanajuato <br>
                            <strong>Tipo de obra:</strong> Banca <br>
                            <strong>Año:</strong> 2018 <br>
                            <strong>Extensión:</strong> 290M²
                        </p>
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
                <!--
                    <img src="<?php echo get_template_directory_uri().'/img/mapa.jpg'?>" alt="">
                -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.657017290472!2d-100.35843798468332!3d25.6495064836878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662bde75bb8b127%3A0xc67c297e5ecd632f!2sMENRO%20Construcci%C3%B3n!5e0!3m2!1ses-419!2smx!4v1649282895289!5m2!1ses-419!2smx" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
