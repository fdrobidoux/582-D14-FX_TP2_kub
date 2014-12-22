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
?>

<?php while ( $onsale->have_posts() ) : $onsale->the_post(); ?>

	<?php wc_get_template_part( 'content', 'single-product' ); ?>

<?php endwhile; // end of the loop. ?>

<?php
/**
 * woocommerce_after_main_content hook
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>

<?php
/**
 * woocommerce_sidebar hook
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );
?>

<?php get_footer( 'shop' ); ?>
