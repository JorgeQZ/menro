<?php
/**
 * Template Name: Proyectos
 */

 get_header();
?>


<div class="title" data-text=" <?php the_title(); ?>"><?php the_title(); ?></div>

<?php
$tax_proy_sust = 'categoria_proyectos';
$args_cat = array(
    'taxonomy' => $tax_proy_sust,
    'hide_empty' => 1,
    'orderby' => 'id',
    'order' => 'ASC'
);
$cats = get_categories($args_cat);
// echo '<pre>';
// print_r($cats);
// echo '</pre>';

if($cats):
    echo  '<div class="tabs-options">';
    foreach($cats as $item):
        ?>
<div class="item"><?php echo _e($item->name, 'menro') ?></div>
<?php
    endforeach;
    echo '</div>';
    wp_reset_query();
endif;
?>
