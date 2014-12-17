<?php
/**
 * index.php
 *
 * Project: kartoffel-und-bier
 * User:    Félix Dion Robidoux
 * Date:    02/12/2014
 * Time:    7:59 PM
 *
 * EN DERNIER RECOURS
 */

get_header();

?>
<!--INDEX.PHP-->
<section id="Main" class="container">
	<div class="row">
		<div class="col-sm-5 col-md-5">
			<div id="myCarousel" class="carousel slide" data-interval="true">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="<?=get_template_directory_uri()?>/img/hourlgass.jpg"
						     width="100%" alt="">
						<div class="carousel-caption">
							<h3>Thumbnail label</h3>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec.</p>
						</div>
					</div>

					<div class="item">
						<img src="<?=get_template_directory_uri()?>/img/irish-red-ale-all-grain-kit-w-dry-yeast-4.gif" width="100%"
						     alt="">
						<div class="carousel-caption">
							<h3>Thumbnail label</h3>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec.</p>
						</div>
					</div>
					<div class="item">
						<img src="<?=get_template_directory_uri()?>/img/tallwheat.jpg" width="100%"
						     alt="">
						<div class="carousel-caption">
							<h3>Thumbnail label</h3>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec.</p>
						</div>
					</div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control fui-arrow-left" href="#myCarousel" data-slide="prev"></a>
				<a class="right carousel-control fui-arrow-right" href="#myCarousel" data-slide="next"></a>
			</div>
		</div>
		<!-- I tell ya what, I dunno. -->
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6
					col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
			<img src="<?=get_template_directory_uri()?>/img/flaredpilsner.jpg"
			     class="img-thumbnail pull-right" alt="Une image" />
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad asperiores, autem
				cumque deleniti doloremque doloribus eos eum ex facere ipsum laboriosam laborum
				mollitia odit quaerat quidem reprehenderit veritatis! Distinctio!</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad asperiores, autem
				cumque deleniti doloremque doloribus eos eum ex facere ipsum laboriosam laborum
				mollitia odit quaerat quidem reprehenderit veritatis! Distinctio!</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad asperiores, autem
				cumque deleniti doloremque doloribus eos eum ex facere ipsum laboriosam laborum
				mollitia odit quaerat quidem reprehenderit veritatis! Distinctio!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi, at atque autem consectetur laboriosam necessitatibus officiis perspiciatis praesentium, quam quas rem saepe sit vero vitae. Aut quo saepe velit.</p>
		</div>
	</div>
</section>

<?php
	get_footer();
?>