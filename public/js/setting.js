/*
 * This JS file for Control setting event
 */
$(document).ready(function(){

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

