<?php

get_header();

/* Start the Loop */
?>

<style>
    .thumbnail_banner{
        position: relative;
    }
    .wrapper .thumbnail_banner .title_banner, .wrapper .thumbnail_banner .subtitle_banner{
        z-index: 9;
    }
    .thumbnail_banner:after {
        content: '';
        width: 100%;
        /* height: 140px; */
        height: 100%;
        background: black;
        position: absolute;
        top: 0;
        left: 0;
        background: #020024;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.02) 90%);
    }
</style>

<div class="wrapper-sec">

    <div class="contenedor-general-entrada">
        <?php
            $post = get_post($id); 
            $content = apply_filters('the_content', $post->post_content); 
            echo $content;
        ?>
    </div>

    <div class="grid-container">
        <div class="title animate__animated">
            Blog
        </div>

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

                    <a class="item animate__animated" rel="nofollow noopener" href="<?php the_permalink();?>" style="background-image: url(<?php echo $imgDestacada; ?>);">
                        <div class="overlay">
                            <div>
                                <div class="titlee"><?php the_title();?></div>
                                <div class="desc"><?php the_excerpt();?></div>
                            </div>
                        </div>
                        <div class="title-box" style="width: 100%;" >
                            <div class="titlee"><?php the_title();?></div>
                            <div style="display: none;" class="desc"><?php the_excerpt();?> </div>
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
    <!--
        <div class="grid-posts">
            <a class="item animate__animated" rel="nofollow noopener" href="#" target="_blank">
                <div class="overlay">
                    <div>
                        <div class="titlee">titulo</div>
                        <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                    </div>
                </div>
                <div class="title-box">
                    <div class="titlee">titulo</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                </div>
            </a>
            <a class="item animate__animated" rel="nofollow noopener" href="#" target="_blank">
                <div class="overlay">
                    <div>
                        <div class="titlee">titulo</div>
                        <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                    </div>
                </div>
                <div class="title-box">
                    <div class="titlee">titulo</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                </div>
            </a>
            <a class="item animate__animated" rel="nofollow noopener" href="#" target="_blank">
                <div class="overlay">
                    <div>
                        <div class="titlee">titulo</div>
                        <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                    </div>
                </div>
                <div class="title-box">
                    <div class="titlee">titulo</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                </div>
            </a>
            <a class="item animate__animated" rel="nofollow noopener" href="#" target="_blank">
                <div class="overlay">
                    <div>
                        <div class="titlee">titulo</div>
                        <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                    </div>
                </div>
                <div class="title-box">
                    <div class="titlee">titulo</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                </div>
            </a>
            <a class="item animate__animated" rel="nofollow noopener" href="#" target="_blank">
                <div class="overlay">
                    <div>
                        <div class="titlee">titulo</div>
                        <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                    </div>
                </div>
                <div class="title-box">
                    <div class="titlee">titulo</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                </div>
            </a>
            <a class="item animate__animated" rel="nofollow noopener" href="#" target="_blank">
                <div class="overlay">
                    <div>
                        <div class="titlee">titulo</div>
                        <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                    </div>
                </div>
                <div class="title-box">
                    <div class="titlee">titulo</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo laboriosam modi </div>
                </div>
            </a>
        </div>
    -->
    </div>

</div>

<?php get_footer(); ?>
