<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Test\Fabricator;
use Tests\Support\Models\PetugasFabricator;

class PetugasSeeder extends Seeder
{
    public function run()
    {
        $fabricator = new Fabricator(PetugasFabricator::class);
        $fabricator->setOverrides([
            'username' => 'admin',
            'password' => '123456789',
            'level'    => 1
        ]);
        $fabricator->create();

        $fabricator->setOverrides([
            'username' => 'resepsionis',
            'password' => '123',
            'level'    => 2
        ]);
        $fabricator->create();
    }
}
