<?php

class SettingController extends BaseController {

	// Get Config View
	public function index()
	{
		return View::make('setting.index');
	}

	// View Update User Name
	public function viewUpdateUserName()
	{
		$current_username = User::find(Auth::id())->getUsername();
		return View::make('setting.update_username')->with('current_username', $current_username);
	}

	// Update User Name
	public function updateUserName()
	{
		User::find(Auth::id())->updateUserName(Input::get('new_username'));	
		return View::make('setting.index')->with('message', "ユーザ名の変更が完了しました。");
	}

	// View Update User Password
	public function viewUpdateUserPassword()
	{
		return View::make('setting.update_password');
	}

	// Check old password
	public function checkOldPassword()
	{
		$old_password = Input::get('old_password');

		$hashedPassword = Auth::user()->getAuthPassword();

		if ( !Hash::check($old_password, $hashedPassword) ) {
			return 'false';
		}

		return 'true';
	}

	// Update User Password
	public function updateUserPassword()
	{
		// Update new password
		$password = Hash::make(Input::get('new_password'));
		$user_id = Auth::id();
		User::where('id', '=', $user_id)->update(['password' => $password]);	

		return View::make('setting.index')->with('message', "パスワードの変更が完了しました。");
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
