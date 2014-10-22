$(document).ready(function(){
	$("#signup").children("button").click(function(){
		$("#signup-form").toggle(500);
	});
	
	$("#signin").children("button").click(function(){
		$("#signin-form").toggle(500);
	});

	/* 
	 * signup using ajax
	 */
	$("#signup-submit").click(function(){

		$("#notification").text('メールを送信しました。')
											.slideDown("slow")
											.delay(3000)
											.slideUp("slow");

		$.ajax({
			type:"POST",
			url:"/verify_mail",
			data:"email="+$("#signup-email").val(),
			success: function(msg) {
				$("#notification").stop()
													.text('メール送信が完了しました。')
													.slideDown("slow")
													.delay(3000)
													.slideUp("slow");
			},
			error: function(msg) {
				$("#notification").slideUp(function(){
					$("#notification_error").text('メール送信に失敗しました。既に登録されているか、有効なメールアドレスではない可能性があります。')
																	.slideDown("slow")
																	.delay(3000)
																	.slideUp("slow");
				})
			}
		});
	});
});
