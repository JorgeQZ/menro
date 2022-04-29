<?php
/**
 * Template Name: Front Page
 */
get_header();


?>

<style>
    
    @media screen and (min-width: 1024px) {
        
        .clip #sidebar{
            /*display: none;*/
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

<div class="middle-logos-cont">
    <div class="container">
        <a class="animate__animated" href="nosotros/" target="_blank" rel="noopener noreferrer">Construimos con</a>
        <div class="logos animate__animated">
            <img src="<?php echo get_template_directory_uri().'/img/procore.png'?>" alt="">
            <img src="<?php echo get_template_directory_uri().'/img/PMI-01.jpg'?>" alt="">
            <img src="<?php echo get_template_directory_uri().'/img/dunbradstreet.png'?>" alt="">
        </div>
    </div>
</div>
<div class="grid-container">
<!--
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
-->

<?php 
    global $wp_query;
    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
    $range = 2;
    $showitems = get_option('posts_per_page');
    $args = array(
        'paged' => $paged,
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => $showitems,
    );

    $loop = new WP_Query($args);
?>

    <div class="grid-posts">
        <?php
    if ($loop->have_posts()):
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>
                    <?php  
                        $thumbID = get_post_thumbnail_id( $post->ID );
                        $imgDestacada = wp_get_attachment_url( $thumbID );
                    ?>

                    <a class="item" rel="nofollow noopener" href="<?php the_permalink();?>" target="_blank" style="background-image: url(<?php echo $imgDestacada; ?>);">
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
    $GLOBALS['wp_query']->max_num_pages = $loop->max_num_pages;
    $pages = $loop->max_num_pages;
    ?>
    </div>

    <div class="contact-block animate__animated">
        <div class="column">
            <div class="titlee">
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
