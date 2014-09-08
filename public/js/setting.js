/*
 * This JS file for Control setting event
 */
$(document).ready(function(){

	// Check current password
	$('#old_password').focusout(function(){
		var old_password = $(this).val();

		// if old password is blank, hide error message
		if ( old_password == '' ) {
			$('#error_old_password').hide();
			return;
		}

		$.ajax({
				type:"POST",
				url:"/setting/check-old-password",
				data:"old_password="+old_password,
				success: function(bool) {
					console.log("Check Passowrd Success");
					if ( bool == 'true') {
						$('#error_old_password').hide();
					} else {
						$('#error_old_password').show();
					}
				},
				error: function() {
					console.log("Get Failed");
				}
		});
	});

	// Check new password
	$('#new_password, #new_password_confirm').focusout(function(){
		var new_password = $('#new_password').val();
		var new_password_confirm = $('#new_password_confirm').val();

		// Check password when input password is equal
		if ( new_password && new_password_confirm ) {
			if ( new_password != new_password_confirm ) {
				$('#error_new_password').show();
			} else {
				$('#error_new_password').hide();
			}
		}
	});

	// Display delete account dialog
	$("#delete-dialog").dialog({
		modal:true,
		autoOpen:false,
		buttons:{
							"はい":function(){
								deleteAccount();
							},
							"いいえ":function(){
								$(this).dialog('close');
							}
						}
	});

	$('#delete-button').click(function(){
		$('#delete-dialog').dialog('open');
	});

	// Delete Account
	function deleteAccount(){
	
		window.location.href = '/setting/deleteAccount';

	};

});

