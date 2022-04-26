<?php
/**
 * Template Name: Contacto
 */
get_header();
?>

<style>
    @media screen and (min-width: 1024px) {
        #sidebarContent{
            display: none;
        }
        .wrapper .clip{
            height: 100%;
        }
    }
</style>

<div class="title animate__animated">
    ¿Tienes algun proyecto?
</div>
<p class="subtitle animate__animated">Escríbenos para poder ayudarte en lo que necesites.</p>

<div class="container">
    <div class="col animate__animated">
        <div class="item">
            <div class="col"><img src="<?php echo get_template_directory_uri().'/img/icon-loca.png'?>" alt="" class="icon"></div>
            <div class="col">
                Av. Roble #660 <br>
                Valle del Campestre, 66265 <br>
                San Pedro Garza García,<br>
                Nuevo León, México.
            </div>
        </div>
        <div class="item">
            <div class="col"><img src="<?php echo get_template_directory_uri().'/img/icon-loca.png'?>" alt="" class="icon"></div>
            <div class="col">
                Av. Manuel J. Clouthier #304 <br>
                Jardines del Campestre, 37128 <br>
                León, Guanajuato, México.
            </div>
        </div>
        <div class="item">
            <div class="col"><img src="<?php echo get_template_directory_uri().'/img/icon-mail.png'?>" alt="" class="icon"></div>
            <div class="col">
                <strong>Correo electrónico</strong><br>
                <a href="mailto:contacto@menro.com.mx" target="_blank" rel="noopener noreferrer">contacto@menro.com.mx</a>
            </div>
        </div>
        <div class="item">
            <div class="col"><img src="<?php echo get_template_directory_uri().'/img/icon-tel.png'?>" alt="" class="icon"></div>
            <div class="col">
                <strong>Teléfono</strong><br>
                <a href="tel:8159982178" target="_blank" rel="noopener noreferrer">81 5998 2178</a>
            </div>
        </div>
    </div>
    <div class="col animate__animated">
        <?php echo do_shortcode('[contact-form-7 id="108" title="Contacto"]'); ?>
    </div>
</div>


<?php get_footer(); ?>
