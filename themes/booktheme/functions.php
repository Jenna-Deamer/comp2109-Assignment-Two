<?php
//nav setup
function bookTheme_nav_setup(){
    register_nav_menus(array(
        'header' => 'Header menu',
        'footer' => 'Footer menu'
    ));
}
add_action( 'after_setup_theme','bookTheme_nav_setup');

//add support for featured image for posts
add_theme_support( 'post-thumbnails' );

//footer setup

//product-cards shortcode
/*
function bookCards_shortcode() {
    $products_per_page = is_front_page() ? 3 : 8; // Limit to 3 on the homepage, otherwise default to 8
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => $products_per_page,
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) : $query->the_post();
            // Enable use of product variable
            global $product;

            // Get categories
            $categories = get_the_terms( get_the_ID(), 'product_cat' );

            // Get tags
            $tags = get_the_terms( get_the_ID(), 'product_tag' );

            // Get image
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
            ?>
            <article class="book-card">
                <div class="book-card-body">
                    <a href="<?php echo get_permalink(); ?>" class="card-heading"> <h3><?php echo get_the_title(); ?></h3> </a>


                    <div class="book-image">  <img src="<?php echo $image[0]; ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                    </div>

                    <div class="book-card-description">
                        <p><?php echo wp_kses_post($product->get_short_description()); ?></p>
                        <p>Categories:
                            <?php
                            //loop through all category & tags, for grey bg styles
                            foreach ($categories as $category) {
                                echo '<a href="' . get_term_link($category) . '" class="category-box">' . $category->name . '</a>';
                            }
                            ?>
                        </p>
                        <div class="tags-wrapper">
                            <p>Tags:
                                <?php
                                foreach ($tags as $tag) {
                                    echo '<a href="' . get_term_link($tag) . '" class="tag-box">' . $tag->name . '</a>';
                                }
                                ?>
                            </p>
                    </div>
                </div>


                    <div class="book-card-footer">
                        <p><strong>Price:</strong> <?php echo $product->get_price_html(); ?></p>

                        <button class="book-card-button" data-product_id="<?php echo $product->get_id(); ?>"> Add to Cart</button>
                    </div>
                </div>

            </article>
        <?php
        endwhile;
        wp_reset_postdata(); // Reset the global post data
    } else {
        // No products found
        echo 'No products found';
    }
}
*/

//add book_card shortcode functionality
//add_shortcode( 'book_cards', 'bookCards_shortcode' );



// adding woocommerce support to theme
function customtheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );
function enqueue_wc_cart_fragments() { wp_enqueue_script( 'wc-cart-fragments' ); }
add_action( 'wp_enqueue_scripts', 'enqueue_wc_cart_fragments' );

?>

<?php
//PHP WooComm default hooks
//    add_action('woocommerce_before_single_product_summary',function (){
//       printf('<h4>Action Hook Test</h4>');
//    });
    //remove product template information
    remove_action('woocommerce_single_product_summary','woocommerce_template_single_title',5);
    remove_action('woocommerce_single_product_summary','woocommerce_template_single_price',10);
    remove_action('woocommerce_single_product_summary','woocommerce_template_single_add_to_cart',30);
    remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta',40);

    remove_action('woocommerce_after_single_product_summary','woocommerce_output_product_data_tabs',10);
    remove_action('woocommerce_after_single_product_summary','woocommerce_upsell_display',15);
    remove_action('woocommerce_after_single_product_summary','woocommerce_output_related_products',20);


    remove_action('woocommerce_product_additional_information','wc_display_product_attributes',10);

    remove_action('woocommerce_single_variation','woocommerce_single_variation',10);


    //add information back in a different order
    add_action('woocommerce_single_product_summary','woocommerce_template_single_title',10);
    add_action('woocommerce_single_product_summary','woocommerce_template_single_price',15);
    add_action('woocommerce_single_product_summary','woocommerce_template_single_add_to_cart',15);

    add_action('woocommerce_single_product_summary','woocommerce_template_single_meta',15);
    add_action('woocommerce_after_single_product_summary','woocommerce_output_related_products',10);
    add_action('woocommerce_after_single_product_summary','woocommerce_output_product_data_tabs',15);
    add_action('woocommerce_product_additional_information','wc_display_product_attributes',15);

    //change shop title on shop page
    add_filter('woocommerce_page_title', 'custom_shop_page_title');

function custom_shop_page_title($title) {
    // Change the default title "Shop"
    $new_title = 'Explore Our Courses';
    return $new_title;
}

function web_add_woocommerce_support(){
        add_theme_support('woocommerce');
    }
    add_action('after_setup_theme','web_add_woocommerce_support');


    ?>

