$(document).ready(function(){

	// used tag-it
	$("#tagit").tagit();

	// send data to pupil/update 
	$('#edit-submit').click(function(){
		// get skill data
		var skill = "";
		var skillObj = $('.tagit-choice-editable').children("span").each(function(){
			skill += $(this).html() + ' ';
		});

		// get description data
		var description = $('#description').val();
		console.log(description);
		
		// TODO
		// add to get other data....
		
		// data send
		$.ajax({
			type:"POST",
			url:"/pupil/edit",
			data:"skill="+skill+'&description='+description,
			success: function(msg) {
				console.log("PupilController@udpate success");
				alert('情報を更新しました!');
			},
			error: function(msg) {
				console.log("PupilController@udpate failed");
		  }
		})
	});

});
