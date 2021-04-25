<?php

function woocommerce_support()
{
    add_theme_support('woocommerce');
}

function woo_wine_wrapper_start()
{
    echo '<main id="main" class="main" role="main">';
    echo '<div id="content" class="content">';
    echo '<div class="container"><div class="row"><div class="col-md-12">';
}

function woo_wine_wrapper_end()
{
    echo '</div></div></div></div></main>';
}

function woo_wine_remove_related_products($args)
{
    return array();
}

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['reviews'] );
    unset( $tabs['additional_information'] );

    return $tabs;
}

function woo_wine_rename_tabs($tabs)
{
    $tabs['description']['title'] = __('Tasting notes');
    return $tabs;
}

function woo_wine_change_product_description_tab_heading($title)
{
    return __('Tasting notes');
}

function disable_coupon_field_on_cart( $enabled ) {
    if ( is_cart() ) {
        $enabled = false;
    }
    return $enabled;
}

function disable_coupon_field_on_checkout( $enabled ) {
    if ( is_checkout() ) {
        $enabled = false;
    }
    return $enabled;
}

function select_variations_on_shop_page() {
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
    add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_single_add_to_cart', 30 );
}

function shop_page_format_price_range( $price, $from, $to ) {
    return wc_price( $from ) . ' / ' . wc_price( $to );
}

function add_extra_item_to_nav_menu( $items, $args ) {
    if( $args->menu == 'primary' ) {
        $cart_count = WC()->cart->cart_contents_count;
        $cart_url = wc_get_cart_url();
        $items .= '<li class="menu-item"><a class="cart-btn" href="' . $cart_url . '" title="My Basket">';
        $items .= '<i class="fas fa-shopping-cart"></i>';
        if ($cart_count > 0) {
            $items .= '<span class="cart-count">' . $cart_count . '</span>';
        }
        $items .= '</a></li>';
    }
    return $items;
}