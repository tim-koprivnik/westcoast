<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/wordpress-dev-snippets.php'           // Custom functions
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}



// function the_post_summary($length = 128, $string = '') {
//     if ($string) {
//         $content = $string;
//     } else {
//         $content = wp_strip_all_tags( get_the_content() );
//     }
//     if (strlen($content) > $length) {
//         $content = substr($content, 0, $length) . '...';
//     }
//     echo $content;
// }

function my_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'my_excerpt_length');

// remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

// function woocommerce_custom_add_to_cart_text() {
// 	return __('order this skip bin', 'woocommerce');
// }

// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Order this Skip Bin', 'woocommerce' ); 
}

// To change add to cart text on product archives(Collection) page
// add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
// function woocommerce_custom_product_add_to_cart_text() {
//     return __( 'Buy Now', 'woocommerce' );
// }