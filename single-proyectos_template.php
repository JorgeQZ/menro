<?php
/**
 * Template Single Proyecto
 */
get_header();?>
<div class="wrapper-sec">
    <?php
    $galeria = get_field('galeria');
    if($galeria != null){
        echo '<div class="owl-carousel owl-theme galeria-proyectos">';
        foreach($galeria as $slide){
            echo wp_get_attachment_image($slide['imagen'], 'gal_project');

        }
        echo '</div>';
    }

    echo '<div class="title">';
    the_title();
    echo '</div>';

    if(have_posts()):
        while(have_posts()):
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
</div>
<?php get_footer();?>