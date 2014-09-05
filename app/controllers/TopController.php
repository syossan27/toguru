<?php

class TopController extends BaseController {

	public function index()
	{

		$message = Session::get('message', '');

		// Check Login Status
		if ( Auth::check() ) {
			// if Logged in, Display mypage 
			return View::make('top.mypage');
		} else {
			// if not Logged in, Display top with message
			return View::make('top.index')->with('message', $message);
		}
	}

}
