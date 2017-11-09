<?php
$classes =  array(
    'two-page-article',
    'two-page-grid',
);
$picturecount = 0;
?>
<article <?php post_class( $classes ); ?>>
    <?php
    $gridtype = get_post_meta( $post->ID,'A-page-section', true );
    $gridconfig = get_post_meta( $post->ID, 'A-grid-config', true);

    if ($gridtype == 'picture') { ?>
        <div class="A-page-section picture-grid">
    		<div class="picture-grid--item picture-grid--<?php echo $gridconfig?>">
                    <?php the_post_thumbnail('fullimagesize'); $picturecount++; ?>
            </div>
    	</div>
    <?php } elseif ($gridtype == 'text') { ?>
        <div class="A-page-section text-grid">
            <div class="text-grid--item">
                <p><?php the_content(); ?></p>
            </div>
            <div class="text-grid--item2">
                <p><?php the_content(); ?></p>
            </div>
        </div>
    <?php } else { ?>
        <p> please select a grid type first</p>
    <?php }?>

    <?php
    $gridtype = get_post_meta( $post->ID,'B-page-section', true );
    $gridconfig = get_post_meta( $post->ID, 'B-grid-config', true);

    if ($gridtype == 'picture') { ?>
        <div class="B-page-section picture-grid">
            <div class="picture-grid--item picture-grid--<?php echo $gridconfig?>">
                    <?php
                    if ($picturecount !== 0) {
                        kdmfi_the_featured_image( 'featured-image-2', 'full' );
                    } else {
                        the_post_thumbnail('fullimagesize');
                    }?>
            </div>
        </div>
    <?php } elseif ($gridtype == 'text') { ?>
        <div class="B-page-section text-grid">
            <div class="text-grid--item">
                <p><?php the_content(); ?></p>
            </div>
            <div class="text-grid--item2">
                <p><?php the_content(); ?></p>
            </div>
        </div>
    <?php } else { ?>
        <p> please select a grid type first</p>
    <?php }?>
</article>




<div class="nextprev">
    <?php next_post_link( '<strong>%link</strong>' ); ?>
    <?php previous_post_link( '<strong>%link</strong>' ); ?>
</div>
