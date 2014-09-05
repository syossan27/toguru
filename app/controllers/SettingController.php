<?php

class SettingController extends BaseController {

	// Get Config View
	public function index()
	{
		return View::make('setting.index');
	}

	// Update User Name
	public function updateUserName()
	{
	}

	// Update User Password
	public function updateUserPassword()
	{
	}

	// Delete User Account
	public function deleteAccount()
	{

		$message = "退会しました。";

		$user_id = Auth::id();
		User::where('id', '=', $user_id)->update(['valid' => 0]);	

		Auth::logout();

		return Redirect::action('TopController@index')->with('message', $message);
	}

}
