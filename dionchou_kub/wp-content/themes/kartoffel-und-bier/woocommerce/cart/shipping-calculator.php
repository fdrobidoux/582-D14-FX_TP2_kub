<?php
	/**
	 * Shipping Calculator
	 *
	 * @author        WooThemes
	 * @package       WooCommerce/Templates
	 * @version       2.0.8
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	} // Exit if accessed directly

	if ( get_option( 'woocommerce_enable_shipping_calc' ) === 'no' || ! WC()->cart->needs_shipping() ) {
		return;
	}
?>

<?php do_action( 'woocommerce_before_shipping_calculator' ); ?>

	<form class="shipping_calculator" action="<?php echo esc_url( WC()
		->cart->get_cart_url() );
	?>" method="post">

		<a href="#" class="shipping-calculator-button btn btn-sm btn-block btn-primary"><?php
			_e( 'Calculate Shipping', 'woocommerce' );
			?> <i class="fui-location">
		</i></a>

		<section class="shipping-calculator-form">

			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<select name="calc_shipping_country"
					        id="calc_shipping_country"
					        class="country_to_state select-primary"
					        rel="calc_shipping_state">
						<option value=""><?php _e( 'Select a country&hellip;', 'woocommerce' ); ?></option>
						<?php
							foreach ( WC()->countries->get_shipping_countries() as $key => $value ) {
								echo '<option value="' . esc_attr( $key ) . '"' . selected( WC()->customer->get_shipping_country(), esc_attr( $key ), false ) . '>' . esc_html( $value ) . '</option>';
							}
						?>
					</select>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<?php
						$current_cc = WC()->customer->get_shipping_country();
						$current_r  = WC()->customer->get_shipping_state();
						$states     = WC()->countries->get_states( $current_cc );

						// Hidden Input
						if ( is_array( $states ) && empty( $states ) ) {

							?><input type="hidden" name="calc_shipping_state"
							         id="calc_shipping_state" placeholder="<?php _e( 'State / county', 'woocommerce' ); ?>" /><?php
							// Dropdown Input
						} elseif ( is_array( $states ) ) {

						?>
							<select name="calc_shipping_state" id="calc_shipping_state" class="select-primary" placeholder="<?php _e( 'State / county', 'woocommerce' ); ?>">
								<option value=""><?php _e( 'Select a state&hellip;', 'woocommerce' ); ?></option>
								<?php
									foreach ( $states as $ckey => $cvalue ) {
										echo '<option value="' . esc_attr( $ckey ) . '" ' . selected( $current_r, $ckey, false ) . '>' . __( esc_html( $cvalue ), 'woocommerce' ) . '</option>';
									}
								?>
							</select>
						<?php

						} else { // Standard Input

							?><input type="text"
							         class="input-text"
							         value="<?php echo esc_attr( $current_r ); ?>"
							         placeholder="<?php _e( 'State / county', 'woocommerce' ); ?>"
							         name="calc_shipping_state"
							         id="calc_shipping_state" /><?php
						}
					?>
				</div>
			</div>

			<div class="row">

				<?php if ( apply_filters( 'woocommerce_shipping_calculator_enable_city', false ) ) : ?>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

					<input type="text"
					       class="input-text form-control"
					       value="<?php echo esc_attr( WC()->customer->get_shipping_city() ); ?>"
					       placeholder="<?php _e( 'City', 'woocommerce' ); ?>"
					       name="calc_shipping_city"
					       id="calc_shipping_city" />

				</div>

				<?php endif; ?>

				<?php if ( apply_filters( 'woocommerce_shipping_calculator_enable_postcode', true ) ) : ?>

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

						<input type="text"
						       class="input-text"
						       value="<?php echo esc_attr( WC()->customer->get_shipping_postcode() ); ?>"
						       placeholder="<?php _e( 'Postcode / Zip', 'woocommerce' ); ?>"
						       name="calc_shipping_postcode"
						       id="calc_shipping_postcode" />

				</div>

				<?php endif; ?>

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

					<button type="submit"
					        name="calc_shipping"
					        value="1"
					        class="btn btn-block btn-sm btn-success"><?php _e( 'Update Totals' , 'woocommerce' );
						?></button>

				</div>

			</div>

			<?php wp_nonce_field( 'woocommerce-cart' ); ?>

		</section>
	</form>

<?php do_action( 'woocommerce_after_shipping_calculator' ); ?>