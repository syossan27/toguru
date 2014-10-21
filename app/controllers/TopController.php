<?php

class TopController extends BaseController {

	public function index()
	{
		$notification_message = Session::get('notification_message', '');

		// Check Login Status
		if ( Auth::check() ) {
			// if Logged in, Display mypage 
			return View::make('top.mypage');
		} else {
			// if not Logged in, Display top with message
			return View::make('top.index')->with('notification_message', $notification_message);
		}
	}

}
