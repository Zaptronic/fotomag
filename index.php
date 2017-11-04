<?php get_header();?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        get_template_part('content');
    endwhile;
    else :
        echo "no content found";
    endif;
?>
<?php get_footer();?>
