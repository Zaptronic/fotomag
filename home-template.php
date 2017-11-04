<?php

/*
Template name: Homepage Template
*/

get_header();?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <article class="article">
            <!-- <h1><?php the_title(); ?></h1> -->
            <p><?php the_content(); ?></p>
        </article>
    <?php endwhile;

    else :
        echo "no content found";
endif;
?>
<p>Wp query here!</p>
<?php
$homepageposts = new WP_Query('cat=2&posts_per_page=3');

if ($homepageposts->have_posts()) :
    while ($homepageposts->have_posts()) : $homepageposts->the_post(); ?>
        <article class="post">
            <a href="<?php the_permalink()?>"><h1><?php the_title(); ?></h1></a>
            <p><?php the_time(); ?></p>
            <!-- <p><?php the_excerpt(); ?></p> -->
        </article>
    <?php endwhile;

    else :
        echo "no content found";
endif;

wp_reset_postdata();
?>

<?php get_footer();?>
