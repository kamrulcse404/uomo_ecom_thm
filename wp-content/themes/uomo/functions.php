<?php

/* --------------Post Thumbnails Add-------------- */

add_theme_support('post-thumbnails');
set_post_thumbnail_size(600, 337, true);
add_image_size('single-thumbnail', 600, 337, true);

// include title & js_css  
add_theme_support('title-tag');

add_theme_support('woocommerce');


// redux Framework //
require_once('lib/framework/ReduxCore/framework.php');
require_once('lib/framework/sample/config.php');



//cmb2
require_once('metabox/init.php');
require_once('metabox/functions.php');



// custom post type functions 
require_once('functions/custom-post-type.php');


// // Add the product to the cart when the website loads
// function add_new_product() {
//     // Check if WooCommerce is active
//     if ( class_exists( 'WooCommerce' ) ) {
//         // Get the product ID you want to add to the cart

//         $product_id = 23;  

//         // Check if the product ID is valid
//         if ( wc_get_product( $product_id ) ) {
//             // Add the product to the cart
//             WC()->cart->add_to_cart( $product_id, 1 );
//         }
//     }
// }

// // Hook the function to the 'wp' action, which is triggered when WordPress is fully loaded
// add_action( 'wp', 'add_new_product');