<?php
    get_header();
?>

<main>
    <section class="shop-masthead">
        <h1 class="text-center mt-4 mb-4">Explore Our Courses</h1>
    </section>

    <section class="shop-body">
        <?php
            do_action('woocommerce_before_shop_loop');
            echo do_shortcode('[products limit="6" columns="3"]');
            do_action('woocommerce_after_shop_loop')
        ?>

    </section>
</main>

<?php
    get_footer();
?>