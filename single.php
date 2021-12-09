<?php

get_header();

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    the_content();
endwhile;

get_footer();
