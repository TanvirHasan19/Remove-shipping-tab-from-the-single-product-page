add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_more_seller_product_tab', 98 );
    function wcs_woo_remove_more_seller_product_tab($tabs) {
    unset($tabs['shipping']);
    return $tabs;
}
