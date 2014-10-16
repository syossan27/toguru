<?php

class NoticeController extends BaseController {

	public function __construct(){
		$this->user_id = Auth::id();
	}

	// 通知画面の表示
	public function index()
	{
		$notice_list = Notice::join('users', 'sender_id', '=', 'users.id')->where('receiver_id', '=', $this->user_id)->get();	
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

	// 通知データの取得
	public function get()
	{
		$notice_list = Notice::join('users', 'sender_id', '=', 'users.id')->where('receiver_id', '=', $this->user_id)->get();	
		return Response::json($notice_list);
	}
}
