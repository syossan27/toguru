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

	// お知らせの表示
	$("#notice").click(function(){
		event.preventDefault();
		$("#noticeBox-arrow").toggle();		
		$("#noticeBox").toggle();		
	})

	// 師弟関連メニューの表示
	$("#exchange").click(function(){
		$("#dropdown-exchange").toggle();		
		if ( $("#dropdown-exchange").css('display') == 'block' ) {
			$("#exchange").css('background-color', '#a7b0b1')
		} else {
			$("#exchange").css('background-color', '')
		}
	})

	// ドロップダウンメニュー以外をクリックした時の閉じる処理
	$(document).click(function(event) {
		if (!$.contains($("#dropdown-exchange, #top-menu")[0], event.target)) {
			$("#dropdown-exchange").hide();
			$("#exchange").css('background-color', '')
		}
	});

	// 通知内容がページ読み込み時にあれば表示
	if ( $('#notification').text() != '' ) {
		$("#notification").slideDown("slow")
											.delay(3000)
											.slideUp("slow");
	}

	// エラー通知内容がページ読み込み時にあれば表示
	if ( $('#notification-error').text() != '' ) {
		$("#notification-error").slideDown("slow")
											.delay(3000)
											.slideUp("slow");
	}

});
