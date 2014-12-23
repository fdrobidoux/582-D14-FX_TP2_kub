<?php
/**
 * Variable product add to cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce, $product, $post;
?>
<div data-formulaire>
	<script type="text/javascript">
		var product_variations_<?php echo $post->ID; ?> = <?php echo json_encode( $available_variations ) ?>;
	</script>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

	<form class="variations_form cart" method="post" enctype='multipart/form-data' data-product_id="<?php echo $post->ID; ?>" data-product_variations="<?php echo esc_attr( json_encode( $available_variations ) ) ?>">
	<?php if ( ! empty( $available_variations ) ) : ?>
		<div class="variations" cellspacing="0">
			<div class="row">
			<?php $loop = 0; foreach ( $attributes as $name => $options ) : $loop++; ?>
				<div class="col-xs-6">
					<div class="label">
						<label for="<?php echo sanitize_title($name); ?>"><?php echo wc_attribute_label( $name ); ?></label>
					</div>
					<div class="value">
						<fieldset id="<?php echo sanitize_title($name); ?>" class="form-group">
							<?php
							if ( is_array( $options ) ) {

								if ( empty( $_POST ) )
									$selected_value = ( isset( $selected_attributes[ sanitize_title( $name ) ] ) ) ? $selected_attributes[ sanitize_title( $name ) ] : '';
								else
									$selected_value = isset( $_POST[ 'attribute_' . sanitize_title( $name ) ] ) ? $_POST[ 'attribute_' . sanitize_title( $name ) ] : '';
								//echo   $selected_value;
								// Get terms if this is a taxonomy - ordered
								$idSuffix = 1;
								if ( taxonomy_exists( sanitize_title( $name ) ) ) {

									$terms = get_terms( sanitize_title($name), array('menu_order' => 'ASC') );

									foreach ( $terms as $term ) {
										if ( ! in_array( $term->slug, $options ) ) {
											continue;
										}
										echo '<label class="radio primary">';
										echo '<input type="radio" class="custom-radio" data-toggle="radio" data-radiocheck-toggle="radio" value="' . strtolower($term->slug) . '" ' . checked( strtolower ($selected_value), strtolower ($term->slug), false ) . ' id="'. esc_attr( sanitize_title($name) ) .$idSuffix.'" name="attribute_'. sanitize_title($name).'"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>';
										echo apply_filters( 'woocommerce_variation_option_name', $term->name );
										echo '</label>';
										$idSuffix++;
									}
								} else {
									foreach ( $options as $option ){
										echo '<label class="radio primary">';
										echo '<input type="radio" class="custom-radio" data-toggle="radio" data-radiocheck-toggle="radio" value="' .esc_attr( sanitize_title( $option ) ) . '" ' . checked( sanitize_title( $selected_value ), sanitize_title( $option ), false ) . ' id="'. esc_attr( sanitize_title($name) ) .$idSuffix.'" name="attribute_'. sanitize_title($name).'">';
										echo apply_filters( 'woocommerce_variation_option_name', $option );
										echo '</label>';
										$idSuffix++;
									}
								}
							}
							?>
						</fieldset>
						<?php
						if ( sizeof($attributes) == $loop ) {
							//echo '<a class="reset_variations" href="#reset">' . __( 'Clear selection', 'woocommerce' ) . '</a>';
						}
						?>
					</div>
				</div>
			<?php endforeach;?>
			</div>
		</div><!--variations-->

		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		<div class="single_variation_wrap" style="display:none;">
			<?php do_action( 'woocommerce_before_single_variation' ); ?>
			<div class="single_variation"></div>

			<div class="variations_button clearfix">
				<div class="form-group">
					<div class="input-group">
						<?php woocommerce_quantity_input(); ?>
						<span class="input-group-btn">
							<button type="submit" class=" single_add_to_cart_button button alt btn btn-primary btn-block">Ajouter</button>
						</span>
					</div><!-- /input-group -->
				</div>
			</div>
			<input type="hidden" name="add-to-cart" value="<?php echo $product->id; ?>" />
			<input type="hidden" name="product_id" value="<?php echo esc_attr( $post->ID ); ?>" />
			<input type="hidden" name="variation_id" value="" />

			<?php do_action( 'woocommerce_after_single_variation' ); ?>
		</div><!--single_variation_wrap-->

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<?php else : ?>

		<p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>

	<?php endif; ?>

	</form>
</div><!--data-formulaire-->

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
