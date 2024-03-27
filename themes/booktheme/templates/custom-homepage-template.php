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
            <a class="home-button" <?php echo esc_url(get_permalink(get_option('woocommerce_shop_page_id'))); ?>"><?php echo esc_html(get_field('hero_button_text')); ?></a>
        </div>

    </section>


    <section class="about-section">
        <div class="about-container">
            <article class="about-content">
                <h2><?php echo esc_html(get_field('about_section_header')); ?></h2>
                <p><?php echo esc_html(get_field('about_section_paragraph')); ?></p>
            </article>
            <article class="about-image">
                <?php
                // Get the ACF image URL
                $about_section_image_url = get_field('about_section_image');
                //display
                echo '<img src="' . esc_url($about_section_image_url) . '" alt="About Section Image">';
                ?>
            </article>
        </div>
    </section>


    <section class="feature-section">
         <h2 class="text-center pb-4"><?php echo esc_html(get_field('featured_section_header')); ?></h2>
        <div class="book-cards-container">
            <?php echo do_shortcode('[book_cards]'); ?>
        </div>
        <div class="feature-section-footer">
            <h3><?php echo esc_html(get_field('featured_section_sub_header')); ?></h3>
            <a class="home-button" <?php echo esc_url(get_permalink(get_option('woocommerce_shop_page_id'))); ?>"><?php echo esc_html(get_field('featured_section_button_text')); ?></a>
        </div>

    </section>
</main>

<?php
get_footer();
?>