<?php
/**
 * Loop Add to Cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product;

echo apply_filters( 'woocommerce_loop_add_to_cart_link',
	sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="%s product_type_%s">%s</a>',
		esc_url( $product->add_to_cart_url() ),         // href="[]"
		esc_attr( $product->id ),                       // data-product_id="[]"
		esc_attr( $product->get_sku() ),                // data-product_sku="[]"
		esc_attr( isset( $quantity ) ? $quantity : 1 ), // data-quantity="[]"
		$product->is_purchasable() && $product->is_in_stock()
			? 'btn btn-success add_to_cart_button'
			: 'btn btn-default',                        // class="button []
		esc_attr( $product->product_type ),             // class="[...]product_type_[]"
		$product->add_to_cart_text()                    // >[]</a>
	),
$product );
