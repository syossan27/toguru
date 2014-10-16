$(document).ready(function(){
	$.ajax({
		type:"GET",
		url:"/notice/get",
		success: function(noticeList){
			$("#noticeBox").empty();
			if (noticeList.length > 0) {
				$("#noticeBox").append(noticeList[0]['username']);
			} else {
				$("#noticeBox").append("新しいお知らせはありません。");
			}
		},
		error: function(msg){
			console.log("Request Failed");
		}
	});

	$("#notice").click(function(){
		$("#noticeBox-arrow").toggle();		
		$("#noticeBox").toggle();		
	})
});
