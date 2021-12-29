<?php
/**
 * Template Name: Front Page
 */
get_header();?>

<div class="middle-logos-cont">
    <div class="container">
        <div class="title">
            Construimos con
        </div>
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

    <div class="contact-block">
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
