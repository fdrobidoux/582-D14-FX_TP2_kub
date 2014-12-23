<?php
/**
 * Show messages
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! $messages ) return;
?>

<?php foreach ( $messages as $message ) : ?>
	<div class="woocommerce-info alert alert-info alert-dismissible" role="alert">
		<button class="close fui-cross" data-dismiss="alert"></button>
		<p><?php echo wp_kses_post( $message ); ?></p>
	</div>
<?php endforeach; ?>