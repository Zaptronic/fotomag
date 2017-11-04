</main>
<footer>
    <p>footer</p>
    <nav class="footer_navigation">
        <?php
            $args = array(
                'theme_location' => 'footer'
            );
        ?>
        <?php wp_nav_menu( $args ); ?>
    </nav>
</footer>
<?php wp_footer(); ?>
    </body>
</html>
