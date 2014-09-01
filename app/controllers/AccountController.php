<?php

class AccountController extends BaseController {

	// メールアドレス登録時のメール送信
	public function verifyMail()
	{

		// 仮ユーザ登録
		// ハッシュ値の元をメールアドレスにしているが
		// 他に良い方法があれば変更
		// TODO
		// 既にメールを送信している場合
		$confirm_hash = md5( uniqid(mt_rand(), true) );
		$signup_url = Config::get('app.url')."/signup/".$confirm_hash;
		$mail_address = Input::get('email');

		$user = new User;
		$user['mail_address'] = $mail_address; 
		$user['hash'] = $confirm_hash; 
	 	$user->save();

		Mail::send('emails.signUp',array('signup_url' => $signup_url), function($e) use($mail_address)
		{
			$e->to($mail_address)->subject('【Toguru】登録のご確認');
		});

		// メールを送信しましたと表示
		return Redirect::to('/');
	}

	// メール認証後の登録
	public function signUp($confirm_hash)
	{
		// URLのハッシュ値に一致するハッシュ値を検索
		$hitHash = User::where('hash', '=', $confirm_hash)->count();

		// 既に登録が完了している場合は、トップページへ遷移し、エラーメッセージを表示
		$valided = User::where('hash', '=', $confirm_hash)->where('valid', '=', '1')->count();
		if ( $valided ) {
			return Redirect::to('/');
		}

		if ( $hitHash != 0) {
			// 一致したら
			// ユーザ名とパスワードを入力させる画面の表示
			return View::make('account.signup')->with('hash', $confirm_hash);
		} else {
			// 一致しなかったら
			// トップページへ遷移し、エラーメッセージを表示
			return Redirect::to('/');
		}
	}

	// メール認証後の登録実行
	public function signUpComplete()
	{

		// インプット内容を取得
		// 内容のバリデートはView側で制御
		$username = Input::get('username');
		$password = Hash::make(Input::get('password'));
		$hash			= Input::get('hash');

		// 直で遷移された場合は、トップページへ遷移し、エラーメッセージを表示
		if ( $username == '' && $password == '' ) {
			return Redirect::to('/');
		}

		// ユーザ登録（Userテーブルで一致したレコードのアップデート）
		$user = User::where('hash', '=', $hash)->update(['username' => $username, 'password' => $password, 'valid' => 1]);

		// 登録後ログイン
		if ( Auth::attempt(['username' => $username, 'password' => Input::get('password'), 'valid' => 1], true) )
		{
			return Redirect::intended('/');
		} else {
			return Redirect::to('http://google.co.jp');
		}

	}

	// メールアドレスでのログイン
	public function login()
	{

		$username = Input::get('username');
		$password = Input::get('password');

		if ( Auth::attempt( ['username' => $username, 'password' => $password, 'valid' => 1], true) )
		{
			return Redirect::intended('/');
		}

		// View上で「ログイン出来ませんでしたと表示」
	}

	// Facebookログイン
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

