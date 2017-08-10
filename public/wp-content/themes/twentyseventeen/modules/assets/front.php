<?php
add_action('wp_print_styles', function () {
    wp_enqueue_style('modules', get_asset('css/front.css'), array(), get_rev());
});

add_action('wp_enqueue_scripts', function (){
    wp_enqueue_script('cart-js', get_asset('js/cart.js'), array('jquery'), get_rev(), true);
});
