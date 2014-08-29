<?php

class AccountControllerTest extends TestCase {

	/**
	 * Success Login
	 *
	 * @return void
	 */
	public function testSuccessLogin()
	{

		$crawler = $this->client->request('Post', '/login',
			array(	
				'username' => 'hoge',
				'password' => 'hoge'
			)
		);

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
