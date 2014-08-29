<?php

class TopControllerTest extends TestCase {

	/**
	 * View Top Page for Before Login.
	 *
	 * @return void
	 */
	public function testAccessableTopViewBeforeLogin()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	/**
	 * View Top Page for After Login.
	 *
	 * @return void
	 */
	public function testAccessableTopViewAfterLogin()
	{

		// TODO
		// ログイン済みにする
		// テストデータにログイン出来るユーザを作り、
		// Confideのログイン処理で直接ログインユーザのID、パスワードを入力してあげる

		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
