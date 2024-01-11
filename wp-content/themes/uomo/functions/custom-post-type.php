<?php 

// Register Custom Taxonomy
function custom_taxonomy_product_brand() {

    $labels = array(
        'name'                       => _x( 'Product Brands', 'Taxonomy General Name', 'uomo' ),
        'singular_name'              => _x( 'Product Brand', 'Taxonomy Singular Name', 'uomo' ),
        'menu_name'                  => __( 'Product Brands', 'uomo' ),
        'all_items'                  => __( 'All Product Brands', 'uomo' ),
        'parent_item'                => __( 'Parent Product Brand', 'uomo' ),
        'parent_item_colon'          => __( 'Parent Product Brand:', 'uomo' ),
        'new_item_name'              => __( 'New Product Brand Name', 'uomo' ),
        'add_new_item'               => __( 'Add New Product Brand', 'uomo' ),
        'edit_item'                  => __( 'Edit Product Brand', 'uomo' ),
        'update_item'                => __( 'Update Product Brand', 'uomo' ),
        'view_item'                  => __( 'View Product Brand', 'uomo' ),
        'separate_items_with_commas' => __( 'Separate product brands with commas', 'uomo' ),
        'add_or_remove_items'        => __( 'Add or remove product brands', 'uomo' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'uomo' ),
        'popular_items'              => __( 'Popular Product Brands', 'uomo' ),
        'search_items'               => __( 'Search Product Brands', 'uomo' ),
        'not_found'                  => __( 'Not Found', 'uomo' ),
        'no_terms'                   => __( 'No product brands', 'uomo' ),
        'items_list'                 => __( 'Product Brands list', 'uomo' ),
        'items_list_navigation'      => __( 'Product Brands list navigation', 'uomo' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true, // Set to true if you want hierarchical taxonomy like categories
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'product_brand', array( 'product' ), $args );

}
add_action( 'init', 'custom_taxonomy_product_brand', 0 );
