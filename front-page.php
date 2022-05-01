<?php
/**
 * Template Name: Front Page
 */
get_header();


?>

<style>
    
    @media screen and (min-width: 1024px) {
        
        .clip #sidebar{
            display: none;
        }
        .wrapper .sidebar-content{
            z-index: 9999;
        }
        footer{
            z-index: 1000000;
        }
        /*
        .wrapper .sidebar-content:not(.inner) {
            background: #191919;
        }
        
        #sidebarContent_inner{
            display: none;
        }
        */
        .wrapper .main-content{
            padding-right: 95px;
            background: #232323;
            width: 100%;
        }
    }

    
</style>

<div class="render-cont">
    <!-- MOBILE -->
    <!-- option 1 -->
    <div class="shape-mobile animate__animated" id="shape_mobile_option_1">
        <div class="close-button"><span>+</span></div>
        <div class="shape-title-mobile">Sistema VRF</div>
    </div>
    <!-- option 1 -->

    <!-- option 2 -->
    <div class="shape-mobile animate__animated" id="shape_mobile_option_2">
        <div class="close-button"><span>+</div>
        <div class="shape-title-mobile">Proceso BIM</div>
    </div>
    <!-- option 2 -->

    <!-- option 3 -->
    <div class="shape-mobile animate__animated" id="shape_mobile_option_3">
        <div class="close-button"><span>+</div>
        <div class="shape-title-mobile">Sistema de sonido<br>blanco</div>
    </div>
    <!-- option 3 -->
  
    
    <!-- option 4 -->
    <div class="shape-mobile animate__animated" id="shape_mobile_option_4">
        <div class="close-button"><span>+</div>
        <div class="shape-title-mobile">Ductos textiles<br>de inyección de aire</div>
    </div>
    <!-- option 4 -->

    <!-- option 5 -->
    <div class="shape-mobile animate__animated" id="shape_mobile_option_5">
        <div class="close-button"><span>+</div>
        <div class="shape-title-mobile">Losa aparente de plafón<br>de madera</div>
    </div>
    <!-- option 5 -->

    <!-- option 6 -->
    <div class="shape-mobile animate__animated" id="shape_mobile_option_6">
        <div class="close-button"><span>+</div>
        <div class="shape-title-mobile">Sistema de aislante termoacústico</div>    
    </div>
    <!-- option 6 -->

    <!-- option 7 -->
    <div class="shape-mobile animate__animated" id="shape_mobile_option_7">
        <div class="close-button"><span>+</div>
        <div class="shape-title-mobile">Mobiliario a forma<br>con distanciamiento<br>según normas<br>antiCOVID-19</div>
        
    </div>
        <!-- option 7 -->

    <!-- option 8 -->
    <div class="shape-mobile animate__animated" id="shape_mobile_option_8">
        <div class="close-button"><span>+</div>
        <div class="shape-title-mobile">Sistema de aislante térmico<br>de 3.5" (Owens Corning)<br>en muros de tablaroca.</div>
        
    </div>
    <!-- option 8 -->

    <!-- option 9 -->
    <div class="shape-mobile animate__animated" id="shape_mobile_option_9">
        <div class="close-button"><span>+</div>
        <div class="shape-title-mobile">Panic Room</div>
    </div>
    <!-- option 9 -->

    <!-- option 10 -->
    <div class="shape-mobile animate__animated" id="shape_mobile_option_10">
        <div class="close-button"><span>+</div>
        <div class="shape-title-mobile">Alfombra aislante</div>
    </div>
    <!-- option 10 -->

    <!-- option 11 -->
    <div class="shape-mobile animate__animated" id="shape_mobile_option_11">
        <div class="close-button"><span>+</div>
        <div class="shape-title-mobile">Duela aislante</div>
    </div>
    <!-- option 11 -->

    <!-- option 12 -->
    <div class="shape-mobile animate__animated" id="shape_mobile_option_12">
        <div class="close-button"><span>+</div>
        <div class="shape-title-mobile">Pilas/Pilotes<br> para la cimentación</div>
    </div>
    <!-- option 12 -->

    <!-- Mobile -->
    <div class="image-cont">
        <img class="image-cont-img animate__animated" src="<?php echo get_template_directory_uri().'/img/render.png'?>" alt="">

        <!-- option 1 -->
        <div class="button-content nivel_3 animate__animated" id="option_1" data-animate-h="50">
            <div class="button">
                <span>+</span>
            </div>
            <div class="shape shape_upper_left" id="option_1">
                <div class="shape-title">Sistema VRF</div>
                <div class="shape_hr"></div>
            </div>
            <div class="shape_angle"></div>
        </div><!-- option 1 -->

       

        <!-- option 3 -->
        <div class="button-content nivel_3 animate__animated" id="option_3" data-animate-h="70">
            <div class="button">
                <span>+</span>
            </div>
            <div class="shape shape_downer_left" id="shape_option_3">
                <div class="shape-title">Sistema de sonido<br>blanco</div>
                <div class="shape_hr"></div>
               
            </div>
             <div class="shape_angle"></div>
        </div><!-- option 3 -->

         <!-- option 2 -->
         <div class="button-content nivel_3 animate__animated" id="option_2" data-animate-h="50">
            <div class="button">
                <span>+</span>
            </div>
            <div class="shape shape_upper_left" id="option_2">
                <div class="shape-title">Proceso BIM</div>
                <div class="shape_hr"></div>
            </div>
             <div class="shape_angle"></div>
        </div><!-- option 2 -->
        
        <!-- option 4 -->
        <div class="button-content nivel_3 animate__animated" id="option_4" data-animate-h="75">
            <div class="button">
                <span>+</span>
            </div>
            <div class="shape shape_upper_right" id="shape_option_4">
                <div class="shape-title">Ductos textiles<br>de inyección de aire</div>
                <div class="shape_hr"></div>
               
            </div>
             <div class="shape_angle"></div>
        </div><!-- option 4 -->

        <!-- option 5 -->
        <div class="button-content nivel_3 animate__animated" id="option_5" data-animate-h="40">
            <div class="button">
                <span>+</span>
            </div>

            <div class="shape shape_upper_right" id="shape_option_5">
                <div class="shape-title">Losa aparente de plafón<br>de madera</div>
                <div class="shape_hr"></div>
               
            </div>
             <div class="shape_angle"></div>
        </div><!-- option 5 -->

        <!-- option 6 -->
        <div class="button-content nivel_2 animate__animated" id="option_6" data-animate-h="70">
            <div class="button">
                <span>+</span>
            </div>
            <div class="shape shape_downer_left" id="shape_option_6">
                <div class="shape-title">Sistema de aislante termoacústico</div>
                <div class="shape_hr"></div>
               
            </div>
             <div class="shape_angle"></div>
        </div><!-- option 6 -->

        <!-- option 7 -->
        <div class="button-content nivel_2 animate__animated" id="option_7" data-animate-h="70">
            <div class="button">
                <span>+</span>
            </div>
            <div class="shape shape_downer_left" id="shape_option_7">
                <div class="shape-title">Mobiliario a forma<br>con distanciamiento<br>según normas<br>antiCOVID-19</div>
                <div class="shape_hr"></div>
               
            </div>
             <div class="shape_angle"></div>
        </div><!-- option 7 -->

        <!-- option 8 -->
        <div class="button-content nivel_2 animate__animated" id="option_8" data-animate-h="40">
            <div class="button">
                <span>+</span>
            </div>
            <div class="shape shape_upper_right" id="shape_option_8">
                <div class="shape-title">Sistema de aislante térmico<br>de 3.5" (Owens Corning)<br>en muros de tablaroca.</div>
                <div class="shape_hr"></div>
               
            </div>
             <div class="shape_angle"></div>
        </div><!-- option 8 -->

        <!-- option 9 -->
        <div class="button-content nivel_1 animate__animated" id="option_9" data-animate-h="70">
            <div class="button">
                <span>+</span>
            </div>
            <div class="shape shape_downer_left" id="shape_option_9">
                <div class="shape-title">Panic Room</div>
                <div class="shape_hr"></div>
               
            </div>
             <div class="shape_angle"></div>
        </div><!-- option 9 -->

        <!-- option 10 -->
        <div class="button-content nivel_1 animate__animated" id="option_10" data-animate-h="70">
            <div class="button">
                <span>+</span>
            </div>
            <div class="shape shape_downer_left" id="shape_option_10">
                <div class="shape-title">Alfombra aislante</div>
                <div class="shape_hr"></div>
            </div>
             <div class="shape_angle"></div>
        </div><!-- option 10 -->

        <!-- option 11 -->
        <div class="button-content nivel_1 animate__animated" id="option_11" data-animate-h="40">
            <div class="button">
                <span>+</span>
            </div>
            <div class="shape shape_upper_right" id="shape_option_11">
                <div class="shape-title">Duela aislante</div>
                <div class="shape_hr"></div>
            </div>
             <div class="shape_angle"></div>
        </div><!-- option 11 -->

        <!-- option 12 -->
        <div class="button-content nivel_cimentacion animate__animated" id="option_12" data-animate-h="70">
            <div class="button">
                <span>+</span>
            </div>
            <div class="shape shape_downer_right" id="shape_option_12">
                <div class="shape-title">Pilas/Pilotes<br> para la cimentación</div>
                <div class="shape_hr"></div>
               
            </div>
             <div class="shape_angle"></div>
        </div><!-- option 12 -->
    </div>
