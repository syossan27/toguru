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

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
