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
	<div class="woocommerce-message alert alert-success alert-dismissible" role="alert">
		<button class="close fui-cross" data-dismiss="alert"></button>
		<strong>Succès !</strong>
		<p><?php echo wp_kses_post( $message );?></p>
	</div>
<?php endforeach; ?>
