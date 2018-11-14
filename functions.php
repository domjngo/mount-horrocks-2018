<?php
// Blank canvas functions

include 'inc/functions-global.php';
include 'inc/functions-admin.php';
include 'inc/functions-widgets.php';

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

function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "Welcome to the Members Area." ) . '
	<p>This shop is password protected. To view it please enter your password below:</p>
    <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
	<p><strong>Free freight</strong> for orders of 6 bottles or more.</p>
	<p><strong>You must be 18 years or older to enter the Mount Horrocks online shop. By clicking ‘Submit’ you are verifying this.</strong></p>
	<p>Having trouble logging in to purchase? Just phone us on (08) 8849 2243, or email <a href="mailto:sales@mounthorrocks.com">sales@mounthorrocks.com</a> and we can help.</p>
    ';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );