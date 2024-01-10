<?php
get_header();

// Start the WooCommerce loop
if (have_posts()) :
?>
    <div class="product-card-wrapper">
        <?php
        while (have_posts()) :
            the_post();

            // Get the product ID
            $product_id = get_the_ID();

            // Get product data
            $product = wc_get_product($product_id);

            // Get product image URL
            $image_url = get_the_post_thumbnail_url($product_id, 'full');

            // Output product card HTML dynamically
        ?>
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                    <!-- Your existing code for Swiper slider and Add to Cart button with dynamic image URL -->
                    <img loading="lazy" src="<?php echo esc_url($image_url); ?>" width="330" height="400" alt="<?php echo esc_attr(get_the_title()); ?>" class="pc__img">
                </div>

                <div class="pc__info position-relative">
                    <!-- Display product category -->
                    <p class="pc__category"><?php echo esc_html(get_the_terms($product_id, 'product_cat')[0]->name); ?></p>
                    <!-- Display product title with link -->
                    <h6 class="pc__title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a></h6>
                    <!-- Display product price -->
                    <div class="product-card__price d-flex">
                        <span class="money price"><?php echo $product->get_price_html(); ?></span>
                    </div>
                    <!-- Your existing code for reviews and wishlist button -->
                </div>
            </div>
        <?php
        endwhile;
        ?>
    </div>
<?php
endif;

get_footer();
?>