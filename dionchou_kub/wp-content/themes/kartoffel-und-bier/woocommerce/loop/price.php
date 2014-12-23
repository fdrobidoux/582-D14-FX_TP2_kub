<?php
/**
 * Loop Price
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product;
?>

<?php if ( $price_html = $product->get_price_html() ) { ?>
	<!--prodict catalog-->
	<div class="row">
		<div class="col-xs-12">
			<div class="price"><?php echo $price_html; ?></div>
		</div>
	</div>
<?php } ?>