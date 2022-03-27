<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;

class AuthControllerTest extends CIUnitTestCase
{
	use FeatureTestTrait, DatabaseTestTrait;

	protected $refresh = true;

	public function testPetugasLogin()
	{
		$this->get('/petugas')
			->assertOK();
	}

	public function testPetugasLoginSubmit()
	{
		// Credential yang benar
		$username = 'admin';
		$password = '123456789';

		// username tidak ditemukan
		$this->post('/petugas', [
			'username' => 'ngasal',
			'password' => '123'
		])->assertRedirectTo(base_url('petugas'));

		// password salah
		$this->post('/petugas', [
			'username' => $username,
			'password' => '123'
		])->assertRedirectTo(base_url('petugas'));

		// password benar
		$this->post('/petugas', [
			'username' => $username,
			'password' => $password
		])->assertRedirectTo(base_url('dashboard'));
	}
}
