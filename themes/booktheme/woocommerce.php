<!doctype html>
<html lang="en">
    <head>
        <?php
            get_header();
        ?>
    </head>
    <body   <?php body_class(); ?>>

        <main class="woocommerce">

            <section class="shop-body">
                <?php
                // Output WooCommerce content
                woocommerce_content();
                ?>
            </section>
        </main>

    <?php get_footer(); ?>
    </body>
</html>