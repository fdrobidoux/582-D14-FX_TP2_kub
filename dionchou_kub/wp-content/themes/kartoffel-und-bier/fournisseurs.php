<?php
/*
Template Name: Fournisseurs
*/

/**
 * index.php
 * Project: kartoffel-und-bier
 * User:    Félix Dion Robidoux
 * Date:    02/12/2014
 * Time:    7:59 PM
 */

get_header();

?>
	<!--INDEX.PHP-->
	<main role="main">
		<div class="container">
			<?php
			$args = array(
				'post_type' => 'fournisseurs',
				);
			$fournisseurs = new WP_Query( $args );

			if($fournisseurs->have_posts()) {

				while ($fournisseurs->have_posts()) {

					$fournisseurs->the_post();

					?>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<?php the_post_thumbnail('full'); ?>
						</div>
						<div class="col-xs-12 col-sm-6">
							<h2><?php?></h2>
						</div>
					</div>
				<?php
				}
			}
			?>
		</div>
	</main>
<?php
get_footer();
?>