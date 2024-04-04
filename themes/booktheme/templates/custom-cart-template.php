<?php
/**
 * Template Name: Custom Cart Template
 */
    get_header();
?>

<main class="cart-container">
    <h1 class="text-center">Your Cart</h1>

    <section class="cart-body">
        <?php
        // Display WooCommerce cart content
        echo do_shortcode('[woocommerce_cart]');
        ?>
    </section>

</main>

<?php
    get_footer();
?>
