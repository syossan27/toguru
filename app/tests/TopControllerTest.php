<?php

class TopControllerTest extends TestCase {

	/**
	 * View Top Page for Before Login.
	 *
	 * @return void
	 */
	public function testAccessableTopViewBeforeLogin()
	{
		$crawler = $this->client->request('Get', '/');

		$this->assertGreaterThan(0, $crawler->filter('html:contains("トップ")')->count());
	}

	/**
	 * View Top Page for After Login.
	 *
	 * @return void
	 */
	public function testAccessableTopViewAfterLogin()
	{

		$user = User::find(1);
		Auth::login($user);

		$crawler = $this->client->request('Get', '/');

		$this->assertGreaterThan(0, $crawler->filter('html:contains("マイページ")')->count());

	}

}
