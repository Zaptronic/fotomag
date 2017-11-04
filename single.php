<?php get_header();?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <article class="article">
            <h2><?php the_title(); ?></h2>
            <p><?php the_time('F jS, Y '); ?></p>
            <p>by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
            <p>posted in <?php
            $categories = get_the_category();
            $seperator = ", ";
            $output = '';

            if ($categories) {
                foreach ($categories as $category) {
                    if($category->cat_name != 'Uncategorized') {
                        $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name .  '</a>' . $seperator;
                    }
                }
            }

            echo trim($output, $seperator);
            ?></p>
            <?php the_post_thumbnail('fullimagesize') ?>
            <p><?php the_content(); ?></p>
            <div class="nextprev">
                <?php next_post_link( '<strong>%link</strong>' ); ?>
                <?php previous_post_link( '<strong>%link</strong>' ); ?>
            </div>
        </article>
    <?php endwhile;

    else :
        echo "no content found";
    endif;
?>
<div class="sidebar">
    <?php dynamic_sidebar('sidebar1'); ?>
</div>
<?php get_footer();?>
