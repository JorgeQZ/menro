<?php

get_header();

/* Start the Loop */
?>

<div class="wrapper-sec">

    <div class="contenedor-general-entrada">
        <?php
            $post = get_post($id); 
            $content = apply_filters('the_content', $post->post_content); 
            echo $content;
        ?>
    </div>

    <div class="grid-container">
        <div class="titlee animate__animated">
            Blog
        </div>
        <div class="grid-posts">
            <a class="item animate__animated" rel="nofollow noopener" href="#" target="_blank">
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
            <a class="item animate__animated" rel="nofollow noopener" href="#" target="_blank">
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
            <a class="item animate__animated" rel="nofollow noopener" href="#" target="_blank">
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
            <a class="item animate__animated" rel="nofollow noopener" href="#" target="_blank">
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
            <a class="item animate__animated" rel="nofollow noopener" href="#" target="_blank">
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
            <a class="item animate__animated" rel="nofollow noopener" href="#" target="_blank">
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
    </div>

</div>

<?php get_footer(); ?>
