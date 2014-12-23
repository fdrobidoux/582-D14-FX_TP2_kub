<?php
/*
Template Name: Historiques
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
				'post_type' => 'historiques',
				);
			$historiques = new WP_Query( $args );

			if($historiques->have_posts()) {

				while ($historiques->have_posts()) {

					$historiques->the_post();

					?>
					<div class="row">
						<div class="col-xs-12 col-sm-3">
							<?php the_post_thumbnail('full'); ?>
						</div>
						<div class="col-xs-12 col-sm-9">
							<?php the_title('<h2>','</h2>');?>
							<?php the_content('');?>
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
