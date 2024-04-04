<?php
/**
 * Template Name: Custom Account Template
 */
get_header();
?>

<main class="account-container">
    <h1 class="text-center">Your Account</h1>
    <section class="account-body">
        <?php echo do_shortcode('[woocommerce_my_account]'); ?>
    </section>
    </section>
</main>

<?php
get_footer();
?>
