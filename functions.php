<?php
//resource setup
function importresources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

function themesetup() {
    // add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, true);
    add_image_size('fullimagesize', 920, 460, array('left', 'top'));

    //navigation setup
    register_nav_menus(array(
        'primary' => __('primary menu'),
        'footer' => __('footer menu'),
    ));

    //set filter for multiple featured images
    add_filter( 'kdmfi_featured_images', function( $featured_images ) {
        $args = array(
            'id' => 'featured-image-2',
            'desc' => '',
            'label_name' => 'Featured Image 2',
            'label_set' => 'Set featured image 2',
            'label_remove' => 'Remove featured image 2',
            'label_use' => 'Set featured image 2',
            'post_type' => array( 'post' ),
        );

        $featured_images[] = $args;

        return $featured_images;
    });
}

//customize excerpt word count length
function custom_excerpt_length() {
    return 25;
}


//widgets setup
function widgetssetup() {
    register_sidebar( array(
        'name' => 'Sidebar',
        'id' => 'sidebar1'
    ));
}



add_action('wp_enqueue_scripts', 'importresources');
add_action('after_setup_theme', 'themesetup');
add_action('widgets_init', 'widgetssetup');
add_filter('excerpt_length', 'custom_excerpt_length');
?>
