<?php get_header();?>
<?php
if (have_posts()) :
    ?>
    <h3><?php
        if ( is_category() ) {
            echo "category: ";
            single_cat_title();
        } elseif ( is_tag() ) {
            single_tag_title();
        } elseif ( is_author() ) {
            the_post();
            echo 'Author archives: ' . get_the_author();
            rewind_posts();
        } elseif ( is_day() ) {
            echo 'Daily: ' . get_the_date();
        } elseif ( is_month() ) {
            echo 'Monthly: ' . get_the_date('F Y');
        } elseif ( is_year() ) {
            echo 'Yearly: ' . get_the_date('Y');
        } else {
            echo "archives";
        }
    ?></h3>
    <?php
    while (have_posts()) : the_post();
        get_template_part('content');
    endwhile;
    else :
        echo "no content found";
    endif;
?>
<?php get_footer();?>
