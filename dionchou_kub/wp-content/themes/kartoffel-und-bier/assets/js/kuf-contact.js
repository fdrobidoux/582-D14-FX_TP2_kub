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
			$.ajax({
				type: 'POST',
				url: ajax_obj.ajaxurl,
				data: $('#contact-form').serialize(),
				dataType: 'json',
				success: function(response) {
					if (response.status == 'success') {
						$('#contact-form')[0].reset();
					}
					$('#contact-msg').html(response.errmessage);
				}
			});
		}
	});
});