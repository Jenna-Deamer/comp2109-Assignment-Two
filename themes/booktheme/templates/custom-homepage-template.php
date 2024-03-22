<?php
/**
 * Template Name: Custom Homepage
 * Template Post Type: page
 */
get_header();
?>

<main>
    <section class="hero-section" style="background-image: url('<?php echo wp_kses_post(get_field('hero_image')); ?>')">
        <div class="hero-content">
            <h1><?php echo esc_html(get_field('hero_header')); ?></h1>
            <a href="#"><?php esc_html_e('View Catalog', 'text-domain'); ?></a>
        </div>

    </section>

    <section class="container">

    </section>
</main>

<?php
get_footer();
?>