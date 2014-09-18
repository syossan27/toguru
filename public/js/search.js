/*
 * This JS file for Control search event
 */
$(document).ready(function(){

	// Search to pupil/master
	$('#search-button').click(function(){

		// Delete Search-Right DOM
		$('.search-right').children().remove();

		// Get search text
		var search_text = $("#search-text").val();

		// Get search type
		var search_type = $('#search-form > label > input:checked').val();

		// Check value is master or pupil
		if ( search_type !== 'master' && search_type !== 'pupil' ) {
			// TODO
			// Display Error
			return;
		}
		
		// Get result HTML
		$.ajax({
			type:"POST",
			url:"/"+search_type+"/search",
			data:"search_text="+search_text,
			success: function(html) {
				console.log("Get Success");

				// Get Search Result Dom insert to "search-right" class 
				$('.search-right').append(html);
			},
			error: function(msg) {
				console.log("Get Failed");
		  }
		})
	});

	// Request to pupil/master 
	$(".search-right")
	.on("click", ".request-master-button", function(){
		var master_id = $(this).val();
		openRequestWindow('master', master_id);
	})
	.on("click", ".request-pupil-button", function(){
		var pupil_id = $(this).val();
		openRequestWindow('pupil', pupil_id);
	});

	function openRequestWindow(request_to, id){

		// window centering
		var width = 800;
		var height = 600;
		var left = (screen.width / 2) - (width / 2);
		var top = (screen.height / 2) - (height / 2);

		window.open('/'+request_to+'/detail/'+id, '_blank', 'width='+width+', height='+height+', top='+top+', left='+left);

	}

});

