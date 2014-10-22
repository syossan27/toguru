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

	// 通知内容がページ読み込み時にあれば表示
	if ( $('#notification').text() != '' ) {
		$("#notification").slideDown("slow")
											.delay(3000)
											.slideUp("slow");
	}

	// エラー通知内容がページ読み込み時にあれば表示
	if ( $('#notification_error').text() != '' ) {
		$("#notification_error").slideDown("slow")
											.delay(3000)
											.slideUp("slow");
	}

});
