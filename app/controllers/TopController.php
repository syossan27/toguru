<?php

class TopController extends BaseController {

	public function index()
	{
		// ログイン確認
		// ログイン済みの場合、マイページを表示
		// 未ログインの場合、ランディングページを表示
		return View::make('top/index');
	}

}
