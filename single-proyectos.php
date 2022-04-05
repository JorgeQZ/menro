<?php
    get_header();
?>

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
        <div class="cont-sliderr owl-carousel owl-theme">
            <div class="cont-item">
                <div class="cont-info">
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
            <div class="cont-item">
                <div class="cont-info">
                    <h2>Sucursal y PYME Leó2n</h2>
                    <p>
                        Para seguir fortaleciendo la presencia de BanBajío en la región, se integra una obra con el objetivo de atender y estar más cerca de los clientes. <br>
                        <strong>Ubicación:</strong> León, Guanajuato <br>
                        <strong>Tipo de obra:</strong> Banca <br>
                        <strong>Año:</strong> 2018 <br>
                        <strong>Extensión:</strong> 290M²
                    </p>
                </div>
            </div>
            <div class="cont-item">
                <div class="cont-info">
                    <h2>Sucursal y PYME Leó3n</h2>
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
            <div class="title">
                Ubicación
            </div>
        </div>
        <div class="cont-presencia">
            <img src="<?php echo get_template_directory_uri().'/img/mapa.jpg'?>" alt="">
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
    $('.cont-sliderr').owlCarousel({
        loop: false,
        margin: 0,
        dots: false,
        nav: true,
        items: 1,
        navText: ["<img src='<?php echo get_template_directory_uri().'/img/flecha-izq.png';?>'>", "<img src='<?php echo get_template_directory_uri().'/img/flecha-der.png';?>'>"],
    });
</script>
