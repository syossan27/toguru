/*
 * This JS file for Control notice event
 */

function createNotice( type, receiver_id ){

	// Post Request
	$.ajax({
		type:"POST",
		url:"/notice/create",
		data: { 
						type: type, 
						receiver_id: receiver_id 
					},
		success: function() {

			console.log("Request Success");

			// TODO
			// Display notice of success
		},
		error: function(msg) {
			console.log("Request Failed");
			// TODO
			// Display notice of resend request 
		}
	});
}
