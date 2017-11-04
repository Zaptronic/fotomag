<?php get_header();?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <article class="article">
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        </article>
    <?php endwhile;

    else :
        echo "no content found";
    endif;
?>
<?php get_footer();?>
