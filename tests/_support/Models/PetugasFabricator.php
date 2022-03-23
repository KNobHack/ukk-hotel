<?php

namespace Tests\Support\Models;

use App\Models\Petugas;
use CodeIgniter\Test\Interfaces\FabricatorModel;
use Faker\Generator;

class PetugasFabricator extends Petugas implements FabricatorModel
{
	protected $protectFields = false;

	// Fabricator Formater
	public function fake(Generator &$faker)
	{
		return [
			'username' => $faker->userName,
			'password' => $faker->password,
			'nama' => $faker->name,
			'level' => $faker->randomElement([1, 2])
		];
	}
}
