<?php

class AccountController extends BaseController {

	public function verifyMail()
	{
	}

	public function login()
	{
		if ( Auth::attempt(Input::only('username', 'password')) )
		{
			return Redirect::intended('/');
		}

		// View上で「ログイン出来ませんでしたと表示」
	}

	// facebookログイン
	public function fb_login()
	{
		$facebook = new Facebook(Config::get('facebook'));
		$config = array(
			'redirect_uri' => url('/fb_login/callback'),
		);
		return Redirect::to($facebook->getLoginUrl($config));
	}

	// facebookログインコールバック
	public function fb_login_callback()
	{
		$code = Input::get('code');
		if (strlen($code) == 0) {
			return Redirect::to('/')->with('message', 'ログインできませんでした。');
		}

		$facebook = new Facebook(Config::get('facebook'));
		$user_id = $facebook->getUser();

		if ($user_id == 0) {
			return Redirect::to('/')->with('message', 'ログインできませんでした。');
		}

		$user = User::find($user_id);
		if (empty($user)) {
			$user = new User;
			$user->fb_id = $user_id;
		}

		$me = $facebook->api('/me');
		$user->username = $me['name'];
		$user->fb_access_token = $facebook->getAccessToken();
		$user->save();

		Auth::login($user);

		return Redirect::to('/')->with('message', 'ログインしました。');
	}

	// Twitterログイン
	public function tw_login()
	{
		if (Auth::check()) {
			return Redirect::to('/')->with('message', 'ログイン済みです。');
		}
		$tokens = Twitter::oAuthRequestToken();
		Twitter::oAuthAuthorize(array_get($tokens, 'oauth_token'));
		die;
	}

	public function tw_login_callback()
	{
		$token = Input::get('oauth_token');
		$verifier = Input::get('oauth_verifier');
		$accessToken = Twitter::oAuthAccessToken($token, $verifier);

		if (isset($accessToken['user_id'])) {
			$user_id = $accessToken['user_id'];
			$user = User::find($user_id);
			if (empty($user)) {
				$user = new User;
				$user->tw_id = $user_id;
			}
			$user->tw_name = $accessToken['screen_name'];
			$user->tw_token = $accessToken['oauth_token'];
			$user->tw_token_secret = $accessToken['oauth_token_secret'];
			$user->save();

			Auth::login($user);

			return Redirect::to('/');
		} else {
			return Redirect::to('login')->with('message', 'Twitter認証できませんでした。');
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}
}

