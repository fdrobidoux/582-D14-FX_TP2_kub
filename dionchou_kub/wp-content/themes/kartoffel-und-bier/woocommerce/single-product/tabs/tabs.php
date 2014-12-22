<?php
/**
 * Single Product tabs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class=" col-lg-12">
		<div class="tabbable">
			<ul class="nav nav-tabs nav-append-content">
				<?php $active = ' class="active"'; ?>
				<?php foreach ( $tabs as $key => $tab ) : ?>

					<li <?=$active?>>
						<a href="#tab-<?php echo $key.'-p'.get_the_ID(); ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?></a>
					</li>

				<?php $active = '' ?>
				<?php endforeach; ?>
			</ul>
			<div class="tab-content">
			<?php $active = ' active' ?>
			<?php foreach ( $tabs as $key => $tab ) : ?>

				<div class="tab-pane<?=$active?>" id="tab-<?php echo $key.'-p'.get_the_ID(); ?>">
					<?php call_user_func( $tab['callback'], $key, $tab ) ?>
				</div>
			<?php $active = '' ?>
			<?php endforeach; ?>
			</div>
		</div>
	</div>

<?php endif; ?>