<?php

class AccountControllerTest extends TestCase {

	/**
	 * Success Login
	 *
	 * @return void
	 */
	public function testSuccessLogin()
	{
		$user = User::find(1);
		Auth::login($user);

		$crawler = $this->client->request('Get', '/');

		$this->assertGreaterThan(0, $crawler->filter('html:contains("マイページ")')->count());
	}

}
