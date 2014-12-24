/**
 * Created by Felix on 23/12/2014.
 */
$(document).ready(function($) {
	$('#btnSubmit').click(function(e) {
		e.preventDefault();
		$('#contact-msg').html('<img src="http://mailgun.github.io/validator-demo/loading.gif" alt="Loading...">');
		var message = $('#txtMessage').val();
		var name = $('#txtNom').val();
		var email = $('#txtEmail').val();
		if (!message || !name || !email) {
			$('#contact-msg').html('At least one of the form fields is empty.');
			return false;
		} else {
			alert($('#contact-form').serialize());
			$.ajax({
				type: 'POST',
				url: kub_ajax.url,
				data: $('#contact-form').serialize(),
				dataType: 'json',
				success: function(response) {
					if (response.status == 'success') {
						$('#contact-form')[0].reset();
						alert("hello");
					}
					$('#contact-msg').html(response.errmessage);
				},
				error: function(request, status_text, error) {
					$('#contact-msg').html('Une erreur est survenue.');
					return false;
				}
			});
		}
	});
});