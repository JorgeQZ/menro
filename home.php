<?php get_header();

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

<div class="wrapper-sec">

    <div class="blog-container">
        <div class="grid-container">
            <div class="grid-posts">
                <?php
if ($loop->have_posts()):
    while ($loop->have_posts()):
        $loop->the_post();
        ?>
                <a class="post-item animate__animated" rel="nofollow noopener" href="<?php the_permalink();?>">
                    <img src="<?php echo get_template_directory_uri() . '/img/object.jpg'; ?>" alt="">
                    <div class="title-box">
                        <div>
                            <div class="title"><?php the_title();?></div>
                            <div class="desc">
                                <?php the_excerpt();?>
                            </div>
                        </div>
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

            <div class="pagination-container">
                <?php
for ($i = 1; $i <= $pages; $i++) {
    if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
        if ($paged == $i):
            echo "<span class='item current'>" . $i . "</span>";
        else:
            echo "<a href='" . get_pagenum_link($i) . "' class='item'>" . $i . "</a>";
        endif;
    }
}
?>
            </div>
        </div>
    </div>

</div>

<?php get_footer();?>
