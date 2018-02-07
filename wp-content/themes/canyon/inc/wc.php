<?php

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
   // add_theme_support( 'wc-product-gallery-lightbox' );
}

add_filter('woocommerce_output_related_products_args', 'jk_related_products_args');
function jk_related_products_args($args)
{
    $args['posts_per_page'] = 4; // 4 related products
    $args['columns'] = 4; // arranged in 2 columns
    return $args;
}
//Display 24 products on archive pages
add_filter('loop_shop_per_page', create_function('$cols', 'return 10;'), 20);

// add this code directly, no action needed
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);


remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
add_action('woocommerce_before_single_product_summary', 'woocommerce_output_product_data_tabs', 30);

add_filter('woocommerce_product_description_heading', 'remove_product_description_heading');
function remove_product_description_heading()
{
    return '';
}

add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);
function woo_remove_product_tabs($tabs)
{

    //unset( $tabs['description'] );  
    unset($tabs['reviews']);          // Remove the reviews tab
    //unset( $tabs['additional_information'] );   // Remove the additional information tab

    return $tabs;

}

add_filter('woocommerce_product_tabs', 'woo_book_tab');
function woo_book_tab($tabs)
{
  
  // Adds the new tab
   
        $nameTab = __('Book Now', 'woocommerce');
    
    $tabs['book'] = array(
        'title' => $nameTab,
        'priority' => 70,
        'callback' => 'woo_book_tab_content'
    );

    return $tabs;

}
function woo_book_tab_content()
{

  //echo '<h2>New Product Tab</h2>';
  //echo '<p>Here\'s your new product tab.</p>';
    //woocommerce_get_template('single-product/price.php');
    do_action('woocommerce_single_product_summary');

}

// Hook in
add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields($fields)
{
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_company']);

    $fields['order']['order_comments']['placeholder'] = 'e.g. child seats, Pick up';
    $fields['order']['order_comments']['label'] = 'Important Notes';


    return $fields;
}

