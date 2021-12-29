<?php

get_header();

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    ?>
<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
</article>
<?php
endwhile;

get_footer();
