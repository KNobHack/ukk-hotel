<?php

use App\Entities\Petugas;
use CodeIgniter\Test\CIUnitTestCase;

class PetugasEntityTest extends CIUnitTestCase
{
	protected Petugas $petugas;
	protected $password = 'ABCDEFGHIJKL';

	protected function setUp(): void
	{
		parent::setUp();

		$this->petugas = new Petugas();
		$this->petugas->password = $this->password;

		$this->petugas->level = 1; // Administrator

	}

	public function testGetLevelId()
	{
		$this->assertEquals(1, $this->petugas->levelId);
	}

	public function testGetLevel()
	{
		// 1 => 'Administrator'
		// 2 => 'Resepsionis'

		$this->assertEquals('Administrator', $this->petugas->level);
	}

	public function testSetPassword()
	{
		$verified = password_verify($this->password, $this->petugas->password);

		$this->assertTrue($verified);
	}

	public function testCheckPassword()
	{
		$this->assertTrue(
			$this->petugas->checkPassword($this->password)
		);

		$this->assertFalse(
			$this->petugas->checkPassword('worng password')
		);
	}
}
