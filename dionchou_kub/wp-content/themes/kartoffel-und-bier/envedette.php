<?php
/*
Template Name: En Vedette
*/

/**
 * Project: kartoffel-und-bier
 * User:    Félix Dion Robidoux
 * Date:    02/12/2014
 * Time:    7:59 PM
 */

get_header();

$args = array(
	'post_type' => 'product',
	'meta_query' => array(
		'relation' => 'OR',
		array( // Simple products type
			'key' => '_sale_price',
			'value' => 0,
			'compare' => '>',
			'type' => 'numeric'
		),
		array( // Variable products type
			'key' => '_min_variation_sale_price',
			'value' => 0,
			'compare' => '>',
			'type' => 'numeric'
		)
	)
);
$onsale = new WP_Query( $args );


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'shop' ); ?>

<?php
/**
 * woocommerce_before_main_content hook
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action( 'woocommerce_before_main_content' );
if($onsale->have_posts()) {
?>

<?php while ( $onsale->have_posts() ) : $onsale->the_post(); ?>
	<div class="row">
	<?php wc_get_template_part( 'content', 'single-product' ); ?>
	</div>
<?php endwhile; // end of the loop. ?>

<?php
}
else {
?>
<div class="panel panel-primary cart-empty">
	<div class="panel-heading">
		<h3 class="panel-title">
			<?="Désolé, nous n'avons actuellement aucune promotions!"  ?>
		</h3>
	</div>
	<div class="panel-body">
		<a class="btn btn-info wc-backward return-to-shop" href="<?php echo apply_filters( 'woocommerce_return_to_shop_redirect', get_permalink( wc_get_page_id( 'shop' ) ) ); ?>"><i class="fui-tag"></i><?="Aller à la boutique"?></a>
	</div>
</div>

<?php
}
/**
 * woocommerce_after_main_content hook
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
get_footer( 'shop' );

?>

