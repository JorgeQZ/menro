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
        .wrapper .sidebar-content:not(.inner) {
            background: #191919;
            z-index: 9999;
        }
    }
</style>

<div class="render-cont">
    <div class="image-cont">
        <img src="<?php echo get_template_directory_uri().'/img/render.png'?>" alt="">

        <div class="button-content button-content-top-right">
            <div class="button">
                <p>+</p>
            </div>
            <div class="shape">
                <div class="text">
                    <div class="title">Title</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe eius veniam aspernatur suscipit, dolores sint </div>
                </div>
            </div>

        </div>

        <div class="button-content button-content-bottom-left">
            <div class="button">
                <p>+</p>
            </div>
            <div class="shape">
                <div class="text">
                    <div class="title">Title</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe eius veniam aspernatur suscipit, dolores sint </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="middle-logos-cont animate__animated">
    <div class="container">
        <a href="nosotros/" target="_blank" rel="noopener noreferrer">Construimos con</a>
        <div class="logos">
            <img src="<?php echo get_template_directory_uri().'/img/procore.png'?>" alt="">
            <img src="<?php echo get_template_directory_uri().'/img/PMI-01.jpg'?>" alt="">
            <img src="<?php echo get_template_directory_uri().'/img/dunbradstreet.png'?>" alt="">
        </div>
    </div>
</div>
<div class="grid-container">
    <div class="grid-posts">
        <a class="item" rel="nofollow noopener" href="#" target="_blank">
            <div class="overlay">
                <div>
                    <div class="title">titulo</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                </div>
            </div>
            <div class="title-box">
                <div class="title">titulo</div>
                <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
            </div>
        </a>
        <a class="item" rel="nofollow noopener" href="#" target="_blank">
            <div class="overlay">
                <div>
                    <div class="title">titulo</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                </div>
            </div>
            <div class="title-box">
                <div class="title">titulo</div>
                <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
            </div>
        </a>
        <a class="item" rel="nofollow noopener" href="#" target="_blank">
            <div class="overlay">
                <div>
                    <div class="title">titulo</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                </div>
            </div>
            <div class="title-box">
                <div class="title">titulo</div>
                <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
            </div>
        </a>
        <a class="item" rel="nofollow noopener" href="#" target="_blank">
            <div class="overlay">
                <div>
                    <div class="title">titulo</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                </div>
            </div>
            <div class="title-box">
                <div class="title">titulo</div>
                <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
            </div>
        </a>
        <a class="item" rel="nofollow noopener" href="#" target="_blank">
            <div class="overlay">
                <div>
                    <div class="title">titulo</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                </div>
            </div>
            <div class="title-box">
                <div class="title">titulo</div>
                <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
            </div>
        </a>
        <a class="item" rel="nofollow noopener" href="#" target="_blank">
            <div class="overlay">
                <div>
                    <div class="title">titulo</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                </div>
            </div>
            <div class="title-box">
                <div class="title">titulo</div>
                <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
            </div>
        </a>
    </div>

    <div class="contact-block animate__animated">
        <div class="column">
            <div class="title">
                Convierte tu proyecto en realidad
            </div>
            <div class="desc">
                Trabajamos para desarrollar proyectos a la altura de nuestros clientes, mejorando la calidad de vida de la comunidad y respetando el entorno.
            </div>
        </div>
        <div class="column">
            <?php echo do_shortcode('[contact-form-7 id="92" title="Home Page"]')?>
        </div>
    </div>
</div>
<?php get_footer();?>
