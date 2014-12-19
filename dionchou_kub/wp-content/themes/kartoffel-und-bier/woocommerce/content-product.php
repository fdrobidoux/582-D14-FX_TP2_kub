<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
$classes[] = "col-xs-8";
$classes[] = "col-sm-6";
$classes[] = "col-md-3";
$classes[] = "col-lg-2";
$classes[] = "col-xs-offset-2";
$classes[] = "col-sm-offset-0";

?>
<div <?php post_class( $classes ); ?>>
	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
	<div class="well well-sm">
		<a href="<?php the_permalink(); ?>">
			<?php
				/**
				 * woocommerce_before_shop_loop_item_title hook
				 *
				 * @hooked woocommerce_show_product_loop_sale_flash - 10
				 * @hooked woocommerce_template_loop_product_thumbnail - 10
				 */
				// do_action( 'woocommerce_before_shop_loop_item_title' );
				wc_get_template( 'loop/sale-flash.php' );
				echo woocommerce_get_product_thumbnail();
			?>

			<p class="product_title"><?php the_title(); ?></p>
		</a>
		<?php
			/**
			 * woocommerce_after_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 10
			 */
			// do_action( 'woocommerce_after_shop_loop_item_title' );
			wc_get_template( 'loop/rating.php' );
		?>
		<div class="btn-group">
			<?php
				wc_get_template( 'loop/price.php' );
				wc_get_template( 'loop/add-to-cart.php' );
			?>
		</div>
	</div>

</div>