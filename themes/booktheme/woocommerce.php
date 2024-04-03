<!doctype html>
<html lang="en">
    <head>
        <?php
            get_header();
        ?>
    </head>
    <body   <?php body_class(); ?>>

        <main class="woocommerce">
            <?php woocommerce_content(); ?>
        </main>

    <?php get_footer(); ?>
    </body>
</html>