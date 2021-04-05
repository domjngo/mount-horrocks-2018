<?php
// Functions

include 'inc/functions-global.php';
include 'inc/functions-admin.php';
include 'inc/functions-widgets.php';
include 'inc/functions-wines.php';
include 'inc/functions-woo.php';
include 'inc/functions-temp.php';

add_theme_support( 'post-thumbnails' );

add_action( 'wp_enqueue_scripts', 'bc_styles' );
add_action( 'wp_enqueue_scripts', 'bc_scripts' );
add_action( 'after_setup_theme', 'register_bc_menu' );
add_action( 'admin_menu', 'mount_settings_menu' );
add_action( 'widgets_init', 'mh_widgets_init' );

add_filter( 'excerpt_more', 'new_excerpt_more' );
add_filter( 'wp_title', 'bc_wp_title', 10, 2 );
add_filter( 'the_content', 'add_image_responsive_class' );
add_filter( 'next_posts_link_attributes', 'posts_link_attributes' );
add_filter( 'previous_posts_link_attributes', 'posts_link_attributes' );

add_shortcode( 'wine', 'wine_shortcode' );

add_action('after_setup_theme', 'woocommerce_support');
add_action('woocommerce_before_main_content', 'woo_wine_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'woo_wine_wrapper_end', 10);

add_filter('woocommerce_related_products_args', 'woo_wine_remove_related_products', 10);
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
add_filter('woocommerce_product_tabs', 'woo_wine_rename_tabs', 98);
add_filter('woocommerce_product_description_heading', 'woo_wine_change_product_description_tab_heading', 10, 1);

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

@ini_set( 'upload_max_size' , '6M' );
@ini_set( 'post_max_size', '6M');
@ini_set( 'max_execution_time', '100' );

