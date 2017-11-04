<?php
/*
 * Template Name: Two page segmenst layout
 * Template Post Type: post
 */
get_header();?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        get_template_part('twopagecontent');
    endwhile;

    else :
        echo "no content found";
    endif;
?>
<?php get_footer();?>
