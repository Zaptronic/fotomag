<article class="article<?php if ( has_post_thumbnail() ){
    ?> has-thumbnail<?php } ?>">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_time('F jS, Y '); ?></p>

    <?php if ( is_search() ) {?>

    <?php } else { ?>
        <p>by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
    <?php }

    if ( is_front_page() ) {

    } else { ?>
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
    }
    echo trim($output, $seperator);
    ?></p>
    <a href="<?php the_permalink()?>">
        <?php the_post_thumbnail('small-thumbnail') ?>
    </a>
    <p><?php echo get_the_excerpt(); ?>
        <a href="<?php the_permalink()?>">read more</a>
    </p>

</article>
