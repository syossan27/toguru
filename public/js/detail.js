/*
 * This JS file for Control detail event
 */
$(document).ready(function(){

	// Request to master
	$('#request-master-button').click(function(){

		// Get request master_id
		var master_id = $(this).val();

		// Get request writing
		var request_writing = $('#request-writing').val();

		// Set request type
		var request_type = 'master';
		
		// Post Request
		$.ajax({
			type:"POST",
			url:"/"+request_type+"/request/"+master_id,
			data:"request_writing="+request_writing,
			success: function(html) {
				console.log("Request Success");

				// TODO
				// Display notice of success
			},
			error: function(msg) {
				console.log("Request Failed");
				// TODO
				// Display notice of resend request 
		  }
		})
	});

	// Request to pupil 
	$('#request-pupil-button').click(function(){

		// Get request pupil_id
		var pupil_id = $(this).val();

		// Get request writing
		var request_writing = $('#request-writing').val();

		// Set request type
		var request_type = 'pupil';
		
		// Post Request
		$.ajax({
			type:"POST",
			url:"/"+request_type+"/request/"+pupil_id,
			data:"request_writing="+request_writing,
			success: function(html) {
				console.log("Request Success");

				// TODO
				// Display notice of success
			},
			error: function(msg) {
				console.log("Request Failed");
				// TODO
				// Display notice of resend request 
		  }
		})
	});

});
