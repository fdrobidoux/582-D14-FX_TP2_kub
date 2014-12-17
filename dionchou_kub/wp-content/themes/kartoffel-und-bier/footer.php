<?php
/**
 * footer.php
 * 
 * Project: kartoffel-und-bier
 * User:    Félix Dion Robidoux
 * Date:    03/12/2014
 * Time:    7:53 PM
 */
?>
	<footer class="bottom-menu bottom-menu-large bottom-menu-inverse">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<a href="<?php echo home_url(); ?>" class="bottom-menu-brand">Kartoffel Und Bier</a>
				</div>
				<div class="col-md-3 col-sm-3">
				<?php
					wp_nav_menu(
						array(
							'menu'           => 'footer_links', /* menu name */
							'menu_class'     => 'bottom-menu-list',
							'theme_location' => 'footer_links', /* where in the theme it's assigned */
							'container'      => 'false' /* container class */
						)
					);
				?>
				</div>
				<div class="col-sm-6 col-md-6">
					<form action="#" method="POST" role="form">
						<div class="form-group">
							<label class="sr-only" for="txtNom">Nom</label>
							<input type="text" class="form-control" name="txtNom" id="txtNom"
								   placeholder="Nom">
						</div>
						<div class="form-group">
							<label class="sr-only" for="txtEmail">Courriel</label>
							<input type="email" class="form-control" name="txtEmail"
								   id="txtEmail" placeholder="Courriel" />
						</div>
						<div class="form-group">
							<label class="sr-only" for="txtMessage">Message</label>
							<textarea rows="6" class="form-control"
									  name="txtMessage"
									  id="txtMessage" placeholder="Message"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Envoyer</button>
					</form>
				</div>
			</div>
		</div>
	</footer> <!-- /bottom-menu -->
<?php wp_footer(); ?>
</body>
</html>