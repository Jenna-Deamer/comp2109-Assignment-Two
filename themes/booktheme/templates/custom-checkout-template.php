<?php
/**
 * Template Name: Custom Checkout Template
 */
get_header();
?>

<main class="checkout-container">
    <h1 class="text-center">Checkout</h1>
<section class="checkout-body">
    <?php
    // Output WooCommerce checkout form

    echo do_shortcode('[woocommerce_checkout]');

    ?>
</section>
</main>

<?php
get_footer();
?>
