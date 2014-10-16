$(document).ready(function(){
	$("#signup").children("button").click(function(){
		$("#signup-form").toggle(500);
	});
	
	$("#signin").children("button").click(function(){
		$("#signin-form").toggle(500);
	});
});
