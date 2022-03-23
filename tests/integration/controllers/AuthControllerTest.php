<?php

use App\Entities\Petugas;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use Tests\Support\Models\AppDatabaseTrait;
use Tests\Support\Models\PetugasFabricator;

class AuthControllerTest extends CIUnitTestCase
{
	use FeatureTestTrait, DatabaseTestTrait;
	use AppDatabaseTrait;

	protected $refresh = true;

	public function testPetugasLogin()
	{
		$this->get('/petugas')
			->assertOK();
	}

	public function testPetugasLoginSubmit()
	{
		$username = 'admin';
		$password = '123456789';

		$petugas = fake(PetugasFabricator::class, [
			'username' => $username,
			'password' => $password,
			'level'    => 1
		]);

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
