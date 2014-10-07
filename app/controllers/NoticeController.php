<?php

class NoticeController extends BaseController {

	public function __construct(){
		$this->user_id = Auth::id();
	}

	// 通知画面の表示
	public function index()
	{
		$notice_list = Notice::where('user_id', '=', $this->user_id)->get();	
		Log::debug($notice_list);
		return View::make('notice.index')->with('notice_list', $notice_list);
	}

	// 通知データの作成
	public function create()
	{
		$type = Input::get('type');
		$receiver_id = Input::get('receiver_id');
		notice::create(['sender_id' => $this->user_id, 'receiver_id' => $receiver_id, 'type' => $type]);
		return;
	}
}
