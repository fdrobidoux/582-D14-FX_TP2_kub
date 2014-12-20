<?php
/**
 * index.php
 * Project: kartoffel-und-bier
 * User:    Félix Dion Robidoux
 * Date:    02/12/2014
 * Time:    7:59 PM
 */

get_header();

?>
<!--HOME.PHP-->
	<div class="jumbotron">
		<div id="Main" class="container">
			<div class="row">
				<div class="col-xs-12">

					<?php
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

					if($onsale->have_posts()) {

					?>
					<div id="myCarousel" class="carousel slide" data-interval="true">
						<!-- Indicators -->
						<ol class="carousel-indicators">
						<?php
						$active = true;
						for($count = 0 ; $count < $onsale->post_count; $count++) {
						?>
							<li data-target="#myCarousel" data-slide-to="<?=$count?>"<?=$active ? ' class="active"' : ''?>></li>
						<?php
							$active = false;
						}
						?>
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
						<?php
						$active = true;
						while($onsale->have_posts()) {

							$onsale->the_post();
						?>

							<div class="item<?= $active ? ' active' : ''?>">
								<a href="<?=$product->get_permalink();?>">
<!--								--><?//=$product->get_image('full');?>
								<?=$product->get_image(array(450,450));?>
								<div class="carousel-caption">
									<?php the_title( '<h2>', '</h2>' ); ?>
									<?php the_excerpt(); ?>
									<div><?=$product->get_price_html();?></div>
								</div>
								</a>
							</div>
						<?php
							$active = false;
						}
						?>
						</div>
						<!-- Controls -->
						<a class="left carousel-control fui-arrow-left" href="#myCarousel" data-slide="prev"></a>
						<a class="right carousel-control fui-arrow-right" href="#myCarousel" data-slide="next"></a>
					</div>
					<?php
					}
					?>

				</div>
			</div>
		</div>
	</div>
	<main role="main">
		<div class="container">
			<div class="row">
	<?php
	$args = array(
		'post_type' => 'accueil',
	);
	$home_posts = new WP_Query( $args );


	if ( $home_posts->have_posts()){

		while($home_posts->have_posts()){

			$home_posts->the_post();

	?>
				<article class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<?php
					if ( has_post_thumbnail() ) {

						echo get_the_post_thumbnail( $post_id );
					?>
<!--							the_post_thumbnail();-->
					<?php
					}
					?>
					<header>
						<h2><?php the_title(); ?></h2>
						<time datetime="<?php echo get_the_date('Y-m-d')?>"><?php echo get_the_date(get_option('date_format'))?></time>
						<?php edit_post_link( __( 'Edit', 'mcintranet' ) ); ?>
					</header>
					<?php
					the_content();
					?>
					<footer>
					</footer>
				</article>
				<article class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<?php
					if ( has_post_thumbnail() ) {

						echo get_the_post_thumbnail( $post_id );
					?>
<!--							the_post_thumbnail();-->
					<?php
					}
					?>
					<header>
						<h2><?php the_title(); ?></h2>
						<time datetime="<?php echo get_the_date('Y-m-d')?>"><?php echo get_the_date(get_option('date_format'))?></time>
						<?php edit_post_link( __( 'Edit', 'mcintranet' ) ); ?>
					</header>
					<?php
					the_excerpt();
					?>
					<footer>
					</footer>
				</article>
	<?php
		}
	}
	?>
			</div>
		</div>
	</main>
<?php
get_footer();
?>