</div>

<div class="middle-logos-cont">
    <div class="container">
        <a class="animate__animated animate__todos" href="nosotros/" target="_blank" rel="noopener noreferrer">Construimos con</a>
        <div class="logos animate__animated animate__todos">
            <img src="<?php echo get_template_directory_uri().'/img/procore.png'?>" alt="">
            <img src="<?php echo get_template_directory_uri().'/img/PMI-01.jpg'?>" alt="">
            <img src="<?php echo get_template_directory_uri().'/img/dunbradstreet.png'?>" alt="">
        </div>
    </div>
</div>
<div class="grid-container">
<?php 
    $showitems = get_option('posts_per_page');
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => $showitems,
    );

    $loop = new WP_Query($args);
?>

    <div class="grid-posts  animate__animated animate__todos">
        <?php
        if ($loop->have_posts()):
            while ( $loop->have_posts() ) : $loop->the_post();
            $thumbID = get_post_thumbnail_id( $post->ID );
            $imgDestacada = wp_get_attachment_url( $thumbID );
            ?>
            <a class="item" rel="nofollow noopener" href="<?php the_permalink();?>" style="background-image: url(<?php echo $imgDestacada; ?>);">
                <div class="overlay">
                    <div>
                        <div class="title"><?php the_title();?></div>
                        <div class="desc"><?php the_excerpt();?></div>
                    </div>
                </div>
                <div class="title-box">
                    <div class="title"><?php the_title();?></div>
                    <div class="desc"><?php the_excerpt();?> </div>
                </div>
            </a>
            <?php
            endwhile;
        endif;
        wp_reset_query();

        ?>
    </div>
    <div class="contact-block animate__animated">
        <div class="column animate__animated animate__todos">
            <div class="titlee">
                Convierte tu proyecto en realidad
            </div>
            <div class="desc animate__animated animate__todos">
                Trabajamos para desarrollar proyectos a la altura de nuestros clientes, mejorando la calidad de vida de la comunidad y respetando el entorno.
            </div>
        </div>
        <div class="column animate__animated animate__todos">
            <?php echo do_shortcode('[contact-form-7 id="92" title="Home Page"]')?>
        </div>
    </div>
</div>
<?php get_footer();?>
