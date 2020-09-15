<?php 
/** remove product title and change position to summary */
remove_action('woocommerce_single_product_summary','woocommerce_template_single_title',5);
add_action('woocommerce_single_product_summary', 'woocommerce_my_single_title',5);

if ( !function_exists( 'woocommerce_my_single_title' ) ) {
	function woocommerce_my_single_title() {
		the_title( '<h1 class="entry-title product-title">', '</h1>' );
	}
} 

/** remove shipping address fields in checkout */
add_filter('woocommerce_billing_fields','wpb_custom_billing_fields');
// ref - https://docs.woothemes.com/document/tutorial-customising-checkout-fields-using-actions-and-filters/
function wpb_custom_billing_fields( $fields = array() ) {

	unset($fields['billing_company']);
	unset($fields['billing_address_1']);
	unset($fields['billing_address_2']);
	unset($fields['billing_state']);
	unset($fields['billing_city']);
	unset($fields['billing_phone']);
	unset($fields['billing_postcode']);
	unset($fields['billing_country']);

	return $fields;
}

?>