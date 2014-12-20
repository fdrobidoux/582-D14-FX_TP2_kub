<?php
/**
 * Empty cart page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

wc_print_notices();

?>

<div class="panel panel-primary cart-empty">
	<div class="panel-heading">
		<h3 class="panel-title">
			<?php _e( 'Your cart is currently empty.', 'woocommerce' ) ?>
		</h3>
	</div>
	<div class="panel-body">
		<a class="btn btn-info wc-backward return-to-shop" href="<?php echo apply_filters( 'woocommerce_return_to_shop_redirect', get_permalink( wc_get_page_id( 'shop' ) ) ); ?>"><i class="fui-tag"></i> <?php _e( 'Return To Shop', 'woocommerce' ) ?></a>
	</div>
</div>



<?php do_action( 'woocommerce_cart_is_empty' ); ?>

