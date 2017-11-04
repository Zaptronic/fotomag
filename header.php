<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewpost" content="width=device-width">
        <title><?php bloginfo('name') ?></title>
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    <header>
        <a href="<?php echo home_url(); ?>"><h2><?php bloginfo('name'); ?></h2></a>
        <p><?php bloginfo('description'); ?></p>

        <div class="search">
            <?php get_search_form(); ?>
        </div>
        
        <nav class="main_navigation">
            <?php
                $args = array(
                    'theme_location' => 'primary'
                );
            ?>
            <?php wp_nav_menu( $args ); ?>
        </nav>
    </header>
    <main class="main">
