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
<p class="subtitle animate__animated">Escribenos para poder ayudarte en lo que necesites.</p>

<div class="container">
    <div class="col animate__animated">
        <div class="item">
            <div class="col"><img src="<?php echo get_template_directory_uri().'/img/icon-phone.png'?>" alt="" class="icon"></div>
            <div class="col">
                <address>
                    Av. Roble #660 <br>
                    Valle del Campestre, 66265 <br>
                    San Pedro Garza García,<br>
                    Nuevo León, México. <br>
                </address>
            </div>
        </div>
        <div class="item">
            <div class="col"><img src="<?php echo get_template_directory_uri().'/img/icon-phone.png'?>" alt="" class="icon"></div>
            <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid magni sit harum, tempore quo exercitationem ratione doloribus commodi </div>
        </div>
        <div class="item">
            <div class="col"><img src="<?php echo get_template_directory_uri().'/img/icon-phone.png'?>" alt="" class="icon"></div>
            <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid magni sit harum, tempore quo exercitationem ratione doloribus commodi </div>
        </div>
        <div class="item">
            <div class="col"><img src="<?php echo get_template_directory_uri().'/img/icon-phone.png'?>" alt="" class="icon"></div>
            <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid magni sit harum, tempore quo exercitationem ratione doloribus commodi </div>
        </div>
    </div>
    <div class="col animate__animated">
        <?php echo do_shortcode('[contact-form-7 id="108" title="Contacto"]'); ?>
    </div>
</div>


<?php get_footer(); ?>
