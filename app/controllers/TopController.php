<?php

class TopController extends BaseController {

	public function index()
	{
		// ログイン確認
		if ( Auth::check() ) {
			// ログイン済みの場合、マイページを表示
			return View::make('top.index');
		} else {
			// 未ログインの場合、ランディングページを表示
			return View::make('top.index');
		}
	}

}
