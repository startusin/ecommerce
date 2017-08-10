<?php
function woocommerce_clear_cart($item) {
    WC()->cart->empty_cart();
    return $item;
}

add_action( 'woocommerce_add_cart_item_data', 'woocommerce_clear_cart' );
