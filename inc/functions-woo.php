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
